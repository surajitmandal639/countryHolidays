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
				<a href="{{url('/')}}/admin/room_category/add"><h3 class="btn btn-info"><i class="fa fa-plus"> Add</i></h3></a>
			</div>
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Hotel And Reshot name</th>
                  <th>Room Category Name</th>                
                  <th>Image</th>
                  <th>Base Price</th>
                  <th>Sell Price</th>
				  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
			  @php $i = 1; @endphp
			  @foreach($room_cat as $rval)
                <tr>
                  <td>{{@$i++}}</td>
				  @foreach(hotel() as $hval)
				  @if($rval->hotel_id == $hval->id)
				  <td>{{$hval->hotel_name}}</td>
				  @endif
				  @endforeach
				  <td>{{$rval->name}}</td>		  
                  <td><img src="{{url('/')}}/public/upload_images/{{$rval->image}}" width="50px"/></td>	
                  <td>Rs. {{$rval->base_price}}</td>	
                  <td>Rs. {{$rval->sell_price}}</td>	
				  
				  <td class="d-flex justify-content-center">
					<a href="{{url('/')}}/admin/room_category/delete/{{$rval->id}}"  class="btn btn-danger m-1 sweet2-delete">Delete</a>					
					<a href="{{url('/')}}/admin/room_category/edit/{{$rval->id}}" class="btn btn-primary m-1">Edit</a>					
					<a href="{{url('/')}}/admin/room_category/status/{{$rval->id}}">
					@if($rval->status == 'yes')
					<span class="btn btn-info m-1">Inactive</span></a>
					@else
					<span class="btn btn-warning m-1">Active</span>
					@endif
					</a>
				  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>        
	  </div>
	</main>
     
 
<script type="text/javascript">
$(document).ready(function(){
	$('.sweet2-delete').click(function(event){
        var delHref = $(this).attr("href");
        event.preventDefault();
        swal({
            title: "Are you sure you want to delete this record?",
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            type: "warning",
            buttons: ["Cancel","Yes!"],
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'			
        }).then((willDelete) => {
            if (willDelete) {
				Swal.fire(					
						
					'Deleted!',
					'Your file has been deleted.',
					'success'
					window.location.href = delHref;
					
				)               	
            }
        });
    });
});
   

</script>
@endsection