
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>{{config('app.name')}}-{{@$title}}</title>
	<link rel="icon" type="image/png" href="{{url('/')}}/public/ScriptoTschLogo.jpg">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/admin/css/main.css">
	<link href="{{url('/')}}/public/css/fontello/css/icon_set_1.css" rel="stylesheet">
	<link href="{{url('/')}}/public/css/fontello/css/icon_set_2.css" rel="stylesheet">
	<link href="{{url('/')}}/public/css/fontello/css/fontello.css" rel="stylesheet">
	 
    <!-- Font-icon css-->	
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">		
	<!-- Select2 Css -->
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<!-- SweetAlert2 Css -->	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.1/dist/sweetalert2.min.css">
	<!-- DROPZONE -->	
	<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
	
	<!-- boostrap
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	 -->
	 
	<script src="{{url('/')}}/public/admin/js/jquery-3.3.1.min.js"></script>
	
	
	
	
<style>
.delete_button {
  display: none;
}

.vedio1:hover .delete_button {
  display: block;
  background:red;
  border-radius:5px;
}

</style>

  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
	
    <header class="app-header"><a class="app-header__logo" href="{{url('/')}}">{{config('app.name')}}<i class="ri-arrow-down-s-line"></i></a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="{{url('/')}}/profile"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="{{url('/')}}/admin/logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>	
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    
	@include('admin.sidebar')	
	
	<!-- @include('admin.flash_message') -->
	
	@yield('content')
	
	
	
	<!-- Essential javascripts for application to work-->
	
    <script src="{{url('/')}}/public/admin/js/popper.min.js"></script>
    <script src="{{url('/')}}/public/admin/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/public/admin/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{url('/')}}/public/admin/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{url('/')}}/public/admin/js/plugins/chart.js"></script>
	<!-- Data table plugin-->
    <script type="text/javascript" src="{{url('/')}}/public/admin/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/public/admin/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
	<!-- Select2 Js -->
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<!-- SweetAlert2 JS -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.1/dist/sweetalert2.min.js"></script>
	<!-- dropdown -->
	<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    
<!--	
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script> -->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>


<!-- FOR SAVE PARPOUS -->
<script>
    $(document).on('click', '.save_btn', function(e) {
		console.log(101);
		e.preventDefault();
		var form =  $(this).closest("form");
		Swal.fire({
		  title: 'Do you want to save a new data?',
		  showCancelButton: true,
		  confirmButtonText: 'Save',
		}).then((result) => {
		  /* Read more about isConfirmed, isDenied below */
		  if (result.isConfirmed) {
			form.submit();
		  } 
		});
    });
</script>

<!-- xyz EDIT -->
<script>
    $(document).on('click', '.update_btn', function(e) {
		console.log(101);
		e.preventDefault();
		var form =  $(this).closest("form");
		Swal.fire({
		  title: 'Do you want to save the changes?',
		  showCancelButton: true,
		  confirmButtonText: 'Save',
		}).then((result) => {
		  /* Read more about isConfirmed, isDenied below */
		  if (result.isConfirmed) {
			form.submit();
		  } 
		});
    });
</script>
	
	<!-- FOR ALL TYPE OF SUCCESS , ERORR MESSAGES -->
	
<script>
@if(Session::has('success'))
	Swal.fire({
	  icon: 'success',
	  title: 'Well Done',
	  text: '{{Session::get('success')}}',
	  
	})
@endif

@if(Session::has('error'))
	Swal.fire({
	  icon: 'error',
	  title: 'Oops...',
	  text: '{{Session::get('error')}}'	  
	})
@endif
</script>

	<!-- FOR CHECK BOX IN TABLES -->
<script>
	$('.checkbox').on('click', function(){
		$('#delete_button').removeClass('d-none');
	});
	
    $('#select_all').click(function() {
		$('#delete_button').removeClass('d-none');
        $('.checkbox').prop('checked', $(this).prop('checked'));
    });
</script>

	<!-- FOR DELETE POURPOUS -->
<script>
   
    $(document).ready(function() {
        $('#delete_button').click(function(e) {	
            e.preventDefault();
			var url = $('#sform').attr('action');
            var ids = $('input[name="ids[]"]:checked').map(function(){
                return $(this).val();
            }).get();
			Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {			
            if (result.isConfirmed) {
			
				$.ajax({						
					type: "POST",					
					url: url,
					data: {	ids: ids },
					success: function(data) {
						// Handle success response
						console.log(data);
						if (data.success == true) {							
							Swal.fire({
								title: 'Success',
								text: 'Your operation was successful',
								icon: 'success',
								confirmButtonText: 'OK'
							}).then(() => {								
								window.location.reload();
							});
						}else{
							Swal.fire({
							title: 'Opps!!',
							text: 'Something went wrong',
							icon: 'erorr',
							confirmButtonText: 'OK'
							}).then(() => {
								window.location.reload();
							});
						}
					},
					error: function(xhr, status, error) {
						// Handle error response
					}
				});
			}
            
        });
		});
	});
</script>

<script>

const Toast = Swal.mixin({
  toast: true,
  position: 'top',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

@if(Session::has('message'))
	
	Toast.fire({
	  icon: 'success',
	  title: '{{Session::get('message')}}'
	})
	
@endif

</script>

<!-- select2 -->
<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
	
  </body>
</html>