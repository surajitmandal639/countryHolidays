@extends('layouts.front')
@section('title', @$title)
@section('content')


<section class="sub_header" id="bg_general">
	<div class="sub_header_content">
		<div class="animated fadeInDown">
			<h1>{{@$title}}</h1>
			<!--<p>
			Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.
			</p>-->
		</div>
	</div>
</section><!-- End Section -->

<div id="position">
	<div class="container">
		<ul>
			<li><a href="{{url('/')}}">Home</a></li>
			<li>Contact Us</li>
		</ul>
	</div>
</div><!-- End Position -->

<div class="container margin_60">
	<div class="row">
		
		
		<div class="col-md-6">

			<div class="box_style_1" style="margin-bottom: 0">
				<form method="post" action="https://amantranresorts.co.in/contact" >
					<input type="hidden" name="_token" value="zfI0Ug309Py18sD3jc8Rtwx54T1yUpg9oEUzBiYj">					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Full Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="name_contact" name="name_contact" placeholder="Enter Name">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Email </label>
								<input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="Enter Email">
							</div>
						</div>
					</div>
					<!-- End row -->
					<div class="row">					
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Phone <span class="text-danger">*</span></label>
								<input type="text" id="phone_contact" name="phone_contact" class="form-control" placeholder="Enter Phone number">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Hotel</label>
								<select name="project" class="form-control">
									<option value="1">Office</option>
									<option value="c0x1Q2ZSK3hBRlEwOG5pbWVxRVpTUT09">Tarapith</option>
									<option value="T2ZseHpUbXNkOW5BMDFVVStnbnh3UT09">Digha</option>
									<option value="SERCQVJYT2hXNVIxc091aHZlaTJsZz09">Chilapata</option>
									<option value="SzV3UTRUVzhSaFlIemZpTTgxZkhMZz09">Rocky Island</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Message</label>
								<textarea id="message_contact" name="message_contact" class="form-control" placeholder="Write your message" style="height:85px;"></textarea>
							</div>
						</div>
					</div>
					<div class="row add_bottom_30">
						<div class="col-md-12">	
							<button type="submit" class="btn_1">Submit</button>	
						</div>
					</div>
				</form>
			</div><!-- End col-md-6 -->
		</div><!-- End col-md-6 -->
		
		<div class="col-md-6">
			<div class="box_style_1" style="margin-bottom: 0">
				<div class="row">
					<div class="col-md-12">
						<h3>Amantran Group</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">

						<h5>Address</h5>
						<p> R Trading Co. <br> 4th Floor, 4 Dr. Suresh Sarkar Road, Maulali, Kolkata, West Bengal - 700014</p>
						<h5>Telephone</h5>
						<p>
							<a href="tel:9804242722">9804242722 / Mr. Lokenath</a>
							<a href="tel:9831873222">9831873222 / Mr. Somnath</a>
						</p>
						<h5>Email</h5>
						<p>
							<a href="mailto:info@amantranresorts.co.in">info@amantranresorts.co.in </a>
						</p>
											</div>
					<div class="col-md-6 d-dm-none">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14738.013507368752!2d88.367608!3d22.560269!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb215957a22639254!2sAMANTRAN%20GROUP!5e0!3m2!1sen!2sin!4v1673795343129!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</div><!-- End col-md-8 -->
	</div><!-- End col-md-8 -->
	
	<hr class="border-top" />
	
	<div class="row">
		
		@foreach(hotel() as $hval)
		@if($hval->id !== 1)
		<div class="col-md-6">
			<div class="box_style_1">
				<div class="row">
					<div class="col-md-12">
						<h3>{{$hval->hotel_name}}</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">

						<h5>Address</h5>
						<p>{{$hval->address}}</p>
						<h5>Telephone</h5>
						<p>
							<a href="tel:{{$hval->phone}}">{{$hval->phone}}</a>
						</p>
						<h5>Email</h5>
						<p>
							<a href="mailto:tarapith@amantranresorts.co.in">tarapith@amantranresorts.co.in</a>
						</p>
											</div>
					<div class="col-md-6 d-dm-none">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14738.013507368752!2d88.367608!3d22.560269!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb215957a22639254!2sAMANTRAN%20GROUP!5e0!3m2!1sen!2sin!4v1673795343129!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>						
					</div>
				</div>
			</div>
		</div><!-- End col-md-8 -->
		@endif
		@endforeach
		
		
				

		
	</div><!-- End row -->
</div><!-- End Container -->

@endsection