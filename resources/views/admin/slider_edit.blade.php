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
					<a href="{{url('/')}}/admin/slider/add" class="btn btn-info"><i class="fa fa-plus"> Add</i></a>
					<a href="{{url('/')}}/admin/slider/list" class="btn btn-info"><i class="fa fa-list"> List</i></a>
				</h3>
			</div>
            <div class="tile-body">
				
              <form method="post" action="{{url('/')}}/admin/slider/edit/{{$slider->id}}" enctype="multipart/form-data">
				@csrf
				<div class="form-group font-italic">
				  <label class="control-label font-weight-bold">Title</label>
				  <input name="title" class="form-control" type="text" placeholder="Title" value="{{$slider->title}}">
				</div>
				<div class="form-group font-italic  font-weight-bold">
				  <label class="control-label">Description</label>
				  <textarea name="description" class="form-control" placeholder="Description">{{$slider->description}}</textarea>
				</div>
				<div class="form-group font-italic">
				  <label class="control-label font-weight-bold">Image</label>
				  <input name="image" class="form-control" type="file">
				  <img src="{{url('/')}}/public/upload_images/{{$slider->image}}" width="150px">
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