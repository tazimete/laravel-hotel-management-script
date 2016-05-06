
@include('admin.header.header')
@include('admin.common.nav')

  <section id="content">
    <section class="main padder">
      <div class="row"> 
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
             <h3>Amenities#<?php if(isset($amenities)){echo $amenities->id;}?> (<?php if(isset($amenities)){if($amenities->status == 0){echo 'Hold';} else{ echo'Approved';}}?>)</h3>
			
            </header>
            <div class="panel-body">
             </div>
            <div class="table-responsive">
              <table class="table table-striped b-t text-small">
                <thead>
                  <tr>
                    <th width="50%" style="font-size: 16px;">Question</th>
                    <th width="50%" style="font-size: 16px;">Answer</th>
                  </tr>
                </thead>
                <tbody>
				<?php 
				if(isset($amenities)){ ?>	
					 <tr>
						<th>Does the hotel provide a Muslim prayer mat?</th>	
						<th><?php echo $amenities->muslim_prayer_mat; ?></th>		
					</tr>
					<tr>
						<th>Is there a Qibla Direction in the room?</th>	
						<th><?php echo $amenities->qibla_direction; ?></th>		
					</tr>
					<tr>
						<th>Do you provide the Quran in the room?</th>	
						<th><?php echo $amenities->quran_in_room; ?></th>		
					</tr>
					<tr>
						<th>Can the Muslim praying direction be obtained from the hotel staff?</th>	
						<th><?php echo $amenities->praying_direction_from_hotel_staff; ?></th>		
					</tr>
					<tr>
						<th>Does the hotel provide the local prayer times for Muslims?</th>	
						<th><?php echo $amenities->local_prayer_time_table; ?></th>		
					</tr>
					<tr>
						<th>Does the hotel provide a list of halal restaurants in the vicinity?</th>	
						<th><?php echo $amenities->halal_restaurant_list; ?></th>		
					</tr>
					<tr>
						<th>Does the hotel provide a list of Mosques or Suraus (public praying rooms) in the vicinity?</th>	
						<th><?php echo $amenities->mosque_or_suraus_list; ?></th>		
					</tr>
					<tr>
						<th>Are there alcoholic beverages in the room’s mini-bar?</th>	
						<th><?php echo $amenities->alcoholic_beverages; ?></th>		
					</tr>
					<tr>
						<th>Does the hotel provide certified halal food?</th>	
						<th><?php echo $amenities->halal_food; ?></th>		
					</tr>
					<?php
				}?>
					
                </tbody>
              </table>
            </div>
           </section>
		   <div class="col-lg-12 col-lg-offset-5">                      
                <a href="{{URL::to('/')}}/admin_panel/amenities/hold_amenities/<?php echo $amenities->id; ?>" class="btn btn-active">Hold</a>
                <a href="{{URL::to('/')}}/admin_panel/amenities/approve_amenities/<?php echo $amenities->id; ?>" class="btn btn-success">Approved</a>
            </div>
        </div>
      </div>
    </section>
  </section>
 
  @include('admin.footer.footer')