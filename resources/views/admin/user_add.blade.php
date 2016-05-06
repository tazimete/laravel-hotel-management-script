

@include('admin.header.header')
@include('admin.common.nav')

  <section id="content">
    <section class="main padder">
      <div class="clearfix">
        <h3><i class="fa fa-edit"></i>Add User</h3>
      </div>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
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
											
              <form action="{{URL::to('/')}}/admin_panel/add_hotel_or_user" class="form-horizontal" method="get" data-validate="parsley"> 
				  {!! csrf_field() !!}
				<div class="form-group">
                  <label class="col-lg-3 control-label">Title</label>
                  <div class="col-lg-8">
                    <select class="form-control" id="filter-form-outlet" name="title">
                    <option value="1">Mr.</option>
                    <option value="2" >Mrs.</option>
                  </select>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">First Name</label>
                  <div class="col-lg-8">
                    <input type="text" name="first-name" value="<?php echo Input::old('first-name')?>" placeholder="John" data-required="true" class="form-control">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Last Name</label>
                  <div class="col-lg-8">
                    <input type="text" name="last-name" value="<?php echo Input::old('last-name')?>" placeholder="Deo" class="bg-focus form-control" data-required="true">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Email</label>
                  <div class="col-lg-8">
                    <input type="text" name="email" value="<?php echo Input::old('email')?>" placeholder="test@example.com" class="form-control" data-required="true" data-type="email">
				  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Password</label>
                  <div class="col-lg-8">
                    <input type="password" name="password" value="<?php echo Input::old('password')?>" placeholder="Password" class="form-control" data-required="true" autocomplete="off">
				  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Confirm Password</label>
                  <div class="col-lg-8">
                    <input class="form-control" type="password" name="confirm-password" placeholder="Confirm Password" data-required="true"/>
				  </div>
                </div>               
				<div class="form-group">
                  <input type="hidden" name="ss-base-url" class="form-control" id="ss-base-url" value=""/>
                </div>
                <div class="form-group">
                  <div class="col-lg-9 col-lg-offset-3">                      
                    <a href="" class="btn btn-danger">Cancel</a>
                    <input type="submit" class="btn btn-primary" value="Add">
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