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
				<a href="{{url('/')}}/admin/room_category/list"><h3 class="btn btn-info"><i class = "fa fa-list"> List</i></h3></a>
			</div>
            <div class="tile-body">
			
              <form method="post" action="{{url('/')}}/admin/room_category/add" enctype="multipart/form-data">
				@csrf
				<div class="row font-italic">
					<div class="form-group col-lg-6">
					  <label class="control-label font-weight-bold"> Hotel And Resort Name</label>
					  <select name="hotel_id" class="form-control" type="text" placeholder="Enter your project name">			
						<option value=null>select</option>
						@foreach(hotel() as $hval)																
						<option value="{{$hval->id}}">{{$hval->hotel_name}}</option>					
						@endforeach
					  </select>					  
					</div>
					<div class="form-group col-lg-6">
					  <label class="control-label font-weight-bold"> Room Category Name</label>
					  <input name="name" class="form-control" type="text" placeholder="Enter your project name" required>
					</div>																															 		
				</div>
				
				<div class="row font-italic  font-weight-bold">
					<div class="form-group col-lg-6">
					  <label class="control-label"> Short Description</label>
					  <textarea name="short_description" class="form-control"></textarea>
					</div>
					<div class="form-group col-lg-6">
					  <label class="control-label"> Long Description</label>
					  <textarea name="long_description" class="form-control"></textarea>
					</div>
				</div>
				
				<div class="row font-italic font-weight-bold">					
					<div class="form-group col-lg-4">						
						<label class="control-label"> Facilities</label>		
						<select class="js-example-basic-multiple form-control" name="facility_id[]" multiple="multiple" required>
							<option value="">select</option>
							@foreach($facility as $fval)							
							<option value="{{$fval->id}}">{{$fval->name}}</option>						
							@endforeach					
						</select>
					</div>							
					<div class="form-group col-lg-4">
					  <label class="control-label font-weight-bold"> Base Price(Rs.)</label>
					  <input name="base_price" class="form-control" type="text" placeholder="Enter room_category base price per night">
					</div>
					<div class="form-group col-lg-4">
					  <label class="control-label font-weight-bold"> Sell Price(Rs.)</label>
					  <input name="sell_price" class="form-control" type="tex" placeholder="Enter room_category sell price per night">
					</div>	
				</div>	
				
				<div class="row font-italic  font-weight-bold">
					<div class="form-group col-lg-6">
					  <label class="control-label"> Room Facility Description</label>
					  <textarea name="room_facility_description" class="form-control"></textarea>
					</div>
					<div class="form-group col-lg-6">
					  <label class="control-label"> Genaral Facility Description</label>
					  <textarea name="genaral_facility_description" class="form-control"></textarea>
					</div>
				</div>
							
				<div class="row font-italic  font-weight-bold">
					<div class="form-group col-lg-6">
					  <label class="control-label font-weight-bold">Image</label>
					  <input name="image" class="form-control" type="file">
					</div>	
					<div class="form-group col-lg-6">
					  <label class="control-label font-weight-bold">Images</label>
					  <input name="images[]" class="form-control" type="file" multiple>
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
   
 

@endsection