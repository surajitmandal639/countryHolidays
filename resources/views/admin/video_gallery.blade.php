
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
			<h3 class="tile-title text-info"> Videos</h3>
			<button class="btn btn-info m-2 p-1" type="button"  id="uploadBtn2"><i class = "fa fa-plus"> Add</i></button>
		</div>
		<div class="tile-body">
			
			<form action="{{url('/')}}/admin/gallery/video/add" class="dropzone d-none" id="vfrom">
			  <div class="fallback">
				<input name="file" type="file" multiple />
			  </div>
			</form>
			
		</div> 
		<div class="container mt-3">
			<div class="row" >
				@foreach($videos as $vval)				
				<div class="col mb-3 col-lg-4 position-relative vedio1" id="{{$vval->id}}">
					<a href="{{url('/')}}/admin/gallery/video/delete/{{$vval->id}}" ><i style="color:white" class="fa fa-trash position-absolute m-2 delete_button"></i></a>
					<video controls height="150px">
					  <source src="{{url('/')}}/public/upload_gallery/{{$vval->videos}}" type="video/mp4">
					</video>					
				</div>
				@endforeach	
			</div>
		</div>
	  </div>
	</div>
 </div>

</main>


<script>
$(document).ready(function(){
	$('#uploadBtn2').on('click', function(){
		$('#vfrom').toggleClass('d-none');
	});
});
</script>
<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();

});
</script>



<script>
let myDropzone = Dropzone({	
	paramName: "file", 
	maxFilesize: 256,
	parallelUploads: true,
	uploadMultiple: true, 
	addRemovelinks: true, 
	accept:function(file, done){
		if (file.name == "justinbieber.jpg"){
			done("Naha, you don't.");
		}else { 
			done();
		}
	}
});
myDropzone.on("complete", function(file,res) {
	consol.log(res);
  myDropzone.removeFile();
});


</script>

@endsection
