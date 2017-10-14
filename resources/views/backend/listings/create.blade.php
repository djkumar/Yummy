@include('backend/adminheader') 

   @include('backend/adminnav')


   
   @include('backend/sidebar')

   
        <div id="main" role="main">

            <!-- RIBBON -->
            <div id="ribbon">

            

                <!-- breadcrumb -->
                <ol class="breadcrumb">
                    <li> <a href="{{ url('admin') }}"> Home </a></li><li>Listings</li>
                </ol>
                <!-- end breadcrumb -->

                <!-- You can also add more buttons to the
                ribbon for further usability

                Example below:

                <span class="ribbon-button-alignment pull-right">
                <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
                <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
                <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
                </span> -->

            </div>
            <!-- END RIBBON -->

            <!-- MAIN CONTENT --> 
            <div id="content">
              <div class="row">
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
						<h1 class="page-title txt-color-blueDark">
							<i class="fa fa-edit fa-fw "></i> 
								Listings 
							<span>&gt; 
								Add
							</span>
						</h1>
					</div>
				
					
					</div>
                    <div class="row">
                    <div class="col-sm-12">
                        
                        
                
                        
                    </div>
                </div>
                
				
<section id="widget-grid" class="">
				
					<!-- START ROW -->
					<div class="row">
						<!-- NEW COL START -->
						<article class="col-sm-12 col-md-12 col-lg-6">
				
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-listsings" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" 	data-widget-togglebutton="false"
								data-widget-deletebutton="false"
								data-widget-fullscreenbutton="false" >
								<!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
				
								data-widget-colorbutton="false"
								data-widget-editbutton="false"
								data-widget-togglebutton="false"
								data-widget-deletebutton="false"
								data-widget-fullscreenbutton="false"
								data-widget-custombutton="false"
								data-widget-collapsed="true"
								data-widget-sortable="false"
				
								-->
								<header>
									<span class="widget-icon"> <i class="fa fa-edit"></i> </span>
									<h2>Listings </h2>
				
								</header>
				

				
				<div>
				
								
				
							
 
								 

				<form class="smart-form" role="form" method="POST" action="{{ url('admin/listings/store') }}" enctype="multipart/form-data">
											<header>
												Add Listings
											</header>
				
											<fieldset>

                      {{ csrf_field() }}
                           <section>
                                    <label class="label">Listing Name :</label><label class="input">
                                    <input placeholder="e.g Your listing name here ..." name="listing_name" type="text">
                                </label>
                              </section>

                           <section>
                                    <label>Tagline (optional) :</label><label class="input">
                                    <input placeholder="e.g Vitae Labortis Restaurant" name="listing_tag" type="text"></label>
                              </section>

        <section>
                                                    <label class="label">Logo </label>
                                                    <div class="input input-file">
                                                        <span class="button"><input type="file" id="filelogo" name="listing_logo" onchange="this.parentNode.nextSibling.value = this.value">Browse</span><input type="text" placeholder="Include a file" readonly="">
                                                    </div>
                                                </section>
                                                
                            <section>
                                    <label class="label"> Description :</label><label class="textarea">           
                                <textarea name="listing_desc" placeholder="Description" rows="4"></textarea>
                            </label> <!-- end .form-group -->
</section>
                             <section>
                                    <label class="label">Listing category :</label>
                                  <label class="select">
                                    <select name="listing_category"> <option value=""> Select </option>
                                       @foreach($categories as $category)
               <option value="{{ $category->id}}"> {{ $category->category_name }} </option>
            @endforeach
            
                                    </select>
                                  </label>
                               
                            </section> 

 <section>
                                    <label class="label"> Address :</label>   
                                    <label class="input">  <input type="text" name="address" value="" />       </label>                              
                                    
                              </section>
                              
   <section>
                                    <label class="label"> Country :</label>   
                                    <label class="select">  <select name="country"> <option value="US">United States</option> </select>        </label>                              
                                    
                              </section>
                           <section>
                                    <label class="label"> State :</label> 
                                    <label class="select">  <select name="state"> <option value=""> Select</option>  
                                      @foreach($states as $state)
               <option value="{{ $state->state_code}}"> {{ $state->state}} </option>
            @endforeach
           </select>
                                               
                                    </label>
                              </section>
    <section>
                                    <label class="label"> City :</label>   
                                    <label class="input">  <input type="text" name="city" value="" />       </label>                              
                                    
                              </section>
                              
    <section>
                                    <label class="label"> Zipcode :</label>  
                                    <label class="input"> <input type="text" name="zipcode" value=""></label>                                     
                                    
                              </section>

                           <section>
<div id="pac-container">
     <label class="label">Location  :</label>
                                    <label class="input"> <input   id="pac-input" placeholder="e.g 79 Leonard St , NewYork" name="listing_location" type="text">
                             </label>

      </div>
                                                                           
  </section>                                               


                                   
                           <section>
                          <div style="display:none;"> 

<input type="text" name="latitude" id="latitude" value="">  <input type="text" name="longitude" id="longitude" value="">    </div>   
                        
  <div class="google_maps" id="map"></div>
                             <div id="infowindow-content">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>


    </div>

</section>
<section>
                                <label class="label">PhoneNumber (optional) :</label>
                                    <label class="input">  <input placeholder="e.g +84 0939793979" name="contact_number" type="text"> </label>
                              </section>
                           <section>
                                    <label class="label">Website (optional) :</label>
                                  <label class="input">    <input placeholder="e.g https://themeforest.net/user/wecookcode/portfolio" name="website" type="text">
                              </label>
                              </section>
                           <section>
                                    <label class="label">Facebook Link (optional) :</label>
                                 <label class="input">     <input placeholder="e.g yournamecompany" name="fbname" type="text"> </label>
                              </section>
                           <section>
                                    <label class="label">Twitter Link (optional) :</label>
                                  <label class="input">    <input placeholder="e.g @yournamecompany" name="twittername" type="text"> </label>

                              </section>
                           <section>
                                    <label class="label">Googleplus Link (optional) :</label>
                                     <label class="input">  <input placeholder="e.g yournamecompany" name="gplusname" type="text"> </label>
                              </section>




                                <section>
                                                    <label class="label">Add Gallery</label>
                                                    <div class="input input-file">
                                                        <span class="button"><input type="file" id="file" name="galler" onchange="this.parentNode.nextSibling.value = this.value">Browse</span><input type="text" placeholder="Include some files" readonly="">
                                                    </div>
                                                </section>








<section class="col col-6"> 
                                                    <label class="label"> Operation days From </label>
                                                    <label class="select">
                                                        <select name="start_day">
                                                        <option value="">Choose</option>


<option value="Monday">Monday</option>
<option value="Tuesday">Tuesday</option>
<option value="Wednesday">Wednesday</option>
<option value="Thursday">Thursday</option>
<option value="Friday">Friday</option>
<option value="Saturday">Saturday</option>
<option value="Sunday">Sunday</option>
                                                        </select> <i></i> </label>
                                                </section>



                                                <section class="col col-6">
                                                    <label class="label"> Operation days To </label>
                                                    <label class="select">
                                                        <select name="end_day">
                                                          <option value="">Choose</option>
<option value="Monday">Monday</option>
<option value="Tuesday">Tuesday</option>
<option value="Wednesday">Wednesday</option>
<option value="Thursday">Thursday</option>
<option value="Friday">Friday</option>
<option value="Saturday">Saturday</option>
<option value="Sunday">Sunday</option>
                                                        </select> <i></i> </label>
                                                </section>





                                                <section class="col col-6">
                                                    <label class="label"> Operation hours From </label>
                                                    <label class="select">
                                                        <select name="start_time">
                                                          
        <option value="">Choose</option>
        <option value="00:00 am">00:00      am</option>
<option value="00:30 am">00:30      am</option>
<option value="01:00 am">01:00      am</option>
<option value="01:30 am">01:30      am</option>
<option value="02:00 am">02:00      am</option>
<option value="02:30 am">02:30      am</option>
<option value="03:00 am">03:00      am</option>
<option value="03:30 am">03:30      am</option>
<option value="04:00 am">04:00      am</option>
<option value="04:30 am">04:30      am</option>
<option value="05:00 am">05:00      am</option>
<option value="05:30 am">05:30      am</option>
<option value="06:00 am">06:00      am</option>
<option value="06:30 am">06:30      am</option>
<option value="07:00 am">07:00      am</option>
<option value="07:30 am">07:30      am</option>
<option value="08:00 am">08:00      am</option>
<option value="08:30 am">08:30      am</option>
<option value="09:00 am">09:00      am</option>
<option value="09:30 am">09:30      am</option>
<option value="10:00 am">10:00      am</option>
<option value="10:30 am">10:30      am</option>
<option value="11:00 am">11:00      am</option>
<option value="11:30 am">11:30      am</option>
                                                        </select> <i></i> </label>
                                                </section>



                                                <section class="col col-6">
                                                    <label class="label">Operation hours To</label>
                                                    <label class="select">
                                                        <select name="end_time">
                                                          
        <option value="">Choose</option>  <option value="">Choose</option>
            <option value="00:00 pm">00:00 pm</option>
        <option value="00:30 pm">00:30 pm</option>
        <option value="01:00 pm">01:00 pm</option>
        <option value="01:30 pm">01:30 pm</option>
        <option value="02:00 pm">02:00 pm</option>
        <option value="02:30 pm">02:30 pm</option>
        <option value="03:00 pm">03:00 pm</option>
        <option value="03:30 pm">03:30 pm</option>
        <option value="04:00 pm">04:00 pm</option>
        <option value="04:30 pm">04:30 pm</option>
        <option value="05:00 pm">05:00 pm</option>
        <option value="05:30 pm">05:30 pm</option>
        <option value="06:00 pm">06:00 pm</option>
        <option value="06:30 pm">06:30 pm</option>
        <option value="07:00 pm">07:00 pm</option>
        <option value="07:30 pm">07:30 pm</option>
        <option value="08:00 pm">08:00 pm</option>
        <option value="08:30 pm">08:30 pm</option>
        <option value="09:00 pm">09:00 pm</option>
        <option value="09:30 pm">09:30 pm</option>
        <option value="10:00 pm">10:00 pm</option>
        <option value="10:30 pm">10:30 pm</option>
        <option value="11:00 pm">11:00 pm</option>
        <option value="11:30 pm">11:30 pm</option>
                                                        </select> <i></i> </label>
                                                </section>


		</fieldset>
											
											<footer>
												<button type="submit" class="btn btn-primary">
													Submit
												</button>
												<button type="button" class="btn btn-default" onclick="window.history.back();">
													Back
												</button>
											</footer>
										</form>




   <section> 


<div class="jarviswidget jarviswidget-color-blueLight" id="wid-id-df" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" 	data-widget-togglebutton="false"
								data-widget-deletebutton="false"
								data-widget-fullscreenbutton="false"  >
<header>
					<span class="widget-icon"> <i class="fa fa-cloud"></i> </span>
					<h2>Gallery image </h2>

				</header>

					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->

					</div>
					<!-- end widget edit box -->

					<!-- widget content -->
					<div class="widget-body">

												<form action="{{ url('admin/listings/store') }}" enctype="multipart/form-data"  class="dropzone" id="mydropzone"> {{ csrf_field() }} </form>


					</div>
					<!-- end widget content -->

				</div>
				
				</section>
				
				

	    <script>
	    
		


		
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 35.9008896, lng: -104.4974195},
          zoom: 5
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
           draggable: true,
          animation: google.maps.Animation.DROP,
          anchorPoint: new google.maps.Point(0, -29)
        });


 google.maps.event.addListener(marker, "position_changed", function() {
      var position = marker.getPosition();
      
      $('#latitude').val(marker.getPosition().lat());
      $('#longitude').val(marker.getPosition().lng());
      
    });


        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        
      }


    </script>
    
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbm5j6CqocZWCUIi0LvfHcQ0WtMCaf2Dk&libraries=places&callback=initMap"
  type="text/javascript"></script>
  <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 450px;
        width: 600px;
      }
     
    </style>
									
										

</div>
</div>
</article>
</div>

            </div>
            <!-- END MAIN CONTENT -->

        </div>
        <!-- END MAIN PANEL -->
        
         <script src="{{ asset('/backend/js/plugin/dropzone/dropzone.min.js') }}" ></script>
<script>
    	 $(document).ready(function() {

    
Dropzone.autoDiscover = false;
			$("#mydropzone").dropzone({
				//url: "/file/post",
				addRemoveLinks : true,
				maxFilesize: 0.5,
				dictDefaultMessage: '<span class="text-center"><span class="font-lg visible-xs-block visible-sm-block visible-lg-block"><span class="font-lg"><i class="fa fa-caret-right text-danger"></i> Drop files <span class="font-xs">to upload</span></span><span>&nbsp&nbsp<h4 class="display-inline"> (Or Click)</h4></span>',
				dictResponseError: 'Error uploading file!'
			});
		 
		 
	 });
		

</script>

@include('backend/adminfooter')
 