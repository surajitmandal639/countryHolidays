@extends('layouts.front')
@section('title', @$title)
@section('content')

<section class="sub_header" id="bg_general">
        <div class="sub_header_content">
            <div class="animated fadeInDown ">			
                <h1>{{@$title}}</h1>	
				<form method="post" action="{{url('/')}}/register" enctype="">
					@csrf					
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<input name="name" id="email_newsletter_2"  type="text" value=""  placeholder="Your name" class="form-control" required>
							</div>
						</div>	
						<div class="col-lg-6">
							<div class="form-group">
								<input name="
								email" id="email_newsletter_2"  type="text" value=""  placeholder="Your mail or phone number" class="form-control" required>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<input name="password" id="email_newsletter_2"  type="password" value=""  placeholder="Your password" class="form-control" required>
							</div>
						</div>	
						
						<!-- <div class="col-lg-6">
							<div class="form-group">
								<input name="confrim_password" id="email_newsletter_2"  type="password" value=""  placeholder="Your confrim password" class="form-control" required>
							</div>
						</div> -->
					</div>
					
					<input type="submit" value="Save" class="btn_1 blue" id="submit-newsletter_2">
					<a href="{{url('/')}}/account" value="Resister" class="btn_1 white">allredy have an account ?</a>
				</form>
							
            </div>
        </div>
    </section><!-- End Section -->

@endsection