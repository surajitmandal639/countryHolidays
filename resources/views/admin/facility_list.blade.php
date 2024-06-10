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
          <li class="breadcrumb-item">
          <li class="breadcrumb-item">Projects</li>
          <li class="breadcrumb-item active"><a href="#">{{@$title}}</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
			<div class="d-flex justify-content-between">
				<h3 class="tile-title text-info">{{@$title}}</h3>
				<a href="{{url('/')}}/admin/facility/add"><h3 class="btn btn-info"><i class="fa fa-plus"> Add</i></h3></a>
			</div>
			
			<form id="delete-form">
			@csrf			
				<table class="table">
				  <thead>
					<tr>
					  <th>#</th>
					  <th>Category</th>
					  <th>Name</th>
					  <th>Icon</th>                
					  <th>Description</th>
					  <th>
						<div class="d-flex">
							<button class="btn btn-danger m-1 d-none" id="delete_button">Delete</button>						
							<button class="btn btn-light d-flex m-1"><input class="mt-1" type="checkbox" id="select_all"><span> All</span></button>
						</div>
					  </th>
					  {{-- <th class="text-center">Action</th> --}}
					</tr>
				  </thead>
				  <tbody>
				  @php $i = 1; @endphp
				  @foreach($facility as $fval)
					<tr>
					  <td>{{@$i++}}</td>
					  <td>{{$fval->category == 'gen_facility'?'Genaral Facility':'Room Facility'}}</td>
					  <td>{{$fval->name}}</td>
					  <td><i class="{{$fval->icon}}" style="font-size:30px"></i></td>
					  <td>{{$fval->short_description}}</td>
					  
					  <td class="d-flex justify-content-center">
					  <form id ="sform" action="{{url('/')}}/admin/facility/delete">
						<input name="ids[]" type="checkbox" value="{{$fval->id}}" class="checkbox">
					  </form>
						 {{--
						<a href="" data-id="{{$fval->id}}" class="btn btn-danger m-1 delete-btn">Delete</a> --}}
					  </td>
					</tr>
				  @endforeach
				  </tbody>
				</table>			
			</form>
          </div>
        </div>        
	  </div>
	</main>





<script>
    /* $(document).on('click', '.delete-btn', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
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
                $.ajax({
                    url: '{{url('/')}}/admin/facility/delete/' + id,
                    type: 'POST',
                    success: function(response) { 						
						console.log(response);
						if (response.success == true) {							
                            Swal.fire({
								title: 'Success',
								text: 'Your operation was successful',
								icon: 'success',
								confirmButtonText: 'OK'
							}).then(() => {								
								window.location.reload();
							});
                        }else{
							Swal.fire({
							title: 'Opps!!',
							text: 'Something went wrong',
							icon: 'erorr',
							confirmButtonText: 'OK'
							}).then(() => {
								window.location.reload();
							});
						}
                    }
                });
            }
        });
    }); */
</script>


@endsection