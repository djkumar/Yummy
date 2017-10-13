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
                    <li> <a href="{{ url('admin') }}">Home</a></li><li>Listings</li>
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
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                        <h1 class="page-title txt-color-blueDark">
                            <i class="fa fa-table fa-fw "></i> 
                                Listings 
                            <span>&gt; 
                                Lists
                            </span>
                        </h1>
                    </div>


              
                </div>
        
                
                <!-- widget grid -->
                <section id="widget-grid" class="">
                
                
                
                    <!-- START ROW -->
                
                    <div class="row">
                



				
															
				
				
				  @forelse($users as $user)
				  			<div class="col-md-3 user" title="email@company.com">
																	<img src="img/avatars/female.png" alt="demo user"><a href=" {{ url('/admin/users') }}/{{ $user->id }}"> {{ $user->name }}  </a>
																	<div class="email">
{{ $user->email }} 																	</div>
																</div>
																@empty
																<div> No users </div>
																@endforelse
                                            
                                                    
													
																
												
				
																<div class="text-center">
																	<ul class="pagination pagination-sm">
																		<li class="disabled">
																			<a href="javascript:void(0);">Prev</a>
																		</li>
																		<li class="active">
																			<a href="javascript:void(0);">1</a>
																		</li>
																		<li>
																			<a href="javascript:void(0);">2</a>
																		</li>
																		<li>
																			<a href="javascript:void(0);">3</a>
																		</li>
																		<li>
																			<a href="javascript:void(0);">...</a>
																		</li>
																		<li>
																			<a href="javascript:void(0);">99</a>
																		</li>
																		<li>
																			<a href="javascript:void(0);">Next</a>
																		</li>
																	</ul>
																</div>
				
															</div>
															
															
                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">
                
                            <!-- Widget ID (each widget will need unique ID)-->
                            <div class="jarviswidget jarviswidget-color-darken jarviswidget-sortable" id="wid-id-0" data-widget-editbutton="false" role="widget">
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
                                <header>
                                    <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                                    <h2>Listings </h2>
                
                                </header>
                
                                <!-- widget div-->
                                <div role="content">
                
                                    <!-- widget edit box -->
                                    <div class="jarviswidget-editbox">
                                        <!-- This area used as dropdown edit box -->
                
                                    </div>
                                    <!-- end widget edit box -->
                
                                    <!-- widget content -->
                                    <div class="widget-body no-padding">






  <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                                            <thead>                         
                                               
                                                    <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Name</th>
                                                   
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($users as $user)
                                                <tr>
                                                   
                                                    <td><a href="{{ url('/admin/users/'.$user->id) }}">{{ $user->name }}</a></td>
                                                 
                                                    
                                                   
                                                </tr>
                                                @empty
                                                 <tr>
                                                    <td> No records </td>
                                                </tr>
                                                @endforelse

</tbody>
</table>


                                        
                                    </div>

                                    <!-- end widget content -->
                
                                </div>
                                <!-- end widget div -->
                
                            </div>
                            <!-- end widget -->
                
                
                        </article>



                                    <!-- end widget content -->
                
                                </div>
                                <!-- end widget div -->
                
                            </div>
                            <!-- end widget -->
                
                        </article>
                        <!-- END COL -->
                
                      
                    </div>
                
                    <!-- END ROW -->
                
                    <!-- NEW ROW -->
                
                
                    <!-- END ROW-->
                
                </section>
                <!-- end widget grid -->


            </div>
            <!-- END MAIN CONTENT -->

        </div>
        <!-- END MAIN PANEL -->
        
      
@include('backend/adminfooter')

  <script>
            
            
            	var responsiveHelper_dt_basic = undefined;
				var responsiveHelper_datatable_fixed_column = undefined;
				var responsiveHelper_datatable_col_reorder = undefined;
				var responsiveHelper_datatable_tabletools = undefined;
				
				var breakpointDefinition = {
					tablet : 1024,
					phone : 480
				};

            	$('#dt_basic').dataTable({
					"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
					"autoWidth" : true,
			        "oLanguage": {
					    "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
					},
					"preDrawCallback" : function() {
						// Initialize the responsive datatables helper once.
						if (!responsiveHelper_dt_basic) {
							responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
						}
					},
					"rowCallback" : function(nRow) {
						responsiveHelper_dt_basic.createExpandIcon(nRow);
					},
					"drawCallback" : function(oSettings) {
						responsiveHelper_dt_basic.respond();
					}
				});
	


        </script>