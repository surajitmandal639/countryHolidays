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
			<i class="fa fa-home"></i>
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
				  <th>Category</th>
                  <th>Name</th>
                  <th>Icon</th>                
                  <th>Description</th>
				  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
			  @php $i = 1; @endphp
			  @foreach($user as $uval)
                <tr>
                  <td>{{@$i++}}</td>
				  <td>{{$uval->category == 'admin'?'Admin':'User'}}</td>
				  <td>{{$uval->name}}</td>
				  
				  <td class="d-flex justify-content-center">
					<a href="{{url('/')}}/admin/user/status/{{$uval->id}}" class="btn btn-danger m-1">{{$uval->status == 'yes'?'Inactive':'Active'}}</a>
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