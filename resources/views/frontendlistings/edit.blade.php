@extends('layouts.app')
@section('content');

<div class="page-header">
            <div class="container">
            <div class="breadcrumbs">
                    <ul class="list-unstyled">

                        <li><a href="{{ url('/') }}">Home</a></li>
                                                                        <li>Edit Listing</li>
                                                                    </ul>
                </div> <!-- end .breadcrumbs -->                
            </div> <!-- end .container -->
        </div>


        <div class="page-title" style="background-image: url('{{ url('/public/dataimages') }}/background08.jpg');">
            <div class="inner">
                                                        <h2>Edit Listing</h2>
                                                 
            </div>  
<!-- end .inner -->
        </div>



        <div class="section boxed-section light">
            <div class="inner">
                <div class="container"><div class="row myaccount2col">
                <div class="col-sm-3">
                <div class="box myaccount2colmenu">
                <div class="row">
                <div class="col-sm-12 text-center userinfo">
                <img src="{{ url('public/uploads/avatar/'.$profile->user_avatar) }}" alt="avatar">
                <span> {{ $profile->first_name }} </span>
                </div>
                </div> 
                    
                <ul class="list-unstyled">
  <li > <a href="{{ url('/home') }}"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
<li> <a href="{{ url('/edit-profile') }}"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Profile</a></li>
<li class="active"> <a href="{{ url('/my-listings') }}"><i class="fa fa-th-list" aria-hidden="true"></i> My Listings</a></li>
<li> <a href="{{ url('/pricing-plans') }}"><i class="fa fa-bullhorn" aria-hidden="true"></i> Pricing Plan</a></li>
<li>  <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                                                
                    </ul>
                </div> 
                </div>      <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <style type="text/css">
a.previous { display: none; }
.demo { width:960px; margin:50px auto;}
span {
  display: none;
  color: Red;
}
body{font-family: 'Poppins', sans-serif; color: #646e7b; letter-spacing: .7px;font-weight: 400;  line-height: 28px; }
a{color:#11b9c4;}
table tr { display: none; }

h3 {
  font-family: 'Quicksand', sans-serif;
  font-weight: 400;
  font-size: 26px;
  line-height: 30px;
  color: #002226;
  letter-spacing: 1.3px;
}

table tr:nth-child(-n+0) { display: table-row; }

</style>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

<div class="col-sm-9"> 
<div class="box">


				<form class="add-listing-form light-inputs" role="form" method="POST" action="{{ url('admin/listings/update', $listing->id) }}" enctype="multipart/form-data">
										

                      {{ csrf_field() }}
                      
                      @if (session('success'))
    <div class="flash-message">
    <div class="alert alert-success"> <i class="fa fa-check"></i>
 Updated Successfully     </div>
    </div>
@endif

                      <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon">Listing Name :</span>
									<input placeholder="e.g Your listing name here ..." name="listing_name" value="{{ $listing->listing_name }}" type="text">
								</div> <!-- end .input-group -->
							</div>
							
							
                        	@if($errors)
                      {{ $errors->first('listing_name') }} 
                       @endif
                        

                             <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon">Tagline (optional) :</span>
                                    <input placeholder="e.g Vitae Labortis Restaurant" name="listing_tag" type="text" value="{{ $listing->listing_tag }}">
                              </div>
                              </div>


  <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon">Listing Logo :</span>
									    
                                           <input type="file" id="file" name="listing_logo" onchange="this.parentNode.nextSibling.value = this.value">
                                                   
								</div> <!-- end .input-group --> 
                                                    <img src="{{ url('public/uploads/listing_logo/'.$listing->listing_logo) }}" style="width:200px;" /> 
                                                    </div>
							
							
                             <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon">Description :</span>         
                                <textarea name="listing_desc" placeholder="Description" rows="4">{{ $listing->listing_desc }} </textarea>
                          </div>
                              </div>

	 @if($errors)
                      {{ $errors->first('listing_desc') }} 
                       @endif
                       
                          <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon">Listing category :</span>
                                   <select name="listing_category"><option value=""> Select </option>
                                       @foreach($categories as $category)
               <option value="{{ $category->id }}"  {{ old('listing_category',$category->id)==$listing->listing_category?'selected':''  }} > {{ $category->category_name }} </option>
            @endforeach
            
                                    </select> 
                                  </div>
                              </div>

	 @if($errors)
                      {{ $errors->first('listing_category') }} 
                       @endif

                        <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon">Address :</span>    
                                    <input placeholder="e.g Vitae Labortis Restaurant" name="address" type="text" value="{{ $listing->address }}">              
                                    
                              </div>
                              </div>
                               	 @if($errors)
                      {{ $errors->first('address') }} 
                       @endif
                       
                                                         <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon"> Country :</span>    
                                    <select name="country"> 
                                     
               <option value="US">United States</option>
          
           </select>                             
                                    
                              </div>
                              </div>
                              
	 @if($errors)
                      {{ $errors->first('country') }} 
                       @endif
                           <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon">  State :</span>    
                                    <select name="state"> <option value=""> Select</option>  
                                      @foreach($states as $state)
               <option value="{{ $state->state_code}}" {{ old('state_code',$state->state_code == $listing->state)?'selected':'' }} >{{ $state->state}}</option>
            @endforeach
           </select>                             
                                    
                              </div>
                              </div>
                                	 @if($errors)
                      {{ $errors->first('state') }} 
                       @endif
                       
                           <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon"> City :</span>    
                                   <input placeholder="e.g Vitae Labortis Restaurant" name="city" type="text" value="{{ $listing->city }}">                              
                                    
                              </div>
                              </div>
                              	 @if($errors)
                      {{ $errors->first('city') }} 
                       @endif
                                                         <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon"> Zipcode :</span>    
                                   <input placeholder="e.g Vitae Labortis Restaurant" name="zipcode" type="text" value="{{ $listing->zipcode }}">                      
                                    
                              </div>
                              </div> 
	 @if($errors)
                      {{ $errors->first('zipcode') }} 
                       @endif  


                      <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon"> Location  :</span>
                                <input   id="pac-input" placeholder="e.g 79 Leonard St , NewYork" name="listing_location" type="text">
                            

      </div>
                                                                           


                                   
                         
                            <input type="text" id="latlng" name="latlng" value="{{ $listing->latlng }}">
  <div class="google_maps" id="map"></div>
                             <div id="infowindow-content">
      <img src="" width="16" height="16" id="place-icon">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
    
</div>

 <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon"> Email Address :</span>
                                     <input placeholder="e.g user@mail.com" name="emailaddress" type="text" value="{{ $listing->emailaddress }}" >   </div>
                              </div>
                             	 @if($errors)
                      {{ $errors->first('emailaddress') }} 
                       @endif   
                       
 <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon">PhoneNumber (optional) :</span>
                                     <input placeholder="e.g +84 0939793979" name="contact_number" type="text" value="{{ $listing->contact_number }}" >   </div>
                              </div>

                          <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon">Website (optional) :</span>
                                <input placeholder="e.g https://themeforest.net/user/wecookcode/portfolio" name="website" type="text" value="{{ $listing->website }}">  </div>
                              </div>
 
                            <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon"> Facebook Link (optional) :</span>
                              <input placeholder="e.g yournamecompany" name="fbname" type="text" value="{{ $listing->fbname }}">  </div>
                              </div>
 
                            <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon"> Twitter Link (optional) :</span>
                                    <input placeholder="e.g @yournamecompany" name="twittername" type="text" value="{{ $listing->twittername }}">  </div>
                              </div>

                             <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon"> Googleplus Link (optional) :</span>
                                       <input placeholder="e.g yournamecompany" name="gplusname" type="text" value="{{ $listing->gplusname }}">  </div>
                              </div>





                                 <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon"> Add Gallery</span>
                                                    <div class="input input-file">
                                                        <span class="button"><input type="file" id="file" name="galler" onchange="this.parentNode.nextSibling.value = this.value">Browse</span><input type="text" placeholder="Include some files" readonly="">
                                                    </div>
                                               </div>
                              </div>








 <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon">  Operation days From </span>
                                                   
                                                        <select name="start_day">
                                                        <option value="">Choose</option>
<option value="Monday" {{ old('start_day', $listing->start_day)=='Monday'?'selected':'' }} >Monday</option>
<option value="Tuesday" {{ old('start_day', $listing->start_day)=='Tuesday'?'selected':'' }}>Tuesday</option>
<option value="Wednesday" {{ old('start_day', $listing->start_day)=='Wednesday'?'selected':'' }}>Wednesday</option>
<option value="Thursday" {{ old('start_day', $listing->start_day)=='Thursday'?'selected':'' }}>Thursday</option>
<option value="Friday" {{ old('start_day', $listing->start_day)=='Friday'?'selected':'' }}>Friday</option>
<option value="Saturday" {{ old('start_day', $listing->start_day)=='Saturday'?'selected':'' }}>Saturday</option>
<option value="Sunday" {{ old('start_day', $listing->start_day)=='Sunday'?'selected':'' }}>Sunday</option>
                                                        </select> <i></i>  </div>
                              </div>
	 @if($errors)
                      {{ $errors->first('start_day') }} 
                       @endif  




                                                <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon">  Operation days To </span>
                                                        <select name="end_day">
                                                          <option value="">Choose</option>
<option value="Monday" {{ old('end_day', $listing->end_day)=='Monday'?'selected':'' }} >Monday</option>
<option value="Tuesday" {{ old('end_day', $listing->end_day)=='Tuesday'?'selected':'' }}>Tuesday</option>
<option value="Wednesday" {{ old('end_day', $listing->end_day)=='Wednesday'?'selected':'' }}>Wednesday</option>
<option value="Thursday" {{ old('end_day', $listing->end_day)=='Thursday'?'selected':'' }}>Thursday</option>
<option value="Friday" {{ old('end_day', $listing->end_day)=='Friday'?'selected':'' }}>Friday</option>
<option value="Saturday" {{ old('end_day', $listing->end_day)=='Saturday'?'selected':'' }}>Saturday</option>
<option value="Sunday" {{ old('end_day', $listing->end_day)=='Sunday'?'selected':'' }}>Sunday</option>
                                                        </select> <i></i>  </div>
                              </div>


	 @if($errors)
                      {{ $errors->first('end_day') }} 
                       @endif 

                                               <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon">  Operation hours From </span>
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
                                                        </select> <i></i>  </div>
                              </div>

	 @if($errors)
                      {{ $errors->first('start_time') }} 
                       @endif  

  <div class="form-group">
								<div class="input-group">
								<span class="input-group-addon"> Operation hours To</span>
                                                        <select name="end_time">
                                                          
        <option value="">Choose</option>  <option value="">Choose</option>
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
                                                        </select> <i></i>  </div>
                              </div>
                              	 @if($errors)
                      {{ $errors->first('end_time') }} 
                       @endif  
                       
<input type="hidden" name="created_by" value="{{ Auth::user()->id }}"> 

<div class="submit"> 
	<button type="submit" class="button">
													Update 
												</button> </div>

                        

	    <script>

    
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat:{{ $listing->latitude }}, lng:{{ $listing->longitude}}},
          zoom: 5, 
         
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

          position:new google.maps.LatLng({{ $listing->latitude }} , {{ $listing->longitude }}),
          map: map,
          draggable: true,
          animation: google.maps.Animation.DROP,
          anchorPoint: new google.maps.Point(0, -29)
        });
 google.maps.event.addListener(marker, "position_changed", function() {
      var position = marker.getPosition();
      $('#latlng').val(position);
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
     .pac-item span{ 
display:inline !important;
}
    </style>
											</fieldset>
											
										
										</form>

										

</div>
</div>
</article>
</div>

            </div>
            <!-- END MAIN CONTENT -->

        </div>


    </div> <!-- end .dashboard --> 
</div>
    <!--<div class="dashboard" style="padding-top: 20px;">-->
    <!--        <div class="demo" style="height:auto;width:700px;overflow:auto;margin-bottom:30px;">-->
    <!-- <table class="pretty table table-bordered table-striped" style="width: 100%;">-->
    <!--    <thead>-->
    <!--        <tr>-->
    <!--            <th width="20%">User</th>-->
    <!--            <th width="20%">Chat</th>-->
    <!--            <th width="20%">Chat Status</th>-->
    <!--            <th width="20%">Delete Chat</th>-->
    <!--            <th width="20%">End Chat</th>-->
    <!--        </tr>-->
    <!--    </thead>-->
    <!--    <tbody>-->

                     
    <!--     </tbody>-->
    <!--  </table>-->
    <!--</div>-->
   

    <!--<div id="adminchat">-->
          
    <!--</div>-->
    <!--</div>-->

</div> <!-- end .box -->
</div>
</div>      
                </div> <!-- end .container -->
            </div> <!-- end .inner -->
        </div>

@endsection
