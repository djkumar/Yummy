<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<link href="{{ asset('/frontend/css/bootstrap.min.css') }}" rel="stylesheet">


        <link href="{{ asset('/frontend/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- PE Icon 7 Stoke -->
        <link href="{{ asset('/frontend/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}" rel="stylesheet">
        <link href="{{ asset('/frontend/fonts/pe-icon-7-stroke/css/helper.css') }}" rel="stylesheet">
        <!-- PE Icon Social -->
        <link href="{{ asset('/frontend/fonts/pe-icon-social/css/pe-icon-social.css') }}" rel="stylesheet">
        <link href="{{ asset('/frontend/fonts/pe-icon-social/css/helper.css') }}" rel="stylesheet">
        <!-- Quicksand Dash -->
        <link href="{{ asset('/frontend/fonts/quicksand-dash/stylesheet.css') }}" rel="stylesheet">



<link href="{{ asset('/frontend/css/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ asset('/frontend/css/owl.theme.default.css') }}" rel="stylesheet">
<link href="{{ asset('/frontend/css/sweetalert.css') }}" rel="stylesheet">
<link href="{{ asset('/frontend/css/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('/frontend/scripts/Nivo-Lightbox/nivo-lightbox.css') }}" rel="stylesheet">

<link href="{{ asset('/frontend/scripts/Nivo-Lightbox/themes/default/default.css') }}" rel="stylesheet">

<link href="{{ asset('/frontend/css/jquery.nouislider.min.css') }}" rel="stylesheet">

<link href="{{ asset('/frontend/css/bootstrap-select.min.css') }}" rel="stylesheet">
<link href="{{ asset('/frontend/css/style.css') }}" rel="stylesheet">



            <script type="text/javascript">
                
              function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: {{ $position['latitude'] }} , lng: {{ $position['longitude']  }} },
          zoom: 10, 
           mapTypeId: google.maps.MapTypeId.ROAD
        });
 
 

   
 map.addListener('idle', function() {
    // 3 seconds after the center of the map has changed, pan back to the
    // marker.
     window.setTimeout(function() {
         var position = map.getCenter();
  
         
    $.ajax({
        type:'POST',async:false,
        url:'{{ url("/ajaxmaps") }}',
        data: {
        "_token": "{{ csrf_token() }}",
        "latitude":position.lat(),
        "longitude":position.lng(),
        } ,
        success:function(data) { 
           //  var point = ;
           $('.listpage-style01').html(data);
            
    }
        
    })
    }, 2000);
    
    
   
            
            
  });
  
  

@forelse($lists as $list)
 marker = new google.maps.Marker({
     
                position: new google.maps.LatLng({{ $list->latitude }}, {{ $list->longitude  }}),
                map: map,
                icon: '{{ asset('frontend/images/custom_marker.png') }}', 
                
            });
            @empty
            @endforelse 
      }


         </script>   
    
        
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbm5j6CqocZWCUIi0LvfHcQ0WtMCaf2Dk&callback=initMap"
  type="text/javascript"></script> 

</head>
<body class="home">     
        
        <header class="header fixed clearfix">
        <div class="container">
        <div class="row">
            <div class="left col-sm-3">
                <div class="logo"><a href="{{ url('/') }}"><img src=" {{ asset('/frontend/images/logo.png') }}" alt="ExploreCity" class="img-responsive"></a></div> <!-- end .logo -->


                <form class="header-search">
                    <input type="text" placeholder="I’m searching for ...">
                    <button type="submit"><i class="pe-7s-search"></i></button>
                </form>


            </div> <!-- end .left -->
            <div class="navigation clearfix col-lg-9 col-lg-push-3 text-right" style="left:0%">
              
                           @include('layouts/navigation')

                <a href="" class="responsive-menu-open"><i class="fa fa-bars"></i></a>
            </div> <!-- end .navigation --> 
            </div>
            </div>
            
        </header> <!-- end .header -->
<div class="responsive-menu">
            <a href="" class="responsive-menu-close"><i class="fa fa-times"></i></a>
            <nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
        </div> <!-- end .responsive-menu -->

<div class="fullscreen-section"> 
		
 <div class="left">
 <div id="map"  style="width:100%; height:100%;" ></div> 
 </div> <!-- end .left -->
<div class="right">


	<div class="inner" style="overflow: hidden;" tabindex="0">
		
		<div class="directory-tags hide">
			<div class="tag">Accepts Credit Cards<a href=""><i class="pe-7s-close"></i></a></div>
			<div class="tag">Parking Street<a href=""><i class="pe-7s-close"></i></a></div>
			<div class="tag">Wireless Internet<a href=""><i class="pe-7s-close"></i></a></div>
		</div> <!-- end .directory-tags -->
		<div class="directory-list-info hide">
			<p>Showing all Listings tagged "Accepts Credit Cards", "Parking Street", "Wireless Internet".</p>
			<p class="results">79 Results - <a href="">Reset</a></p>
		</div>
					
	 <div class="directory-list listsection listpage-style01">
	 <div class="row">
	   
						     @forelse($lists as $list)
                         <div class="col-sm-4 col-lg-6">						
							<div class="directory-item locationlist">
							<a href="" class="store-image" title="Store Logo"><span class="number"><img src="https://caworksite.com/Weedulu/images/sponsor-dispensaries01.png" alt="icon"></span></a>
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
							<div class="storeamenity"><img src="https://caworksite.com/Weedulu/images/locationlist-doctor.png" alt="icon"></div>
								 <!-- end .content -->
								
							</div> <!-- end .directory-item -->
						</div>
						
                        @empty
                        @endforelse
                        
							</div>
						</div>
					
				</div> <!-- end .inner -->
			</div> <!-- end .right -->
		</div>
		
        <div class="section light">
           
 
        <div class="section light lastsection">
            <div class="inner">
                <div class="container">
                <div class="row text-center">
                <div class="col-sm-6"><a href=""><img src="{{ asset('/frontend/images/youtube-icon.png') }}"> WEEDULU.TV ON YOUTUBE CHANNEL</a></div>
                <div class="col-sm-6"><a href="therapeutic-cannibis.html"><img src="{{ asset('/frontend/images/therapeutic.png') }}"> THERAPEUTIC USES OF CANNIBIS</a></div>
                </div>
                
                </div>
                </div>
                </div>
        </div>

        <footer class="footer">
        <div class="container inner">                   
                    <div class="row">
                        <div class="col-sm-6 col-md-5"> 
                                <div class="logo"><a href="index.html"><img src="{{ asset('/frontend/images/logo-dark.png') }}" alt="ExploreCity" class="img-responsive"></a></div> <!-- end .logo -->
                                <p class="text-justify">Dictumst porta turpis donec interdum viverra lacus platea sem ut, ultrices laoreet et Dictumst porta turpis donec interdum viverra lacus  platea sem ut, ultrices laoreet etDictumst porta turpis donec interdum viverra lacus platea sem ut, ultrices laoreet et Dictumst porta turpis donec interdum viverra lacus  platea sem ut, ultrices laoreet. </p>                             
                              <!-- end .services -->
                        </div> <!-- end .col-sm-4 -->
                        <div class="col-md-2 col-sm-6">
                            <h3>Navigation</h3><ul class="footer-links"> 
                                                        <li><a href="https://caworksite.com/Weedulu/"> DISPENSARIES</a></li>
                            <!-- <li><a href="#"> DOCTORS</a></li>
                            <li><a href="#"> PROMO VIDEO</a></li> -->
                            <li><a href="https://caworksite.com/Weedulu/index.php/brand"> BRANDS</a></li>
                            <!-- <li><a href="#"> THERAPEUTIC USES OF CANNIBIS </a></li>
                            <li><a href="#"> WEEDULU PROMO AD SPOT</a></li> --></ul>
                        </div> <!-- end .col-sm-4 -->
                        <div class="col-md-2 col-sm-6">
                            <h3>Connect</h3><ul class="footer-links"> 
                            <li><a href="#" target="_blank"> FACEBOOK</a></li>
                            <li><a href="#" target="_blank"> INSTAGRAM</a></li>
                            <li><a href="#" target="_blank"> TWITTER</a></li>
                            <li><a href="#" target="_blank"> GOOGLE+</a></li>
                            <li><a href="#" target="_blank"> YOUTUBE</a></li></ul>
                        </div> <!-- end .col-sm-4 -->
                        <div class="col-md-3 col-sm-6 mobileapplinks">
                            <h3>Mobile Apps</h3>
                            <ul class="footer-links">
                            <li><a href=""><i class="fa fa-apple"></i> Download for IOS</a></li>
                            <li><a href=""><i class="fa fa-android"></i> Download for ANDROID</a></li>
                            </ul>
                        </div> <!-- end .col-sm-4 -->
                    </div> <!-- end .row -->
                </div> 
            <div class="bottom">Copyright &copy; 2017, Weedulu. All Rights Reserved</div>
        </footer> <!-- end .footer -->



<div class="login-wrapper">
            <div class="login">
                @include('auth.login')
            </div> <!-- end .login -->
        </div>


<div class="signup-wrapper">
            <div class="signup">

@include('auth.register')

            </div>
        </div>

        <script type="text/javascript"  src="{{ asset('/frontend/js/jquery-3.1.0.min.js') }}"></script>
                <script type="text/javascript"  src="{{ asset('/frontend/js/bootstrap.min.js') }}"></script>

                        <script type="text/javascript"  src="{{ asset('/frontend/js/owl.carousel.min.js') }}"></script>
                        <script type="text/javascript" src="{{ asset('/frontend/js/richmarker.js') }}"></script>
                         <script type="text/javascript" src="{{ asset('/frontend/js/countdown.js') }}"></script>
                                                         <script type="text/javascript"  src="{{ asset('/frontend/js/sweetalert.min.js') }}"></script>

                          <script type="text/javascript" src="{{ asset('/frontend/scripts/Nivo-Lightbox/nivo-lightbox.min.js') }}"></script>
                                                                  <script type="text/javascript"  src="{{ asset('/frontend/js/jquery.nouislider.all.min.js') }}"></script>

                           <script type="text/javascript" src="{{ asset('/frontend/js/bootstrap-select.min.js') }}"></script>
                            <script type="text/javascript" src="{{ asset('/frontend/js/jquery.nicescroll.min.js') }}"></script>
                                         <script type="text/javascript"  src="{{ asset('/frontend/js/scripts.js') }}"></script>


<script type="text/javascript">

      function validateregister()
      {  
         var name=document.forms.signupform.username.value;
         var email=document.forms.signupform.email.value;
         
         if(name=="" || name==null)
         {
            alert("Username - Mandatory");
            document.forms.signupform.username.focus();
            return false;  
         }
         else if(email=="" || email==null)
         {
            alert("Email - Mandatory");
            document.forms.signupform.email.focus();
            return false;
         }
         else if(name!="" || name!=null)
         {
            if(!/^[a-zA-Z]*$/g.test(name)) 
            {
              alert("Invalid characters");
              document.forms.signupform.username.focus();
              return false;
            }
         }
         else if(email!="" || email!=null)
         {
             atpos = email.indexOf("@");
             dotpos = email.lastIndexOf(".");
         
            if (atpos < 1 || ( dotpos - atpos < 2 )) 
            {
               alert("Please enter correct email ID")
               document.forms.signupform.email.focus();
               return false;
            }
           
         }
         else
         {
             document.forms.signupform.submit();
             return true;
         }
      }

      function validatelogin()
      {
         var name=document.forms.loginform.user.value;
         var pwd=document.forms.loginform.password.value;

         if(name=="" || name==null)
         {
            alert("Please provide the username or email address");
            document.forms.loginform.user.focus();
            return false;  
         }
         else if(pwd=="" || pwd==null)
         {
            alert("Password - Mandatory");
            document.forms.loginform.pwd.focus();
            return false;
         }
         else
         {
             document.forms.loginform.submit();
             return true;
         }  
      }
     



   </script>

        </body></html>
