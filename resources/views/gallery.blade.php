@extends('layouts.front')
@section('title', @$title)
@section('content')

<section class="sub_header" id="bg_general">
        <div class="sub_header_content">
            <div class="animated fadeInDown">
                <h1>Gallery page</h1>
                <p>
                    Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.
                </p>
            </div>
        </div>
    </section><!-- End Section -->
    
    <div id="position">
        <div class="container">
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>{{@$title}}</li>
            </ul>
        </div>
    </div><!-- End Position -->
    
    <div class="container margin_60">
        <div class="main_title">
        	<span></span>
            <h2>Some images from travellers</h2>
            <p>
                 Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
            </p>
        </div>
        <hr>
        <div class="row magnific-gallery add_bottom_60 ">
			@foreach($image as $ival)
            <div class="col-md-4 col-sm-4">
                <a href="{{url('/')}}/public/upload_gallery/{{$ival->images}}" title="Photo title"><img src="{{url('/')}}/public/upload_gallery/{{$ival->images}}" alt="" class="img-responsive styled" width="350px"></a>
            </div>
			@endforeach
        </div><!-- End row -->
        
        <div class="main_title">
        	<span></span>
            <h2>Some videos from travellers</h2>
            <p>
                 Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
            </p>
        </div>
        <hr>
        <div class="row magnific">
			@foreach($video as $vval)
            <div class="col-md-4 col-sm-4">
                <a href="{{url('/')}}/upload_gallery/{{$vval->videos}}" class="video" title="Video Vimeo">
					<img src="{{url('/')}}/upload_gallery/{{$vval->videos}}" alt="Play " class="img-responsive styled">
				</a>
            </div>
            @endforeach
        </div><!-- End row -->
    </div><!-- End container -->
        
		

@endsection