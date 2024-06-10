<aside class="app-sidebar">
  <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{url('/')}}/public/uplod_images/{{-- auth()->user()->image --}}" width="50px" alt="User Image">
	<div>
	  <p class="app-sidebar__user-name">surajit {{-- auth()->user()->name --}}</p>
	  <p class="app-sidebar__user-designation"> web devloper {{-- auth()->user()->designation --}}</p>
	</div>
  </div>
  
  <?php  
	$slider=array(url('/').'/admin/slider/add',url('/').'/admin/slider/list');
	$room_cat=array(url('/').'/admin/room_category/add',url('/').'/admin/room_category/list');
	$facility=array(url('/').'/admin/facility/add',url('/').'/admin/facility/list');
	$review=array(url('/').'/admin/review/add',url('/').'/admin/review/list');
	$gallery=array(url('/').'/admin/gallery/image',url('/').'/admin/gallery/video');
	
 ?>

  <ul class="app-menu">
	<li><a class="app-menu__item {{ (request()->url() == url('/').'/admin/dashboard') ? 'active' : '' }}" href="{{url('/')}}/admin/dashboard"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label"> Dashboard</span></a>
	</li>
	<li><a class="app-menu__item {{ (request()->url() == url('/').'/admin/hotel/list') ? 'active' : '' }}" href="{{url('/')}}/admin/hotel/list"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label"> Hotel And Resorts</span></a>
	</li>
	<li class="treeview {{ in_array(request()->url(), $slider) ? 'is-expanded' : '' }} "><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-server"></i><span class="app-menu__label"> Slider</span><i class="treeview-indicator fa fa-angle-right"></i></a>
	  <ul class="treeview-menu">
		<li><a class="treeview-item {{ request()->url() == url('/').'/admin/slider/add' ? 'active' : '' }}" href="{{url('/')}}/admin/slider/add"><i class="icon fa fa-circle-o"></i> Slider Add</a></li>
		<li><a class="treeview-item {{ request()->url() == url('/').'/admin/slider/list' ? 'active' : '' }}" href="{{url('/')}}/admin/slider/list" rel="noopener"><i class="icon fa fa-circle-o"></i> Slider List</a></li>		
	  </ul>	  
	</li>
	
	<li class="treeview {{ in_array(request()->url(),$room_cat) ? 'is-expanded' : '' }} "><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-server"></i><span class="app-menu__label">Room Category</span><i class="treeview-indicator fa fa-angle-right"></i></a>
	  <ul class="treeview-menu">
		<li><a class="treeview-item {{ request()->url() == url('/').'/admin/room_category/add' ? 'active' : '' }}" href="{{url('/')}}/admin/room_category/add"><i class="icon fa fa-circle-o"></i> Room Category Add</a></li>
		<li><a class="treeview-item {{ (request()->url() == url('/').'/admin/room_category/list') ? 'active' : '' }}" href="{{url('/')}}/admin/room_category/list" rel="noopener"><i class="icon fa fa-circle-o"></i> Room Category List</a></li>		
	  </ul>	  
	</li>
	
	<li class="treeview {{ in_array(request()->url(),$facility) ? 'is-expanded' : '' }} "><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-server"></i><span class="app-menu__label"> Facilities</span><i class="treeview-indicator fa fa-angle-right"></i></a>
	  <ul class="treeview-menu">
		<li><a class="treeview-item {{ (request()->url() == url('/').'/admin/facility/add') ? 'active' : '' }}" href="{{url('/')}}/admin/facility/add"><i class="icon fa fa-circle-o"></i> Facilities Add</a></li>
		<li><a class="treeview-item {{ (request()->url() == url('/').'/admin/facility/list') ? 'active' : '' }}" href="{{url('/')}}/admin/facility/list"><i class="icon fa fa-circle-o"></i> Facility List</a></li>	
	  </ul>	  
	</li>
	
	<li class="treeview {{ in_array(request()->url(),$review) ? 'is-expanded' : '' }} "><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-server"></i><span class="app-menu__label"> Reviews</span><i class="treeview-indicator fa fa-angle-right"></i></a>
	  <ul class="treeview-menu">
		<li><a class="treeview-item {{ (request()->url() == url('/').'/admin/review/add') ? 'active' : '' }}" href="{{url('/')}}/admin/review/add"><i class="icon fa fa-circle-o"></i> Review Add</a></li>
		<li><a class="treeview-item {{ (request()->url() == url('/').'/admin/review/list') ? 'active' : '' }}" href="{{url('/')}}/admin/review/list" rel="noopener"><i class="icon fa fa-circle-o"></i> Review List</a></li>		
	  </ul>	  
	</li>
	
	<li class="treeview {{ in_array(request()->url(),$gallery) ? 'is-expanded' : '' }} "><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-server"></i><span class="app-menu__label"> Gallery</span><i class="treeview-indicator fa fa-angle-right"></i></a>
	  <ul class="treeview-menu">
		<li><a class="treeview-item {{ (request()->url() == url('/').'/admin/gallery/image') ? 'active' : '' }}" href="{{url('/')}}/admin/gallery/image"><i class="icon fa fa-circle-o"></i> Images</a></li>
		<li><a class="treeview-item {{ (request()->url() == url('/').'/admin/gallery/video') ? 'active' : '' }}" href="{{url('/')}}/admin/gallery/video" rel="noopener"><i class="icon fa fa-circle-o"></i> Videos</a></li>		
	  </ul>	  
	</li>
	
	<li><a class="app-menu__item {{ (request()->url() == url('/').'/admin/user/list') ? 'active' : '' }}" href="{{url('/')}}/admin/user/list"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label"> Users</span></a>
	</li>
	 
  </ul>
</aside>
