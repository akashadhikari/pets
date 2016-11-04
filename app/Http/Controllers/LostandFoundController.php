<?php
namespace App\Http\Controllers;

use App\User;

Class LostandFoundController extends Controller{

	public function getLostAndFound()
	{
		return view('templates.lostandfound.index');
	}
	public function getLostDetails()
	{
		return view ('templates.lostandfound.enterdetails');
	}
	public function postLostDetails()
	{
		dd('ok');
	}

}