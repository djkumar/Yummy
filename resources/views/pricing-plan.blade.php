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
					<div class="box transparent">
						<div class="row">
						    @forelse ( $subscription_plans as $plan )
                         							<div class="col-md-4">
								<div class="pricing-table" style="background-image: url('/dataimages/pricing-table01.jpg');margin-top:0px;" >
									<div class="inner">
										<div class="overlay">
											<h3>{{ $plan->name }}</h3><br>
											<span class="myspan">$  {{ $plan->amount }}</span>
											<p>{{ $plan->descriptions }}</p>
											<ul class="list-unstyled">
											   <!--  												<li><span></span>&nbsp;Listing(s)</li>
												 -->
												<li><span>{{ $plan->days }} Day(s)</span>&nbsp;Availability</li>
												<!-- <li><span>Standard</span> Listing</li> -->
																								<li><span>Limited</span> Support</li>
																								
																							</ul>
													<a href="{{ url('pricing-plans/buy/'.$plan->id) }}" class="button white">Buy</a>

																					</div> <!-- end .overlay -->
									</div> <!-- end .inner -->
								</div> <!-- end .pricing-table -->
							</div> <!-- end .col-md-4 -->
												
												@empty 
												@endforelse
												</div> <!-- end .row -->
						
					</div> <!-- end .box -->
					</div>
					
</div>      
                </div> <!-- end .container -->
            </div> <!-- end .inner -->
        </div>
@endsection
