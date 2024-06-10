<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\VideoGallery;

class VideoGalleryController extends Controller
{
    public function index(){
		$data['title'] = 'Video Gallery';
		$data['videos'] = VideoGallery::all();
		
		return view('admin.video_gallery')->with($data);
	}
	
	public function save(Request $request){
		$fileName = time().rand(000,999).'sm'.'.'.$request->file('file')->getClientOriginalExtension();
		$request->file('file')->move('public/upload_gallery', $fileName);
		
		$vg = new VideoGallery;
		$vg->videos = $fileName;
		if($vg->save()){
			return true;
		}else{
			return false;
		}				
	}
	
	public function delete($id){
		$vg = VideoGallery::where('id', $id)->first();
		$old_video = $vg->videos;	
		
		if($vg->delete()){
			if(file_exists('public/upload_gallery/'.$old_video)){
				unlink('public/upload_gallery/'.$old_video);
			}
			return redirect('/admin/gallery/video')->with('success', 'your data deleted successfully..');
		}else{
			return redirect('/admin/gallery/video')->with('erorr', 'Something went wrong!!');
		}
	}
}
