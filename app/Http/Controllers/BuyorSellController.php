<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Petsrecord;
use DB;

Class BuyorSellController extends Controller{

	public function getStarted()
	{
		return view('templates.petsrecord.enterdetails');
	}
	
	public function viewAllPosts()
	{
		$petsrecord = Petsrecord::paginate(5);

		return view('templates.petsrecord.viewallposts')->with('petsrecord',$petsrecord);// to display all the posted pets details
	}

	public function postPetsDetails(Request $request)
	{
		// validation
		$this->validate($request,[
			'petstype'=>'required|in:Dog,Cat,Rabbit,Others',
			'breedtype'=>'required|max:30',
			'age' => 'required|int|max:5',
			'description'=>'required|max:200',
			'image'=>'required',
			]);

		// getting image information
		$imageName = $request->file('image')->getClientOriginalName();
		$temPath = $request->file('image')->getRealPath();
		$fileType = $request->file('image')->getClientOriginalExtension();
		$destDir = "public/uploads/";
		$fullImagePath = $destDir.$imageName;

		if (file_exists($fullImagePath)) 
		{
			return redirect()->route('templates.petsrecord.enterdetails')->with('info','File couldnot be uploaded, similar filename already exists.');
		}

	else{

			$store	= DB::table('petsrecord')->insert([
			'petstype' => $request->input('petstype'),
 			'breedtype'=> $request->input('breedtype'),
			'age' => $request->input('age'),
			'description'=>$request->input('description'),
			'imglink'=>$imageName,
			'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
			]);

			if ($store) 
			{
				if (move_uploaded_file($temPath, $fullImagePath)) 
				{

					return redirect()->route('templates.petsrecord.contactdetails')->with('info','Record has been posted.');
				}

				return redirect()->back()->route('templates.petsrecord.enterdetails')->with('info','Something went wrong, image couldnot be uploaded.');
			}
		}
		
	}

	public function getContactDetails()
	{
		return view('templates.petsrecord.contactdetails');// after the petsdetails has been submitted
	}

	public function postContactDetails(Request $request)
	{
		$this->validate($request,[
			'email'=>'required|email|max:255',
			'phone'=>'required|numeric',
			'address' => 'required',
			]);

		$petsId = DB::table('petsrecord')->max('p_id');
		$store = DB::table('contact')->insert([
			'email'=>$request->input('email'),
			'phone'=>$request->input('phone'),
			'p_id'=>$petsId,
			'address'=>$request->input('address'),
			]);

		if ($store)
		 {
			return redirect()->route('templates.petsrecord.viewallposts')->with('info','All the details have been posted.');
		 }

		 else
		 {
		 	return redirect()->route('templates.petsrecord.contactdetails')->with('info','Something went wrong!');	
		 }
	}

}