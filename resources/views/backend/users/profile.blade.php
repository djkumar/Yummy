@include('backend/adminheader')

    @include('backend/adminnav')


   
   @include('backend/sidebar')

   
   
   
   
   <div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon">

				<span class="ribbon-button-alignment"> 
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh" rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span> 
				</span>

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>Home</li><li>User</li><li>Profile</li>
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

			<!-- MAIN CONTENT -->
			<div id="content">

				<!-- Bread crumb is created dynamically -->
				<!-- row -->
				
				<!-- end row -->
				
				<!-- row -->
				
				<div class="row">
				
					<div class="col-sm-12">
				
				
							<div class="well well-sm">
				
								<div class="row">
				
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="well well-light well-sm no-margin no-padding">
				
											<div class="row">
				
											
				
												<div class="col-sm-12">
				
													<div class="row">
				
														<div class="col-sm-3 profile-pic">
															<img src="{{ url('/public/uploads/avatar/'. $userdata->user_avatar ) }}" alt="demo user">
															<div class="padding-10">
																<h4 class="font-md"><strong>4</strong>
																<br>
																<small>Dispensaries</small></h4>
																<br>
																<h4 class="font-md"><strong>2</strong>
																<br>
																<small>Deals</small></h4>
															</div>
														</div>
														<div class="col-sm-6">
															<h1> {{ $userdata->first_name }} <span class="semi-bold"> {{ $userdata->last_name }}</span>
															<br>
															<small>  </small></h1>
				
															<ul class="list-unstyled">
																<li>
																	<p class="text-muted">
																		<i class="fa fa-phone"></i>&nbsp;&nbsp;<span class="txt-color-darken"> {{ $userdata->contact_number }}</span>
																	</p>
																</li>
															</ul>
			<a href="{{ url('admin/subscriptions/show') }}" class="btn btn-info"onclick="event.preventDefault(); document.getElementById('sub-user-form').submit()"> Upgrade Plan </a>
			<form id="sub-user-form" action="{{ url('admin/subscriptions/show') }}" style="display:none;" method="post">
			    <input type="hidden" name="userid" value="{{ $user->id }}" />
			    {{ csrf_field() }} 
			</form>
				
														</div>
											
				
													</div>
				
												</div>
				
											</div>
				
											<div class="row">
				
												<div class="col-sm-12">
				
													<hr>
				
													<div class="padding-10">
			<a href="{{ url('admin/listings/add') }}" class="btn btn-info"> Add </a>
  <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                                            <thead>                         
                                                <tr>
                                                    <th data-hide="phone">ID</th>
                                                    <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Listing Name</th>
                                                    <th data-hide="phone"><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Email</th>
                                                    <th>Action</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($listings as $listing)
                                                <tr>
                                                    <td>{{ $listing->id }}</td>
                                                    <td>{{ $listing->listing_name }}</td>
                                                    <td>{{ $listing->listing_tag }}</td>
                                                    <td><a href="{{ url('admin/users/') }}/{{ $user->id }}/show/{{ $listing->id }}"> View </a> | <a href="{{ url('admin/listings/edit') }}/{{ $listing->id }}"> Edit </a> </td>
                                                   
                                                </tr>
                                                @empty
                                                 <tr>
                                                    <td> No records </td>
                                                </tr>
                                                @endforelse

</tbody>
</table>

														
				

													</div>
				
												</div>
				
											</div>
											<!-- end row -->
				
										</div>
				
									</div>
								</div>
				
							</div>
				
				
					</div>
				
				</div>
				
				<!-- end row -->

			</div>
			<!-- END MAIN CONTENT -->
</div>
		
		
		


@include('backend/adminfooter')