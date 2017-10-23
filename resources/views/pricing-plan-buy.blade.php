@extends('layouts.app')
@section('content')
<div class="page-header">
            <div class="container">
            <div class="breadcrumbs">
                    <ul class="list-unstyled">

                        <li><a href="{{ url('/') }}">Home</a></li>
                                                                        <li>Pricing Plan</li>
                                                                    </ul>
                </div> <!-- end .breadcrumbs -->                
            </div> <!-- end .container -->
        </div>


        <div class="page-title" style="background-image: url('{{ url('/public/dataimages') }}/background08.jpg');">
            <div class="inner">
                                                        <h2>Pricing Plan</h2>
                                                 
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
a.previous { display: none; }
.demo { width:960px; margin:50px auto;}

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
  
            <div class="table-responsive">
            <table class="table cart-items light-inputs">
              <thead>
                <tr>
                  <th>Listing Name</th>
                  <th>Price(USD)</th>
                </tr>
              </thead>
              <tbody>
                                <tr>
                <td>Himalaya Products</td>
                <td>30.00</td>
               </tr>
                             </tbody>
            </table>
           <p><span style="padding-right:395px;">Total</span><span> {{ $subscription_plans->amount }}</span></p>

  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
  <input name="cmd" value="_xclick" type="hidden">
  <input name="business" value="shashmetha-facilitator@mycontactsca.com" type="hidden">
  <input name="item_name" value="Listing Upgrade" type="hidden">
  <input name="quantity" value="1" type="hidden">
  <input name="amount" value="{{ $subscription_plans->amount }}" type="hidden">
  <input name="currency_code" value="USD" type="hidden">
  <input name="return" value="https://caworksite.com/Weedulu/index.php/checkout/success" type="hidden">
  <input name="cancel_return" value="https://caworksite.com/Weedulu/index.php/checkout/cancel" type="hidden">
  <input name="image_url" value="https://caworksite.com/Weedulu/admin/assets/img/logo-dark.png" type="hidden">
  <div style="width:200px;" class="checkout pull-right">
  <input name="submit" src="http://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png" alt="PayPal - The safer, easier way to pay online" type="image">
  </div>
  </form> 
            </div>
  

</div> <!-- end box -->
</div>

		
					
</div>      
                </div> <!-- end .container -->
            </div> <!-- end .inner -->
        </div>
@endsection
