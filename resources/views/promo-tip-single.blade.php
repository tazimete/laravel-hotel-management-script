
	@include('header')
	@include('sidebar')
		
		<div class="widecolumn matchHeight" style="height: 1066px;">
					<div class="widecolumn-sub">
						<div class="widecolumn-inner">
						<?php if(isset($promo_tip)){}?>
							<div class="panel-heading">
								<h2 class="panel-title">Tip <?php echo $promo_tip->id; ?></h2>
							</div>
							<div class="container-panel-body">
								<div class="container-panel mt10">
									<div class="container-panel-sub">
										<div class="container-panel-inner clearfix">
											<div class="entry-content clearfix">
												<h2 class="singal-title"><?php echo $promo_tip->title; ?></h2>
												<!-- <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
												<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p> -->
												<div class="singal-img">
													<img width="440" height="298" alt="Singal Img" src="{{URL::to('/')}}/promo-tips-images/<?php echo $promo_tip->image_url; ?>">
												</div>
												<p><?php echo $promo_tip->description; ?></p>
												<div class="col-md-12 tip-nav-container">
													<div class="col-md-6">
														<a class="promo-tip-prev" href="{{URL::to('/')}}/promotional-tip/prev/single/<?php echo $promo_tip->id; ?>">Previous tip</a>
													</div>
													<div class="col-md-6">
														<a class="promo-tip-next" href="{{URL::to('/')}}/promotional-tip/next/single/<?php echo $promo_tip->id; ?>">Next tip</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- /.container-panel -->
							</div>
						</div>
					</div>
				</div>
		
		@include('footer')