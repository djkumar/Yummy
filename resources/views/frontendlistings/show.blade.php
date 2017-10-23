@extends('layouts.app')
@section('content');

<div class="page-header">
            <div class="container">
            <div class="breadcrumbs">
                    <ul class="list-unstyled">

                        <li><a href="{{ url('/') }}">

    All Listings

</a></li>
                                                                        <li> Dispensaries </li>
                                                                    </ul>
                </div> <!-- end .breadcrumbs -->                
            </div> <!-- end .container -->
        </div>



<div class="section light">
            <div class="inner">
                
<div class="box">

<div class="inner">
				<div class="container site-tabsection">
				<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#aboutus" aria-controls="aboutus" role="tab" data-toggle="tab">About Us</a></li>
   <!-- <li role="presentation"><a href="#products" aria-controls="products" role="tab" data-toggle="tab">Products</a></li>
    <li role="presentation"><a href="#videos" aria-controls="videos" role="tab" data-toggle="tab">Videos</a></li>--> 
  </ul>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="aboutus"><div class="row">
						<div class="col-md-8">
							<div class="directory-single-info">
								<h2> 	{{ $listing->listing_name }}
                      <img src="{{ url('/public/dataimages') }}/heading.png" alt="icon"></h2>
								<p></p>
								<ul class="meta list-unstyled">
									<li><img src="{{ url('/public/dataimages') }}/location.png" alt="icon">	{{ $listing->city }},&nbsp;	{{ $listing->state }}</li>
									<li><img src="{{ url('/public/dataimages') }}/phone.png" alt="icon">	{{ $listing->contact_number }}</li>
									<li>
										<div class="social">
											<a href="http://hghextractions"><img src="{{ url('/public/dataimages') }}/facebook.png" alt="facebook"></a>
											<a href="http://hghextractions"><img src="{{ url('/public/dataimages') }}/twitter.png" alt="twitter"></a>
											<a href="http://hghextractions"><img src="{{ url('/public/dataimages') }}/google-plus.png" alt="google plus"></a>
											<a href="#"><img src="{{ url('/public/dataimages') }}/instagram-r.png" alt="istagram"></a>
										</div> <!-- end .social -->
									</li>
									<li><div class="rating">0</div><div class="number-of-ratings">( <span>0</span> )</div></li>
								</ul>
								<a href="https://weedmaps.com/brands/category/concentrates" target="_blank" class="link"><img src="{{ url('/public/dataimages') }}/link.png" alt="icon">https://weedmaps.com/brands/category/concentrates</a>

								<div class="buttons">
									<a href="#" class="button dark" id="review"><img src="{{ url('/public/dataimages') }}/write.png" alt="icon">Write a Review</a>
									<!--<a href="" class="button dark"><img src="{{ url('/public/dataimages') }}/add.png" alt="icon">Add to Favorites</a>-->
									<div class="button dark share-button">
										<img src="{{ url('/public/dataimages') }}/share.png" alt="icon">Share
										<div class="social">
											<a href=""><img src="{{ url('/public/dataimages') }}/facebook.png" alt="facebook"></a>
											<a href=""><img src="{{ url('/public/dataimages') }}/twitter.png" alt="twitter"></a>
											<a href=""><img src="{{ url('/public/dataimages') }}/google-plus.png" alt="google plus"></a><a href=""><img src="{{ url('/public/dataimages') }}/instagram-r.png" alt="istagram"></a>
										</div> <!-- end .social -->
									</div>
								</div> <!-- end .buttons -->
								
							</div> <!-- end .directory-single-info -->
						</div> <!-- end .col-md-8 -->
						
					<div class="col-md-4">

                            
  <div class="google_maps" id="map">
      
  </div> 
                             <div id="infowindow-content">
      <img src="" id="place-icon" width="16" height="16">
      <span id="place-name" class="title"></span><br>
      <span id="place-address"></span>
    
    
						</div>
						
					</div> <!-- end .row --></div>
					
  
  </div>
					
				</div> <!-- end .container -->
			</div>
			
       

	   
											
							
										

										



</div>

            </div>
            <!-- END MAIN CONTENT -->

        </div>


    </div> <!-- end .dashboard --> 
    
    
<div class="section light"> 
				<div class="container">
					<div class="row">
						<div class="col-md-8">
						<h2 class="eq-space">Store Gallery</h2>
						</div>
					</div>
				</div>
		</div>    

    
    <div class="section light">
			<div class="inner">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="directory-single">
							<h4>About Store</h4>
								<p align="justify">{{ $listing->listing_desc }}</p>
							</div> <!-- end .directory-single -->
						
							<div class="reviews">
							    	<h4><a href="#">Total&nbsp;&nbsp;Review(s)</a></h4>
							    @forelse($listingreviews as $listingreview)
							    
							    <div class="review clearfix">
											<div class="avatar"><img src="{{ url('public/uploads/avatar/'.$listingreview->user_avatar) }}" alt="avatar" width="100px" height="100px"></div>
											<ul class="meta list-unstyled">
											<li class="name">
										 {{ $listingreview->first_name.' '.$listingreview->last_name }}  									    </li>
										    											<li class="rating">
									          <div class="add-review" style="margin-top:1px;">
												<fieldset class="rating">
													<input id="star5" name="rating10" value="5" type="radio" {{ old('ratings10',5)==$listingreview->ratings?'checked':''}}><label class="full" for="star5" title="Awesome - 5 stars"></label>
													<input id="star4half" name="rating20" value="4.5" type="radio" {{ old('ratings10',4.5)==$listingreview->ratings?'checked':''}}><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
													<input id="star4" name="rating30" value="4" type="radio"  {{ old('ratings10',4)==$listingreview->ratings?'checked':''}}><label class="full" for="star4" title="Pretty good - 4 stars"></label>
													<input id="star3half" name="rating40" value="3.5"  type="radio"  {{ old('ratings10',3.5)==$listingreview->ratings?'checked':''}}><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
													<input id="star3" name="rating50" value="3" type="radio"  {{ old('ratings10',3)==$listingreview->ratings?'checked':''}} ><label class="full" for="star3" title="Meh - 3 stars"></label>
													<input id="star2half" name="rating60" value="2.5" type="radio"  {{ old('ratings10',2.5)==$listingreview->ratings?'checked':''}}><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
													<input id="star2" name="rating70" value="2" type="radio"  {{ old('ratings10',2)==$listingreview->ratings?'checked':''}}><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
													<input id="star1half" name="rating80" value="1.5" type="radio"  {{ old('ratings10',1.5)==$listingreview->ratings?'checked':''}} ><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
													<input id="star1" name="rating90" value="1" type="radio"  {{ old('ratings10',1)==$listingreview->ratings?'checked':''}}><label class="full" for="star1" title="Sucks big time - 1 star"></label>
													<input id="starhalf" name="rating100" value="0.5" type="radio" {{ old('ratings10',0.5)==$listingreview->ratings?'checked':''}}><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
												</fieldset>{{ $listingreview->ratings }}
											  </div>
                                            </li>
											<li> </li>
											</ul>  <!-- end .meta -->
										<div class="content">
										<p> {{ $listingreview->review_message }} </p> 
										</div> <!-- end .content -->
										</div>
								@empty
							
								@endforelse

															
							</div> <!-- end .reviews -->
							

						@component('components.reviewform', ['listingid'=>$listing->id, 'userid'=>@$user->id]);
						@endcomponent
						
						</div> <!-- end .col-md-8 -->
						<div class="col-md-4">							
							<div class="sidebar-widget">
								<h5><img src="{{ url('public/dataimages/clock.png') }}" alt="icon">Hours</h5>
								<div class="hours clearfix">
									<div class="left">{{ $listing->start_day }}&nbsp;-&nbsp;{{ $listing->end_day }}</div>
									<div class="right">{{ $listing->start_time }}&nbsp;-&nbsp;{{ $listing->end_time }}</div>
								</div> <!-- end .hours -->
							</div> <!-- end .sidebar-widget -->
							
							@component('components.contactform',['listingid'=>$listing->id]) 
							@endcomponent
							<div class="sidebar-widget">
								<h5><img src="{{ url('public/dataimages/instagram.png') }}" alt="icon">Instagram</h5>
								<div class="instagram">
									<a href=""><img src="{{ url('public/dataimages/instagram01.png') }}" alt="image"></a>
									<a href=""><img src="{{ url('public/dataimages/instagram02.png') }}" alt="image"></a>
									<a href=""><img src="{{ url('public/dataimages/instagram03.png') }}" alt="image"></a>
									<a href=""><img src="{{ url('public/dataimages/instagram04.png') }}" alt="image"></a>
								</div>
							</div> <!-- end .sidebar-widget -->
						</div> <!-- end .col-md-4 -->
					</div> <!-- end .row -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div>



<div class="section light lastsection"> 
			<div class="inner">
				<div class="container">
				<div class="row text-center">
				<div class="col-sm-6"><a href="#"><img src="{{ url('public/dataimages/youtube-icon.png') }}"> WEEDULU.TV ON YOUTUBE CHANNEL</a></div>
				<div class="col-sm-6"><a href="#"><img src="{{ url('public/dataimages/therapeutic.png') }}"> THERAPEUTIC USES OF CANNIBIS</a></div>
				</div>
				
				</div>
				</div>
				</div>
                        

	 
   						


  <script>

    
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: {{ $listing->latitude }}, lng: {{ $listing->longitude }}},
          zoom: 12, 
         
        });
     
        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({

          position:new google.maps.LatLng({{ $listing->latitude }},{{ $listing->longitude }}),
          map: map,
          icon: '{{ asset('frontend/images/custom_marker.png') }}', 
          anchorPoint: new google.maps.Point(0, -29)
        });


      }






    </script>
    

 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbm5j6CqocZWCUIi0LvfHcQ0WtMCaf2Dk&libraries=places&callback=initMap"
  type="text/javascript"></script>
								
		  <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 300px;
        width: 100%;
      }
     
    </style>	
    
    
    
<script type="text/javascript">

$('#review').click(function(){

var memberid = "{{ @$user->id }}";
  
    if(memberid!="")
    {
    $("html, body").animate({scrollTop: $(window).height()+500},600);
    return false;
    }
    else
    {
    	swal({
    		title:"",
    		text:"Please Log In To Add Your Review",
    		html:true
    	});
    }
});

	
</script>


@endsection
