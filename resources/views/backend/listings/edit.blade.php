@include('backend/adminheader')

      @include('backend/adminnav')


   
   @include('backend/sidebar')

   
        <div id="main" role="main">

            <!-- RIBBON -->
            <div id="ribbon">

            

                <!-- breadcrumb -->
                <ol class="breadcrumb">
                    <li> <a href="{{ url('admin') }}"> Home</a></li><li>Listings</li>
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
				
								
				
							
 
								 

				<form class="smart-form" role="form" method="POST" action="{{ url('admin/listings/update', $listing->id) }}" enctype="multipart/form-data">
											<header>
												Add Listings
											</header>
				
											<fieldset>

                      {{ csrf_field() }}
                           <section>
                                    <label class="label">Listing Name :</label><label class="input">
                                    <input placeholder="e.g Your listing name here ..." name="listing_name" type="text" value="{{ $listing->listing_name }}">
                                </label>
                              </section>

                           <section>
                                    <label>Tagline (optional) :</label><label class="input">
                                    <input placeholder="e.g Vitae Labortis Restaurant" name="listing_tag" type="text" value="{{ $listing->listing_tag }}"></label>
                              </section>
        <section>
                                                    <label class="label">Logo </label>
                                                    <div class="input input-file">
                                                        <span class="button"><input type="file" id="filelogo" name="listing_logo" onchange="this.parentNode.nextSibling.value = this.value">Browse</span><input type="text" placeholder="Include a file" readonly="">
                                                    </div>
                                                </section>
                                                
                                                <section>
                                                    
                                                    <img src=" {{ url('public/uploads/listing_logo/'.$listing->listing_logo) }} " style="width:200px;" />
                                                </section>
                            <section>
                                    <label class="label"> Description :</label><label class="textarea">           
                                <textarea name="listing_desc" placeholder="Description" rows="4">{{ $listing->listing_desc }}</textarea>
                            </label> <!-- end .form-group -->
</section>
                       <section>
                                    <label class="label">Listing category :</label>
                                  <label class="select">
                                    <select name="listing_category"> <option value=""> Select </option>
                                       @foreach($categories as $category)
               <option value="{{ $category->id }}"  {{ old('listing_category',$category->id)==$listing->listing_category?'selected':''  }} > {{ $category->category_name }} </option>
            @endforeach
            
                                    </select>
                                  </label>
                               
                            </section> 
                            
                            
 <section>
                                    <label class="label"> Address :</label>   
                                    <label class="input">  <input type="text" name="address" value="{{ $listing->address }}" />       </label>                              
                                    
                              </section>
                               <section>
                                    <label class="label"> Country :</label>   
                                    <label class="select">  <select name="country"> <option value="US">United States</option> </select>        </label>                              
                                    
                              </section>
   <section>
                                    <label class="label"> State :</label> 
                                    <label class="select">  <select name="state"> <option value=""> Select</option>  
                                      @foreach($states as $state)
               <option value="{{ $state->state_code}}" {{ old('state', $state->state_code)==$listing->state?'selected':'' }}>{{ $state->state}}</option>
            @endforeach
           </select>
           </select>                                      
                                    </label>
                              </section>
                              
    <section>
                                    <label class="label"> City :</label>   
                                    <label class="input">  <input type="text" name="city" value="{{ $listing->city }}" />       </label>                              
                                    
                              </section>
                              
    <section>
                                    <label class="label"> Zipcode :</label>  
                                    <label class="input"> <input type="text" name="zipcode" value="{{ $listing->zipcode }}"></label>                                     
                                    
                              </section>
                           <section>
<div id="pac-container">
     <label class="label">Location  :</label>
                                    <label class="input"> <input   id="pac-input" placeholder="e.g 79 Leonard St , NewYork" name="listing_location" type="text">
                             </label>

      </div>
                            </section>                                               
     
                           <section>
                          <div style="display:none;">  <input type="text" name="latitude" id="latitude" value="{{ $listing->latitude }}">  <input type="text" name="longitude" id="longitude" value="{{ $listing->longitude }}">      
 </div>
  <div class="google_maps" id="map"></div>
                             <div id="infowindow-content">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
    </div>
</section>
<section>

                                <label class="label">PhoneNumber (optional) :</label>
                                    <label class="input">  <input placeholder="e.g +84 0939793979" name="contact_number" type="text" value="{{ $listing->contact_number }}" > </label>
                              </section>
                           <section>
                                    <label class="label">Website (optional) :</label>
                                  <label class="input">    <input placeholder="e.g https://themeforest.net/user/wecookcode/portfolio" name="website" type="text" value="{{ $listing->website }}">
                              </label>
                              </section>
                           <section>
                                    <label class="label">Facebook Link (optional) :</label>
                                 <label class="input">     <input placeholder="e.g yournamecompany" name="fbname" type="text" value="{{ $listing->fbname }}"> </label>
                              </section>
                           <section>
                                    <label class="label">Twitter Link (optional) :</label>
                                  <label class="input">    <input placeholder="e.g @yournamecompany" name="twittername" type="text" value="{{ $listing->twittername }}"> </label>

                              </section>
                           <section>
                                    <label class="label">Googleplus Link (optional) :</label>
                                     <label class="input">  <input placeholder="e.g yournamecompany" name="gplusname" type="text" value="{{ $listing->gplusname }}"> </label>
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
<option value="Monday" {{ old('start_day', $listing->start_day)=='Monday'?'selected':'' }} >Monday</option>
<option value="Tuesday" {{ old('start_day', $listing->start_day)=='Tuesday'?'selected':'' }}>Tuesday</option>
<option value="Wednesday" {{ old('start_day', $listing->start_day)=='Wednesday'?'selected':'' }}>Wednesday</option>
<option value="Thursday" {{ old('start_day', $listing->start_day)=='Thursday'?'selected':'' }}>Thursday</option>
<option value="Friday" {{ old('start_day', $listing->start_day)=='Friday'?'selected':'' }}>Friday</option>
<option value="Saturday" {{ old('start_day', $listing->start_day)=='Saturday'?'selected':'' }}>Saturday</option>
<option value="Sunday" {{ old('start_day', $listing->start_day)=='Sunday'?'selected':'' }}>Sunday</option>
                                                        </select> <i></i> </label>
                                                </section>



                                                <section class="col col-6">
                                                    <label class="label"> Operation days To </label>
                                                    <label class="select">
                                                        <select name="end_day">
                                                          <option value="">Choose</option>
<option value="Monday" {{ old('end_day', $listing->end_day)=='Monday'?'selected':'' }} >Monday</option>
<option value="Tuesday" {{ old('end_day', $listing->end_day)=='Tuesday'?'selected':'' }}>Tuesday</option>
<option value="Wednesday" {{ old('end_day', $listing->end_day)=='Wednesday'?'selected':'' }}>Wednesday</option>
<option value="Thursday" {{ old('end_day', $listing->end_day)=='Thursday'?'selected':'' }}>Thursday</option>
<option value="Friday" {{ old('end_day', $listing->end_day)=='Friday'?'selected':'' }}>Friday</option>
<option value="Saturday" {{ old('end_day', $listing->end_day)=='Saturday'?'selected':'' }}>Saturday</option>
<option value="Sunday" {{ old('end_day', $listing->end_day)=='Sunday'?'selected':'' }}>Sunday</option>
                                                        </select> <i></i> </label>
                                                </section>


                                                <section class="col col-6">
                                                    <label class="label"> Operation hours From </label>
                                                    <label class="select">
                                                        <select name="start_time">
                                                          
        <option value="">Choose</option>
        <option value="00:00 am"  {{ old('start_time', $listing->start_time)=='00:00 am'?'selected':'' }} >00:00      am</option>
<option value="00:30 am" {{ old('start_time', $listing->start_time)=='00:30 am'?'selected':'' }}>00:30      am</option>
<option value="01:00 am" {{ old('start_time', $listing->start_time)=='01:00 am'?'selected':'' }}>01:00      am</option>
<option value="01:30 am" {{ old('start_time', $listing->start_time)=='01:30 am'?'selected':'' }}>01:30      am</option>
<option value="02:00 am" {{ old('start_time', $listing->start_time)=='02:00 am'?'selected':'' }}>02:00      am</option>
<option value="02:30 am" {{ old('start_time', $listing->start_time)=='02:30 am'?'selected':'' }}>02:30      am</option>
<option value="03:00 am" {{ old('start_time', $listing->start_time)=='03:00 am'?'selected':'' }}>03:00      am</option>
<option value="03:30 am" {{ old('start_time', $listing->start_time)=='03:30 am'?'selected':'' }}>03:30      am</option>
<option value="04:00 am" {{ old('start_time', $listing->start_time)=='04:00 am'?'selected':'' }}>04:00      am</option>
<option value="04:30 am" {{ old('start_time', $listing->start_time)=='04:30 am'?'selected':'' }}>04:30      am</option>
<option value="05:00 am" {{ old('start_time', $listing->start_time)=='05:00 am'?'selected':'' }}>05:00      am</option>
<option value="05:30 am" {{ old('start_time', $listing->start_time)=='05:30 am'?'selected':'' }}>05:30      am</option>
<option value="06:00 am" {{ old('start_time', $listing->start_time)=='06:00 am'?'selected':'' }}>06:00      am</option>
<option value="06:30 am" {{ old('start_time', $listing->start_time)=='06:30 am'?'selected':'' }}>06:30      am</option>
<option value="07:00 am" {{ old('start_time', $listing->start_time)=='07:00 am'?'selected':'' }}>07:00      am</option>
<option value="07:30 am" {{ old('start_time', $listing->start_time)=='07:30 am'?'selected':'' }}>07:30      am</option>
<option value="08:00 am" {{ old('start_time', $listing->start_time)=='08:00 am'?'selected':'' }}>08:00      am</option>
<option value="08:30 am" {{ old('start_time', $listing->start_time)=='08:30 am'?'selected':'' }}>08:30      am</option>
<option value="09:00 am" {{ old('start_time', $listing->start_time)=='09:00 am'?'selected':'' }}>09:00      am</option>
<option value="09:30 am" {{ old('start_time', $listing->start_time)=='09:30 am'?'selected':'' }}>09:30      am</option>
<option value="10:00 am" {{ old('start_time', $listing->start_time)=='10:00 am'?'selected':'' }}>10:00      am</option>
<option value="10:30 am" {{ old('start_time', $listing->start_time)=='10:30 am'?'selected':'' }}>10:30      am</option>
<option value="11:00 am" {{ old('start_time', $listing->start_time)=='11:00 am'?'selected':'' }}>11:00      am</option>
<option value="11:30 am" {{ old('start_time', $listing->start_time)=='11:30 am'?'selected':'' }}>11:30      am</option>
                                                        </select> <i></i> </label>
                                                </section>



                                                <section class="col col-6">
                                                    <label class="label">Operation hours To</label>
                                                    <label class="select">
                                                        <select name="end_time">
                                                          
        <option value="">Choose</option> 
            <option value="00:00 pm" {{ old('end_time', $listing->end_time)=='00:00 pm'?'selected':'' }} >00:00 pm</option>
        <option value="00:30 pm" {{ old('end_time', $listing->end_time)=='00:30 pm'?'selected':'' }} >00:30 pm</option>
        <option value="01:00 pm" {{ old('end_time', $listing->end_time)=='01:00 pm'?'selected':'' }} >01:00 pm</option>
        <option value="01:30 pm" {{ old('end_time', $listing->end_time)=='01:30 pm'?'selected':'' }} >01:30 pm</option>
        <option value="02:00 pm" {{ old('end_time', $listing->end_time)=='02:00 pm'?'selected':'' }} >02:00 pm</option>
        <option value="02:30 pm" {{ old('end_time', $listing->end_time)=='02:30 pm'?'selected':'' }} >02:30 pm</option>
        <option value="03:00 pm" {{ old('end_time', $listing->end_time)=='03:00 pm'?'selected':'' }} >03:00 pm</option>
        <option value="03:30 pm" {{ old('end_time', $listing->end_time)=='03:30 pm'?'selected':'' }}>03:30 pm</option>
        <option value="04:00 pm" {{ old('end_time', $listing->end_time)=='04:00 pm'?'selected':'' }}>04:00 pm</option>
        <option value="04:30 pm" {{ old('end_time', $listing->end_time)=='04:30 pm'?'selected':'' }}>04:30 pm</option>
        <option value="05:00 pm" {{ old('end_time', $listing->end_time)=='05:00 pm'?'selected':'' }}>05:00 pm</option>
        <option value="05:30 pm" {{ old('end_time', $listing->end_time)=='05:50 pm'?'selected':'' }}>05:30 pm</option>
        <option value="06:00 pm" {{ old('end_time', $listing->end_time)=='06:00 pm'?'selected':'' }}>06:00 pm</option>
        <option value="06:30 pm" {{ old('end_time', $listing->end_time)=='06:30 pm'?'selected':'' }}>06:30 pm</option>
        <option value="07:00 pm" {{ old('end_time', $listing->end_time)=='07:00 pm'?'selected':'' }}>07:00 pm</option>
        <option value="07:30 pm" {{ old('end_time', $listing->end_time)=='07:30 pm'?'selected':'' }}>07:30 pm</option>
        <option value="08:00 pm" {{ old('end_time', $listing->end_time)=='08:00 pm'?'selected':'' }}>08:00 pm</option>
        <option value="08:30 pm" {{ old('end_time', $listing->end_time)=='08:30 pm'?'selected':'' }}>08:30 pm</option>
        <option value="09:00 pm" {{ old('end_time', $listing->end_time)=='09:00 pm'?'selected':'' }}>09:00 pm</option>
        <option value="09:30 pm" {{ old('end_time', $listing->end_time)=='09:30 pm'?'selected':'' }}>09:30 pm</option>
        <option value="10:00 pm" {{ old('end_time', $listing->end_time)=='10:00 pm'?'selected':'' }}>10:00 pm</option>
        <option value="10:30 pm" {{ old('end_time', $listing->end_time)=='10:30 pm'?'selected':'' }}>10:30 pm</option>
        <option value="11:00 pm" {{ old('end_time', $listing->end_time)=='11:00 pm'?'selected':'' }}>11:00 pm</option>
        <option value="11:30 pm" {{ old('end_time', $listing->end_time)=='11:30 pm'?'selected':'' }}>11:30 pm</option>
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

												<form action="{{ url('admin/listings/update', $listing->id) }}" enctype="multipart/form-data" class="dropzone" id="mydropzone" name="mygallery"> {{ csrf_field() }} </form>


					</div>
					<!-- end widget content -->

				</div>
				
				</section>

                        

	    <script>

    
     function initMap() {
        var uluru ={lat: {{$listing->latitude}}, lng: {{$listing->longitude}} };
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: uluru
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
          position: uluru,
          map: map,
            draggable: true,
          animation: google.maps.Animation.DROP,
          anchorPoint: new google.maps.Point(0, -29)
        });
        

        //Postition Changed 
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