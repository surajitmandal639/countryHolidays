<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Image;
use App\Models\RoomCategory;
use App\Models\Hotel;
use App\Models\Facility;

class RoomCategoryController extends Controller
{
    public function view(){
		$data['title'] = 'Room Category Add';
		$data['facility'] = Facility::all();
		
		return view('admin.room_cat_add')->with($data);
	}
	
	public function save(Request $request){	
	
		$r = new RoomCategory;
		
		$r->hotel_id = $request->hotel_id;
		$r->name = $request->name;
		$r->short_description = $request->short_description;
		$r->long_description = $request->long_description;		
		$r->facility_id = json_encode($request->facility_id);		
		$r->room_facility_description = $request->room_facility_description;
		$r->genaral_facility_description = $request->genaral_facility_description;
		$r->base_price = $request->base_price;
		$r->sell_price = $request->sell_price;
		if(!empty($request->image)){			
			$fileName = time().rand(000,999).'sm'.'.'.$request->file('image')->getClientOriginalExtension();		 
			$request->file('image')->move('public/upload_images', $fileName);
			$r->image = $fileName;
		}

		if($r->save()){
			$room_cat_id = $r->id;
			if(!empty($request->images)){
				foreach($request->images as $imgval){
					$fileName = time().rand(000,999).'sm'.'.'.$imgval->getClientOriginalExtension();
					$imgval->move('public/upload_images', $fileName);
					
					$img = new Image;
				
					$img->room_cat_id = $room_cat_id;					
					$img->images = $fileName;			
					
					$img->save();
				}				
			}
			
			return redirect('/admin/room_category/list')->with('success', 'You have added room successfully..');
		}else{
			return redirect('/admin/room_category/list')->with('erorr', 'Something went wrong!!');
		}

	}
	
	public function list(){
		$data['title'] = 'Room Category List';
		$data['room_cat'] = RoomCategory::all();
		
		return view('admin.room_cat_list')->with($data);
	}
	
	public function delete($id){
		$imgs = Image::where('room_cat_id', $id)->first();
		if(!empty($imgs->images)){
			$old_img = $imgs->images;
		}
		if(!empty($imgs)){
			foreach($imgs as $ival){			
				if(!empty($old_img)){
					if(file_exists('publc/upload_images/'.$old_img)){
						unlink('publc/upload_images/'.$old_img);
					}					
				}
			}	
		}		
	
		RoomCategory::where('id', $id)->delete();
		return redirect('/admin/room_category/list')->with('success', 'You have deleted successfully..');
		
		
	}
	
	public function edit($id){
		$data['title'] = "Room Category Edit";
		$data['room_cat'] = RoomCategory::where('id', $id)->first();		
		$data['facility'] = Facility::all();
		
		return view('admin.room_cat_edit')->with($data);
	}
	
	public function update(Request $request, $id){		
		$r = RoomCategory::where('id', $id)->first();
		$room_cat_id = $id;
		
		if(!empty($r)){
			
			$old_img = $r->image;
		
			$r->hotel_id = $request->hotel_id;
			$r->name = $request->name;
			$r->short_description = $request->short_description;
			$r->long_description = $request->long_description;			
			$r->facility_id = json_encode($request->facility_id);			
			$r->room_facility_description = $request->room_facility_description;			
			$r->genaral_facility_description = $request->genaral_facility_description;			
			$r->base_price = $request->base_price;
			$r->sell_price = $request->sell_price;
			if(!empty($request->image)){			
				$fileName = time().rand(000,999).'sm'.'.'.$request->file('image')->getClientOriginalExtension();		 
				$request->file('image')->move('public/upload_images', $fileName);
				$r->image = $fileName;
			}
			
			if(!empty($old_img) && file_exists('public/upload_images'.$old_img)){
			unlink('public/upload_images'.$old_img);
			}	
	
			if($r->update()){
				
				if(!empty($request->images)){
					$imgs =  Image::where('room_cat_id', $id)->get();
					
					foreach($imgs as $ival){
						if(!empty($ival->images) && file_exists('public/upload_images/'.$ival->images)){							
							unlink('public/upload_images/'.$ival->images);							
						}
						$ival->delete();
					}
			
					foreach($request->images as $imgval){
						
						$fileName = time().rand(000,999).'sm'.'.'.$imgval->getClientOriginalExtension();
						
						$x = $imgval->move('public/upload_images', $fileName);
						
						$imgs = new Image;
						$imgs->room_cat_id = $room_cat_id;
						$imgs->images = $fileName;			
						
						$imgs->save();
					}					
				}
				return redirect('/admin/room_category/list')->with('success', 'You have updated successfully..');
			}else{
				return redirect('/admin/room_category/list')->with('erorr', 'Something went wrong!!');
			}			
		}
	
	}
	
	public function status($id)
	{
		$rc = RoomCategory::where('id', $id)->first();
		
		if($rc->status == 'yes')
		{
			$rc->status = 'no';
			$rc->update();			
		}else{
			$rc->status = 'yes';
			$rc->update();
		}
		return redirect('/admin/room_category/list');
	}
}
