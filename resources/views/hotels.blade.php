@extends('layouts.front')
@section('title', @$title)
@section('content')

<section class="sub_header" id="bg_general">
        <div class="sub_header_content">
            <div class="animated fadeInDown">
                <h1>All {{@$title}}</h1>
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
                    <li><a href="{{url('/')}}/hotels">Hotel & Reshorts</a></li>
                    <li>All</li>
                    </ul>
        </div>
    </div><!-- End Position -->

    <div class="container margin_60">
        <div class="row">			
            <div class="col-lg-9 col-md-8">
                <div class="row">
					@foreach($hotel as $hval)					
                    <div class="col-lg-6 col-md-12 col-sm-6">
						<section class="box_cat_wp">
							<div class="box_cat cat-hover">
								<a href="{{url('/')}}/hotels/{{$hval->id}}" class="cat-overlay">
								<h2>{{$hval->hotel_name}}</h2>
								<p>
								{{$hval->description}}....
								</p>
								<span class="box_cat_bt">Read more</span>
								</a>
								<div class="cat-img">
									<img src="{{url('/')}}/public/upload_images/{{$hval->image}}" alt="">
								</div>
							</div>
                        </section>
                    </div>   
					@endforeach
				</div><!-- End row -->
            </div><!-- End col-lg-9 -->
            
            <div class="col-lg-3 col-md-4">
            	<div class="box_style_1" id="general_facilities">
                	<h3>General facilities</h3>
                    <ul>
                    	<li><i class="icon_set_1_icon-86"></i>Free Wifi</li>
                        <li><i class="icon_set_2_icon-103"></i>Loundry service</li>
                        <li><i class="icon_set_2_icon-110"></i>Swimming pool</li>
                        <li><i class="icon_set_1_icon-58"></i>Restaurant</li>
                        <li><i class="icon_set_2_icon-106"></i>Safe box</li>
                    </ul>
                    <p>His <strong>civibus tacimates</strong> ex, an quo nominavi qualisque. In erant dissentiunt vel, dicit legimus docendi an nam. Te congue perfecto eos, aliquid corrumpit ea est, eam petentium repudiandae ad.</p>
                </div>
            </div><!-- End col-lg-3 -->
        </div><!-- End row -->
    </div><!-- End Container -->
    

<!-- Specifi scripts -->
<script src="js/mosaic.1.0.1.js"></script>
<script type="text/javascript">
	    jQuery(function ($) {
	        $('.cat-hover').mosaic({
	            animation: 'slide'		//fade or slide
	        });
	    });
</script>

@endsection