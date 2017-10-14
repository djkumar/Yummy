@include('backend/adminheader')

      @include('backend/adminnav')


   
   @include('backend/sidebar')

   
   
   
   
   <div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon">

				<span class="ribbon-button-alignment"> 
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh" rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span> 
				</span>

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>Home</li><li>Profile</li><li>Listing</li>
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

				<!-- Bread crumb is created dynamically -->
				<!-- row -->
				
				<!-- end row -->
				
				<!-- row -->
				
				<div class="row">
				
					<div class="col-sm-12">
				
				
							<div class="well well-sm">
				
								<div class="row">
				
									<div class="col-sm-12 col-md-12">
										<div class="well well-light well-sm no-margin no-padding">
				
											<div class="row">
				
									
				
												<div class="col-sm-12">
				
													<div class="row">
				
														<div class="col-sm-3 profile-pic">
															<img src="{{ url('/public/uploads/listing_logo/'.$listing->listing_logo) }}" alt="demo user">
														
														</div>
														<div class="col-sm-6">
															<h1> {{ $listing->listing_name }} <span class="semi-bold"> </span>
															<br>
															<small>  {{ $listing->listing_tag }} </small></h1>
				
				
				 {{ $listing->listing_desc }}
				 
				 {{ $listing->website }}
				 
				 {{ $listing->fbname }}
				 
				 
    

                                                                           


                                   
                           <section>
                            <!--<input type="text" id="latitude" name="latitude" value="{{ $listing->latitude }}">-->
                            <!--<input type="text" id="longitude" name="longitude" value="{{ $listing->longitude }}">-->
                            
  <div class="google_maps" id="map"></div>
                             <div id="infowindow-content">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
    </div>
</section>


<section>


															<ul class="list-unstyled">
																<li>
																	<p class="text-muted">
																		<i class="fa fa-phone"></i>&nbsp;&nbsp;<span class="txt-color-darken">{{ $listing->contact_number }}</span>
																	</p>
																</li>
																<li> Address 
																	<p class="text-muted">
																		<i class="fa "></i>&nbsp;&nbsp;<span class="txt-color-darken">{{ $listing->address }}</span>
																	</p>
																</li>
																	<li>
																	<p class="text-muted">
																		<i class="fa "></i>&nbsp;&nbsp;<span class="txt-color-darken">{{ $listing->city }}</span>
																	</p>
																</li>
																	<li>
																	<p class="text-muted">
																		<i class="fa "></i>&nbsp;&nbsp;<span class="txt-color-darken">{{ $listing->state }} {{ $listing->zipcode }} </span>
																	</p>
																</li>	<li>
																	<p class="text-muted">
																		<i class="fa"></i>&nbsp;&nbsp;<span class="txt-color-darken">{{ $listing->country }}</span>
																	</p>
																</li>
																
																	<li> 
																	Operation Hours
																	<p class="text-muted">
																		<i class="fa"></i>&nbsp;&nbsp;<span class="txt-color-darken">{{ $listing->start_day }} -  {{ $listing->end_day }}</span>
																	</p> 	<p class="text-muted">
																		<i class="fa"></i>&nbsp;&nbsp;<span class="txt-color-darken">{{ $listing->start_time }} -  {{ $listing->end_time }} </span>
																	</p>
																</li>
															</ul>
			
				
														</div>
											
				
													</div>
				
												</div>
				
											</div>
				
											<!-- end row -->
				
										</div>
				
									</div>
								</div>
				
							</div>
				
				
					</div>
				
				</div>
				
				<!-- end row -->

			</div>
			<!-- END MAIN CONTENT -->
</div>
		
		
		
  <script>

    
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: {{$listing->latitude}}, lng: {{$listing->longitude}} },
          zoom: 12, 
         
        });
        var card = document.getElementById('pac-card');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);


        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
           position: { lat:{{$listing->latitude}} ,lng:{{$listing->longitude}} },
          map: map,
         
          anchorPoint: new google.maps.Point(0, -29)
        });


      

    
      }


    </script>
     <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbm5j6CqocZWCUIi0LvfHcQ0WtMCaf2Dk&libraries=places&callback=initMap"
  type="text/javascript"></script>

@include('backend/adminfooter')