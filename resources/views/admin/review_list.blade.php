@extends('layouts.admin')
@section('titlt', @$title)
@section('content')

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> {{@$title}} </h1>
          <p>{{@$title}} tables</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Projects</li>
          <li class="breadcrumb-item active"><a href="#">{{@$title}}</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
			<div class="d-flex justify-content-between">
				<h3 class="tile-title text-info">{{@$title}}</h3>
				<h3 class="btn btn-info" data-toggle="modal" data-target="#itemModal"><i class="fa fa-plus"> Add</i></h3>
			</div>
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
				  <th>Title</th>
                  <th>Description</th>                 
                  <th>Image</th>
				  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
			  @php $i = 1; @endphp
			  @foreach($packItem as $pival)
                <tr>
                  <td>{{@$i++}}</td>
				  <td>{{$pival->name}}</td>
				  <td>{{$pival->description}}</td>				 		  
                  <td><img src="{{url('/')}}/public/upload_images/{{$pival->image}}" width="50px"/></td>	
				  
				  <td class="d-flex justify-content-center">					
					<a href="{{url('/')}}/admin/pack/item/status/{{$pival->id}}" >
					@if($pival->status == null || $pival->status == 'yes')
					<i class="fa fa-check-circle ml-2 btn btn-primary"></i>
					@else
					<i class="fa fa-circle-o ml-2 btn btn-warning"></i>
					@endif
					</a>
					<a href="{{url('/')}}/admin/pack/item/delete/{{$pival->id}}" class="delete"><i class="fa fa-trash ml-2 btn btn-success"></i></a>
				  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>        
	  </div>
	</main>
     
 

<!-- ADD PACK ITEM Modal -->
<div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{url('/')}}/admin/pack/item/add" enctype="multipart/form-data">
			@csrf
			<div class="container font-italic font-weight-bold">										
				<div class="form-group">
				  <label class="control-label"> Pack item name</label>
				  <input name="name" class="form-control" type="text" placeholder="Pack item name" required>
				</div>
				<div class="form-group font-italic  font-weight-bold">
				  <label class="control-label">Description</label>
				  <textarea name="description" class="form-control"></textarea>
				</div>
				<div class="form-group">
				  <label class="control-label font-weight-bold">Image</label>
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

<script>
$(document).ready(function(){
	$('.delete').click(function(){
		Swal.fire({
		  title: 'Are you sure?',
		  text: "You won't be able to revert this!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		  if (result.isConfirmed) {
			Swal.fire(
			  'Deleted!',
			  'Your file has been deleted.',
			  'success'
			)
		  }
		})
	});
});
</script>
@endsection