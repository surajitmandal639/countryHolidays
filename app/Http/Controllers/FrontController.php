<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hotel;
use App\Models\Slider;
use App\Models\RoomCategory;
use App\Models\Facility;
use App\Models\Image;
use App\Models\ImageGallery;
use App\Models\VideoGallery;
use Session;

class FrontController extends Controller
{
    public function home(){
		$data['title'] = "Home";
		$data['slider'] = Slider::all();
		$data['room_category'] = RoomCategory::latest()->paginate(3);
	
		return view('home')->with($data);
	}
	
	
	public function hotel($id=null){
		if($id==!null){
			$data['title'] = 'Room List';
			$data['room_category'] = RoomCategory::where('hotel_id', $id)->get();
			$data['facility'] = Facility::all();

			return view('room_list')->with($data);
		}else{
			$data['title'] = 'Hotel & Reshort';
			$data['hotel'] = Hotel::get();
		
			return view('hotels')->with($data);
		}
		
	}
	
	public function room_detail($id){
		$data['title'] = 'Room Detail';
		$data['room_category'] = RoomCategory::where('id', $id)->first();
		$data['room_facility'] = Facility::where('category', 'room_facility')->get();
		$data['gen_facility'] = Facility::where('category', 'gen_facility')->get();
		$data['images'] = Image::where('room_cat_id', $id)->get();
		//$data['hotel'] = Hotel::all();
		
		return view('room_detail')->with($data);
	}
	
	public function about(){
		$data['title'] = 'About Us';
		
		return view('about')->with($data);
	}
	
	public function gallery(){
		$data['title'] = 'Gallery';
		$data['image'] = ImageGallery::all();
		$data['video'] = VideoGallery::all();
		
		return view('gallery')->with($data);
	}
	
	public function contact(){
		$data['title'] = 'Contact Us';
		
		return view('contact')->with($data);
	}
	
	
	public function showProfilePage(){
		//
	}
	
}
