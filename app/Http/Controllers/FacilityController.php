<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Models\Facility;

class FacilityController extends Controller
{
    public function view()
	{
		$data['title'] = 'Facility Add';
		
		return view('admin.facility_add')->with($data);
	}
	
	public function moreIcon(){
		$data['title'] = 'More Icon';
		
		return view('admin.more_icon')->with($data);
	}
	
	public function save(Request $request){
		
		$f = new Facility;	
		$f->category = $request->category;
		$f->name = $request->name;
		$f->icon = $request->icon;
		$f->short_description = $request->short_description;
		
		if($f->save()){
			return redirect('/admin/facility/list')->with('success','You have save data successfully..');
		}else{
			return redirect('/admin/facility/list')->with('erorr', 'Something went wrong');
		}
	}
	
	public function list(){
		$data['title'] = 'Facility List';
		$data['facility'] = Facility::all();
		
		return view('admin.facility_list')->with($data);
	}
	
	public function delete(Request $request){
		
		$ids = $request->input('ids');
		Facility::whereIn('id', $ids)->delete();
		return response()->json(['success'=> true]);

	}
	
	public function edit(Request $request, $id){
		$data['title'] = 'Facility Edit';
		$data['facility'] = Facility::where('id', $id)->first();
		
		return view('admin.facility_edit')->with($data);
	}
}
