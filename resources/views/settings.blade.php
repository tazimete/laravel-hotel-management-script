
	@include('header')
	@include('sidebar')
		
		<div class="main">
			<div class="container">
				<div class="widecolumn widecolumn-default">
					<div class="widecolumn-sub">
						<div class="secondary-column matchHeight">
							<div class="secondary-column-inner">
								<div class="secondary secondary-top">
									<div class="secondary-sub">
										<div class="secondary-inner">
											<div class="panel-title-heading clearfix">
												<h2 class="panel-title">My Account</h2>
												<p><em>This is where you can make all the needed settings for your Account</em></p>
											</div>
											<div class="error-list-container"> 
												@if(session('success_message'))
													<div class="message-list success-message">
														{{session('success_message')}}
													</div>
												@endif
												@if(session('failed_message'))
													<div class="message-list failed-message">
														{{session('failed_message')}}
													</div>
												@endif               
											                          
												@if (count($errors) > 0)
													<div class="error-list">
														<ul>
															@foreach ($errors->all() as $error)
																<li class="failed-message">{{ $error }}</li>
															@endforeach
														</ul>
													</div>
												@endif
											</div>
										</div>
									</div>
								</div>         
								
								<!--Property Form-->
								<form action="{{URL::to('/')}}/setting/update_property_option" method="POST" enctype="multipart/form-data" id="tripfez-setting-form">  <!--data-validate="parsley"-->
									{!! csrf_field() !!} 
								<div class="secondary">
									<div class="secondary-sub">
										<div class="secondary-inner clearfix">
											<div class="panel-heading">
												<h3 class="sub-title">Property Profile</h3>
											</div>  
											<div class="form-content">
												<div class="form-group">
													 <label class="control-label">Property Name <span>*</span></label>
													 <div class="form-field">
														<input class="form-control" type="text" name="property-name" value="<?php if(isset($property_options[0])) {echo $property_options[0]->property_name; } ?>"  placeholder="Hilton London Metropole"/> <!--data-required="true"-->
													 </div>
												</div><!-- /.form-group -->
												<div class="form-group">
													 <label class="control-label">Property Logo <span>*</span></label>
													 <div class="form-field">
														<div class="upload-logo">
															<div class="upload-image">
																<img src="<?php if(isset($property_options[0])){echo Url::asset('property-images')."/".$property_options[0]->property_logo;} else{echo Url::asset('images/upload_logo.jpg');}?>" width="86" height="86" alt="Logo" />
															</div>
															<div class="shape">
																<input id="upload" name="upload" type="file"/>
																<p><a href="" id="upload_link"><span>Upload logo</span> </a>or drag and drop it here</p>
															</div>
														</div>
													 </div>
												</div><!-- /.form-group -->
												<div class="form-group">
													 <label class="control-label">Twitter Name <span>*</span></label>
													 <div class="form-field">
														<input class="form-control" type="text" name="twitter-name" value="<?php if(isset($property_options[0])) {echo $property_options[0]->property_twitter_url; } ?>"/>
													 </div>
												</div><!-- /.form-group -->
												<div class="form-group">
													 <label class="control-label">TripAdvisor Profile URL <span>*</span></label>
													 <div class="form-field">
														<input class="form-control" type="text" name="property-tripadvisor-url" value="<?php if(isset($property_options[0])) {echo $property_options[0]->property_tripadvisor_url; } ?>"/>
													 </div>
												</div><!-- /.form-group -->
											</div>
										</div>
									</div>
								</div><!-- /.secondary -->
								<div class="secondary">
									<div class="secondary-sub">
										<div class="secondary-inner clearfix">
											<div class="panel-heading">
												<h3 class="sub-title">Property Contact Details</h3>
											</div>  
											<div class="form-content">
												<div class="form-group">
													<label class="control-label">Legal Property Name <span>*</span></label>
													<div class="form-field">
														<input class="form-control" type="text" name="legal-property-name" value="<?php if(isset($property_options[0])) {echo $property_options[0]->legal_property_name; } ?>" placeholder="Hilton London Metrop"/> <!--data-required="true"-->
														<div class="q-box">
															<i class="icon icon-info icon-info-right" title="This contact information will be give to your customers after a booking. It also serves as your billing address."></i>
														</div>
													</div>
												</div><!-- /.form-group -->
												<div class="form-group">
													<label class="control-label">Street Address <span>*</span></label>
													<div class="form-field">
														<input class="form-control" type="text" name="street-address" value="<?php if(isset($property_options[0])) {echo $property_options[0]->street_address; } ?>" placeholder="Level 28, The Gardens South Tower" />
													</div>
												</div><!-- /.form-group -->
												<div class="form-group">
													<label class="control-label">Suffix <span>*</span></label>
													<div class="form-field">
														<input class="form-control" type="text" name="suffix" value="<?php if(isset($property_options[0])) {echo $property_options[0]->suffix; } ?>" placeholder="Mid Valley" />
													</div>
												</div><!-- /.form-group -->
												<div class="form-group">
													<label class="control-label">City <span>*</span></label>
													<div class="form-field">
														<input class="form-control city" type="text" name="city" id="tripfez_autocomplete_city" value="<?php if(isset($property_options[0])) {echo $property_options[0]->city; } ?>" />
														<input class="form-control city-lat" type="hidden" name="city-lat" id="city-lat" value="<?php if(isset($property_options[0])) {echo $property_options[0]->city_lat; } ?>" />
														<input class="form-control city-lng" type="hidden" name="city-lng" id="city-lng" value="<?php if(isset($property_options[0])) {echo $property_options[0]->city_lng; } ?>" />
													</div>
												</div><!-- /.form-group -->
												<div class="form-group">
													<label class="control-label">Postal Code <span>*</span></label>
													<div class="form-field">
														<input class="form-control" type="text" name="postal-code" value="<?php if(isset($property_options[0])) {echo $property_options[0]->postal_code; } ?>" placeholder="59200" />
													</div>  
												</div><!-- /.form-group -->
												<div class="form-group">
													<label class="control-label">State/Region <span>*</span></label>
													<div class="form-field">
														<input class="form-control" type="text" name="state" value="<?php if(isset($property_options[0])) {echo $property_options[0]->state_region; } ?>" placeholder="state"/>
													</div>
												</div><!-- /.form-group -->
												<div class="form-group">
													<label class="control-label">Country <span>*</span></label>
													<div class="form-field">
														<select name="country">
															<option value="Malaysia">Malaysia</option>
														</select>
													</div>
												</div><!-- /.form-group -->
												<div class="form-group">
													<label class="control-label">Phone <span>*</span></label>
													<div class="form-field">
														<input class="form-control" type="text" name="phone" value="<?php if(isset($property_options[0])) {echo $property_options[0]->postal_code; } ?>" placeholder="+60356113423" />
													</div>
												</div><!-- /.form-group -->
												<div class="form-group">
													<label class="control-label">Fax</label>
													<div class="form-field">
														<input class="form-control" type="text" name="fax" value="<?php if(isset($property_options[0])) {echo $property_options[0]->fax; } ?>" />
													</div>
												</div><!-- /.form-group -->
												<div class="form-group">
													<label class="control-label">Locate Your Property  </label>
													<div class="form-field ">
														<!-- <img src="{{URL::asset('images/google_map_sm.jpg')}}" width="400" height="400" alt="Map" /> -->
														<div id="map" width="400" height="400"></div>
													</div>
												</div><!-- /.form-group -->
												<div class="form-field btn-container">
													<input type="submit" class="btn-form" value="Save Changes"/>
												</div>   
											</div>
										</div>   
									</div>            
								</div><!-- /.secondary -->
								</form>
								<!--Administrator form -->
								<form action="{{URL::to('/')}}/user/update_user" method="get" id="trpfez-setting-user-form"> 
									{!! csrf_field() !!}
								<div class="secondary">
									<div class="secondary-sub">
										<div class="secondary-inner clearfix">
											<div class="panel-heading">
												<h3 class="sub-title">
												<?php 
													if(isset($user)){ 
														if($user->title == 1){
															$title = 'Mr.';
														}else if($user->title == 2){
															$title = 'Mrs.';
														}
														echo 'Administrator -'.$title.' '.$user->first_name.' '.$user->last_name;
													}else{
														echo 'Administrator — Mr. Adrian Smith';
													}
												?>
												</h3>
											</div>
											<div class="form-content">
												<div class="form-group">
													<label class="control-label">Title <span>*</span></label>
													<div class="form-field">
													<?php 	
															/*@if(Auth::user()->title == 1)*/
															
															if(isset($user)){
																$title = (int)$user->title;
																if($title == 1 ){
																	$selected1 = true;
																	$selected2 = false;
																}else if($title == 2){
																	$selected1 = false;
																	$selected2 = true;
																}   
															}else{
																$selected1 = false;
																$selected2 = false;
															} 
													?>
														<select name="title">
															<option value="1" <?php if($selected1){echo 'selected';}?> >Mr.</option>
															<option value="2" <?php if($selected2){echo 'selected';}?>>Mrs.</option>
														</select>
													</div>    
												</div><!-- /.form-group -->
												<div class="form-group">  
													<label class="control-label">First Name <span>*</span></label>
													<div class="form-field">  
														<input class="form-control" type="text" name="first-name" value="<?php if(isset($user)){echo $user->first_name; }?>" placeholder="Adrian" />
													</div>
												</div><!-- /.form-group -->
												<div class="form-group form-group1">
													<label class="control-label">Last Name <span>*</span></label>
													<div class="form-field">
														<input class="form-control" type="text" name="last-name" value="{{ $user = Auth::user()->last_name }}" placeholder="Smith" />
													</div>
												</div><!-- /.form-group1 -->
												<div class="form-group form-group2"> 
													<label class="control-label control-label-left">Email / Login <span>*</span></label>
													<div class="form-field">
														<input class="form-control-left" type="email" name="email" value="{{ $user = Auth::user()->email }}" placeholder="adrian@cgm.com.my" />
														<!--<button type="button" class="btn btn-right1">Change</button>-->
													</div>        
												</div><!-- /.form-group2 -->
												<div class="form-group">
													<label class="control-label control-label-left">Password <span>*</span></label>
													<div class="form-field">
														<input class="form-control-left" type="password" name="password" value="" placeholder="" />
														<!-- <button type="button" class="btn btn-right1">Change</button>-->
													</div>
													<div class="form-field btn-container">
														<input type="submit" class="btn-form" value="Save Changes"/>
													</div>
												</div><!-- /.form-group -->
											</div>
										</div>
									</div>
								</div><!-- /.secondary -->
								</form>
								<div class="height-fix"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.main -->
		

		
		<script type="text/javascript">
			$('#tripfez-setting-form').parsley();
		</script>
		
		@include('footer')