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
								<h4><a href="https://caworksite.com/Weedulu/index.php/home/allreviews/25">Totally&nbsp;0&nbsp;Review(s)</a></h4>

															
							</div> <!-- end .reviews -->
							

							<div class="add-review">
							
								{{ @$user = auth()->user() }}
								
							 @if(@$user->id)
							 	<h4>Rate and write a review.</h4>
								<span id="review_errors" style="color:red";></span> 
							<form name="review_form" action="#" method="post">  {{ csrf_field() }}
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<input placeholder="Your Name*" name="user_name" id="user_name" type="text">
											</div> <!-- end .form-group -->
										</div> <!-- end .col-sm-6 -->
										<div class="col-sm-6">
											<div class="form-group">
												<input placeholder="Your@email.com*" name="user_email" id="user_email" type="text">
											</div> <!-- end .form-group -->
										</div> <!-- end .col-sm-6 -->
									</div> <!-- end .row -->
									<div class="form-group">
										<textarea rows="3" placeholder="Your reviews here ..." name="message" id="message"></textarea>
									</div> <!-- end .form-group -->
									
									<div class="form-group">
									 										<select name="rating" id="rating" style="width:750px;height:45px;background-color: #fff;border:solid 1px #fff;padding:8px;border-radius: 9px;">
										<option value="">Your Rating..</option>
										                                        <option value="0.5">0.5&nbsp;Star(s)</option>
                                                                                <option value="1">1&nbsp;Star(s)</option>
                                                                                <option value="1.5">1.5&nbsp;Star(s)</option>
                                                                                <option value="2">2&nbsp;Star(s)</option>
                                                                                <option value="2.5">2.5&nbsp;Star(s)</option>
                                                                                <option value="3">3&nbsp;Star(s)</option>
                                                                                <option value="3.5">3.5&nbsp;Star(s)</option>
                                                                                <option value="4">4&nbsp;Star(s)</option>
                                                                                <option value="4.5">4.5&nbsp;Star(s)</option>
                                                                                <option value="5">5&nbsp;Star(s)</option>
                                        										</select>
                                    </div>

									<div class="clearfix">
										<button id="reviewsubmit" class="button">Submit your reviews</button>
									</div> <!-- end .clearfix -->

								 </form> 
								 @else 
								 
								 @endif
							</div> <!-- end .add-review -->
						
						</div> <!-- end .col-md-8 -->
						<div class="col-md-4">							
							<div class="sidebar-widget">
								<h5><img src="{{ url('public/dataimages/clock.png') }}" alt="icon">Hours</h5>
								<div class="hours clearfix">
									<div class="left">{{ $listing->start_day }}&nbsp;-&nbsp;{{ $listing->end_day }}</div>
									<div class="right">{{ $listing->start_time }}&nbsp;-&nbsp;{{ $listing->end_time }}</div>
								</div> <!-- end .hours -->
							</div> <!-- end .sidebar-widget -->
							<div class="sidebar-widget">
								<h5><img src="{{ url('public/dataimages/email.png') }}" alt="icon">Contact Us</h5>
								<!-- <form action="scripts/contact.php" method="post" id="contact-form" class="contact-form"> -->
									<div class="form-group">
										<input id="contact-name" name="contact-name" placeholder="Your Name" required="" type="text">
									</div> <!-- end .form-group -->
									<div class="form-group">
										<input id="contact-email" name="contact-email" placeholder="Your Email" required="" type="email">
									</div> <!-- end .form-group -->
									<div class="form-group">
										<input id="contact-subject" name="contact-subject" placeholder="Subject" type="text">
									</div> <!-- end .form-group -->
									<div class="form-group">
										<textarea name="contact-message" id="contact-message" required="" rows="3" placeholder="Your message here ..."></textarea>
									</div> <!-- end .form-group -->
									<div class="clearfix"><button class="button" id="contact-submit">Submit</button></div>
								<!-- </form> -->
							</div> <!-- end .sidebar-widget -->
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
				<div class="col-sm-6"><a href="#"><img src="https://caworksite.com/Weedulu/images/youtube-icon.png"> WEEDULU.TV ON YOUTUBE CHANNEL</a></div>
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
        height: 450px;
        width: 600px;
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

$('#reviewsubmit').click(function()
{
  var memberid = "6";
  
    var name=document.getElementById('user_name').value;
 	var email=document.getElementById('user_email').value;
  	var msg=document.getElementById('message').value;
  	var rating=document.getElementById('rating').value;

 if(memberid!="")
 { 
  
 	 $.ajax({
  
 	 url:'https://caworksite.com/Weedulu/index.php/home/review',
 	 type:'POST',
 	 data:{name:name,email:email,msg:msg,rating:rating,lid:25},

 	 success:function(resp)
  	 {
  		swal({   
  			title:"",   
  			text: resp,   
  			html: true 
  		});

        setTimeout(function(){ location.reload(); }, 2000); 
  	 }

  	});

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

$('#contact-submit').click(function(){

var cname=document.getElementById('contact-name').value;
var cemail=document.getElementById('contact-email').value;
var csubject=document.getElementById('contact-subject').value;
var cmsg=document.getElementById('contact-message').value;

$.ajax({

	url:'https://caworksite.com/Weedulu/index.php/home/contactus',
    type:'post',
    data:{cname:cname,cemail:cemail,csubject:csubject,cmsg:cmsg,lid:25},

    success:function(response)
    {
       swal({   
  			title:"",   
  			text: response,   
  			html: true 
  		});

        setTimeout(function(){ location.reload(); }, 2000);
    }
});

});
</script>


@endsection
