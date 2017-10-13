     <!-- Left panel : Navigation area -->
        <!-- Note: This width of the aside area can be adjusted through LESS variables -->
        <aside id="left-panel">

            <!-- User info -->
            <div class="login-info">
                <span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
                    
                    <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
                        <img src="{{ asset('/backend/img/avatars/sunny.png') }}" alt="me" class="online" /> 
                        <span>
                            Admin
                        </span>
                        <i class="fa fa-angle-down"></i>
                    </a> 
                    
                </span>
            </div>
            <!-- end user info -->

            <!-- NAVIGATION : This navigation is also responsive-->
            <nav>
                <!-- 
                NOTE: Notice the gaps after each icon usage <i></i>..
                Please note that these links work a bit different than
                traditional href="" links. See documentation for details.
                -->

                <ul>
                    <li class="active">
                        <a href="{{ url('/admin' )}}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> Dashboard</a>
                            
                    </li>
 <li>
                        <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Users</span></a>
                        <ul>
                            <li>
                                <a href="{{ url('/admin/users') }}">Users</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/users/add') }}"> Add Users </a>
                            </li>
                          
                        </ul>
                    </li>


 <li>
                        <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Subscription Plan</span></a>
                        <ul>
                            <li>
                                <a href="{{ url('/admin/subscriptions') }}">Subscription Plan</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/subscriptions/add') }}"> Add Subscription Plan </a>
                            </li>
                          
                        </ul>
                    </li>


 <li>
                        <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Brands</span></a>
                        <ul>
                            <li>
                                <a href="{{ url('/admin/brands') }}">Brands</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/brands/add') }}"> Add Brands  </a>
                            </li>
                          
                        </ul>
                    </li>


 <li>
                        <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Categories</span></a>
                        <ul>
                            <li>
                                <a href="{{ url('/admin/categories') }}">Categories</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/categories/add') }}"> Add Categories  </a>
                            </li>
                          
                        </ul>
                    </li>


 <li>
                        <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Listings</span></a>
                        <ul>
                            <li>
                                <a href="{{ url('/admin/listings') }}">Listings</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/listings/add') }}"> Add Listings  </a>
                            </li>
                          
                        </ul>
                    </li>
                    
                
                    
                 
                </ul>
            </nav>
            

          

        </aside>
        <!-- END NAVIGATION -->

        <!-- MAIN PANEL -->