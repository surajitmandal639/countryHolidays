<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Slider;

class SliderController extends Controller
{
   public function view(){
	   $data['title'] = 'Slider Add';
	   
	   return view('admin.slider_add')->with($data);
   }
   
   public function save(Request $request){
	   if(!empty($request->image)){
		   $fileName = time().rand(000,999).'sm'.'.'.$request->file('image')->getClientOriginalExtension();
		   $request->file('image')->move('public/upload_images', $fileName);
	   }
	   
	   $s = new Slider;
	   
	   $s->title = $request->title;
	   $s->description = $request->description;
	   $s->image = $fileName;
	   
	   if($s->save()){
		   return redirect('/admin/slider/list')->with('success', 'You have saved data successfully..');
	   }else{
		   return redirect('/admin/slider/list')->with('erorr', 'Something went wrong');
	   }
   }
   
   public function list(){
		$data['title'] = 'Slider List';
		$data['slider'] = Slider::all();
	   
		return view('admin.slider_list')->with($data);
   }
   
   public function edit($id){
	   $data['title'] = 'Slider Edit';
	   $data['slider'] = Slider::where('id', $id)->first();
	   
	   return view('admin.slider_edit')->with($data);
   }
   
   public function update(Request $request, $id){	   
	   $s = Slider::where('id', $id)->first();
	  
	   $old_img =$s->image;
	   if(!empty($request->image)){		   
		   $fileName = time().rand(000,999).'sm'.'.'.$request->file('image')->getClientOriginalExtension();		   
		   $request->file('image')->move('public/upload_images', $fileName);	
		   
		   $s->image = $fileName;
	   
		   if(!empty($old_img) && file_exists('public/upload_images/'.$old_img)){
			   unlink('public/upload_images/'.$old_img);
		   }
		}
	   $s->title = $request->title;
	   $s->description = $request->description;   
		
	   if($s->update()){
			return redirect('/admin/slider/list')->with('success', 'Your data updated successfully..');
	   }else{
		   return redirect('/admin/slider/list')->with('erorr', 'Something went wrong!!');
	   }

   }
   
   public function delete(Request $request){
	   $ids = $request->input('ids');
	   if(!empty($ids)){
		   foreach($ids as $idval){
			  $s = Slider::where('id', $idval)->first();
			  $old_img = $s->image;
			  if(!empty($old_img) && file_exists('public/upload_images/'.$old_img)){
				  unlink('public/upload_images/'.$old_img);
			  } 
			  $s->delete();
		   }
		   
	   }
	   return response()->json(['success'=>true]);
   }
}
