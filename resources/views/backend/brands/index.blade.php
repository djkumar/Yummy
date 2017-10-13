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
                    <li>Home</li><li>Brands</li>
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
                                Brands 
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
                                    <h2>Brands Lists </h2>
                
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
                                                <tr>
                                                    <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Name</th>
                                                   
                                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                               @forelse($brands as $brand)

                                                 <tr>
                                                    <td>{{ $brand->name }}</td>
                                                    <td>                         <a class="btn btn-small btn-info" href="{{ url('admin/brands/edit/' . $brand->id ) }}">Edit</a>
  |                         <a class="btn btn-small btn-info" href="{{ url('admin/brands/destroy/' . $brand->id ) }}">Delete</a>
 </td>
                                                   
                                                </tr>
                                               @empty
<tr> <td colspan="3"> No rows </td></tr>
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