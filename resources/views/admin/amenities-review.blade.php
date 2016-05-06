
@include('admin.header.header')
@include('admin.common.nav')

  <section id="content">
    <section class="main padder">
      <div class="row"> 
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
             <h3>Review Amenities</h3>
			
            </header>
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
            <div class="panel-body">
             </div>
            <div class="table-responsive">
              <table class="table table-striped b-t text-small">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
				<form action="" id="form-client" method="post">
				<?php 
				if(count($amenities) > 0){ 
					foreach($amenities as $data){ ?>	
					 <tr>
						<td><?php echo $data->id; ?></td>	
						<td><?php echo $data->user_id; ?></td>	
						<td>
							<?php 
								$user = App\User::find($data->user_id);
								if($user->title == 1){
									$title = 'Mr';
								}else{
									$title = 'Mrs';
								}
								 
								echo $title.'.'.$user->first_name.' '.$user->last_name;
							?>
						</td>	
						<td><?php if($data->status){echo 'Approved';}else{echo 'Hold';} ?></td>	
						<td>
							<a href="{{URL::to('/')}}/admin_panel/amenities/approve_amenities/<?php echo $data->id; ?>" class="btn btn-success btn-xs">Approve</a>
							<a href="{{URL::to('/')}}/admin_panel/amenities/hold_amenities/<?php echo $data->id; ?>" class="btn btn-active btn-xs">Hold</a>
							<a href="{{URL::to('/')}}/admin_panel/amenities/view_single_amenities/<?php echo $data->id; ?>" class="btn btn-info btn-xs">View</a>
							<a href="{{URL::to('/')}}/admin_panel/amenities/delete_amenities/<?php echo $data->id; ?>" class="btn btn-danger btn-xs" onClick="if(confirm('Are you sure to delete?')) {return true;} else{return false;}">Delete</a>
						</td>	
					</tr>
					<?php }
				}else{?>  
					<tr>
						<td colspan="5" style="text-align: center;"><h5> No amenities to review</h5></td>
					</tr>
				<?php } ?>
					
				</form>
                </tbody>
              </table>
            </div>
           </section>
        </div>
      </div>
    </section>
  </section>
 
  @include('admin.footer.footer')