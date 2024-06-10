@extends('layouts.admin')
@section('titlt', @$title)
@section('content')

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> {{@$title}}</h1>
          <p>{{@$title}} Froms</p>
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
				<h3>
					<a href="{{url('/')}}/admin/facility/add" class="btn btn-info"><i class="fa fa-plus"> Add</i></a>
					<a href="{{url('/')}}/admin/facility/list" class="btn btn-info"><i class="fa fa-list"> List</i></a>
				</h3>
			</div>
            <div class="tile-body">
				
              <form method="post" action="{{url('/')}}/admin/facility/edit/{{$facility->id}}" enctype="multipart/form-data">
				@csrf
				
				<div class="row">
					<div class="form-group font-italic font-weight-bold col-lg-3">
					  <label class="control-label"> Caregory</label>
					  <select name="category" type="text" class="form-control" required>					
						<option selected value="{{$facility->category}}">{{($facility->category == 'gen_facility')?'Genaral Facility':'Room Facility'}}</option>
						<option value="gen_facility">Genaral Facilty</option>
						<option value="room_facility">Room Facility</option>
					  </select>
					</div>
					<div class="form-group font-italic font-weight-bold inputF col-lg-4">
					  <label class="control-label "> Name</label>
					  <input name="name" class="form-control" type="text" value="{{$facility->name}}">
					</div>
					<div class="form-group font-italic font-weight-bold col-lg-5">
					  <label class="control-label "> Icon</label>
					  <div class="row">
						<div class="col-10">
							<label class="d-flex ">
								<input name="icon" class="form-control iconInput" type="text" value="{{$facility->icon}}">
								<a target="_blank" href="
								{{url('/')}}/admin/more_icon" class="btn btn-primary ml-1"> More</a>
							</label>
						</div>
						<div class="col-2">
							<span class="iconView"><i style="font-size:30px" class="{{$facility->icon}} mb-0"></i></span>
						</div>
					  </div>
					</div>		  
				</div>
				<div class="form-group font-italic font-weight-bold">
				  <label class="control-label"> Description</label>
				  <textarea name="short_description" class="form-control" type="text" >{{$facility->short_description}}</textarea>
				</div>
				<div class="tile-footer">
				  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>update</button>
				  <button type="cancel" class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-refresh"></i>Cancel</button>
				</div>				
			 </form>
         
			</div>            
          </div>
        </div>
	 </div>    
	</main>
  


@endsection