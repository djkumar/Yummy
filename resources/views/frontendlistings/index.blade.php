@extends('layouts.app')

@section('content');

<div class="page-header">
            <div class="container">
            <div class="breadcrumbs">
                    <ul class="list-unstyled">

                        <li><a href="{{ url('/') }}">Home</a></li>
                                                                        <li>My Listings</li>
                                                                    </ul>
                </div> <!-- end .breadcrumbs -->                
            </div> <!-- end .container -->
        </div>


        <div class="page-title" style="background-image: url('{{ url('/public/dataimages') }}/background08.jpg');">
            <div class="inner">
                                                        <h2>My Listings</h2>
                                                 
            </div>  
<!-- end .inner -->
        </div>



        <div class="section boxed-section light">
            <div class="inner">
                <div class="container"><div class="row myaccount2col">
              @component('components.user-dashboard-sidebar', ['profile'=> $profiles]);
                @endcomponent
               
                
                
                <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <style type="text/css">

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
