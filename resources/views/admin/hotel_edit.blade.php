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
					<a href="{{url('/')}}/admin/hotel/add" class="btn btn-info"><i class="fa fa-plus"> Add</i></a>
					<a href="{{url('/')}}/admin/hotel/list" class="btn btn-info"><i class="fa fa-list"> List</i></a>
				</h3>
			</div>
            <div class="tile-body">
				
              <form method="post" id="efrom" action="{{url('/')}}/admin/hotel/edit/{{$hotel->id}}" enctype="multipart/form-data">
				@csrf
				<div class="row font-italic">										
					<div class="form-group col-lg-6">
					  <label class="control-label font-weight-bold"> Hotel In</label>
					  <input name="hotel_name" class="form-control" type="text" placeholder="Location" value="{{$hotel->hotel_name}}">
					</div>
					<div class="form-group col-lg-6">
					  <label class="control-label font-weight-bold"> Phone</label>
					  <input name="phone" class="form-control" type="text" placeholder="Phone" value="{{$hotel->phone}}">
					</div>																						 		
				</div>		
				<div class="form-group font-italic  font-weight-bold">
				  <label class="control-label">Address</label>
				  <textarea name="address" class="form-control">{{$hotel->address}}</textarea>
				</div>
				<div class="form-group font-italic  font-weight-bold">
				  <label class="control-label font-weight-bold">Image</label>
				  <input name="image" class="form-control" type="file">
				  <img src="{{url('/')}}/public/upload_images/{{$hotel->image}}" width="150px">
				</div>
				
				<div class="tile-footer">
				  <button class="btn btn-primary update_btn" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
				  <button type="cancel" class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-refresh"></i>Cancel</button>
				</div>
              </form>
         
			</div>            
          </div>
        </div>
	 </div>    
	</main>
  

@endsection