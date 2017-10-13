@extends('layouts.app')
@section('content');

<div class="page-header">
            <div class="container">
            <div class="breadcrumbs">
                    <ul class="list-unstyled">

                        <li><a href="https://caworksite.com/Weedulu/">

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
                      <img src="https://caworksite.com/Weedulu/images/heading.png" alt="icon"></h2>
								<p></p>
								<ul class="meta list-unstyled">
									<li><img src="https://caworksite.com/Weedulu/images/location.png" alt="icon">	{{ $listing->city }},&nbsp;	{{ $listing->state }}</li>
									<li><img src="https://caworksite.com/Weedulu/images/phone.png" alt="icon">	{{ $listing->contact_number }}</li>
									<li>
										<div class="social">
											<a href="http://hghextractions"><img src="https://caworksite.com/Weedulu/images/facebook.png" alt="facebook"></a>
											<a href="http://hghextractions"><img src="https://caworksite.com/Weedulu/images/twitter.png" alt="twitter"></a>
											<a href="http://hghextractions"><img src="https://caworksite.com/Weedulu/images/google-plus.png" alt="google plus"></a>
											<a href="#"><img src="https://caworksite.com/Weedulu/images/instagram-r.png" alt="istagram"></a>
										</div> <!-- end .social -->
									</li>
									<li><div class="rating">0</div><div class="number-of-ratings">( <span>0</span> )</div></li>
								</ul>
								<a href="https://weedmaps.com/brands/category/concentrates" target="_blank" class="link"><img src="https://caworksite.com/Weedulu/images/link.png" alt="icon">https://weedmaps.com/brands/category/concentrates</a>

								<div class="buttons">
									<a href="#" class="button dark" id="review"><img src="https://caworksite.com/Weedulu/images/write.png" alt="icon">Write a Review</a>
									<!--<a href="" class="button dark"><img src="https://caworksite.com/Weedulu/images/add.png" alt="icon">Add to Favorites</a>-->
									<div class="button dark share-button">
										<img src="https://caworksite.com/Weedulu/images/share.png" alt="icon">Share
										<div class="social">
											<a href=""><img src="https://caworksite.com/Weedulu/images/facebook.png" alt="facebook"></a>
											<a href=""><img src="https://caworksite.com/Weedulu/images/twitter.png" alt="twitter"></a>
											<a href=""><img src="https://caworksite.com/Weedulu/images/google-plus.png" alt="google plus"></a><a href=""><img src="https://caworksite.com/Weedulu/images/instagram-r.png" alt="istagram"></a>
										</div> <!-- end .social -->
									</div>
								</div> <!-- end .buttons -->
								
							</div> <!-- end .directory-single-info -->
						</div> <!-- end .col-md-8 -->
						
					
					</div> <!-- end .row --></div>
					
    <div role="tabpanel" class="tab-pane" id="products">
	
	<div class="directory-single-info"><h2>Products<img src="https://caworksite.com/Weedulu/images/heading01.png" alt="icon"></h2></div>

		<div class="row products">
		
			<div class="col-sm-3">
				<div class="product">
					<img src="https://caworksite.com/Weedulu/images/product09.jpg" alt="image" class="img-responsive">
					<div class="overlay"></div>
					<div class="content">
						<h3><a href="shop-details01.html">Dispensary Products</a></h3>
						<p><span class="sale">$79.00</span>$39.00</p>
					</div> <!-- end .content --> 
					
				</div> <!-- end .product -->
			</div> <!-- end .col-sm-6 -->
			<div class="col-sm-3">
				<div class="product">
					<img src="images/product10.jpg" alt="image" class="img-responsive">
					<div class="overlay"></div>
					<div class="content">
						<h3><a href="shop-details01.html">Dispensary Products</a></h3>
						<p>$68.00</p>
					</div> <!-- end .content -->
					
				</div> <!-- end .product -->
			</div> <!-- end .col-sm-6 -->
			<div class="col-sm-3">
				<div class="product">
					<img src="https://caworksite.com/Weedulu/images/product11.jpg" alt="image" class="img-responsive">
					<div class="overlay"></div>
					<div class="content">
						<h3><a href="shop-details01.html">Dispensary Products</a></h3>
						<p>$68.00</p>
					</div> <!-- end .content -->
					
				</div> <!-- end .product -->
			</div> <!-- end .col-sm-6 -->
			<div class="col-sm-3">
				<div class="product">
					<img src="https://caworksite.com/Weedulu/images/product12.jpg" alt="image" class="img-responsive">
					<div class="overlay"></div>
					<div class="content">
						<h3><a href="shop-details01.html">Dispensary Products</a></h3>
						<p><span class="sale">$79.00</span>$39.00</p>
					</div> <!-- end .content --> 
					
				</div> <!-- end .product -->
			</div> <!-- end .col-sm-6 -->
			</div>
			<div class="row">
			<div class="col-sm-3">
				<div class="product">
					<img src="https://caworksite.com/Weedulu/images/product13.jpg" alt="image" class="img-responsive">
					<div class="overlay"></div>
					<div class="content">
						<h3><a href="shop-details01.html">Dispensary Products</a></h3>
						<p>$68.00</p>
					</div> <!-- end .content -->
					
				</div> <!-- end .product -->
			</div> <!-- end .col-sm-6 -->
			<div class="col-sm-3">
				<div class="product">
					<img src="https://caworksite.com/Weedulu/images/product06.jpg" alt="image" class="img-responsive">
					<div class="overlay"></div>
					<div class="content">
						<h3><a href="shop-details01.html">Dispensary Products</a></h3>
						<p><span class="sale">$79.00</span>$39.00</p>
					</div> <!-- end .content --> 
					
				</div> <!-- end .product -->
			</div> <!-- end .col-sm-6 -->
			<div class="col-sm-3">
				<div class="product">
					<img src="https://caworksite.com/Weedulu/images/product07.jpg" alt="image" class="img-responsive">
					<div class="overlay"></div>
					<div class="content">
						<h3><a href="shop-details01.html">Dispensary Products</a></h3>
						<p>$390.00</p>
					</div> <!-- end .content --> 
					
				</div> <!-- end .product -->
			</div> <!-- end .col-sm-6 -->
			<div class="col-sm-3">
				<div class="product">
					<img src="images/product08.jpg" alt="image" class="img-responsive">
					<div class="overlay"></div>
					<div class="content">
						<h3><a href="shop-details01.html">Dispensary Products</a></h3>
						<p>$68.00</p>
					</div> <!-- end .content -->
					
				</div> <!-- end .product -->
			</div> <!-- end .col-sm-6 -->									
		</div> <!-- end .row -->

	</div>
    <div role="tabpanel" class="tab-pane" id="videos">
	<h3>Coming Soon!</h3>
Videos not yet added. Check back soon!
	</div> 
  </div>
					
				</div> <!-- end .container -->
			</div>
			
		
                                                   


                                   
                         
                            <input id="latlng" name="latlng" value="" type="text">
  <div class="google_maps" id="map" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;" class="gm-style"><div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default;" tabindex="0"><div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;" aria-hidden="true"><div style="width: 256px; height: 256px; position: absolute; left: 118px; top: 77px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -138px; top: 77px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 118px; top: -179px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 118px; top: 333px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 374px; top: 77px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -138px; top: -179px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -138px; top: 333px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 374px; top: -179px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 374px; top: 333px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;" aria-hidden="true"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 118px; top: 77px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -138px; top: 77px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 118px; top: -179px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 118px; top: 333px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 374px; top: 77px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -138px; top: -179px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -138px; top: 333px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 374px; top: -179px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 374px; top: 333px;"></div></div></div></div><div style="position: absolute; z-index: 0; left: 0px; top: 0px;"><div style="overflow: hidden; width: 600px; height: 450px;"><img style="width: 600px; height: 450px;" src="https://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i1418&amp;2i2995&amp;2e1&amp;3u5&amp;4m2&amp;1u600&amp;2u450&amp;5m5&amp;1e0&amp;5sen-GB&amp;6sus&amp;10b1&amp;12b1&amp;token=20503"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;" aria-hidden="true"><div style="position: absolute; left: 118px; top: 77px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i6!3i12!4i256!2m3!1e0!2sm!3i394091223!3m9!2sen-GB!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=94888"></div><div style="position: absolute; left: -138px; top: 77px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i5!3i12!4i256!2m3!1e0!2sm!3i394091223!3m9!2sen-GB!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=37701"></div><div style="position: absolute; left: 118px; top: -179px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i6!3i11!4i256!2m3!1e0!2sm!3i394091223!3m9!2sen-GB!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=58867"></div><div style="position: absolute; left: 374px; top: 77px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i7!3i12!4i256!2m3!1e0!2sm!3i394090947!3m9!2sen-GB!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=127205"></div><div style="position: absolute; left: 118px; top: 333px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i6!3i13!4i256!2m3!1e0!2sm!3i394091344!3m9!2sen-GB!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=91835"></div><div style="position: absolute; left: -138px; top: 333px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i5!3i13!4i256!2m3!1e0!2sm!3i394091223!3m9!2sen-GB!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=73722"></div><div style="position: absolute; left: -138px; top: -179px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i5!3i11!4i256!2m3!1e0!2sm!3i394091223!3m9!2sen-GB!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=1680"></div><div style="position: absolute; left: 374px; top: -179px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i7!3i11!4i256!2m3!1e0!2sm!3i394090947!3m9!2sen-GB!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=91184"></div><div style="position: absolute; left: 374px; top: 333px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i5!2i7!3i13!4i256!2m3!1e0!2sm!3i394091344!3m9!2sen-GB!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=17951"></div></div></div></div><div style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;" class="gm-style-pbc"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"><div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div></div><div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a style="position: static; overflow: visible; float: none; display: inline;" target="_blank" href="https://maps.google.com/maps?ll=35.90089,-104.497419&amp;z=5&amp;t=m&amp;hl=en-GB&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps"><div style="width: 66px; height: 26px; cursor: pointer;"><img style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto,Arial,sans-serif; color: rgb(34, 34, 34); box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.2); z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 150px; top: 135px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2017 Google, INEGI</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 80px; bottom: 0px; width: 12px;"><div draggable="false" style="-moz-user-select: none; height: 14px; line-height: 14px;" class="gm-style-cc"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span style="">Map data ©2017 Google, INEGI</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto,Arial,sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2017 Google, INEGI</div></div><div class="gmnoprint gm-style-cc" style="z-index: 1000001; -moz-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;" draggable="false"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);" href="https://www.google.com/intl/en-GB_US/help/terms_maps.html" target="_blank">Terms of Use</a></div></div><div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="https://maps.gstatic.com/mapfiles/api-3/images/sv9.png" draggable="false" class="gm-fullscreen-control"></div><div draggable="false" style="-moz-user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;" class="gm-style-cc"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Report errors in the road map or imagery to Google" style="font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;" href="https://www.google.com/maps/@35.9008896,-104.4974195,5z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3">Report a map error</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" style="margin: 10px; -moz-user-select: none; position: absolute; bottom: 107px; right: 28px;" draggable="false" controlwidth="28" controlheight="93"><div class="gmnoprint" style="position: absolute; left: 0px; top: 38px;" controlwidth="28" controlheight="55"><div draggable="false" style="-moz-user-select: none; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;"><div title="Zoom in" aria-label="Zoom in" tabindex="0" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img style="position: absolute; left: 0px; top: 0px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false"></div></div><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div><div title="Zoom out" aria-label="Zoom out" tabindex="0" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img style="position: absolute; left: 0px; top: -15px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false"></div></div></div></div><div class="gm-svpc" style="background-color: rgb(255, 255, 255); box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; position: absolute; left: 0px; top: 0px;" controlwidth="28" controlheight="28"><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"><div style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;" aria-label="Street View Pegman Control"><img style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false"></div><div style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;" aria-label="Pegman is on top of the Map"><img style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false"></div><div style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;" aria-label="Street View Pegman Control"><img style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false"></div></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); cursor: pointer; background-color: rgb(255, 255, 255); display: none;" title="Rotate map 90 degrees"><img style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false"></div><div style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);" class="gm-tilt"><img style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;"><div style="float: left;" class="gm-style-mtc"><div style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; background-clip: padding-box; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); min-width: 24px; font-weight: 500;" draggable="false" title="Show street map">Map</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); position: absolute; left: 0px; top: 30px; text-align: left; display: none;"><div style="color: rgb(0, 0, 0); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;" draggable="false" title="Show street map with terrain"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img style="position: absolute; left: -52px; top: -44px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div></div></div><div style="float: left;" class="gm-style-mtc"><div style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; background-clip: padding-box; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); border-left: 0px none; min-width: 46px;" draggable="false" title="Show satellite imagery">Satellite</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); position: absolute; right: 0px; top: 30px; text-align: left; display: none;"><div style="color: rgb(0, 0, 0); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;" draggable="false" title="Show imagery with street names"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img style="position: absolute; left: -52px; top: -44px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;" src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div></div></div></div>
                             <div id="infowindow-content">
      <img src="" id="place-icon" width="16" height="16">
      <span id="place-name" class="title"></span><br>
      <span id="place-address"></span>
    




                        

	    <script>

    
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 35.9008896, lng: -104.4974195},
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

           position:new google.maps.LatLng,
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
    
 <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbm5j6CqocZWCUIi0LvfHcQ0WtMCaf2Dk&amp;libraries=places&amp;callback=initMap" type="text/javascript"></script>
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

</div>



      




                        

	    <script>

    
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 35.9008896, lng: -104.4974195},
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

           position:new google.maps.LatLng{{ $listing->latlng }},
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
     
    </style>
											
									

										

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
