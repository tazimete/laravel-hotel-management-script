
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
												<h3 class="sub-title">Register</h3>
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
												<form action="{{URL::to('/')}}/user/create_user" method="get" id="tripfez-form-register">
													{!! csrf_field() !!}
													<div class="form-group">
														<label class="control-label">Title <span>*</span></label>
														<div class="form-field">
															<select name="title">
																<option value="1">Mr.</option>
																<option value="2">Mrs.</option>
															</select>
														</div>    
													</div><!-- /.form-group -->
													<div class="form-group">
														<label class="control-label">First Name <span>*</span></label>
														<div class="form-field">
															<input class="form-control" type="text" name="first-name" value="<?php echo Input::old('first-name')?>"/>
														</div>
													</div><!-- /.form-group -->
													<div class="form-group">
														<label class="control-label">Last Name <span>*</span></label>
														<div class="form-field">
															<input class="form-control" type="text" name="last-name" value="<?php echo Input::old('last-name')?>"/>
														</div>
													</div><!-- /.form-group -->
													<div class="form-group form-group2">
														<label class="control-label control-label-left">Email / Login <span>*</span></label>
														<div class="form-field">
															<input class="form-control" type="email" name="email" value="<?php echo Input::old('email')?>"/>
														</div>
													</div><!-- /.form-group2 -->
													<div class="form-group">
														<label class="control-label control-label-left">Password <span>*</span></label>
														<div class="form-field">
															<input class="form-control" type="password" name="password" value="<?php echo Input::old('password')?>"/>
														</div>   
													</div><!-- /.form-group -->
													<div class="form-group">
														<label class="control-label control-label-left">Confirm Password <span>*</span></label>
														<div class="form-field">
															<input class="form-control" type="password" name="confirm-password"/>
														</div>
													</div><!-- /.form-group -->
													<div class="form-group">
														<div class="form-field btn-container">
															<input type="submit" class="btn-form" value="Register"/>
															<input type="reset" class="btn-form" value="Reset"/>
														</div>	
														<div class="signup-text"><a href="/" class="signup-link">Already registered? Signin</a></div>
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