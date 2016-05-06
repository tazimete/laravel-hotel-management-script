 

		<div class="main">
			<div class="container">
				<div class="sidebar">
					<div class="sidebar-sub">
						<div class="sidebar-inner matchHeight">
							<div class="sb-logo text-center">
								<a href="{{URL::to('/')}}/dashboard">
									<span class="thumbnail-circle">
										<img src="<?php if(isset($property_options[0])){echo Url::asset('property-images')."/".$property_options[0]->property_logo;} else{echo Url::asset('images/upload_logo.jpg');}?>" width="66" height="47" alt="Hilton London Metropole" />
									</span>
									<span class="logo-text">Hilton London Metropole</span>
								</a>
							</div>            
							<ul class="nav nav-list">
								<li><a href="{{URL::to('/')}}/amenities">Amenities</a></li>
								<li class="active"><a href="{{URL::to('/')}}/dashboard">Praying Schedule</a></li>
								<li><a href="{{URL::to('/')}}/halal-restaurant">Halal Restaurants</a></li>
								<li><a href="#">Mosque Nearby</a></li>
								<li><a href="{{URL::to('/')}}/marketing">Marketing</a></li>
								<li><a href="{{URL::to('/')}}/promotional-tips">Promotional Tips</a></li>
								<li><a href="{{URL::to('/')}}/request-certificate">Certificate Request</a></li>
								<li><a href="{{URL::to('/')}}/setting">Settings</a></li>
							</ul>
						</div>
					</div>
				</div>