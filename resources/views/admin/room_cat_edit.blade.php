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
					<a href="{{url('/')}}/admin/room_category/add" class="btn btn-info"><i class="fa fa-plus"> Add</i></a>
					<a href="{{url('/')}}/admin/room_category/list" class="btn btn-info"><i class="fa fa-list"> List</i></a>
				</h3>
			</div>
            <div class="tile-body">
		
              <form method="post" action="{{url('/')}}/admin/room_category/edit/{{@$room_cat->id}}" enctype="multipart/form-data">
				@csrf
				<div class="row font-italic">
					<div class="form-group col-lg-6">
					  <label class="control-label font-weight-bold"> Hotel And Resort Name</label>
					  <select name="hotel_id" class="form-control" type="text" placeholder="Enter your hotel name">			
						@foreach(hotel() as $hval)
						@if(@$room_cat->hotel_id == $hval->id)
						<option selected value="{{$hval->id}}">{{$hval->hotel_name}}</option>
						@else
						<option value="{{$hval->id}}">{{$hval->hotel_name}}</option>
						@endif
						@endforeach
					  </select>					  
					</div>
					<div class="form-group col-lg-6">
					  <label class="control-label font-weight-bold"> Room Category Name</label>
					  <input name="name" class="form-control" type="text" placeholder="Enter your category name" value="{{@$room_cat->name}}">
					</div>																															 		
				</div>
				
				<div class="row font-italic  font-weight-bold">
					<div class="form-group col-lg-6">
					  <label class="control-label"> Short Description</label>
					  <textarea name="short_description" class="form-control">{{@$room_cat->short_description}}</textarea>
					</div>
					<div class="form-group col-lg-6">
					  <label class="control-label"> Long Description</label>
					  <textarea name="long_description" class="form-control">{{@$room_cat->long_description}}</textarea>
					</div>
				</div>
								
				@php $fid = json_decode(@$room_cat->facility_id); @endphp
				<div class="row font-italic font-weight-bold">					
					<div class="form-group col-lg-4">						
						<label class="control-label"> Facilities</label>		
						<select class="js-example-basic-multiple form-control" name="facility_id[]" multiple="multiple">
							<option value="">select</option>
							@foreach($facility as $fval)
							@if(in_array($fval->id, $fid))
							<option selected value="{{$fval->id}}">{{$fval->name}}</option>	
							@else
							<option value="{{$fval->id}}">{{$fval->name}}</option>
							@endif
							@endforeach					
						</select>
					</div>					
					<div class="form-group col-lg-4">
					  <label class="control-label font-weight-bold"> Base Price(Rs.)</label>
					  <input name="base_price" class="form-control" type="text" placeholder="Enter room_category base price per night" value="{{@$room_cat->base_price}}">
					</div>
					<div class="form-group col-lg-4">
					  <label class="control-label font-weight-bold"> Sell Price(Rs.)</label>
					  <input name="sell_price" class="form-control" type="tex" placeholder="Enter room_category sell price per night" value="{{@$room_cat->sell_price}}">
					</div>	
				</div>	
				
				<div class="row font-italic  font-weight-bold">
					<div class="form-group col-lg-6">
					  <label class="control-label"> Room Facility Description</label>
					  <textarea name="room_facility_description" class="form-control">{{$room_cat->room_facility_description}}</textarea>
					</div>
					<div class="form-group col-lg-6">
					  <label class="control-label"> Genaral Facility Description</label>
					  <textarea name="genaral_facility_description" class="form-control">{{$room_cat->genaral_facility_description}}</textarea>
					</div>
				</div>
							
				<div class="row font-italic  font-weight-bold">
					<div class="form-group col-lg-6">
					  <label class="control-label font-weight-bold">Image</label>
					  <input name="image" class="form-control" type="file">
					  <img src="{{url('/')}}/public/upload_images/{{$room_cat->image}}" width="150px">
					</div>	
					<div class="form-group col-lg-6">
					  <label class="control-label font-weight-bold">Images</label>
					  <input name="images[]" class="form-control" type="file" multiple>
					  @foreach($room_cat->otherImages as $ival)
					  <img src="{{url('/')}}/public/upload_images/{{$ival->images}}" width="150px">
					  @endforeach
					</div>
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
 
<!-- GENARAL FACILITIES Modal -->
<div class="modal fade" id="genFacilityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Genaral Facilities</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form method="post" action="{{url('/')}}/admin/genaral_facility/add" enctype="multipart/form-data">
			@csrf
			<div class="row font-italic">										
				<div class="form-group col-lg-6">
				  <label class="control-label font-weight-bold"> Facilities</label>
				  <input name="facilities" class="form-control" type="text" required>
				</div>																					
			</div>			
			<div class="tile-footer">
			  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>
			  <button type="reset" class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-refresh"></i>Reset</button>
			</div>
		</form>
      </div>
      
    </div>
  </div>
</div>

<!-- Room FAcility Modal -->
<div class="modal fade" id="facilityModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Facilities</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form method="post" action="{{url('/')}}/admin/room_facility/add" enctype="multipart/form-data">
			@csrf													
			<div class="form-group font-italic font-weight-bold">
			  <label class="control-label "> Name</label>
			  <input name="facilities" class="form-control" type="text" required>
			</div>	
			<div class="form-group font-italic font-weight-bold">
			  <label class="control-label"> Description</label>
			  <textarea name="description" class="form-control" type="text" ></textarea>
			</div>			
			
			<div class="tile-footer">
			  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>
			  <button type="reset" class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-refresh"></i>Reset</button>
			</div>
		</form>
      </div>
      
    </div>
  </div>
</div> 

<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
@endsection