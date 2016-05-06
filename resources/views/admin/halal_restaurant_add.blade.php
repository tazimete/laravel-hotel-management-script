

@include('admin.header.header')
@include('admin.common.nav')

  <section id="content">
    <section class="main padder">
      <div class="clearfix">
        <h3><i class="fa fa-edit"></i>Add Restaurant</h3>
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
											
              <form action="{{URL::to('/')}}/admin_panel/create_halal_restaurant" class="form-horizontal" method="post" data-validate="parsley" enctype="multipart/form-data"> 
				  {!! csrf_field() !!}
				<div class="form-group">
                  <label class="col-lg-3 control-label">Restaurant Name</label>
                  <div class="col-lg-8">
                    <input type="text" name="restaurant-name" value="<?php echo Input::old('restaurant-name')?>" placeholder="Seafood Halal Dining" data-required="true" class="form-control">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Cuisine</label>
                  <div class="col-lg-8">
                    <input type="text" name="restaurant-cuisine" value="<?php echo Input::old('restaurant-cuisine')?>" placeholder="cuisine" data-required="true" class="form-control">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Address</label>
                  <div class="col-lg-8">
                    <textarea name="restaurant-address" placeholder="11981 South Apopka Vineland Road, Orlando, FL 32836" class="form-control" id="promo-tip-description" rows="5" data-required="true"> <?php echo Input::old('restaurant-address')?> </textarea>
                 </div>
                </div>
				<div class="form-group">
                  <label class="col-lg-3 control-label">Photo</label>
                  <div class="col-lg-9 media">
                    <div class="bg-light pull-left text-center media-large thumb-large"><i class="fa fa-user inline fa fa-light fa fa-3x m-t-large m-b-large"></i></div>
                    <div class="media-body">
                      <input type="file" name="restaurant-picture" class="btn btn-sm btn-info m-b-small" data-required="true"><br>
                    </div>
                  </div>
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