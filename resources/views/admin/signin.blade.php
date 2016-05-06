
@include('admin.header.header_signin')
  <section id="content">
    <div class="main padder">
      <div class="row">
        <div class="col-lg-4 col-lg-offset-4 m-t-large">
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
          <section class="panel">
            <header class="panel-heading text-center h4">
              Sign in
            </header>
            <form action="{{URL::to('/')}}/admin_panel/login" method="get" class="panel-body">
				{!! csrf_field() !!}
				<div class="block">
					<label class="control-label">Email</label>
					<input name="email" type="email" placeholder="test@example.com" class="form-control" value="{{old('email')}}">
				</div>
				<div class="block">
					<label class="control-label">Password</label>
					<input type="password" name="password" id="inputPassword" placeholder="Password" class="form-control" value="">
				</div>
              <!-- <div class="checkbox">
                <label>
                  <input type="checkbox"> Keep me logged in
                </label>
              </div> -->
			  <div class="line line-dashed"></div>
			  <button type="submit" class="btn btn-facebook btn-block m-b-small">Sign in</button>
              <a href="#" class="pull-right m-t-mini"><small>Forgot password?</small></a>
              <!-- <a href="#" class="btn btn-facebook btn-block m-b-small"><i class="fa fa-facebook pull-left"></i>Sign in with Facebook</a>
              <a href="#" class="btn btn-twitter btn-block"><i class="fa fa-twitter pull-left"></i>Sign in with Twitter</a> -->          
             <!-- <p class="text-muted text-center"><small>Do not have an account?</small></p>
              <a href="signup.html" class="btn btn-white btn-block">Create an account</a> -->
            </form>
          </section>
        </div>
      </div>
    </div>
  </section>
  
  @include('admin.footer.footer_signin')