
	@include('header')
	@include('sidebar')
		
		<div class="widecolumn matchHeight" style="height: 1630px;">
					<div class="widecolumn-sub">
						<div class="widecolumn-inner">
							<div class="wide-container">
								<div class="ceritficate-box">
									<div class="line-banner"></div>
									<img width="232" height="232" alt="SALAM STANDARD CERTIFICATE" src="{{URL::asset('/images/salam_standard_certificate.png')}}">
									<p>The <strong>Salam Standard</strong> is a global initiative to promote services and facilities of hotels for Muslim travellers.<br>
									To get the <strong>Salam Standard</strong> certificate complete the following questionnaire.</p>
									<p>Please submit a separate form for every property. <br>
									Your participation is greatly appreciated!</p>
								</div><!-- /.ceritficate-box -->
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
								<form method="post" action="#" class="form">
									<fieldset>
										<div class="sub-panel mt30">
											<div class="sub-panel-sub clearfix">
												<div class="sub-panel-inner">
													<div class="info-box">
														<div class="info-head">
															<a href="{{URL::to('/')}}/amenities/edit/1" class="btn-edit pull-right">Edit</a>
															<h2 class="info-title">Room Amenities</h2>
														</div>
														<table class="table table-info">
															<tbody><tr>
																<td class="td-left">
																	<div class="text-question">
																		<div class="center-graphic">
																			<img width="40" height="40" alt="icon" src="{{URL::asset('/images/icon-01.jpg')}}">
																		</div>
																		<span class="c-text">Q:</span> 
																		<div class="text-regular">Does the hotel provide a <br> Muslim prayer mat?</div>
																	</div>
																</td>
																<td class="td-right">
																	<span class="c-text">A:</span> 
																	<div class="text-regular">
																	<?php if(isset($amenities[0])){
																		echo $amenities[0]->muslim_prayer_mat;
																	}else{
																		echo 'Undefined';
																	}?>
																	
																	</div>
																</td>
															</tr>
															<tr>
																<td class="td-left">
																	<div class="text-question">
																		<div class="center-graphic">
																			<img width="40" height="40" alt="icon" src="{{URL::asset('/images/icon-02.jpg')}}">
																		</div>
																		<span class="c-text">Q:</span> 
																		<div class="text-regular">Is there a Qibla <br> Direction in the room?</div>
																	</div>
																</td>
																<td class="td-right">
																	<span class="c-text">A:</span> 
																	<div class="text-regular">
																	<?php if(isset($amenities[0])){
																		echo $amenities[0]->qibla_direction;
																	}else{
																		echo 'Undefined';
																	}?>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="td-left">
																	<div class="text-question">
																		<div class="center-graphic">
																			<img width="40" height="40" alt="icon" src="{{URL::asset('/images/icon-01.jpg')}}">
																		</div>
																		<span class="c-text">Q:</span> 
																		<div class="text-regular">Do you provide the Quran in <br> the room?</div>
																	</div>
																</td>
																<td class="td-right">
																	<span class="c-text">A:</span> 
																	<div class="text-regular">
																	<?php if(isset($amenities[0])){
																		echo $amenities[0]->quran_in_room;
																	}else{
																		echo 'Undefined';
																	}?>
																	</div>
																</td>
															</tr>
														</tbody></table>
													</div>
												</div>
											</div>
										</div><!-- /.sub-panel -->
										<div class="sub-panel mt30">
											<div class="sub-panel-sub clearfix">
												<div class="sub-panel-inner">
													<div class="info-box">
														<div class="info-head">
															<a href="{{URL::to('/')}}/amenities/edit/2" class="btn-edit pull-right">Edit</a>
															<h2 class="info-title">Hotel Services</h2>
														</div>
														<table class="table table-info">
															<tbody><tr>
																<td class="td-left">
																	<div class="text-question">
																		<div class="center-graphic">
																			<img width="40" height="40" alt="icon" src="{{URL::asset('/images/icon-04.jpg')}}">
																		</div>
																		<span class="c-text">Q:</span> 
																		<div class="text-regular">Can the Muslim praying <br> direction be obtained from <br> the hotel staff?</div>
																	</div>
																</td>
																<td class="td-right">
																	<span class="c-text">A:</span> 
																	<div class="text-regular">
																	
																	<?php if(isset($amenities[0])){
																		echo $amenities[0]->praying_direction_from_hotel_staff;
																	}else{
																		echo 'Undefined';
																	}?>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="td-left">
																	<div class="text-question">
																		<div class="center-graphic">
																			<img width="40" height="40" alt="icon" src="{{URL::asset('/images/icon-05.jpg')}}">
																		</div>
																		<span class="c-text">Q:</span> 
																		<div class="text-regular">Does the hotel provide the local <br> prayer times for Muslims?</div>
																	</div>
																</td>
																<td class="td-right">
																	<span class="c-text">A:</span> 
																	<div class="text-regular">
																	
																	<?php if(isset($amenities[0])){
																		echo $amenities[0]->local_prayer_time_table;
																	}else{
																		echo 'Undefined';
																	}?>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="td-left">
																	<div class="text-question">
																		<div class="center-graphic">
																			<img width="40" height="40" alt="icon" src="{{URL::asset('/images/icon-06.jpg')}}">
																		</div>
																		<span class="c-text">Q:</span> 
																		<div class="text-regular">Does the hotel provide a list of <br> halal restaurants in the vicinity?</div>
																	</div>
																</td>
																<td class="td-right">
																	<span class="c-text">A:</span> 
																	<div class="text-regular">
																	
																	<?php if(isset($amenities[0])){
																		echo $amenities[0]->halal_restaurant_list;
																	}else{
																		echo 'Undefined';
																	}?>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="td-left">
																	<div class="text-question">
																		<div class="center-graphic">
																			<img width="40" height="40" alt="icon" src="{{URL::asset('/images/icon-07.jpg')}}">
																		</div>
																		<span class="c-text">Q:</span> 
																		<div class="text-regular">Does the hotel provide a list of <br> Mosques or Suraus (public <br> praying rooms) in the vicinity?</div>
																	</div>
																</td>
																<td class="td-right">
																	<span class="c-text">A:</span> 
																	<div class="text-regular">
																	
																	<?php if(isset($amenities[0])){
																		echo $amenities[0]->mosque_or_suraus_list;
																	}else{
																		echo 'Undefined';
																	}?>
																	</div>
																</td>
															</tr>
														</tbody></table>
													</div>
												</div>
											</div>
										</div><!-- /.sub-panel -->
										<div class="sub-panel mt30">
											<div class="sub-panel-sub clearfix">
												<div class="sub-panel-inner">
													<div class="info-box">
														<div class="info-head">
															<a href="{{URL::to('/')}}/amenities/edit/3" class="btn-edit pull-right">Edit</a>
															<h2 class="info-title">Food &amp; Beverages</h2>
														</div>
														<table class="table table-info">
															<tbody><tr>
																<td class="td-left">
																	<div class="text-question">
																		<div class="center-graphic">
																			<img width="40" height="40" alt="icon" src="{{URL::asset('/images/icon-08.jpg')}}">
																		</div>
																		<span class="c-text">Q:</span> 
																		<div class="text-regular">Are there alcoholic beverages in <br> the room’s mini-bar?</div>
																	</div>
																</td>
																<td class="td-right">
																	<span class="c-text">A:</span> 
																	<div class="text-regular">
																																		
																	<?php if(isset($amenities[0])){
																		echo $amenities[0]->alcoholic_beverages;
																	}else{
																		echo 'Undefined';
																	}?>
														</div>
																</td>
															</tr>
															<tr>
																<td class="td-left">
																	<div class="text-question">
																		<div class="center-graphic">
																			<img width="40" height="40" alt="icon" src="{{URL::asset('/images/icon-09.jpg')}}">
																		</div>
																		<span class="c-text">Q:</span> 
																		<div class="text-regular">Does the hotel provide <br> certified halal food?</div>
																	</div>
																</td>
																<td class="td-right">
																	<span class="c-text">A:</span> 
																	<div class="text-regular">
																	
																	<?php if(isset($amenities[0])){
																		echo $amenities[0]->halal_food;  
																	}else{
																		echo 'Undefined';
																	}?>
																	</div>
																</td>
															</tr>
														</tbody></table>
													</div>
												</div>
											</div>
										</div><!-- /.sub-panel -->
									</fieldset>
								</form>
								<div class="panel-download panel-download-left">
									<form method="post" action="#" class="form-inline">
										<fieldset>
											<div class="form-group">
												<select name="language" class="form-control">
													<option value="English">English</option>
												</select>
											</div>
											<button class="btn btn-warning" type="submit">Download <strong>PDF</strong></button>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
		
		@include('footer')