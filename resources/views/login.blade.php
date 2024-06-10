@extends('layouts.front')
@section('title', @$title)
@section('content')
<style>
.newlogin > div{	
	padding: 0 35%;
}
</style>
<section class="sub_header" width="400px" id="bg_general">
        <div class="sub_header_content newlogin">
            <div class="animated fadeInDown" >
                <h1>{{@$title}}</h1>
				
				<form method="post" action="{{url('/')}}/account" enctype="multipart/form-data" >
					@csrf					
					
					<div class="form-group">
						<input name="email" id="email_newsletter_2"  type="text" value=""  placeholder="Your email or phone" class="form-control" required>
					</div>			
				
					<div class="form-group">
						<input name="password" id="email_newsletter_2"  type="password" value=""  placeholder="Your password" class="form-control" required>
					</div>			
					<input type="submit" value="login" class="btn_1 blue" id="submit-newsletter_2">
					<a href="{{url('/')}}/register" value="Register" class="btn_1 white">New users ?</a>
					<a href="{{ route('password.request') }}" value="Register" class="btn_1 white">Forget password ?</a>
				</form>
							
            </div>
        </div>
    </section><!-- End Section -->

@endsection