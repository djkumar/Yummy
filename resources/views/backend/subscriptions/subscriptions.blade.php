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

				<div class="row">
					
					<div class="col-sm-12">
						
						<div class="well well-light">
							
							<h1>Subscription Plans</h1>
							<div class="row">
								  @forelse($subscriptions as $subscription)
						        <div class="col-xs-12 col-sm-6 col-md-3">
						          
						            <div class="panel panel-success pricing-big">
						            	
						                <div class="panel-heading">
						                    <h3 class="panel-title">
						                        {{ $subscription->name }}</h3>
						                </div>
						                <div class="panel-body no-padding text-align-center">
						                    
						                    <div class="the-price">
						                        <h1>
						                           ${{ $subscription->amount }} <span class="subscript">/ {{ $subscription->days }} days</span></h1>
						                      
						                    </div>
											<div class="price-features">
												<ul class="list-unstyled text-left">
										          <li><i class="fa fa-check text-success"></i> <strong> {{ $subscription->days }}  </strong></li>
										          {{ $subscription->descriptions }} 
										        </ul>
											</div>
										
						                </div>
						                <div class="panel-footer text-align-center">
						                    <a href=" {{ url('admin/subscriptions/buy/'.$subscription->id ) }}" class="btn btn-primary btn-block" role="button" onclick="event.preventDefault(); document.getElementById('subform{{ $subscription->id }}').submit()">Buy <span> now!</span></a>
						                
						                
						                <form method="POST"  action=" {{ url('admin/subscriptions/buy/') }}" id="subform{{ $subscription->id }}" style="display:none;"> {{ csrf_field() }}
						                    	<input type="hidden" name="userid" value="{{ $userid }}" />
						                    		<input type="hidden" name="subscribeid" value="{{ $subscription->id }}" />
						                </form>
						                </div>
						            </div>
						         
						        </div>
						        
						           @empty
						            <div> </div>
						            @endforelse
						        
						        
						        
						        		    	
				    		</div>
				
							
							
							
							
				
							
							
							
										
							
						</div>
						
					</div>
					
				</div>


			</div>
            <!-- END MAIN CONTENT -->

        </div>
        <!-- END MAIN PANEL -->
@include('backend/adminfooter')