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
				<a href="{{url('/')}}/admin/hotel/list"><h3 class="btn btn-info"><i class = "fa fa-list"> List</i></h3></a>
			</div>
            <div class="tile-body">
			
              <form method="post" action="{{url('/')}}/admin/hotel/add" enctype="multipart/form-data">
				@csrf
				<div class="row font-italic">										
					<div class="form-group col-lg-6">
					  <label class="control-label font-weight-bold"> Hotel In</label>
					  <input name="hotel_name" class="form-control" type="text" placeholder="Location" required>
					</div>
					<div class="form-group col-lg-6">
					  <label class="control-label font-weight-bold"> Phone</label>
					  <input name="phone" class="form-control" type="text" placeholder="Phone" required>
					</div>																						 		
				</div>	
				<div class="form-group font-italic row font-weight-bold">
					<div class="form-group col-lg-6">
					  <label class="control-label">Description</label>
					  <textarea name="description" class="form-control"></textarea>
					</div>
					<div class="form-group col-lg-6">
					  <label class="control-label">Address</label>
					  <textarea name="address" class="form-control"></textarea>
					</div>
				</div>
				<div class="row font-italic font-weight-bold">
					<div class="form-group col-lg-6">
					  <label class="control-label font-weight-bold">Map ifrem Link</label>
					  <input name="map_link" class="form-control" type="text" placeholder="GoogleMap->search->share->embded a map->copy html->pest here">
					</div>
					<div class="form-group col-lg-6">
					  <label class="control-label font-weight-bold">Image</label>
					  <input name="image" class="form-control" type="file" multiple>
					</div>
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
 //
 </script>
@endsection