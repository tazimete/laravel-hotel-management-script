$(document).ready(function(){
	$('.matchHeight').matchHeight();
	
	$('.icon-info').qtip({    
		position: {
			my: 'top right'
		}
	});
	$('.icon-info-right').qtip({
		position: {
			my: 'top left'
		}
	});                             
	
	// hide .back-top first
	$('.back-top').hide();
	
	// fade in .back-top         
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('.back-top').fadeIn();
			} else {
				$('.back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('.back-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 600);
			return false;
		});
	});
	
	 
	//File uploading in setting page 
	$("#upload_link").on('click', function(e){
        e.preventDefault();
        $("#upload:hidden").trigger('click');
    });   
	
	//Google Map Activities 
	//AutoComplete Place List
	var inputCityList = document.getElementById('tripfez_autocomplete_city');
			
			var mapForCityList = new google.maps.Map(inputCityList, {
				center: {lat: 37.1, lng: -95.7},
				zoom: 13
			});                                

			var autoCompleteForCityList = new google.maps.places.Autocomplete(inputCityList);
			autoCompleteForCityList.bindTo('bounds', mapForCityList);
			autoCompleteForCityList.setComponentRestrictions({country: "MYS"});
			                         
			autoCompleteForCityList.addListener('place_changed', function() {
				var place = autoCompleteForCityList.getPlace();
				if (!place.geometry) {
				  window.alert("Autocomplete's returned place contains no geometry");
				  return;
				}      
				
				var lat = place.geometry.location.lat();
				var lng = place.geometry.location.lng();
				$('#city-lat').val(lat);
				$('#city-lng').val(lng);
				alert(place.geometry.location.lng());  

				 /*var map = new google.maps.Map(document.getElementById('map'), {
					center: {lat: lat, lng: lng},
					zoom: 6
				  });
				  var infoWindow = new google.maps.InfoWindow({map: map});*/
				  

					var LatLng = new google.maps.LatLng(lat, lng);
					var mapOptions = {
						center: LatLng, 
						zoom: 13
						//mapTypeId: google.maps.MapTypeId.ROADMAP
					};
					
					var map = new google.maps.Map(document.getElementById("map"), mapOptions);
					var marker = new google.maps.Marker({
						position: LatLng,   
						map: map, 
						title: "<div style = 'height:60px;width:200px'><b>Your location:</b><br />: "+place.name
					}); 
					
					google.maps.event.addListener(marker, "click", function (e) {
						var infoWindow = new google.maps.InfoWindow();
						infoWindow.setContent(marker.title);
						infoWindow.open(map, marker);
					});
			  });       

});