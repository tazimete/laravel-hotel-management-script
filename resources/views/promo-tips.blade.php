
	@include('header')
	@include('sidebar')
		
		<div class="widecolumn matchHeight" style="height: 1081px;">
					<div class="widecolumn-sub">
						<div class="widecolumn-inner">
							<div class="panel-heading">
								<h2 class="panel-title">Promotional Tips</h2>
							</div>
							<div class="container-panel-body">
								<div class="text-center">
									<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <br> dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</em></p>
								</div>
								<?php if($promo_tips){
									foreach($promo_tips as $promo_tip){ ?>
										<div class="container-panel mt30">
											<div class="container-panel-sub">
												<div class="container-panel-inner clearfix">
													<div class="post-img">
														<img width="171" height="171" alt="Thamb Img" src="promo-tips-images/<?php echo $promo_tip->image_url; ?>">
													</div>
													<div class="post">
														<div class="post-panel">
															<div class="post-panel-inner">
																<h3><a href="{{URL::to('/')}}/promotional-tip/single/<?php echo $promo_tip->id; ?>"><?php echo $promo_tip->title; ?></a></h3>
																<p><?php echo $promo_tip->description; ?>... <a href="{{URL::to('/')}}/promotional-tip/single/<?php echo $promo_tip->id; ?>">Read more</a></p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- /.container-panel -->
								<?php }
								}?>
							</div>
						</div>
					</div>
				</div>
		
		@include('footer')