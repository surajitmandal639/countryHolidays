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
				<a href="{{url('/')}}/admin/slider/add"><h3 class="btn btn-info"><i class="fa fa-plus"> Add</i></h3></a>
			</div>
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
				  <th>Title</th>
                  <th>Description</th>
                  <th>Image</th>
				  <th>
					<div class="d-flex justify-content-center">
						<button class="btn m-1 d-none" id="delete_button"><i style="color:red; font-weight:bold; font-size:20px" class="fa fa-trash"></i></button>
						<button class="btn btn-light d-flex m-1" ><input class="mt-1" id="select_all" type="checkbox" value=""><span>All</span></button>
					</div>
				</th>
                </tr>
              </thead>
              <tbody>
			  @php $i = 1; @endphp
			  @foreach($slider as $sval)
                <tr>
                  <td>{{@$i++}}</td>
				  <td>{{$sval->title}}</td>
				  <td>{{$sval->description}}</td>				  		  
                  <td><img src="{{url('/')}}/public/upload_images/{{$sval->image}}" width="50px"/></td>	
				  
				  <td class="d-flex justify-content-center">
					<a href="{{url('/')}}/admin/slider/edit/{{$sval->id}}" class="btn btn-primary m-1">Edit</a>	
					<a class="btn m-1">
						<form id ="sform" action="{{url('/')}}/admin/slider/delete">
							<input name="ids[]" type="checkbox" value="{{$sval->id}}" class="checkbox">
						</form>	
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
     
 


@endsection