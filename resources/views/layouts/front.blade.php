<!DOCTYPE html>
<html>



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="farm activities, itineraries, farm holidays, country holidays, bed and breakfast, hotel, country hotel" />
    <meta name="description" content="Country Holidays - Premium site template for a country accommodation.">
    <meta name="author" content="Ansonika">
    <title>@yield('title')-{{config('app.name')}}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{url('/')}}/public/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{url('/')}}/public/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{url('/')}}/public/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{url('/')}}/public/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{url('/')}}/public/img/apple-touch-icon-144x144-precomposed.png">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-qoS3310KDjHT4jJeY79rZBqGbWnJm7tDPL+F1X7aj9LA5Ifk3tS47fs3w6KSDii1" crossorigin="anonymous"> -->


    <!-- Google web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   
   	<!-- BASE CSS -->
	
    <link href="{{url('/')}}/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('/')}}/public/css/animate.min.css" rel="stylesheet">
   
    
    <link href="{{url('/')}}/public/css/responsive.css" rel="stylesheet">
    <link href="{{url('/')}}/public/css/fontello/css/icon_set_1.css" rel="stylesheet">
    <link href="{{url('/')}}/public/css/fontello/css/icon_set_2.css" rel="stylesheet">
    <link href="{{url('/')}}/public/css/fontello/css/fontello.css" rel="stylesheet">
    <link href="{{url('/')}}/public/css/magnific-popup.css" rel="stylesheet">  

    <!-- REVOLUTION SLIDER CSS -->
    <link href="{{url('/')}}/public/rs-plugin/css/settings.css" rel="stylesheet">
    <link href="{{url('/')}}/public/css/extralayers.css" rel="stylesheet">
	
	<!-- SPECIFIC CSS -->
    <link href="{{url('/')}}/public/css/slider-pro.min.css" rel="stylesheet">
	<link href="{{url('/')}}/public/css/date_time_picker.css" rel="stylesheet">
	
	<link href="{{url('/')}}/public/css/menu.css" rel="stylesheet">
	<link href="{{url('/')}}/public/css/style.css" rel="stylesheet">
	
	<!-- SweetAlert2 Css -->	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css">
	<!-- FIR MORE ICON -->
	
	<style>
	.the-icons {
	  font-size: 12px;
	  line-height: 28px;
	}
	.the-icons i{
	  font-size: 16px;
	}
	.codesOn .i-name {
	  display: none;
	}
	.codesOn .i-code {
	  display: inline;
	}
	.i-code {
	  display: none;
	  }
	</style>
    
    <script>
      function toggleCodes(on) {
        var obj = document.getElementById('icons');
        if (on) {
          obj.className += ' codesOn';
        } else {
          obj.className = obj.className.replace(' codesOn', '');
        }
      }
      
    </script>
	
</head>

<body>

	<div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- End Preload -->

	<div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <!-- Header================================================== -->
    <header>
        <div id="top_line">
            <div class="container">
				<ul id="top_links">
					<li><a href="#">En</a></li>
					<li><a href="#">Fr</a></li>
					<li><a href="#">Es</a></li>
				</ul>
				<a href="" id="link_bt">Purchase this template</a>
            </div><!-- End container-->
        </div><!-- End top line-->
        
        <div id="top_header">
        	<div class="container">
            	<div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div id="logo">
                        <a href="index-2.html"><img src="{{url('/')}}/public/img/logo.png" width="240" height="40" alt="CountryHolidays" data-retina="true"></a>
                    </div>
                </div>
                <nav class="col-md-8 col-sm-8 col-xs-8">
                    <a class="cmn-toggle-switch cmn-toggle-switch__rot  open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="{{url('/')}}/public/img/logo.png" width="240" height="40" alt="CountryHolidays" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
							<li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">HOTEL And RESHORTS <i class="icon-down-open-mini"></i></a>
                                <ul>
									@foreach(hotel() as $hval)
                                    <li><a href="{{url('/')}}/hotels/{{$hval->id}}">{{$hval->hotel_name}}</a></li>
									@endforeach
                                    
                                </ul>
                            </li>
							<li><a href="{{url('/')}}/hotels">Rooms</a></li>                            
                            <li><a href="{{url('/')}}/about">About Us</a></li>
							<li><a href="{{url('/')}}/gallery">Gallery</a></li>
							<li><a href="{{url('/')}}/contact">Contact Us</a></li>
							@php $check = Auth::check(); $user = Auth::user(); @endphp
					
							<li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">{{$check?$user->name:'Account'}} <i class="icon-down-open-mini"></i></a>
                                <ul>
									<li><a href="{{url('/')}}/profile/{{@$user->id}}">Profile</a></li>
									<li><a href="{{url('/')}}/{{$check?'logout':'account'}}">{{$check?'Logout':'Login'}}</a></li>  								                                    
                                </ul>
                            </li>
							
								
													                          
                        </ul>
                    </div><!-- End main-menu -->
                 
                </nav>
            </div>
            </div>
        </div>
    </header><!-- End Header -->

	<!-- START MAIN CONTENT -->
	@yield('content')
	<!-- END MAIN CONTENT -->
    
	<!-- START FOOTER -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3">
                    <h3>Contacts</h3>
                    <ul id="contact_details_footer">
                        <li>Route de Sablet 1023, Marseille<br>France 01923</li>
                        <li><a href="tel://004542344599">+45 423 445 99</a> / <a href="tel://004542344599">+45 423 445 99</a></li>
                        <li><a href="mailto:info@countryholidays.com">info@countryholidays.com</a></li>
                    </ul>  
                </div>
                <div class="col-md-2 col-sm-2">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Rooms</a></li>
                        <li><a href="#">Activities</a></li>
                        <li><a href="#">Contact us</a></li>
                         <li><a href="#">Gallery</a></li>
                    </ul>
                </div>                
                <div class="col-md-3 col-sm-3">
                    <h3>Change language</h3>
                   <ul>
                        <li><a href="#">English</a></li>
                        <li><a href="#">French</a></li>
                        <li><a href="#">Spanish</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3"  id="newsletter">
                    <h3>Newsletter</h3>
                    <p>Join our newsletter to keep be informed about offers and news.</p>
					<div id="message-newsletter_2"></div>
						<form method="post" action="http://www.ansonika.com/countryholidays/assets/newsletter.php" name="newsletter_2" id="newsletter_2">
                        <div class="form-group">
                            <input name="email_newsletter_2" id="email_newsletter_2"  type="email" value=""  placeholder="Your mail" class="form-control">
                          </div>
                            <input type="submit" value="Subscribe" class="btn_1 white" id="submit-newsletter_2">
                    	</form>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                        </ul>
                        <p>© CountryHolidays 2015</p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<!-- Common scripts -->
<script src="{{url('/')}}/public/js/jquery-1.11.2.min.js"></script>
<script src="{{url('/')}}/public/js/common_scripts_min.js"></script>
<script src="{{url('/')}}/public/js/functions.js"></script>
<script src="{{url('/')}}/public/assets//validate.js"></script>      

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script src="{{url('/')}}/public/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="{{url('/')}}/public/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{url('/')}}/public/js/revolution_func.js"></script>

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>

<!-- Specifi scripts -->
<script src="{{url('/')}}/public/js/mosaic.1.0.1.js"></script>
<script type="text/javascript">
	    jQuery(function ($) {
	        $('.cat-hover').mosaic({
	            animation: 'slide'		//fade or slide
	        });
	    });
</script>
<!-- Specific scripts -->
<script src="{{url('/')}}/public/js/jquery.sliderPro.min.js"></script>
<script type="text/javascript">
	$( document ).ready(function( $ ) {
		$( '#Img_carousel' ).sliderPro({
			width: 960,
			height: 500,
			fade: true,
			arrows: true,
			buttons: false,
			fullScreen: false,
			smallSize: 500,
			startSlide: 0,
			mediumSize: 1000,
			largeSize: 3000,
			thumbnailArrows: true,
			autoplay: false
		});
	});
</script>
<script src="{{url('/')}}/public/js/quantity-bt.js"></script>
<script src="{{url('/')}}/public/js/bootstrap-datepicker.js"></script>
<script>
var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
var checkin = $('#check_in').datepicker({
	
	todayHighlight: true,

    beforeShowDay: function (date) {
        return date.valueOf() >= now.valueOf();
    },
    autoclose: true

}).on('changeDate', function (ev) {
    if (ev.date.valueOf() > checkout.datepicker("getDate").valueOf() || !checkout.datepicker("getDate").valueOf()) {

        var newDate = new Date(ev.date);
        newDate.setDate(newDate.getDate() + 1);
        checkout.datepicker("update", newDate);

    }
    $('#check_out')[0].focus();
});


var checkout = $('#check_out').datepicker({
    beforeShowDay: function (date) {
        if (!checkin.datepicker("getDate").valueOf()) {
            return date.valueOf() >= new Date().valueOf();
        } else {
            return date.valueOf() > checkin.datepicker("getDate").valueOf();
        }
    },
    autoclose: true

}).on('changeDate', function (ev) {});
</script>

<!-- SweetAlert2 Script-->

<script>

const Toast = Swal.mixin({
  toast: true,
  position: 'center',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

@if(Session::has('success'))
	
	Toast.fire({
	  icon: 'success',
	  title: '{{Session::get('success')}}'
	})

@elseif(Session::has('error'))
	Toast.fire({
	  icon: 'error',
	  title: '{{Session::get('error')}}'
	})
@endif

</script>

</body>


</html>