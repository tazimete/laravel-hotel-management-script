
@include('admin.header.header')
@include('admin.common.nav')

  <section id="content">
    <section class="main padder">
      <div class="clearfix">
        <h3><i class="fa fa-edit"></i>Settings</h3>
      </div>
	  <?php ?>
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <section class="panel">
            <div class="panel-body">
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
              <form action="{{URL::to('/')}}/admin_panel/update_settings" class="form-horizontal" method="post" enctype="multipart/form-data" data-validate="parsley"> 
				  {!! csrf_field() !!}
				<div class="form-group">
                  <label class="col-lg-3 control-label">Email for request certificate</label>
                  <div class="col-lg-8">
                    <input type="text" name="email-request-certificate" value="<?php if(isset($setting_data)){echo $setting_data->email_request_certificate; }?>" placeholder="example@test.com" data-required="true" class="form-control" data-type="email"> 
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Email for marketing page</label>
                  <div class="col-lg-8">
                    <input type="text" name="email-marketing-page" value="<?php if(isset($setting_data)){echo $setting_data->email_marketing_page; }?>" placeholder="example@test.com" class="bg-focus form-control" data-required="true" data-type="email">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">File for marketing page</label>
                  <div class="col-lg-9 media">
                    <div class="bg-light pull-left text-center media-large thumb-large"><i class="fa fa-user inline fa fa-light fa fa-3x m-t-large m-b-large"></i></div>
                    <div class="media-body">
                      <input type="file" name="file-marketing-page" class="btn btn-sm btn-info m-b-small"><br>
                    </div>
                  </div>
                </div> 
                <div class="form-group">
                  <div class="col-lg-9 col-lg-offset-3">                      
                    <a href="dashboard" class="btn btn-danger">Cancel</a>
                    <input type="submit" class="btn btn-primary" value="Update">
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>
    </section>
  </section>
  @include('admin.footer.footer')