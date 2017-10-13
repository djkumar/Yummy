@include('backend/adminheader')

      @include('backend/adminnav')


   
   @include('backend/sidebar')

   
        <div id="main" role="main">

            <!-- RIBBON -->
            <div id="ribbon">

            

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

            <!-- MAIN CONTENT --> 
            <div id="content">
              <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                        <h1 class="page-title txt-color-blueDark">
                            <i class="fa fa-edit fa-fw "></i> 
                                Brands 
                            <span>&gt; 
                                Edit
                            </span>
                        </h1>
                    </div>
                
                    
                    </div>
                    <div class="row">
                    <div class="col-sm-12">
                        
                        
                
                        
                    </div>
                </div>
                
                
<section id="widget-grid" class="">
                
                    <!-- START ROW -->
                    <div class="row">
                        <!-- NEW COL START -->
                        <article class="col-sm-12 col-md-12 col-lg-6">
                
                            <!-- Widget ID (each widget will need unique ID)-->
                            <div class="jarviswidget" id="wid-id-brand"   >
                              
                                <header>
                                    <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                                    <h2> Brands </h2>
                
                                </header>
                

                
                <div>
                
                                
                
                            
 
                                 

                <form class="smart-form" role="form" method="POST" action="{{  url('admin/brands/update' , $brand->id) }}">
                      {{ csrf_field() }}
                                            <header>
                                                Edit Brands
                                            </header>
                
                                            <fieldset>
                                                
                <section>
                                                    <label class="label">Brand Name</label>
                                                    <label class="input">
                                                        <input type="text" name="name" value="{{ $brand->name }}">
                                                    </label>
                                                    
                                                </section>
                                                
                                    
    
                                            </fieldset>
                                            
                                            <footer>
                                                <button type="submit" class="btn btn-primary">
                                                    Submit
                                                </button>
                                                <button type="button" class="btn btn-default" onclick="window.history.back();">
                                                    Back
                                                </button>
                                            </footer>
                                        </form>

                                        

</div>
</div>
</article>
</div>

            </div>
            <!-- END MAIN CONTENT -->

        </div>
        <!-- END MAIN PANEL -->
@include('backend/adminfooter')