
@extends('layouts.admin')
@section('titlt', @$title)
@section('content')

<main class="app-content">
  <div class="app-title">
	<div>
	  <h1><i class="fa fa-edit"></i> {{@$title}}</h1>
	  <p>{{@$title}} forms</p>
	</div>
	<ul class="app-breadcrumb breadcrumb">
	  <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
	  <li class="breadcrumb-item">Projects</li>
	  <li class="breadcrumb-item"><a href="#">{{@$title}}</a></li>
	</ul>
  </div>
  <div class="row">
	<div class="col-md-12">
	  <div class="tile">
		<div class="d-flex justify-content-between">
			<h3 class="tile-title text-info">{{@$title}}</h3>
			<a href="{{url('/')}}/admin/facility/list"><h3 class="btn btn-info"><i class = "fa fa-list"> List</i></h3></a>
		</div>
		<div class="tile-body">
		
		  <form method="post" action="{{url('/')}}/admin/facility/add" enctype="multipart/form-data">
			@csrf
	
			<div class="row">
				<div class="form-group font-italic font-weight-bold col-lg-3">
					<label class="control-label"> Caregory</label>
					<select name="category" class="form-control" type="text" required>
						<option value="">Select</option>
						<option value="gen_facility">Genaral Facility</option>
						<option value="room_facility">Room Facility</option>
					</select>
				</div>
				<div class="form-group font-italic font-weight-bold inputF col-lg-4">
				  <label class="control-label "> Name</label>
				  <input name="name" class="form-control" type="text" required>
				</div>
				<div class="form-group font-italic font-weight-bold col-lg-5">
				  <label class="control-label "> Icon</label>
				  <div class="row">
					<div class="col-10">
						<label class="d-flex ">
							<input name="icon" class="form-control iconInput" type="text">
							<a target="_blank" href="
							{{url('/')}}/admin/more_icon" class="btn btn-primary ml-1"> More</a>
						</label>
					</div>
					<div class="col-2">
						<span class="iconView"></i></span>
					</div>
				  </div>
				</div>		  
			</div>
			<div class="form-group font-italic font-weight-bold" id="inputD">
			  <label class="control-label"> Description</label>
			  <textarea name="short_description" class="form-control" type="text" ></textarea>
			</div>
			<div class="tile-footer">
			  <button class="btn btn-primary save_btn" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>
			  <button type="reset" class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-refresh"></i>Reset</button>
			</div>
			
		 </form>
	   </div>            
	  </div>
	</div>
 </div>
</main>


<script>
$(document).ready(function() {

	$('.iconInput').focusout(function(){		
		let val = $(this).val();	
		$('.iconView').html('<i style="font-size:30px; border:2px solid blue; border-radius:5px;" class="'+val+'"></i>');
	})
	
});
</script>

@endsection
