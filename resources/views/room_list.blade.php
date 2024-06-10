@extends('layouts.front')
@section('title', @$title)
@section('content')

<section class="sub_header" id="bg_room">
	<div class="sub_header_content">
		<div class="animated fadeInDown">
			<h1>All rooms</h1>
			<p>
				Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.
			</p>
		</div>
	</div>
</section><!-- End Section -->

<div id="position">
	<div class="container">
				<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Rooms</a></li>
				<li>{{@$title}}</li>
				</ul>
	</div>
</div><!-- End Position -->

<div class="container margin_60">
	<div class="row">
		<div class="col-lg-9 col-md-8">
			@foreach($room_category as $rcval)
	
			<div class="strip_all_rooms_list wow fadeIn" data-wow-delay="0.1s">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="img_list">
							<a href="room_details.html"><img src="{{url('/')}}/public/upload_images/{{@$rcval->image}}" alt=""></a>
						</div>
					</div>
					<div class="clearfix visible-xs-block">
					</div>
					<div class="col-lg-5 col-md-6 col-sm-6">
						<div class="rooms_list_desc">
							<h3><strong>{{@$rcval->name}}</strong></h3>
							<p>
								{{ Str::of($rcval->long_description)->limit(200) }}
							</p>
							@php $fid = json_decode(@$rcval->facility_id); @endphp
							<ul class="add_info">
								@foreach($facility as $key=>$fval)
								@if(in_array($fval->id, $fid))
								<li>
								<a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="{{$fval->short_description}}"><i class="{{$fval->icon}}"></i></a>
								</li>
								@endif	
								@php
									if($key==5){
										break;
									}
								@endphp
								@endforeach
							</ul>
							
						</div>
					</div>
					<div class="col-lg-3 col-md-2 col-sm-2">
						<div class="price_list">
							<div>
								<sup>Rs.</sup>{{$rcval->sell_price}}*<span class="normal_price_list">Rs. {{$rcval->base_price}}</span><small>*Pax/Per night</small>
								<p>
									<a href="{{url('/')}}/room_category/{{$rcval->id}}" class="btn_1">Details</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div><!--End strip -->
            @endforeach
			
		</div><!-- End col-lg-9 -->
        
		<div class="col-lg-3 col-md-4">
			<div class="box_style_1" id="general_facilities">
				<h3>General facilities</h3>
				<ul>
					<li><i class="icon_set_1_icon-86"></i>Free Wifi</li>
					<li><i class="icon_set_2_icon-103"></i>Loundry service</li>
					<li><i class="icon_set_2_icon-110"></i>Swimming pool</li>
					<li><i class="icon_set_1_icon-58"></i>Restaurant</li>
					<li><i class="icon_set_1_icon-27"></i>Parking</li>
				</ul>
				<p>
					His <strong>civibus tacimates</strong> ex, an quo nominavi qualisque. In erant dissentiunt vel, dicit legimus docendi an nam. Te congue perfecto eos, aliquid corrumpit ea est, eam petentium repudiandae ad.
				</p>
			</div>
			<div class=" box_style_2">
				<i class="icon_set_1_icon-90"></i>
				<h4>Need help? Call us</h4>
				<a href="tel://004542344599" class="phone">+45 423 445 99</a>
				<small>Monday to Friday 9.00am - 7.30pm</small>
			</div>
		</div><!-- End col-lg-3 -->
	</div><!-- End row -->
</div><!-- End Container -->
    

@endsection