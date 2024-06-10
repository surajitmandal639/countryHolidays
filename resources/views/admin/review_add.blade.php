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
				<a href="{{url('/')}}/admin/pack/list"><h3 class="btn btn-info"><i class = "fa fa-list"> List</i></h3></a>
			</div>
            <div class="tile-body">
			
              <form method="post" action="{{url('/')}}/admin/pack/add" enctype="multipart/form-data">
				@csrf
				<div class="row font-italic font-weight-bold">
					<div class="form-group col-lg-6">
					  <label class="control-label">Package Name</label>
					  <input name="name" class="form-control" type="text" placeholder="Title" required>
					</div>
					<div class="form-group col-lg-6">						
						<label class="control-label">Items</label>		
						<select class="js-example-basic-multiple1 form-control" name="pack_item_id[]" multiple="multiple">
							@foreach($packItem as $pival)														
							<option value="{{$pival->id}}">{{$pival->name}}</option>					
							@endforeach					
						</select>
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
	</main>
   
 

<script>
$(document).ready(function() {
    $('.js-example-basic-multiple1').select2();
});
</script>

@endsection