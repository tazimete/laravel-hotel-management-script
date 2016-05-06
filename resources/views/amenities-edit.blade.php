
	@include('header')
	@include('sidebar')
		
		<div class="widecolumn widecolumn-gray matchHeight" style="height: 1878px;">
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
									
									<!--Sectiopn 1-->
																			
										<?php if($id == 1){?>
										<div class="border-content clearfix">
											<form action="{{URL::to('/')}}/amenities/edit_amenities_first_section" method="post" >
											{!! csrf_field() !!}
											<h2 class="title">Room Amenities</h2>
											<div class="sub-panel mb0">
												<div class="sub-panel-sub clearfix">
													<div class="sub-panel-inner sub-panel-inner-p0">
														
														<div class="question-box bt-none clearfix">
															<div class="icon-box">
																<img width="40" height="40" alt="icon" src="{{URL::asset('images/icon-01.jpg')}}">
															</div><!-- /.icon-box -->
															<h3 class="q-title">Does the hotel provide a Muslim prayer mat? *</h3>
														</div><!-- /.question-box -->
														<div class="answer-box">
														<?php  
																		/*if(isset($amenities)){
																			if(isset($amenities[0])){
																				$value = (int) $amenities[0]->muslim_prayer_mat;
																			}else{
																				$value = 0;
																			}
																			
																			if($value == 1){
																				$muslim_prayer_mat = 1;
																			}else if($value == 2){
																				$muslim_prayer_mat = 2;
																			}else if($value == 3){
																				$muslim_prayer_mat = 3;
																			}else {
																				$muslim_prayer_mat = 0;
																			}
																		}else{
																			$muslim_prayer_mat = 0;
																		}
																		
																		//Showing result 
																		if($muslim_prayer_mat == 1) { 
																			echo 'Yes, a prayer mat is available <br> in the room.'; 
																		}else if($muslim_prayer_mat == 2){
																			echo 'A prayer mat can be requested.';
																		}else if($muslim_prayer_mat == 3){
																			echo 'A prayer mat can be requested.';
																		}else {
																			//echo 'Undefined';
																		}*/
																	?>
															<div class="radio">
																<label><input type="radio" checked="" name="muslim_prayer_mat" value="Yes, a prayer mat is available in the room."> Yes, a prayer mat is available in the room.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="muslim_prayer_mat" value="A prayer mat can be requested."> A prayer mat can be requested.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="muslim_prayer_mat" value="A prayer mat can be requested."> A prayer mat can be requested.</label>
															</div>
														</div><!-- /.answer-box -->
														<div class="question-box clearfix">
															<div class="icon-box">
																<img width="40" height="40" alt="" src="{{URL::asset('images/icon-02.jpg')}}">
															</div><!-- /.icon-box -->
															<h3 class="q-title">Is there a Qibla Direction in the room? *</h3>
														</div><!-- /.question-box -->
														<div class="answer-box">
															<div class="radio">
																<label><input type="radio" checked="" name="qibla_direction" value="Yes, there is a Qibla Direction in our rooms."> Yes, there is a Qibla Direction in our rooms.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="qibla_direction" value="No, there is no Qibla Direction in our rooms."> No, there is no Qibla Direction in our rooms.</label>
															</div>
														</div><!-- /.answer-box -->
														<div class="question-box clearfix">
															<div class="icon-box">
																<img width="40" height="40" alt="" src="{{URL::asset('images/icon-03.jpg')}}">
															</div><!-- /.icon-box -->
															<h3 class="q-title">Do you provide the Quran in the room? *</h3>
														</div><!-- /.question-box -->
														<div class="answer-box">
															<div class="radio">
																<label><input type="radio" checked="" name="quran_in_room" value="Yes, we provide the Quran in the room."> Yes, we provide the Quran in the room.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="quran_in_room" value="A guest can request a Quran during their stay."> A guest can request a Quran during their stay.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="quran_in_room" value="No, we dao not provide the Quran."> No, we dao not provide the Quran.</label>
															</div>
														</div><!-- /.answer-box -->
														
													</div>
												</div>          
											</div>
											<div class="col-md-12">
												<div class="col-md-6">
													<button class="btn btn-left1" type="submit">Save</button>
												</div>
												<div class="col-md-6">
													<button class="btn btn-right1" type="button">Cancel</button>
												</div>
											</div>
											</form>
										</div><!-- /.border-content -->	
										<?php }else{ ?>
										
										<div class="sub-panel mt30">
											<div class="sub-panel-sub clearfix">
												<div class="sub-panel-inner">
													<div class="info-box">
														<div class="info-head">
															<!--<a class="btn-edit pull-right" href="#">Edit</a>-->
															<h2 class="info-title">Room Amenities</h2>
														</div>
														<table class="table table-info">
															<tbody><tr>
																<td class="td-left">
																	<div class="text-question">
																		<div class="center-graphic">
																			<img width="40" height="40" src="{{URL::asset('images/icon-01.jpg')}}" alt="icon">
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
																			<img width="40" height="40" src="{{URL::asset('images/icon-02.jpg')}}" alt="icon">
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
																			<img width="40" height="40" src="{{URL::asset('images/icon-01.jpg')}}" alt="icon">
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
										</div> 
										<!--End of Sectiopn 1-->
										
										<?php }?>
										
										<!--Sectiopn 2 -->
										<?php if($id == 2){?>
										<div class="border-content clearfix">
											<form action="{{URL::to('/')}}/amenities/edit_amenities_second_section" method="post">
											{!! csrf_field() !!}
											<h2 class="title">Hotel Services</h2>
											<div class="sub-panel mb0">
												<div class="sub-panel-sub clearfix">
													<div class="sub-panel-inner sub-panel-inner-p0">
														<div class="question-box bt-none clearfix">
															<div class="icon-box">
																<img width="40" height="40" alt="" src="{{URL::asset('images/icon-04.jpg')}}">
															</div><!-- /.icon-box -->
															<h3 class="q-title">Can the Muslim praying direction be obtained from the hotel staff?</h3>
														</div><!-- /.question-box -->
														<div class="answer-box">
															<div class="radio">
																<label><input type="radio" checked="" name="praying_direction_from_hotel_staff" value="Yes, the praying direction can be obtained."> Yes, the praying direction can be obtained.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="praying_direction_from_hotel_staff" value="No, the praying direction cannot be obtained."> No, the praying direction cannot be obtained.</label>
															</div>
														</div><!-- /.answer-box -->
														<div class="question-box clearfix">
															<div class="icon-box">
																<img width="40" height="40" alt="" src="{{URL::asset('images/icon-05.jpg')}}">
															</div><!-- /.icon-box -->
															<h3 class="q-title">Does the hotel provide the local prayer times for Muslims? *</h3>
														</div><!-- /.question-box -->
														<div class="answer-box">
															<div class="radio">
																<label><input type="radio" checked="" name="local_prayer_time_table" value="Yes, you can obtain a list of the local prayer times from the front desk."> Yes, you can obtain a list of the local prayer times from the front desk.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="local_prayer_time_table" value="No, we do not provide the local prayer times."> No, we do not provide the local prayer times.</label>
															</div>
														</div><!-- /.answer-box -->
														<div class="question-box clearfix">
															<div class="icon-box">
																<img width="40" height="40" alt="" src="{{URL::asset('images/icon-06.jpg')}}">
															</div><!-- /.icon-box -->
															<h3 class="q-title">Does the hotel provide a list of halal restaurants in the vicinity? *</h3>
														</div><!-- /.question-box -->
														<div class="answer-box">
															<div class="radio">
																<label><input type="radio" checked="" name="halal_restaurant_list" value="Yes, the hotel provides a list of halal restaurants."> Yes, the hotel provides a list of halal restaurants.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="halal_restaurant_list" value="No, the hotel does not provide a list of halal restaurants."> No, the hotel does not provide a list of halal restaurants.</label>
															</div>
														</div><!-- /.answer-box -->
														<div class="question-box clearfix">
															<div class="icon-box">
																<img width="40" height="40" alt="" src="{{URL::asset('images/icon-07.jpg')}}">
															</div><!-- /.icon-box -->
															<h3 class="q-title">Does the hotel provide a list of Mosques or Suraus (public praying rooms) in the vicinity? *</h3>
														</div><!-- /.question-box -->
														<div class="answer-box">
															<div class="radio">
																<label><input type="radio" name="mosque_or_suraus_list" value="Yes, the hotel provides a list of halal restaurants." checked> Yes, the hotel provides a list of halal restaurants.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="mosque_or_suraus_list" value="No, the hotel does not provide a list with Mosques/Suraus."> No, the hotel does not provide a list with Mosques/Suraus.</label>
															</div>
														</div><!-- /.answer-box -->
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="col-md-6">
													<button class="btn btn-left1" type="submit">Save</button>
												</div>
												<div class="col-md-6">
													<button class="btn btn-right1" type="button">Cancel</button>
												</div>
											</div>
											</form>
										</div>
										<?php } else{?>
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
																	<div class="text-regular"><?php if(isset($amenities[0])){
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
																			<img width="40" height="40" alt="icon" src="{{URL::asset('images/icon-05.jpg')}}">
																		</div>
																		<span class="c-text">Q:</span> 
																		<div class="text-regular">Does the hotel provide the local <br> prayer times for Muslims?</div>
																	</div>
																</td>
																<td class="td-right">
																	<span class="c-text">A:</span> 
																	<div class="text-regular"><?php if(isset($amenities[0])){
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
																			<img width="40" height="40" alt="icon" src="{{URL::asset('images/icon-06.jpg')}}">
																		</div>
																		<span class="c-text">Q:</span> 
																		<div class="text-regular">Does the hotel provide a list of <br> halal restaurants in the vicinity?</div>
																	</div>
																</td>
																<td class="td-right">
																	<span class="c-text">A:</span> 
																	<div class="text-regular"><?php if(isset($amenities[0])){
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
																			<img width="40" height="40" alt="icon" src="{{URL::asset('images/icon-07.jpg')}}">
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
										</div>
										<?php } ?>
										<!-- /.sub-panel -->
										<!--End of Sectiopn 2-->
										
										<!--Sectiopn 3-->
										<?php if($id == 3){?>
										<div class="border-content clearfix">
											<form action="{{URL::to('/')}}/amenities/edit_amenities_third_section" method="post">
											{!! csrf_field() !!}
											<h2 class="title">Food &amp; Beverages</h2>
											<div class="sub-panel mb0">
												<div class="sub-panel-sub clearfix">
													<div class="sub-panel-inner sub-panel-inner-p0">
														<div class="question-box bt-none clearfix">
															<div class="icon-box">
																<img width="40" height="40" alt="" src="{{URL::asset('images/icon-08.jpg')}}">
															</div><!-- /.icon-box -->
															<h3 class="q-title">Are there alcoholic beverages in the room’s mini-bar? *</h3>
														</div><!-- /.question-box -->
														<div class="answer-box">
															<div class="radio">
																<label><input type="radio" name="alcoholic_beverages" value="Yes, we provide alcoholic beverages in the mini-bar."> Yes, we provide alcoholic beverages in the mini-bar.</label>
															</div>
															<div class="radio">
																<label><input type="radio" checked name="alcoholic_beverages" value="No, we do not provide alcoholic beverages in the mini-bar."> No, we do not provide alcoholic beverages in the mini-bar..</label>
															</div>
														</div><!-- /.answer-box -->
														<div class="question-box clearfix">
															<div class="icon-box">
																<img width="40" height="40" alt="" src="{{URL::asset('images/icon-09.jpg')}}">
															</div><!-- /.icon-box -->
															<h3 class="q-title">Does the hotel provide certified halal food? *</h3>
														</div><!-- /.question-box -->
														<div class="answer-box">
															<div class="radio">
																<label><input type="radio" checked name="halal_food" value="Yes, the hotel provides certified halal food."> Yes, the hotel provides certified halal food.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="halal_food" value="Halal Food can be pre-ordered before arrival.">  Halal Food can be pre-ordered before arrival.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="halal_food" value="No, the hotel does not provide certified halal food."> No, the hotel does not provide certified halal food.</label>
															</div>
														</div><!-- /.answer-box -->
														
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="col-md-6">
													<button class="btn btn-left1" type="submit">Save</button>
												</div>
												<div class="col-md-6">
													<button class="btn btn-right1" type="button">Cancel</button>
												</div>
											</div>
											</form>
										</div>
										<?php }else{?>
										<div class="sub-panel mt30">
											<div class="sub-panel-sub clearfix">
												<div class="sub-panel-inner">
													<div class="info-box">
														<div class="info-head">
															<!-- <a href="#" class="btn-edit pull-right">Edit</a>-->
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
																			<img width="40" height="40" alt="icon" src="{{URL::asset('images/icon-09.jpg')}}">
																		</div>
																		<span class="c-text">Q:</span> 
																		<div class="text-regular">Does the hotel provide <br> certified halal food?</div>
																	</div>
																</td>
																<td class="td-right">
																	<span class="c-text">A:</span> 
																	<div class="text-regular"><?php if(isset($amenities[0])){
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
										<?php }?>
										<!--End of Sectiopn 3 -->
							</div>
						</div>
					</div>
				</div>
		
		@include('footer')