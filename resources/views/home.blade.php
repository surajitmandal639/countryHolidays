@extends('layouts.front')
@section('title', @$title)
@section('content')

<!-- Slider -->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <!-- SLIDE  -->
				@foreach($slider as $sval)
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                    <!-- MAIN IMAGE -->
                    <img src="{{url('/')}}/public/upload_images/{{$sval->image}}" alt="slidebg1" data-lazyload="{{url('/')}}/public/upload_images/{{$sval->image}}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5;max-width: auto; max-height: auto; white-space: nowrap;">{{$sval->title}}
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div style="color:#ffffff; font-size:16px; text-shadow: 0 1px 1px rgba(0, 0, 0, 0.25); text-transform:uppercase">
                            {{$sval->description}}</div>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0" data-x="center" data-y="center" data-hoffset="0" data-voffset="70" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-linktoslide="next" style="z-index: 12;"><a href='{{url('/')}}/rooms' class="button_intro">View Rooms</a> <a href='' class=" button_intro outline">Activities</a>
                    </div>
                </li>
				@endforeach
                
			</ul>
           
        </div>
        <div id="general_decor"></div>
    </div>
    <!-- End Slider -->

	<div class="container margin_60 padd_bottom_20">
        <div class="main_title">
            <span></span>
            <h2>We love Country Holidays</h2>
            <p>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
            </p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="box_home">
                    <i class="icon_set_2_icon-104"></i>
                    <h3>Cozy and Charming rooms</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_home">
                    <i class="icon_set_2_icon-108"></i>
                    <h3>Relax in a beautiful contest</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_home">
                    <i class="icon_set_1_icon-40"></i>
                    <h3>Enjoy country side activities</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                    </p>
                </div>
            </div>
        </div><!-- End row -->
	</div><!-- End container -->
<!-- ROOMS -->    
	<div class="bg_gray add_bottom_60">
        <div class="container">
        <div class="row">
			@foreach($room_category as $rcval)
            <div class="col-md-4 col-sm-4">
                <div class="img_zoom">
                    <a href="room_details.html"><img src="{{url('/')}}/public/upload_images/{{$rcval->image}}" alt="" class="img-responsive"></a>
                </div>
                <h3>{{$rcval->name}} <span class="price_home">Rs {{@$rcval->sell_price}}<em>Per night</em></span></h3>
                <p>
                    {{Str::of($rcval->long_description)->limit(155)}}
                </p>
                <p>
                    <a href="{{url('/')}}/room_category/{{$rcval->id}}" class="btn_1">Read more</a>
                </p>
            </div>

			@endforeach
 
		</div><!-- End row -->
		<div class="d-flex" align="center">
			{!! $room_category->links() !!}
		</div>
        </div><!-- End container -->
		
	</div>
<!-- ENDROOMS -->
        
	<div class="container add_bottom_60">
        <div class="main_title add_bottom_45">
            <span></span>
            <h2>Other stuff you may consider</h2>
            <p>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
            </p>
        </div>
        <div class="row">
            <div class="col-md-8" id="strip_activities">
                <ul>
                    <li>
                    <img src="img/activities_1_thumb.jpg" alt="" class="img-circle styled">
                    <h4>Take a ride on a Horse</h4>
                    <p>
                        Ad cum movet fierent assueverit, mei stet legere ne. Mel at vide soluta, ut utamur antiopam inciderint sed. Ut iriure perpetua voluptaria has, vim postea denique in, mollis pertinax elaboraret sed in. Per no vidit timeam, quis omittam sed at. <a href="#" class="link_normal">Read more</a>
                    </p>
                    </li>
                    <li><img src="img/activities_2_thumb.jpg" alt="" class="img-circle styled">
                    <h4>Discover typical Food </h4>
                    <p>
                        Ad cum movet fierent assueverit, mei stet legere ne. Mel at vide soluta, ut utamur antiopam inciderint sed. Ut iriure perpetua voluptaria has, vim postea denique in, mollis pertinax elaboraret sed in. Per no vidit timeam, quis omittam sed at. <a href="#" class="link_normal">Read more</a>
                    </p>
                    </li>
                    <li><img src="img/activities_3_thumb.jpg" alt="" class="img-circle styled">
                    <h4>Learn to cook deliciuos food</h4>
                    <p>
                        Ad cum movet fierent assueverit, mei stet legere ne. Mel at vide soluta, ut utamur antiopam inciderint sed. Ut iriure perpetua voluptaria has, vim postea denique in, mollis pertinax elaboraret sed in. Per no vidit timeam, quis omittam sed at. <a href="#" class="link_normal">Read more</a>
                    </p>
                    </li>
                    <li><img src="img/activities_4_thumb.jpg" alt="" class="img-circle styled">
                    <h4>Farm activities</h4>
                    <p>
                        Ad cum movet fierent assueverit, mei stet legere ne. Mel at vide soluta, ut utamur antiopam inciderint sed. Ut iriure perpetua voluptaria has, vim postea denique in, mollis pertinax elaboraret sed in. Per no vidit timeam, quis omittam sed at. <a href="#" class="link_normal">Read more</a>
                    </p>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="box_style_1 text-center">
                    <p ><img src="img/best_price.png" alt=""></p>
                    <p>
                         Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris hendrerit ex sea. Duo legere evertitur an, pri hinc <strong>doctus definitiones</strong> an, vix id dicam putent. Ius ornatus instructior in.
                    </p>
                    <p>
                         Ad cum movet fierent assueverit, mei stet legere ne. Mel at vide soluta, ut utamur antiopam inciderint sed.
                    </p>
                </div><!-- End box_style_1 -->
                
                <a class="box_style_1 weahter" href="about.html">
                <i class="icon-light-up"></i> View Weahter forecast </a>
                <!-- End  weather-->
                
                <div id="banner">
                    <h3><span>-30% OFF</span>This week only for all rooms!</h3>
                </div><!-- End banner -->
                
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    
    <!-- START CNTAINER FLUID -->
	<div class="container-fluid">
        <div class="row">
            <div class="col-md-6 nopadding">
                <div class="features-bg">
                    <div class="features-img">
                    </div>
                </div>
            </div>
            <div class="col-md-6 nopadding">
                <div class="features-content">
                    <h3>"Enjoy spectacular countryside"</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                    </p>
                    <p>
                        <a href="#" class=" btn_1 white">Read more</a>
                    </p>
                </div>
            </div>
        </div>
    </div><!-- End container-fluid  -->
    






@endsection