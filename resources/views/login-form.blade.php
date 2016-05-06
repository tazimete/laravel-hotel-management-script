
	@extends('login')
	
	@section('form-content')
	
<div class="login-div-container widecolumn-default">
					<div class="widecolumn-sub">
						<div class="secondary-column matchHeight">
							<div class="secondary-column-inner">
																
								<div class="secondary">
									<div class="secondary-sub">
										<div class="secondary-inner clearfix">
											<div class="panel-heading">
												<h3 class="sub-title">Login</h3>	
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
											<div class="form-content">
												<form action="{{URL::to('/')}}/user/login_user" method="get" id="user_login_form">
													<div class="form-group form-group2">
														<label class="control-label control-label-left">Email <span>*</span></label>
														<div class="form-field">
															<input class="form-control" type="email" name="email" value="{{old('email')}}"/>
														</div>
													</div><!-- /.form-group2 -->
													<div class="form-group">
														<label class="control-label control-label-left">Password <span>*</span></label>
														<div class="form-field">
															<input class="form-control" type="password" name="password"/>
														</div>
													</div><!-- /.form-group -->      
													<div class="form-group">
														<div class="form-field btn-container">
															<input type="submit" class="btn-form" value="Login"/>
															<input type="reset" class="btn-form" value="Reset"/>
														</div>	
														<!-- <div class="signup-text"><a href="/register" class="signup-link">Not registered? Signup</a></div> -->
													</div>
												</form>
											</div>
										</div>
									</div>
								</div><!-- /.secondary -->
								<div class="height-fix"></div>
							</div>
						</div>
					</div>
				</div>
				
			@stop