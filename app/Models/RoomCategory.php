<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Facility;
use App\Models\Image;

class RoomCategory extends Model
{
    use HasFactory;
	protected $table = 'room_categories';
	
	public function otherImages(){
		 return $this->hasMany(Image::class, 'room_cat_id');
	}
	
}
