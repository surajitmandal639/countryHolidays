<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ImageGallery;

class ImageGalleryController extends Controller
{
    public function index(){
		$data['title'] = "Image Gallery";
		$data['images'] = ImageGallery::all();
		
		return view('admin.image_gallery')->with($data);
	}
	
	
	public function save(Request $request){
		
		$fileName = time().rand(000,999).'sm'.'.'.$request->file('file')->getClientOriginalExtension();
		$request->file('file')->move('public/upload_gallery',$fileName);
		
		$g = new ImageGallery;
		$g->images = $fileName;			
		if($g->save()){
			return true;
		}else{
			return false;
		}
	}
	
	public function delete($id){		
		$ig = ImageGallery::where('id', $id)->first();		
		$old_image = $ig->images;
		if(!empty($old_image) && file_exists('public/upload_gallery/'.$old_image)){
			unlink('public/upload_gallery/'.$old_image);
		}
		if($ig->delete()){
			return redirect('/admin/gallery/image')->with('success', 'your data deleted successfully..');
		}else{
			return redirect('/admin/gallery/image')->with('erorr', 'Something went wrong!!');
		}
		
	}
}
