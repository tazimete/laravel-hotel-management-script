
	@include('header')
	@include('sidebar')
		
		<div class="widecolumn matchHeight" style="height: 1722px;">
					<div class="widecolumn-sub">
						<div class="widecolumn-inner">
							<div class="wide-container">
								<div class="ceritficate-box">
									<div class="line-banner"></div>
									<img width="232" height="232" alt="SALAM STANDARD CERTIFICATE" src="{{URL::asset('images/salam_standard_certificate.png')}}">
									<p>The <strong>Salam Standard</strong> is a global initiative to promote services and facilities of hotels for Muslim travellers.<br>
									To get the <strong>Salam Standard</strong> certificate complete the following questionnaire.</p>
									<p>Please submit a separate form for every property. <br>
									Your participation is greatly appreciated!</p>
								</div><!-- /.ceritficate-box -->
								<form method="post" action="{{URL::to('/')}}/amenities/submit_amenities" class="form">
									{!! csrf_field() !!}
									<fieldset>
										<div class="sub-panel mt30">
											<div class="sub-panel-sub clearfix">
												<div class="sub-panel-inner">
													<div class="info-box">
														<div class="info-head">
															<!-- <a href="#" class="btn-edit pull-right">Edit</a> -->
															<h2 class="info-title">Room Amenities</h2>
														</div>
														<table class="table table-info">
															<tbody><tr>
																<td class="td-left">
																	<div class="text-question">
																		<div class="center-graphic">
																			<img width="40" height="40" alt="icon" src="{{URL::asset('images/icon-01.jpg')}}">
																		</div>
																		<span class="c-text">Q:</span> 
																		<div class="text-regular">Does the hotel provide a <br> Muslim prayer mat?</div>
																	</div>
																</td>
																<td class="td-right">
																	<span class="c-text">A:</span> 
																	<div class="text-regular"><?php echo $amenities['muslim_prayer_mat']; ?></div>
																	<input type="hidden" name="muslim_prayer_mat" value="<?php echo $amenities['muslim_prayer_mat']; ?>"/>
																</td>
															</tr>
															<tr>
																<td class="td-left">
																	<div class="text-question">
																		<div class="center-graphic">
																			<img width="40" height="40" alt="icon" src="{{URL::asset('images/icon-02.jpg')}}">
																		</div>
																		<span class="c-text">Q:</span> 
																		<div class="text-regular">Is there a Qibla <br> Direction in the room?</div>
																	</div>
																</td>
																<td class="td-right">
																	<span class="c-text">A:</span> 
																	<div class="text-regular"><?php echo $amenities['qibla_direction']; ?></div>
																	<input type="hidden" name="qibla_direction" value="<?php echo $amenities['qibla_direction']; ?>"/>
																</td>
															</tr>
															<tr>
																<td class="td-left">
																	<div class="text-question">
																		<div class="center-graphic">
																			<img width="40" height="40" alt="icon" src="{{URL::asset('images/icon-01.jpg')}}">
																		</div>
																		<span class="c-text">Q:</span> 
																		<div class="text-regular">Do you provide the Quran in <br> the room?</div>
																	</div>
																</td>
																<td class="td-right">
																	<span class="c-text">A:</span> 
																	<div class="text-regular"><?php echo $amenities['quran_in_room']; ?></div>
																	<input type="hidden" name="quran_in_room" value="<?php echo $amenities['quran_in_room']; ?>"/>
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
															<!--<a href="#" class="btn-edit pull-right">Edit</a>-->
															<h2 class="info-title">Hotel Services</h2>
														</div>
														<table class="table table-info">
															<tbody><tr>
																<td class="td-left">
																	<div class="text-question">
																		<div class="center-graphic">
																			<img width="40" height="40" alt="icon" src="{{URL::asset('images/icon-04.jpg')}}">
																		</div>
																		<span class="c-text">Q:</span> 
																		<div class="text-regular">Can the Muslim praying <br> direction be obtained from <br> the hotel staff?</div>
																	</div>
																</td>
																<td class="td-right">
																	<span class="c-text">A:</span> 
																	<div class="text-regular"><?php echo $amenities['praying_direction_from_hotel_staff']; ?></div>
																	<input type="hidden" name="praying_direction_from_hotel_staff" value="<?php echo $amenities['praying_direction_from_hotel_staff']; ?>"/>
																</td>
															</tr>
															<tr>
																<td class="td-left">
																	<div class="text-question">
																		<div class="center-graphic">
																			<img width="40" height="40" alt="icon" src="{{URL::asset('images/icon-05.jpg')}}">
																		</div>
																		<span class="c-text">Q:</span> 
																		<div class="text-regular">Does the hotel provide the local <br> prayer times for Muslims?</div>
																	</div>
																</td>
																<td class="td-right">
																	<span class="c-text">A:</span> 
																	<div class="text-regular"><?php echo $amenities['local_prayer_time_table'];?></div>
																	<input type="hidden" name="local_prayer_time_table" value="<?php echo $amenities['local_prayer_time_table']; ?>"/>
																</td>
															</tr>
															<tr>
																<td class="td-left">
																	<div class="text-question">
																		<div class="center-graphic">
																			<img width="40" height="40" alt="icon" src="{{URL::asset('images/icon-06.jpg')}}">
																		</div>
																		<span class="c-text">Q:</span> 
																		<div class="text-regular">Does the hotel provide a list of <br> halal restaurants in the vicinity?</div>
																	</div>
																</td>
																<td class="td-right">
																	<span class="c-text">A:</span> 
																	<div class="text-regular"><?php echo $amenities['halal_restaurant_list']; ?></div>
																	<input type="hidden" name="halal_restaurant_list" value="<?php echo $amenities['halal_restaurant_list']; ?>"/>
																</td>
															</tr>
															<tr>
																<td class="td-left">
																	<div class="text-question">
																		<div class="center-graphic">
																			<img width="40" height="40" alt="icon" src="{{URL::asset('images/icon-07.jpg')}}">
																		</div>
																		<span class="c-text">Q:</span> 
																		<div class="text-regular">Does the hotel provide a list of <br> Mosques or Suraus (public <br> praying rooms) in the vicinity?</div>
																	</div>
																</td>
																<td class="td-right">
																	<span class="c-text">A:</span> 
																	<div class="text-regular"><?php echo $amenities['mosque_or_suraus_list']; ?></div>
																	<input type="hidden" name="mosque_or_suraus_list" value="<?php echo $amenities['mosque_or_suraus_list']; ?>"/>
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
															<!--<a href="#" class="btn-edit pull-right">Edit</a>-->
															<h2 class="info-title">Food &amp; Beverages</h2>
														</div>
														<table class="table table-info">
															<tbody><tr>
																<td class="td-left">
																	<div class="text-question">
																		<div class="center-graphic">
																			<img width="40" height="40" alt="icon" src="{{URL::asset('images/icon-08.jpg')}}">
																		</div>
																		<span class="c-text">Q:</span> 
																		<div class="text-regular">Are there alcoholic beverages in <br> the room’s mini-bar?</div>
																	</div>
																</td>
																<td class="td-right">
																	<span class="c-text">A:</span> 
																	<div class="text-regular"><?php echo $amenities['alcoholic_beverages']; ?></div>
																	<input type="hidden" name="alcoholic_beverages" value="<?php echo $amenities['alcoholic_beverages']; ?>"/>
																</td>
															</tr>
															<tr>
																<td class="td-left">
																	<div class="text-question">
																		<div class="center-graphic">
																			<img width="40" height="40" alt="icon" src="{{URL::asset('images/icon-09.jpg')}}">
																		</div>
																		<span class="c-text">Q:</span> 
																		<div class="text-regular">Does the hotel provide <br> certified halal food?</div>
																	</div>
																</td>
																<td class="td-right">
																	<span class="c-text">A:</span> 
																	<div class="text-regular"><?php echo $amenities['halal_food']; ?></div>
																	<input type="hidden" name="halal_food" value="<?php echo $amenities['halal_food']; ?>"/>
																</td>
															</tr>
														</tbody></table>
													</div>
												</div>
											</div>
										</div><!-- /.sub-panel -->
										<div class="bottom-center1">
											<input class="btn btn-warning-lg" type="submit" value="Submit for Review">
										</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
		
		@include('footer')