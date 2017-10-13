 <div class="col-sm-3">
                <div class="box myaccount2colmenu">
                <div class="row">
                <div class="col-sm-12 text-center userinfo">
                <img src="{{ url('/public/uploads/avatar/default.png') }} " alt="avatar">
                <span>Userfive</span>
                </div>
                </div> 
                    
                <ul class="list-unstyled">
  <li class="active"> <a href="{{ url('/home') }}"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
<li> <a href="{{ url('/edit-profile') }}"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Profile</a></li>
<!-- <li> <a href="https://caworksite.com/Weedulu/index.php/mylisting/myproducts"><i class="fa fa-diamond" aria-hidden="true"></i> My Products</a></li> -->
<li> <a href="{{ url('/my-listings') }}"><i class="fa fa-th-list" aria-hidden="true"></i> My Listings</a></li>
<li> <a href="{{ url('/pricing-plans') }}"><i class="fa fa-bullhorn" aria-hidden="true"></i> Pricing Plan</a></li>
<!-- <li> <a href="https://caworksite.com/Weedulu/index.php/mylisting/wishlist"><i class="fa fa-magic" aria-hidden="true"></i> My Wishlists</a></li> -->
<li>  <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                                                
                    </ul>
                </div> 
                </div>  