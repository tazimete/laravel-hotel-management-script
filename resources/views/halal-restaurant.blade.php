
	@include('header')
	@include('sidebar')
		
		<div class="widecolumn matchHeight" style="height: 1168px;">
					<div class="widecolumn-sub">
						<div class="widecolumn-inner">
							<div class="panel-heading">
								<h2 class="panel-title">Halal Restaurants</h2>
							</div>
							<div class="panel-body">
								<div class="text-center text-unmute pb10">
									<p><em>Find your Halal Restaurant in the city / vicinity to have an awesome food!</em></p>
								</div>
								<div class="sub-panel mb0">
									<div class="sub-panel-sub">
										<div class="sub-panel-inner sub-panel-inner-pbt0">
											<div class="sub-panel-bottom clearfix">
												<div class="filter-select">
													<form method="post" action="#" class="form-inline">
														<fieldset>
															<label>Filter by Cuisine </label>
															<div class="form-bg-group">
																<select name="select" class="form-control">
																	<option value="Select">Select</option>
																</select>
															</div>
														</fieldset>
													</form>
												</div>
												<div class="small-panel small-panel-top">
													<div class="small-panel-sub small-panel-bg-none">
														<div class="small-panel-inner ptb6">
														</div>
													</div>
												</div>
												<div class="sub-panel-gray">
													<div class="sub-panel-gray-sub">
														<div class="sub-panel-gray-inner">
															<div class="card-holder">
																
																<?php if(count($resturants) > 0) {
																	foreach($resturants as $resturant){
																		?>
																		<div class="card-col-6">
																	<div class="card">
																		<div class="card-sub">
																			<div class="card-inner">
																				<table class="table table-card">
																					<tbody><tr>
																						<td class="align-top">
																							<div class="item-thumbnail">
																								<img width="78" height="78" alt="food" src="{{URL::asset('/')}}/<?php echo $resturant->picture; ?>">
																							</div>
																						</td>
																						<td class="border-bottom">
																							<div class="item-description">
																								<h4><?php echo $resturant->name; ?></h4>
																								<p><?php echo $resturant->address; ?></p>
																							</div>
																						</td>
																					</tr>
																					<tr>
																						<td class="text-center border-right item-type">
																							Cuisine
																						</td>
																						<td>
																							<ul class="cat-list">
																								<li><a href="#"><i class="tag-icon"></i> <span><?php echo $resturant->cuisine; ?></span></a></li>
																								<li><a href="#"><i class="tag-icon"></i> <span>Pakistani</span></a></li>
																								<li><a href="#"><i class="tag-icon"></i> <span>Mediterranean</span></a></li>
																							</ul>
																						</td>
																					</tr>
																				</tbody></table>
																			</div>
																		</div>
																	</div><!-- /.card -->
																	</div><!-- /.card-col-6 -->
																	<?php }} else{
																	echo '<h2> No halal restaurant available currently</h2>';
																}?>
																
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="sub-panel sub-panel-top">
									<div class="sub-panel-sub">
										<div class="sub-panel-inner">
											<a href="#" class="more"><i class="arrow"></i> Show more <i class="arrow r-arrow"></i></a>
										</div>
									</div>
								</div>
								<div class="panel-download">
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