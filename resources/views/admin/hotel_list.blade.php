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
				<a href="{{url('/')}}/admin/hotel/add"><h3 class="btn btn-info"><i class="fa fa-plus"> Add</i></h3></a>
			</div>
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
				  <th>Hotel In</th>
                  <th>Phone</th>
                  <th>Address</th>                
                  <th>Image</th>
				  <th>
					<div class="d-flex justify-content-center">
						<button class="btn btn-danger m-1 d-none" id="delete_button">Delete</button>						
						<button class="btn btn-light d-flex m-1"><input class="mt-1" type="checkbox" id="select_all"><span> All</span></button>
					</div>
				</th>
                </tr>
              </thead>
              <tbody>
			  @php $i = 1; @endphp
			  @foreach(hotel() as $hval)
                <tr>
                  <td>{{@$i++}}</td>
				  <td>{{$hval->hotel_name}}</td>
				  <td>{{$hval->phone}}</td>
				  <td>{{$hval->address}}</td>
				  <td><img src="{{url('/')}}/public/upload_images/{{$hval->image}}" width="50px"></td>
				  
				  <td align="center">
					<div class="d-flex">
						<a href="{{url('/')}}/admin/hotel/edit/{{$hval->id}}" class="btn btn-primary m-1 edit_btn">Edit</a>
						<form class="btn m-1" id="sform" method="post" action="{{url('/')}}/admin/hotel/delete">
							<input name="ids[]" type="checkbox" value="{{$hval->id}}" class="checkbox">
						</form>
					</div>					
				  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>        
	  </div>
	</main>
     
 

	

@endsection