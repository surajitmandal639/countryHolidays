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
				<a href="{{url('/')}}/admin/slider/list"><h3 class="btn btn-info"><i class = "fa fa-list"> List</i></h3></a>
			</div>
            <div class="tile-body">
			
              <form method="post" action="{{url('/')}}/admin/slider/add" enctype="multipart/form-data">
				@csrf
				<div class="form-group font-italic">
				  <label class="control-label font-weight-bold">Title</label>
				  <input name="title" class="form-control" type="text" placeholder="Title" required>
				</div>
				<div class="form-group font-italic  font-weight-bold">
				  <label class="control-label">Description</label>
				  <textarea name="description" class="form-control" placeholder="Description"></textarea>
				</div>
				<div class="form-group font-italic">
				  <label class="control-label font-weight-bold">Image</label>
				  <input name="image" class="form-control" type="file">
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
   
 

<!--Hotel Modal -->
<div class="modal fade" id="hotelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hotel And Reshort</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form method="post" action="{{url('/')}}/admin/hotel_name/add" enctype="multipart/form-data">
			@csrf
			<div class="row font-italic">										
				<div class="form-group col-lg-6">
				  <label class="control-label font-weight-bold">Hotel Adnd Reshort Name</label>
				  <input name="hotel_name" class="form-control" type="text" required>
				</div>	
				<div class="form-group col-lg-6">
				  <label class="control-label font-weight-bold">Hotel Adnd Reshort Image</label>
				  <input name="image" class="form-control" type="file">
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

<!--Room Category Modal -->
<div class="modal fade" id="roomCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Room Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form method="post" action="{{url('/')}}/admin/room_cat/add" enctype="multipart/form-data">
			@csrf
			<div class="row font-italic">										
				<div class="form-group col-lg-6">
				  <label class="control-label font-weight-bold">Room Category Name</label>
				  <input name="name" class="form-control" type="text" required>
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

<!--FAcility Modal -->
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
		<form method="post" action="{{url('/')}}/admin/facility/add" enctype="multipart/form-data">
			@csrf
			<div class="row font-italic">										
				<div class="form-group col-lg-6">
				  <label class="control-label font-weight-bold"> Name</label>
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
@endsection