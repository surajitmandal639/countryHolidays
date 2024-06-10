<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hotel;

class HotelController extends Controller
{
	public function view (){
		$data['title'] = 'Hotel And Resort Add';
		
		return view('admin.hotel_add')->with($data);
	}
	
    public function save(Request $request){
		
		$h = new Hotel;		
		$h->hotel_name = $request->hotel_name;
		$h->description = $request->description;
		if(isset($request->image)){
			$fileName = time().rand(000,999).'sm'.'.'.$request->file('image')->getClientOriginalExtension();
			$request->file('image')->move('public/upload_images', $fileName);
			$h->image = $fileName;
		}
	
		$h->address = $request->address;
		$h->map_link = $request->map_link;
		$h->phone = $request->phone;
		
		$h->save();
		
		return redirect('/admin/hotel/list')->with('success', 'You have saved successfully..');
	}
	
	public function list(){
		$data['title'] = 'Hotel And Resort List';
		
		return view('admin.hotel_list')->with($data);
	}
	
	public function edit($id){
		$data['title'] = 'Hotel And Resort Edit';
		$data['hotel'] = Hotel::where('id', $id)->first();
		
		return view('admin.hotel_edit')->with($data);
		
	}
	
	public function update(Request $request, $id){		
		
		$h = Hotel::where('id', $id)->first();	
		$old_img = $h->image;
		$h->hotel_name = $request->hotel_name;
		
		if(!empty($request->image)){
			$fileName = time().rand(000,999).'sm'.'.'.$request->file('image')->getClientOriginalExtension();
			$request->file('image')->move('public/upload_images', $fileName);
			
			$h->image = $fileName;
			
			if(!empty($old_img) && file_exists('public/upload_images/'.$old_img)){
				unlink('public/upload_images/'.$old_img);
			}
		}
		
		$h->address = $request->address;
		$h->phone = $request->phone;
		
		
		
		if($h->update()){
			return redirect('/admin/hotel/list')->with('success', 'your data updated successfully..');
		}else{
			return redirect('/admin/hotel/list')->with('erorr', 'Something went wrong!!');
		}
	
	}
	
	public function delete(Request $request){	
		$ids = $request->input('ids');
		foreach($ids as $idval){
			$h = Hotel::where('id', $idval)->first();
			$old_img = $h->image;
			if(!empty($old_img) && file_exists('public/upload_images/'.$old_img)){
				unlink('public/upload_images/'.$old_img);				
			}
			$h->delete();
		}
		return response()->json(['success'=>true]);
	}
	
	
}
