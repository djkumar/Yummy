@include('backend/adminheader')

      @include('backend/adminnav')


   
   @include('backend/sidebar')

   
        <div id="main" role="main">

         <div id="ribbon">

                <span class="ribbon-button-alignment"> 
                    <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh" rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
                        <i class="fa fa-refresh"></i>
                    </span> 
                </span>

                <!-- breadcrumb -->
                <ol class="breadcrumb">
                    <li>Home</li><li>Subscriptions</li>
                </ol>
                <!-- end breadcrumb -->

                <!-- You can also add more buttons to the
                ribbon for further usability

                Example below:

                <span class="ribbon-button-alignment pull-right">
                <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
                <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
                <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
                </span> -->

            </div> 

            <!-- END RIBBON -->



<div id="content">

				<!-- widget grid -->
				<section id="widget-grid" class="">
				
					<!-- row -->
					<div class="row">
				
						<!-- NEW WIDGET START -->
						<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">
				
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget well jarviswidget-color-darken" id="wid-id-0" data-widget-sortable="false" data-widget-deletebutton="false" data-widget-editbutton="false" data-widget-colorbutton="false" role="widget">
								<!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
				
								data-widget-colorbutton="false"
								data-widget-editbutton="false"
								data-widget-togglebutton="false"
								data-widget-deletebutton="false"
								data-widget-fullscreenbutton="false"
								data-widget-custombutton="false"
								data-widget-collapsed="true"
								data-widget-sortable="false"
				
								-->
								<header role="heading"><div class="jarviswidget-ctrls" role="menu">   <a href="javascript:void(0);" class="button-icon jarviswidget-toggle-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Collapse"><i class="fa fa-minus "></i></a> <a href="javascript:void(0);" class="button-icon jarviswidget-fullscreen-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Fullscreen"><i class="fa fa-expand "></i></a> </div>
									<span class="widget-icon"> <i class="fa fa-barcode"></i> </span>
									<h2>Item #44761 </h2>
				
								<span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>
				
								<!-- widget div-->
								<div role="content">
				
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
				
									</div>
									<!-- end widget edit box -->
				
									<!-- widget content -->
									<div class="widget-body no-padding">
				
										<div class="widget-body-toolbar">
				
											<div class="row">
				
												
				
											
				
											</div>
				
										</div>
				
										<div class="padding-10">
											<br>
											<div class="pull-left">
												<img src=" {{ asset('backend/img/logo-white.png') }} " width="150" height="32" alt="invoice icon">
				
												<address>
													<br>
													<strong>Weedulu, Inc.</strong>
													<br>
													231 LB Rd,
													<br>
													Detroit MI - 48212, USA
													<br>
													<abbr title="Phone">P:</abbr> (123) 456-7890
												</address>
											</div>
											<div class="pull-right">
												<h1 class="font-400">invoice</h1>
											</div>
											<div class="clearfix"></div>
											<br>
											<br>
											<div class="row">
												<div class="col-sm-9">
													<h4 class="semi-bold">Rogers, Inc.</h4>
													<address>
														<strong>Mr. {{ $profiledata->first_name }} {{ $profiledata->last_name }}  </strong>
														<br>
														{{ $profiledata->address }} ,
														<br>
													{{ $profiledata->city }} , {{ $profiledata->state }} {{ $profiledata->zipcode }} 
														<br>
														<abbr title="Phone">P:</abbr> {{ $profiledata->contact_number }}
													</address>
												</div>
												<div class="col-sm-3">
													<div>
														<div>  
															<strong>INVOICE NO :</strong>
															<span class="pull-right"> #AA- {{RAND()}} </span>
														</div>
			
				<!--{{ $profiledata }} -->
													</div>
													<div>
														<div class="font-md">
															<strong>INVOICE DATE :</strong>
															<span class="pull-right"> <i class="fa fa-calendar"></i> {{ date('Y-m-d') }}  </span>
														</div>
				
													</div>
													<br>
													<div class="well well-sm  bg-color-darken txt-color-white no-border">
														<div class="fa-lg">
															Total Due :
															<span class="pull-right"> {{ $subscriptions->amount }} USD** </span>
														</div>
				
													</div>
													<br>
													<br>
												</div>
											</div>
											<table class="table table-hover">
												<thead>
													<tr>
														<th class="text-center">QTY</th>
														<th>ITEM</th>
														<th>DESCRIPTION</th>
														<th>PRICE</th>
														<th>SUBTOTAL</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-center"><strong>1</strong></td>
														<td><a href="javascript:void(0);">	{{ $subscriptions->name }} For {{ $subscriptions->days }} Days</a></td>
														<td>	{{ $subscriptions->descriptions }}</td>
														<td>				{{ $subscriptions->amount }}
</td>
				
														<td>				{{ $subscriptions->amount }}
</td>
													</tr>
													
													<tr>
														<td colspan="4">Total</td>
														<td><strong>$ {{ $subscriptions->amount }}</strong></td>
													</tr>
													<tr>
														<td colspan="4">HST/GST</td>
														<td><strong>13%</strong></td>
													</tr>
												</tbody>
											</table>
				
											<div class="invoice-footer">
				
												<div class="row">
				
													<div class="col-sm-7">
														<div class="payment-methods">
															<h5>Payment Methods</h5>
															<img src="img/invoice/paypal.png" width="64" height="64" alt="paypal">
															<img src="img/invoice/americanexpress.png" width="64" height="64" alt="american express">
															<img src="img/invoice/mastercard.png" width="64" height="64" alt="mastercard">
															<img src="img/invoice/visa.png" width="64" height="64" alt="visa">
														</div>
													</div>
													<div class="col-sm-5">
														<div class="invoice-sum-total pull-right">
															<h3><strong>Total: <span class="text-success">$ {{ $subscriptions->amount }} USD</span></strong></h3>
														</div>
													</div>
				
												</div>
												
												<div class="row">
													<div class="col-sm-12">
														<p class="note">**To avoid any excess penalty charges, please make payments within 30 days of the due date. There will be a 2% interest charge per month on all late invoices.</p>
													</div>
												</div>
				
											</div>
										</div>
				
									</div>
									<!-- end widget content -->
				
								</div>
								<!-- end widget div -->
				
							</div>
							<!-- end widget -->
				
						</article>
						<!-- WIDGET END -->
				
					</div>
				
					<!-- end row -->
				
				</section>
				<!-- end widget grid -->

			</div>
			
			
            <!-- END MAIN CONTENT -->

        </div>
        <!-- END MAIN PANEL -->
@include('backend/adminfooter')