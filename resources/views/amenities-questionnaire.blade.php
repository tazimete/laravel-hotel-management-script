
	@include('header')
	@include('sidebar')
		
		<div class="widecolumn widecolumn-gray">
					<div class="widecolumn-sub">
						<div class="widecolumn-inner matchHeight">
							<div class="wide-container">
								<div class="ceritficate-box">
									<div class="line-banner"></div>
									<img src="{{URL::asset('images/salam_standard_certificate.png')}}" width="232" height="232" alt="SALAM STANDARD CERTIFICATE" />
									<p>The <strong>Salam Standard</strong> is a global initiative to promote services and facilities of hotels for Muslim travellers.<br>
									To get the <strong>Salam Standard</strong> certificate complete the following questionnaire.</p>
									<p>Please submit a separate form for every property. <br>
									Your participation is greatly appreciated!</p>
								</div><!-- /.ceritficate-box -->
								<form class="form" id="form-tripfez-amenities" action="{{URL::to('/')}}/amenities/update_amenities" method="get">
									{!! csrf_field() !!}
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
									<fieldset>
										<div class="border-content clearfix">
											<h2 class="title">Room Amenities</h2>
											<div class="sub-panel mb0">   
												<div class="sub-panel-sub clearfix">
													<div class="sub-panel-inner sub-panel-inner-p0">
														<div class="question-box bt-none clearfix">
															<div class="icon-box">
																<img src="{{URL::asset('images/icon-01.jpg')}}" width="40" height="40" alt="" />
															</div><!-- /.icon-box -->
															<h3 class="q-title">Does the hotel provide a Muslim prayer mat? *</h3>
															<div class="q-box">   
																<i class="icon icon-info"></i>
															</div>
														</div><!-- /.question-box -->
														
														<?php 
															if(isset($amenities)){
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
														?>
														
														<div class="answer-box">
															<div class="radio">
																<label><input type="radio" name="muslim_prayer_mat" value="Yes, a prayer mat is available in the room." checked /> Yes, a prayer mat is available in the room.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="muslim_prayer_mat" value="A prayer mat can be requested." <?php if($muslim_prayer_mat == 2) { echo 'checked'; } ?> /> A prayer mat can be requested.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="muslim_prayer_mat" value="A prayer mat can be requested." <?php if($muslim_prayer_mat == 3) { echo 'checked'; } ?> /> A prayer mat can be requested.</label>
															</div>
														</div><!-- /.answer-box -->
														<div class="question-box clearfix">
															<div class="icon-box">
																<img src="{{URL::asset('images/icon-02.jpg')}}" width="40" height="40" alt="" />
															</div><!-- /.icon-box -->
															<h3 class="q-title">Is there a Qibla Direction in the room? *</h3>
															<div class="q-box">
																<i class="icon icon-info" title="Lorem ipsum dolor site amet, consectetur adipisicing elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco."></i>
															</div>
														</div><!-- /.question-box -->  
														
														<?php 
															if(isset($amenities)){
																if(isset($amenities[0])){
																	$value = (int) $amenities[0]->qibla_direction;
																}else{
																	$value = 0;
																}
																
																if($value == 1){
																	$qibla_direction = 1;
																}else if($value == 2){
																	$qibla_direction = 2;             
																}else if($value == 3){
																	$qibla_direction = 3;
																}else {
																	$qibla_direction = 0;
																}
															}else{
																$qibla_direction = 0;      
															}
														?>
														
														<div class="answer-box">
															<div class="radio">
																<label><input type="radio" name="qibla_direction" value="Yes, there is a Qibla Direction in our rooms." checked /> Yes, there is a Qibla Direction in our rooms.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="qibla_direction" value="No, there is no Qibla Direction in our rooms." <?php if($qibla_direction == 2) { echo 'checked'; } ?> /> No, there is no Qibla Direction in our rooms.</label>
															</div>
														</div><!-- /.answer-box -->
														<div class="question-box clearfix">  
															<div class="icon-box">
																<img src="{{URL::asset('images/icon-03.jpg')}}" width="40" height="40" alt="" />
															</div><!-- /.icon-box -->     
															<h3 class="q-title">Do you provide the Quran in the room? *</h3>
														</div><!-- /.question-box -->
														
														<?php 
															if(isset($amenities)){
																if(isset($amenities[0])){
																	$value = (int) $amenities[0]->quran_in_room;
																}else{
																	$value = 0;
																}
																
																if($value == 1){
																	$quran_in_room = 1;    
																}else if($value == 2){
																	$quran_in_room = 2;
																}else if($value == 3){
																	$quran_in_room = 3;                       
																}else {
																	$quran_in_room = 0;
																}
															}else{     
																$quran_in_room = 0;
															}
														?>                                              
														
														<div class="answer-box">                             
															<div class="radio">                     
																<label><input type="radio" name="quran_in_room" value="Yes, we provide the Quran in the room." checked /> Yes, we provide the Quran in the room.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="quran_in_room" value="A guest can request a Quran during their stay." <?php if($quran_in_room == 2) { echo 'checked'; } ?> /> A guest can request a Quran during their stay.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="quran_in_room" value="No, we dao not provide the Quran." <?php if($quran_in_room == 3) { echo 'checked'; } ?> /> No, we dao not provide the Quran.</label>
															</div>
														</div><!-- /.answer-box -->
													</div>
												</div>
											</div>
										</div><!-- /.border-content -->
										<div class="border-content clearfix">
											<h2 class="title">Hotel Services</h2>
											<div class="sub-panel mb0">
												<div class="sub-panel-sub clearfix">
													<div class="sub-panel-inner sub-panel-inner-p0">
														<div class="question-box bt-none clearfix">
															<div class="icon-box">
																<img src="{{URL::asset('images/icon-04.jpg')}}" width="40" height="40" alt="" />
															</div><!-- /.icon-box -->
															<h3 class="q-title">Can the Muslim praying direction be obtained from the hotel staff?</h3>
														</div><!-- /.question-box -->
														
														<?php 
															if(isset($amenities)){
																if(isset($amenities[0])){
																	$value = (int) $amenities[0]->praying_direction_from_hotel_staff;
																}else{
																	$value = 0;
																}       
																    
																if($value == 1){
																	$praying_direction_from_hotel_staff = 1;              
																}else if($value == 2){
																	$praying_direction_from_hotel_staff = 2;
																}else if($value == 3){
																	$praying_direction_from_hotel_staff = 3;
																}else {
																	$praying_direction_from_hotel_staff = 0;
																}
															}else{
																$praying_direction_from_hotel_staff = 0;
															}
														?>
														
														<div class="answer-box">
															<div class="radio">
																<label><input type="radio" name="praying_direction_from_hotel_staff" value="Yes, the praying direction can be obtained." checked /> Yes, the praying direction can be obtained.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="praying_direction_from_hotel_staff" value="No, the praying direction cannot be obtained." <?php if($praying_direction_from_hotel_staff == 2) { echo 'checked'; } ?> /> No, the praying direction cannot be obtained.</label>
															</div>
														</div><!-- /.answer-box -->
														<div class="question-box clearfix">
															<div class="icon-box">
																<img src="{{URL::asset('images/icon-05.jpg')}}" width="40" height="40" alt="" />
															</div><!-- /.icon-box -->
															<h3 class="q-title">Does the hotel provide the local prayer times for Muslims? *</h3>
														</div><!-- /.question-box -->
														
														<?php 
															if(isset($amenities)){
																if(isset($amenities[0])){
																	$value = (int) $amenities[0]->local_prayer_time_table;
																}else{
																	$value = 0;
																}
																if($value == 1){    
																	$local_prayer_time_table = 1;             
																}else if($value == 2){
																	$local_prayer_time_table = 2;                        
																}else if($value == 3){
																	$local_prayer_time_table = 3;
																}else {
																	$local_prayer_time_table = 0;
																}
															}else{  
																$local_prayer_time_table = 0;
															}
														?>
														
														<div class="answer-box">
															<div class="radio">
																<label><input type="radio" name="local_prayer_time_table" value="Yes, you can obtain a list of the local prayer times from the front desk." checked /> Yes, you can obtain a list of the local prayer times from the front desk.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="local_prayer_time_table" value="No, we do not provide the local prayer times." <?php if($local_prayer_time_table == 2) { echo 'checked'; } ?> /> No, we do not provide the local prayer times.</label>
															</div>
														</div><!-- /.answer-box -->
														<div class="question-box clearfix">
															<div class="icon-box">
																<img src="{{URL::asset('images/icon-06.jpg')}}" width="40" height="40" alt="" />
															</div><!-- /.icon-box -->
															<h3 class="q-title">Does the hotel provide a list of halal restaurants in the vicinity? *</h3>
														</div><!-- /.question-box -->
														
														<?php 
															if(isset($amenities)){
																if(isset($amenities[0])){
																	$value = (int) $amenities[0]->halal_restaurant_list;
																}else{
																	$value = 0;
																}
																if($value == 1){
																	$halal_restaurant_list = 1;
																}else if($value == 2){
																	$halal_restaurant_list = 2; 
																}else if($value == 3){
																	$halal_restaurant_list = 3;        
																}else {
																	$halal_restaurant_list = 0;
																}
															}else{              
																$halal_restaurant_list = 0;
															}
														?>
														
														<div class="answer-box">
															<div class="radio">
																<label><input type="radio" name="halal_restaurant_list" value="Yes, the hotel provides a list of halal restaurants." checked /> Yes, the hotel provides a list of halal restaurants.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="halal_restaurant_list" value="No, the hotel does not provide a list of halal restaurants." <?php if($halal_restaurant_list == 2) { echo 'checked'; } ?> /> No, the hotel does not provide a list of halal restaurants.</label>
															</div>
														</div><!-- /.answer-box -->
														<div class="question-box clearfix">
															<div class="icon-box">
																<img src="{{URL::asset('images/icon-07.jpg')}}" width="40" height="40" alt="" />
															</div><!-- /.icon-box -->
															<h3 class="q-title">Does the hotel provide a list of Mosques or Suraus (public praying rooms) in the vicinity? *</h3>
														</div><!-- /.question-box -->
														
														<?php 
															if(isset($amenities)){
																if(isset($amenities[0])){
																	$value = (int) $amenities[0]->mosque_or_suraus_list;
																}else{
																	$value = 0;
																}
																if($value == 1){
																	$mosque_or_suraus_list = 1;
																}else if($value == 2){
																	$mosque_or_suraus_list = 2;
																}else if($value == 3){
																	$mosque_or_suraus_list = 3;
																}else {
																	$mosque_or_suraus_list = 0;
																}
															}else{
																$mosque_or_suraus_list = 0;
															}
														?>
														
														<div class="answer-box">
															<div class="radio">
																<label><input type="radio" name="mosque_or_suraus_list" value="Yes, the hotel provides a list with Mosques/Suraus." checked /> Yes, the hotel provides a list with Mosques/Suraus.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="mosque_or_suraus_list" value="No, the hotel does not provide a list with Mosques/Suraus." <?php if($mosque_or_suraus_list == 2) { echo 'checked'; } ?> /> No, the hotel does not provide a list with Mosques/Suraus.</label>
															</div>
														</div><!-- /.answer-box -->
													</div>
												</div>
											</div>
										</div><!-- /.border-content -->
										<div class="border-content clearfix">
											<h2 class="title">Food & Beverages</h2>
											<div class="sub-panel mb0">
												<div class="sub-panel-sub clearfix">
													<div class="sub-panel-inner sub-panel-inner-p0">
														<div class="question-box bt-none clearfix">
															<div class="icon-box">
																<img src="{{URL::asset('images/icon-08.jpg')}}" width="40" height="40" alt="" />
															</div><!-- /.icon-box -->
															<h3 class="q-title">Are there alcoholic beverages in the room&rsquo;s mini-bar? *</h3>
														</div><!-- /.question-box -->
														
														<?php 
															if(isset($amenities)){
																if(isset($amenities[0])){
																	$value = (int) $amenities[0]->alcoholic_beverages;
																}else{
																	$value = 0;
																}
																if($value == 1){
																	$alcoholic_beverages = 1;                         
																}else if($value == 2){
																	$alcoholic_beverages = 2;  
																}else if($value == 3){
																	$alcoholic_beverages = 3;
																}else {
																	$alcoholic_beverages = 0;
																}
															}else{
																$alcoholic_beverages = 0;
															}
														?>
														
														<div class="answer-box">
															<div class="radio">
																<label><input type="radio" name="alcoholic_beverages" value="Yes, we provide alcoholic beverages in the mini-bar." <?php if($alcoholic_beverages == 1) { echo 'checked'; } ?> /> Yes, we provide alcoholic beverages in the mini-bar.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="alcoholic_beverages" value="No, we do not provide alcoholic beverages in the mini-bar.." checked /> No, we do not provide alcoholic beverages in the mini-bar..</label>
															</div>
														</div><!-- /.answer-box -->
														<div class="question-box clearfix">
															<div class="icon-box">
																<img src="{{{URL::asset('images/icon-09.jpg')}}}" width="40" height="40" alt="" />
															</div><!-- /.icon-box -->
															<h3 class="q-title">Does the hotel provide certified halal food? *</h3>
														</div><!-- /.question-box -->
														
														<?php 
															if(isset($amenities)){
																if(isset($amenities[0])){
																	$value = (int) $amenities[0]->halal_food;
																}else{
																	$value = 0;
																}
																if($value == 1){
																	$halal_food = 1;
																}else if($value == 2){
																	$halal_food = 2;
																}else if($value == 3){
																	$halal_food = 3;
																}else {
																	$halal_food = 0;
																}
															}else{
																$halal_food = 0;
															}
														?>
														
														<div class="answer-box">
															<div class="radio">
																<label><input type="radio" name="halal_food" value="Yes, the hotel provides certified halal food." checked /> Yes, the hotel provides certified halal food.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="halal_food" value="Halal Food can be pre-ordered before arrival." />  Halal Food can be pre-ordered before arrival.</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="halal_food" value="No, the hotel does not provide certified halal food." <?php if($halal_food == 3) { echo 'checked'; } ?> /> No, the hotel does not provide certified halal food.</label>
															</div>
														</div><!-- /.answer-box -->
														
													</div>
												</div>
											</div>
										</div><!-- /.border-content -->
										<div class="bottom-center">
											<div class="col-md-6">
												<button type="button" class="btn btn-default" onclick="$('#form-tripfez-amenities').attr('action','{{URL::to('/')}}/amenities/update_amenities').submit();" >Save as Draft</button>
											</div>
											<div class="col-md-6">
												<button type="submit" class="btn btn-warning-lg">Submit for Review</button>
											</div>
										</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
		
		@include('footer')