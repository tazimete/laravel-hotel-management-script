  <!-- nav -->
  <nav id="nav" class="nav-primary hidden-xs nav-vertical">
    <ul class="nav" data-spy="affix" data-offset-top="50">
      <li class="active"><a href="{{URL::to('/admin_panel/dashboard')}}"><i class="fa fa-dashboard fa-lg"></i><span>Dashboard</span></a></li>
      <li class="dropdown-submenu">
        <a href="{{URL::to('/')}}//admin_panel/user_list"><i class="fa fa-users fa-lg"></i><span> User </span></a>
        <ul class="dropdown-menu">
          <li><a href="{{URL::to('/')}}/admin_panel/user_list">All User</a></li>
          <li><a href="{{URL::to('/')}}/admin_panel/add_user_page">Add User</a></li>
        </ul>  
      </li>
	  <li class="dropdown-submenu">
        <a href="{{URL::to('/admin_panel/promo_tip_list')}}"><i class="fa fa-picture-o fa-lg"></i><span>Promotional Tips</span></a>
        <ul class="dropdown-menu">
          <li><a href="{{URL::to('/admin_panel/promo_tip_list')}}">All tips</a></li>
          <li><a href="{{URL::to('/admin_panel/add_promo_tip')}}">Add Tip</a></li>
        </ul>
      </li>
	  <li class="dropdown-submenu">
        <a href="{{URL::to('/admin_panel/halal_restaurant_list')}}"><i class="fa fa-plus-square fa-lg"></i><span>Restaurant</span></a>
        <ul class="dropdown-menu">
          <li><a href="{{URL::to('/admin_panel/halal_restaurant_list')}}">All Restaurants</a></li>
          <li><a href="{{URL::to('/admin_panel/halal_restaurant_add')}}">Add Restaurants</a></li>
        </ul>
      </li>
	  <li class="dropdown-submenu">
        <a href="{{URL::to('/admin_panel/amenities_review')}}"><i class="fa fa-qrcode fa-lg"></i><span>Amenities</span></a>
     </li>       
	  <li class="dropdown-submenu">
		<a href="{{URL::to('/admin_panel/setting_page')}}"><i class="fa fa-cog fa-lg"></i><span>Settings</span></a>
	  </li>
    </ul>
  </nav>
  <!-- / nav -->