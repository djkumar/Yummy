
 
    						     @forelse($lists as $list)
                         <div class="col-sm-4 col-lg-6">						
							<div class="directory-item locationlist">
							<a href="" class="store-image" title="Store Logo"><span class="number"><img src="{{ url('/public/dataimages') }}/sponsor-dispensaries01.png" alt="icon"></span></a>
							<div class="storeinfo">
									<h5><a href="{{ url('my-listings/show/'.$list->id) }}">{{ $list->listing_name }}</a></h5>
									<p> {{ $list->city }} {{ $list->state }} </p>
									<div class="add-review">
							<fieldset class="rating">
											<input type="radio" id="star5" name="rating" value="5"><label class="full" for="star5" title="Awesome - 5 stars"></label>
											<input type="radio" id="star4half" name="rating" value="4 and a half"><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
											<input type="radio" id="star4" name="rating" value="4"><label class="full" for="star4" title="Pretty good - 4 stars"></label>
											<input type="radio" id="star3half" name="rating" value="3 and a half" checked="checked"><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
											<input type="radio" id="star3" name="rating" value="3"><label class="full" for="star3" title="Meh - 3 stars"></label>
											<input type="radio" id="star2half" name="rating" value="2 and a half"><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
											<input type="radio" id="star2" name="rating" value="2"><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
											<input type="radio" id="star1half" name="rating" value="1 and a half"><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
											<input type="radio" id="star1" name="rating" value="1"><label class="full" for="star1" title="Sucks big time - 1 star"></label>
											<input type="radio" id="starhalf" name="rating" value="half"><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
										</fieldset>(4.5)</div>
										<div class="shop-status open">Shop: <span>Opened</span></div>
								</div>
							<div class="storeamenity"><img src="{{ url('/public/dataimages') }}/locationlist-doctor.png" alt="icon"></div>
								 <!-- end .content -->
								
							</div> <!-- end .directory-item -->
						</div>
						
                        @empty
                        @endforelse
                  
                  
                  <script type="text/javascript"> 

    
//     marker = new google.maps.Marker({

// position: new google.maps.LatLng(30.8252, -119.703),
//                 map: map,
//                 icon: 'https://weedulu.caworksite.com/frontend/images/custom_marker.png', 
//           });



                
  @forelse($lists as $list)
 marker = new google.maps.Marker({
     
                position: new google.maps.LatLng({{ $list->latitude }}, {{ $list->longitude  }}),
                map: map,
                icon: '{{ asset('frontend/images/custom_marker.png') }}', 
                
            });
            @empty
            @endforelse

 </script>   
