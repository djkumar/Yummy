@extends('layouts.app')

@section('content');

<div class="page-header">
            <div class="container">
            <div class="breadcrumbs">
                    <ul class="list-unstyled">

                        <li><a href="https://caworksite.com/Weedulu/">Home</a></li>
                                                                        <li>My Listings</li>
                                                                    </ul>
                </div> <!-- end .breadcrumbs -->                
            </div> <!-- end .container -->
        </div>


        <div class="page-title" style="background-image: url('https://caworksite.com/Weedulu/images/background08.jpg');">
            <div class="inner">
                                                        <h2>My Listings</h2>
                                                 
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
                <img src="https://caworksite.com/Weedulu/uploads/7181images1.jpeg" alt="avatar">
                <span>Userfive</span>
                </div>
                </div> 
                    
                <ul class="list-unstyled">
  <li > <a href="{{ url('/home') }}"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
<li> <a href="{{ url('/edit-profile') }}"><i class="fa fa-pencil" aria-hidden="true"></i> Edit Profile</a></li>
<!-- <li> <a href="https://caworksite.com/Weedulu/index.php/mylisting/myproducts"><i class="fa fa-diamond" aria-hidden="true"></i> My Products</a></li> -->
<li class="active"> <a href="{{ url('/my-listings') }}"><i class="fa fa-th-list" aria-hidden="true"></i> My Listings</a></li>
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
                </div>      <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
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
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

<div class="col-sm-9"> 
<div class="box">


                    @component('components.userlistings' ,  ['listings' => $listings] )
                    @endcomponent
           
                
      
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
