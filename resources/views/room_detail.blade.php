@extends('layouts.front')
@section('title', @$title)
@section('content')

<section class="sub_header" id="bg_room">
        <div class="sub_header_content">
            <div class="animated fadeInDown">
                <h1>{{@$room_category->name}}</h1>
                <p>
                    {{@$room_category->shortdescription}}
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
        	<div class="col-md-8" id="single_tour_desc">
            <div id="Img_carousel" class="slider-pro">
                <div class="sp-slides">
					@foreach($images as $ival)
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="{{url('/')}}/public/../src/css/images/blank.html" 
                        data-src="{{url('/')}}/public/upload_images/{{$ival->images}}" 
                        data-small="{{url('/')}}/public/upload_images/{{$ival->images}}" 
                        data-medium="{{url('/')}}/public/upload_images/{{$ival->images}}" 
                        data-large="{{url('/')}}/public/upload_images/{{$ival->images}}" 
                        data-retina="{{url('/')}}/public/upload_images/{{$ival->images}}">
                    </div>
					@endforeach
				{{-- @foreach($images as $ival)
                    <div class="sp-slide">
                        <img alt="" class="sp-image" src="{{url('/')}}/public/../src/css/images/blank.html" 
                        data-src="{{url('/')}}/public/upload_images/{{$ival->images}}" 
                        data-small="{{url('/')}}/public/upload_images/{{$ival->images}}" 
                        data-medium="{{url('/')}}/public/upload_images/{{$ival->images}}" 
                        data-large="{{url('/')}}/public/upload_images/{{$ival->images}}" 
                        data-retina="{{url('/')}}/public/upload_images/{{$ival->images}}">
                        <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%" data-show-transition="up" data-show-delay="400">
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
					@endforeach --}}
                   
          
                </div>
               <div class="sp-thumbnails">
					@foreach($images as $ival)
                    <img alt="" class="sp-thumbnail" src="{{url('/')}}/public/upload_images/{{$ival->images}}">
					@endforeach
                    
                </div>
            </div>
           <div id="single_room_feat">
		   @php $fid = json_decode($room_category->facility_id); @endphp
                <ul>
					@foreach($room_facility as $fval)
					@if(in_array($fval->id, $fid))
                    <li><i class="{{$fval->icon}}"></i>{{$fval->name}}</li>
					@endif
					@endforeach
                    
                </ul>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h3>Description</h3>
                </div>
                <div class="col-md-9">
                    <p>
					{{$room_category->long_description}}
                    </p>
                    <h4>Room facilities</h4>
                    <p>
					{{Str::of($room_category->room_facility_description)->limit(150);}}
                    </p>
                    <div class="row">
						@foreach($room_facility as $fval)
						@if(in_array($fval->id, $fid))
                        <div class="col-md-6 col-sm-6">
                            <ul class="list_ok m-0">
                                <li>{{$fval->short_description}}</li>                                
                            </ul>
                        </div>
						@endif
                        @endforeach
                    </div><!-- End row  -->
                    <h4>Room Prices</h4>
                     <!-- start pricing table -->
                        <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>Low (from 23/03 to 31/05)</td>
                            <td>140$</td>
                        </tr>
                        <tr>
                            <td>Middle (from 23/03 to 31/05)</td>
                            <td>180$</td>
                        </tr>
                        <tr>
                            <td>High (from 23/03 to 31/05)</td>
                            <td>200$</td>
                        </tr>
                        </tbody>
                        </table>
                </div><!-- End col-md-9  -->
            </div><!-- End row  -->

          	<hr>
            
            <div class="row">
                <div class="col-md-3">
                    <h3>Reviews</h3>
                    <a href="#" class="btn_1 add_bottom_15" data-toggle="modal" data-target="#myReview">Leave a review</a>
                </div>
                <div class="col-md-9">
                	<div id="score_detail"><span>7.5</span>Good <small>(Based on 34 reviews)</small></div><!-- End general_rating -->
                    <div class="row" id="rating_summary">
                    	<div class="col-md-6">
                        	<ul>
                            	<li>Position
                                    <div class="rating">
                                            <i class="icon-heart-8"></i><i class="icon-heart-8"></i><i class="icon-heart-8"></i><i class="icon-heart-empty-4"></i><i class="icon-heart-empty-4"></i>
                                    </div>
                                </li>
                                <li>Comfort
                                <div class="rating">
                                            <i class="icon-heart-8"></i><i class="icon-heart-8"></i><i class="icon-heart-8"></i><i class="icon-heart-8"></i><i class="icon-heart-empty-4"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                        	<ul>
                            	<li>Price
                                <div class="rating">
                                            <i class="icon-heart-8"></i><i class="icon-heart-8"></i><i class="icon-heart-8"></i><i class="icon-heart-empty-4"></i><i class="icon-heart-empty-4"></i>
                                    </div>
                                </li>
                                <li>Quality
                                <div class="rating">
                                            <i class="icon-heart-8"></i><i class="icon-heart-8"></i><i class="icon-heart-8"></i><i class="icon-heart-8"></i><i class="icon-heart-empty-4"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!-- End row -->
                    <hr>
                    <div class="review_strip_single">
                        <img src="{{url('/')}}/public/img/avatar1.jpg" alt="" class="img-circle">
                        <small> - 10 March 2015 -</small>
                        <h4>Jhon Doe</h4>
                        <p>
                             "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                        </p>
                        <div class="rating">
                            <i class="icon-heart-8"></i><i class="icon-heart-8"></i><i class="icon-heart-8"></i><i class="icon-heart-empty-4"></i><i class="icon-heart-empty-4"></i>
                        </div>
                    </div><!-- End review strip -->
                    
                    <div class="review_strip_single">
                        <img src="{{url('/')}}/public/img/avatar2.jpg" alt="" class="img-circle">
                        <small> - 10 March 2015 -</small>
                        <h4>Jhon Doe</h4>
                        <p>
                             "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                        </p>
                        <div class="rating">
                            <i class="icon-heart-8"></i><i class="icon-heart-8"></i><i class="icon-heart-8"></i><i class="icon-heart-empty-4"></i><i class="icon-heart-empty-4"></i>
                        </div>
                    </div><!-- End review strip -->
                    
                    <div class="review_strip_single last">
                        <img src="{{url('/')}}/public/img/avatar3.jpg" alt="" class="img-circle">
                        <small> - 10 March 2015 -</small>
                        <h4>Jhon Doe</h4>
                        <p>
                             "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
                        </p>
                        <div class="rating">
                            <i class="icon-heart-8"></i><i class="icon-heart-8"></i><i class="icon-heart-8"></i><i class="icon-heart-empty-4"></i><i class="icon-heart-empty-4"></i>
                        </div>
                    </div><!-- End review strip -->
                </div>
            </div>
            </div><!-- End col-md-8 -->
            
            <div class="col-md-4">
            <div class="box_style_1" id="book_in">
                	<h3>Check availability</h3> <!-- http://www.ansonika.com/countryholidays/assets/check_avail.php -->
                    <div id="message-booking"></div>
                    <form role="form" method="post" action="" id="check_avail" autocomplete="off">
                    	<div class="row">
                        	<div class="col-md-6 col-sm-6 col-xs-6">
                            	<div class="form-group">
                                	<label>Check in</label>
                            	   <input class="date-pick form-control" data-date-format="M d, D" type="text" id="check_in" name="check_in" placeholder="Check in">
                                   <span class="input-icon"><i class=" icon-calendar"></i></span>
                                   </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                            	<div class="form-group">
                                	<label>Check out</label>
                            	   <input class="date-pick form-control" data-date-format="M d, D" type="text" id="check_out" name="check_out" placeholder="Check out">
                                   <span class="input-icon"><i class=" icon-calendar"></i></span>
                               </div>
                            </div>
                        </div><!-- End row -->
                        <div class="row">
                        	<div class="col-md-6 col-sm-6 col-xs-6">
                            	<div class="form-group">
                                <label>Adults</label>
                            	   <div class="qty-buttons">
                                        <input type="button" value="-" class="qtyminus" name="adults">
                                        <input type="text" name="adults" id="adults" value="" class="qty form-control" placeholder="0">
                                        <input type="button" value="+" class="qtyplus" name="adults">
                                    </div>
                                   </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                            	<div class="form-group">
                                <label>Children</label>
                            	    <div class="qty-buttons">
                                        <input type="button" value="-" class="qtyminus" name="children">
                                        <input type="text" name="children" id="children"  value="" class="qty form-control" placeholder="0">
                                        <input type="button" value="+" class="qtyplus" name="children">
                                    </div>
                               </div>
                            </div>
                        </div><!-- End row -->
           				<div class="row">
                        	<div class="col-md-12">
                            	<div class="form-group">
                                	<label>Room type</label>
                            	 		<select class="form-control" name="room_type" id="room_type">
                                        	<option value="">Select room type</option>
                                            <option value="Single Room">Single Room</option>
                                            <option value="Double Room">Double Room</option>
                                            <option value="Luxury Double Room">Luxury Double Room</option>
                                        </select>
                                   </div>
                              </div>
                              <div class="col-md-12 col-sm-6">
                                   <div class="form-group">
                                	<label>Name</label>
                            	 		<input type="text" class="form-control" name="name_booking" id="name_booking" placeholder="Name and Last name">
                                   </div>
                                   </div>
                                   <div class="col-md-12 col-sm-6">
                                   <div class="form-group">
                                	<label>Email</label>
                            	 		<input type="text" class="form-control" name="email_booking" id="email_booking" placeholder="Your email">
                                   </div>
                                   </div>
                                   <div class="col-md-12 col-sm-12">
                                   <div class="form-group">
                                   <input type="submit" value="Book now" class="btn_full" id="submit-booking">
                                   </div>
                                   </div>
                             </div>
                        </form>
                </div>
                
            	<div class="box_style_1" id="general_facilities">
                	<h3>General facilities</h3>
                    <ul>
						@foreach($gen_facility as $fval)
						@if(in_array($fval->id, $fid))
                    	<li><i class="{{$fval->icon}}"></i>{{$fval->name}}</li>
						@endif
						@endforeach
                    </ul>
                    <p>{{@$room_category->genaral_facility_description}}</p>
                </div>
                
                <div class=" box_style_2">
                    <i class="icon_set_1_icon-90"></i>
                    <h4>Need help? Call us</h4>
					@foreach(hotel() as $hval)
					@if($hval->id == $room_category->hotel_id)
                    <a href="tel://{{$hval->phone}}" class="phone">+91 {{$hval->phone}}</a>
					@endif
					@endforeach
                    <small>Monday to Friday 9.00am - 7.30pm</small>
                </div>
            </div><!-- End col-md-4 -->
        </div><!-- End row -->
    </div><!-- End Container -->
    

@endsection