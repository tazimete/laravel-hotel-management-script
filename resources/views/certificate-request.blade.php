
	@include('header')
	@include('sidebar')
	
	<div class="main">
			<div class="container">
				<div class="widecolumn matchHeight">
					<div class="widecolumn-sub">
						<div class="widecolumn-inner">
							<div class="panel-heading">
								<h2 class="panel-title">Certificate Request</h2>
							</div>
							<div class="text-center mt20">
								<p><em>Fill in the form and allow 6-8 weeks for your certificate to arrive</em></p>
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
							
							<form action="{{URL::to('/request_certificate/send_certificate_request')}}" method="post">
								{!! csrf_field() !!}
								<div class="form-content">
									<div class="form-group">
										<label class="control-label">Your Name <span>*</span></label>
										<div class="form-field">
											<input class="form-control" type="text" name="name" value="{{Input::old('name')}}" onfocus="if (this.value == 'Mr. Adam') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Mr. Adam';}" />
											<div class="q-box">
												<i class="icon icon-info" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim!"></i>
											</div>
										</div>
									</div><!-- /.form-group -->
									<div class="form-group">
										<label class="control-label">Business Name <span>*</span></label>
										<div class="form-field">
											<input class="form-control" type="text" name="business_name" value="{{Input::old('business_name')}}" onfocus="if (this.value == 'Hilton London Metropole') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Hilton London Metropole';}" />
										</div>
									</div><!-- /.form-group -->
									<div class="form-group">
										<label class="control-label">Language <span>*</span></label>
										<div class="form-field">
											<select name="language">
												<option value="1" selected>Malaysian</option>
											</select>
										</div>
									</div><!-- /.form-group -->
									<div class="form-group">
										<label class="control-label">Business Phone Number <span>*</span></label>
										<div class="form-field">
											<input class="form-control" type="text" name="buiness_phone" value="{{Input::old('buiness_phone')}}" />
										</div>
									</div><!-- /.form-group -->
									<div class="form-group">
										<label class="control-label">Email Address <span>*</span></label>
										<div class="form-field">
											<input class="form-control" type="email" name="email_address" value="{{Input::old('email_address')}}" />
										</div>
									</div><!-- /.form-group -->
									<div class="form-group">
										<label class="control-label">Street Address <span>*</span></label>
										<div class="form-field">
											<input class="form-control" type="text" name="street_address" value="{{Input::old('street_address')}}" />
										</div>
									</div><!-- /.form-group -->
									<div class="form-group">
										<label class="control-label">Street Address Line 2</label>
										<div class="form-field">
											<input class="form-control" type="text" name="street_address_2" value="{{Input::old('street_address_2')}}" />
										</div>
									</div><!-- /.form-group -->
									<div class="form-group">
										<label class="control-label">City <span>*</span></label>
										<div class="form-field">
											<input class="form-control" type="text" name="city" value="{{Input::old('city')}}" />
										</div>
									</div><!-- /.form-group -->	
									<div class="form-group">
										<label class="control-label">State/Region</label>
										<div class="form-field">
											<input class="form-control" type="text" name="state" value="{{Input::old('state')}}" />
										</div>
									</div><!-- /.form-group -->		
									<div class="form-group">
										<label class="control-label">Postal Code</label>
										<div class="form-field">
											<input class="form-control" type="text" name="postal_code" value="{{Input::old('postal_code')}}" />
										</div>
									</div><!-- /.form-group -->										
									<div class="form-group">
										<label class="control-label">Country <span>*</span></label>
										<div class="form-field">
											<select name="country">
												<option value="1">Malaysia</option>
											</select>
										</div>
									</div><!-- /.form-group -->
									<div class="col-md-12 mt10 form-btn-container">
										<div class="col-md-6">
											<button type="reset" class="btn btn-prev">Cancel</button>
										</div>
										<div class="col-md-6">
											<button type="submit" class="btn btn-submit">Submit Request</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.main -->
		
		@include('footer')