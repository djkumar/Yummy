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

    
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbm5j6CqocZWCUIi0LvfHcQ0WtMCaf2Dk&libraries=places"></script>
            <script type="text/javascript">
          
   var x = document.getElementById("map_canvas");

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    }

function showPosition(position) { 
    console.log("Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude);

  $.ajax({
                    url: "{{ url('/getcity') }}",
                    data:  {'lat':position.coords.latitude,'lng':+position.coords.longitude},
                    type: 'get',
                    datatype: 'JSON',
                    success: function (response) {
                          $('#city_add').html(response);
                     
                    },
                    error: function (response) {
                            $('#city_add').html(response);
                    }
                });
                

}
          
            
            //]]>
            </script>        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


</head>

<?php 



?>
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

        <div class="section large transparent dark text-center searchdispensaries" style="background-image: url('images/background01.jpg');">
            <div class="inner">
                <div class="container "> 

<div id="demo">

</div>

                    <form method="post" action="{{ url('/maps') }}" name="locationform">  <input type="hidden" id="latitude" class="" name="latitude">
                                <input type="hidden" id="longitude" class="" name="longitude"> {{ csrf_field() }} 
                        <div class="row">
                            <div class="col-sm-7 col-lg-5 col-sm-push-3 col-lg-push-3" style="margin-top: -100px">
                                <div class="form-group row">
                                <div class="col-xs-5"><i class="fa fa-crosshairs" aria-hidden="true" title="Current Location"></i> 
                                <input type="text" placeholder="Location" id="mylocation" class="" name="place">
                               </div> 
                                <div class="col-xs-7"><input type="text" placeholder="Search by Brand" class=""></div>
                                </div> <!-- end .form-group -->
                            </div> <!-- end .col-sm-4 -->   
                        
                            
                           
                            
                             
                        </div> <!-- end .row -->
                        <!--<button type="submit" class="button">Search places</button>-->
<h3 style="margin:-3% 17% 1% 3%;color:#fff;" id="city_add"> </h3> <div style="display:none;"><div id="map_canvas" style="width:100%; height:450px;"></div>  </div>       
                    </form>

                </div> <!-- end .container -->
 
            </div> <!-- end .inner -->
        </div> <!-- end .section -->

        <div class="section light">
            <div class="inner">
                <div class="container">
                    <h2 class="text-center">FEATURED DISPENSARIES</h2> 
                    <div class="row">
                    <div class="homecategoryblock">
                           @forelse($listings as $listing)
                                        <div class="col-xs-12">
                    
                            <a href=" {{ url('my-listings/show/'.$listing->id) }}" class="category-box" style="background-image: url('{{ url('/public/dataimages') }}/map.jpg');"><div class="rating">0</div>
                                <div class="inner">                             
                                    <img src="{{ asset('/frontend/images/marker-02.png') }}" alt="icon">
                                    <span class="number"><img src=" {{ url('/public/uploads/listing_logo/'.$listing->listing_logo) }}" alt="icon" ></span>                                  
                                     <span class="location">{{ $listing->city }} </span>
                            <span class="title">{{ $listing->listing_name }} </span>
                                                                        <span class="chat"><span title="Not Available For Chat"><img src="{{ url('/public/dataimages') }}/chat-unavailable.png" alt="Chat"> Offline</span></span>
                                                                    </div> <!-- end .inner -->
                            </a> <!-- end .category-box -->
                            
                        </div> <!-- end .col-md-3 -->
                        
                          @empty
            @endforelse
            
                                                 
            <!--  </div> -->
                        </div> <!-- end .row -->
                                            <div class="text-center viewallbtn">
                        <a href="index.php/home/allcategory/Los Angeles" class="button">view all</a>
                    </div> <!-- end .text-center -->
                </div> <!-- end .container -->
            </div> <!-- end .inner -->
        </div> <!-- end .section -->
        
    <div class="section white">
        <div class="inner homedispensaries-stories">
          <div class="container">
            <h2 class="text-center">OTHER DISPENSARIES</h2>    
            <div class="row">
            <div class="homecategoryblock">
                
           @forelse($listings as $listing)
                        <div class="col-xs-12"> 
            <a href="{{ url('my-listings/show/'.$listing->id) }}" class="category-box" style="background-image: url('{{ url('/public/dataimages') }}/map.jpg');"><div class="rating">0</div>
                        <div class="inner">                             
                            <img src="{{ url('/public/dataimages') }}/marker-02.png" alt="icon">
                            <span class="number"><img src="https://caworksite.com/Weedulu/uploads/5495new.jpeg" alt="icon"></span>                                  
                            <span class="location">{{ $listing->city }} </span>
                            <span class="title">{{ $listing->listing_name }} </span>
                                                        <span class="chat"><span title="Not Available For Chat"><img src="{{ url('/public/dataimages') }}/chat-unavailable.png" alt="Chat"> Offline</span></span>
                                                    </div> <!-- end .inner -->
                    </a> <!-- end .category-box -->
            </div> <!-- end .col-md-3 -->
            @empty
            @endforelse
            
             </div> <!-- end homecategoryblock -->
            </div> <!-- end .row -->
          

        </div> <!-- end .container -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->
        
        <div class="section light lastsection">
            <div class="inner">
                <div class="container">
                <div class="row text-center">
                <div class="col-sm-6"><a href="#"><img src="{{ asset('/frontend/images/youtube-icon.png') }}"> WEEDULU.TV ON YOUTUBE CHANNEL</a></div>
                <div class="col-sm-6"><a href="#"><img src="{{ asset('/frontend/images/therapeutic.png') }}"> THERAPEUTIC USES OF CANNIBIS</a></div>
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
                                                        <li><a href="{{ url('/') }}"> DISPENSARIES</a></li>
                            <!-- <li><a href="#"> DOCTORS</a></li>
                            <li><a href="#"> PROMO VIDEO</a></li> -->
                            <li><a href="{{ url('/brand') }}"> BRANDS</a></li>
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

                           
<script src='https://www.google.com/recaptcha/api.js'></script>
        <script type="text/javascript" src="https://www.youtube.com/player_api"></script>


    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>-->
    <script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', function () {
            var places = new google.maps.places.Autocomplete(document.getElementById('mylocation'));
            google.maps.event.addListener(places, 'place_changed', function () {
          
                
                var place = places.getPlace();
                var address = place.formatted_address;
                var latitude = place.geometry.location.lat();
                var longitude = place.geometry.location.lng();
                var mesg = "Address: " + address;
                mesg += "\nLatitude: " + latitude;
                mesg += "\nLongitude: " + longitude;
                
                $('#latitude').val(latitude);
                $('#longitude').val(longitude);
                       document.forms.locationform.submit();

            });
        });
    </script> 

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
     
 /*   $('#mylocation').change(function(){
      
      document.forms.locationform.submit();

     });
     function location_submit()
     {
       var p=document.getElementById('mylocation').value;
       document.forms.locationform.submit();
     }
*/
       
   </script>

        </body></html>
