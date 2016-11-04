<?php
namespace app\Models;
use Illuminate\Database\Eloquent\Model;
use DB;

class Petsrecord extends Model
{
	protected $table = 'petsrecord';

	protected $fillable = [
				'petstype',
				'breedtype',
				'age',
				'description',
				'imglink',
							];
	public function getPetsType()
	{
		return "{$this->petstype}";
	}
	public function getBreedType()
	{
		return "{$this->breedtype}";
	}	
	public function getAge()
	{
		return "{$this->age}";
	}
	public function getDescription()
	{
		return "{$this->description}";
	}
	public function getImage()
	{
		return  "{$this->imglink}";
	}
}