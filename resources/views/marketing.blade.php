
	@include('header')
	@include('sidebar')
	
	<div class="main">
			<div class="container">
				<div class="widecolumn matchHeight">
					<div class="widecolumn-sub">
						<div class="widecolumn-inner">
							<div class="panel-heading">
								<h2 class="panel-title">Marketing</h2>
							</div>
							<div class="text-center text-unmute mt20">
								<p><em>Celebrate your accomplishment by displaying this logo on your site!</em></p>
							</div>
							<div class="container-panel-body clearfix">
								<div class="container-panel">
									<div class="container-panel-sub">
										<div class="container-panel-inner clearfix">
											<div class="box">
												<img src="{{URL::asset('images/salam_standard_bronze_img.png')}}" width="171" height="171" alt="Salam Standard Bronze" />
												<p>Logo preview (actual size)</p>
											</div>
											<div class="box box-center">
												<img src="{{URL::asset('images/salam_standard_silver_img.png')}}" width="171" height="171" alt="Salam Standard Silver" />
												<p>Logo preview (actual size)</p>
											</div>
											<div class="box">
												<img src="{{URL::asset('images/salam_standard_gold_img.png')}}" width="171" height="171" alt="Salam Standard Gold" />
												<p>Logo preview (actual size)</p>
											</div>
										</div>
									</div>
								</div><!-- /.container-panel -->
								<div class="col-md-12">
									<div class="ibox-panel">	
										<div class="ibox-panel-sub">	
											<div class="ibox-panel-inner clearfix matchHeight">	
												<h3>Get your code</h3>
												<p>Select your language, highlight all of the customized HTML code in the box then copy and paste it into an HTML page on your website. Alternatively, use the "Email this code" link below to send this code to your website manager who can add it to your site for you.</p>
												<p>You hereby agree that any and all uses of any Tripfez widget are governed by <a href="#">Tripfezes Content Terms of Use</a> and that your uses of the Tripfez widget will not violate these Terms of Use.</p>
												<form class="pt10" action="#" method="post">
													<div class="form-line">
														<select name="languge">
															<option value="English">English</option>
														</select>
													</div>
													<div class="form-line">
														<textarea name="textarea" readonly>
															<div id="TA_certificateOfExcellence903" class="TA_certificateOfExcellence">
															<ul id="uoGdyvh" class="TA_links jWAIwag6nq9">
															<li id="2195ls" class="Aehb8EM7ptw">
															<a target="_blank" href="http://www.tripadvisor.com/Hotel_Review-g298570-d608399-Reviews-Traders_Hotel_Kuala_Lumpur-Kuala_Lumpur_Wilayah_Persekutuan.html"><img src="http://www.tripadvisor.com/img/cdsi/img2/awards/CoE2015_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a>
															</li>
															</ul>
															</div>
															<script src="http://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=903&amp;locationId=608399&amp;lang=en_US&amp;year=2015&amp;display_version=2"></script>
														</textarea>
													</div>
													<div class="line-text">
														<span class="left">Select all</span>
														<span class="right"><a href="#">Email this code</a></span>
													</div>
												</form>
											</div>
										</div>
									</div><!-- /.ibox-panel -->
									<div class="ibox-panel">	
										<div class="ibox-panel-sub">	
											<div class="ibox-panel-inner clearfix matchHeight">	
												<h3>Easy ways to promote your service</h3>
												<div class="feed-element">
													<a class="left-img" href="#"><img src="{{URL::asset('images/small_img01.png')}}" width="81" height="81" alt="img" /></a>
													<div class="media-body">
														<h4><a href="{{URL::to('/')}}/request-certificate">Display a certificate in your property</a></h4>
														<p>As part of industry recognition, we can send a paper certificate which you can display proudly in your property. Let us know and we will send mail you the certficate. Please allow up to 8 weeks for the certificate to arrive.</p>
													</div>
												</div>
												<div class="feed-element">
													<a class="left-img" href="#"><img src="{{URL::asset('images/small_img02.png')}}" width="81" height="81" alt="img" /></a>
													<div class="media-body">
														<h4><a href="{{URL::to('/')}}/marketing/download_marketing_file">Get the word out via a press release</a></h4>
														<p>Send out a press release using our ready made template</p>
													</div>
												</div>
												<div class="feed-element">
													<a class="left-img" href="#"><img src="{{URL::asset('images/small_img03.png')}}" width="81" height="81" alt="img" /></a>
													<div class="media-body">
														<h4><a href="{{URL::to('/')}}/dashboard">Salam Standard Logo</a></h4>
														<p>Obtain Salam Standard logo for ease of printing and for use in marketing promotions</p>
													</div>
												</div>
												<div class="feed-element">
													<a class="left-img" href="#"><img src="{{URL::asset('images/small_img4.png')}}" width="81" height="81" alt="img" /></a>
													<div class="media-body">
														<h4><a href="{{URL::to('/')}}/promotional-tips">Promotional tips</a></h4>
														<p>Here are some of the ways you can promote the awards to maximize exposure</p>
													</div>
												</div>
											</div>
										</div>
									</div><!-- /.ibox-panel -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.main -->
		
		@include('footer')