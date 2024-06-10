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
   	<div id="map_decor"></div>
	<div class="container">
				<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Category</a></li>
				<li>Page active</li>
				</ul>
	</div>
</div><!-- End Position -->

    <div class="container margin_60">
    	<div class="row">
        	<div class="col-md-8">
            
            <div id="message-contact"></div>
				<form method="post" action="{{ route('password.email') }}" id="contactform">
					
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Email</label>
								<input type="email" id="email_contact" name="email_contact" class="form-control" placeholder="Enter Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Phone</label>
								<input type="text" id="phone_contact" name="phone_contact" class="form-control" placeholder="Enter Phone number">
							</div>
						</div>
					</div>
					
					<div class="row add_bottom_30">
						<div class="col-md-6">
                        	<div class="form-group">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
							<input type="submit" value="Submit" class="btn_1" id="submit-contact">
						</div>
					</div>
				</form>               
            </div><!-- End col-md-8 -->
            
            <div class="col-md-4">
            	
            </div><!-- End col-md-4 -->
        </div><!-- End row -->
    </div><!-- End Container -->
    

@endsection