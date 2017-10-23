@include('backend/adminheader')

    <body class="">



        <header id="header">
            <div id="logo-group">

                <!-- PLACE YOUR LOGO HERE -->
                <span id="logo" style="margin-top:1px !Important; "> <img src="{{ asset('/backend/img/logo-white.png') }}" alt="SmartAdmin" > </span>
                <!-- END LOGO PLACEHOLDER -->

                <!-- Note: The activity badge color changes when clicked and resets the number to 0
                Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->

           
                <!-- END AJAX-DROPDOWN -->
            </div>

            <!-- projects dropdown -->
        
            <!-- end projects dropdown -->

            <!-- pulled right: nav area -->
            <div class="pull-right">
                
                <!-- collapse menu button -->
                <div id="hide-menu" class="btn-header pull-right">
                    <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
                </div>
                <!-- end collapse menu -->
                
                <!-- #MOBILE -->
                <!-- Top menu profile link : this shows only when top menu is active -->
                <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
                    <li class="">
                        <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown"> 
                            <img src="img/avatars/sunny.png" alt="John Doe" class="online" />  
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="login.html" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- logout button -->
                <div id="logout" class="btn-header transparent pull-right">

                    <span>

                      <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                 
                </div>
                <!-- end logout button -->

                
            

   
                <!-- end multiple lang -->

            </div>
            <!-- end pulled right: nav area -->

        </header>
        <!-- END HEADER -->

   
   @include('backend/sidebar')

   
        <div id="main" role="main">

            <!-- RIBBON -->
            <div id="ribbon">

            

                <!-- breadcrumb -->
                <ol class="breadcrumb">
                    <li>Home</li><li>Dashboard</li>
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
              


				<form class="smart-form">
											<header>
												Add Category
											</header>
				
											<fieldset>
												
				<section>
													<label class="label">Default text input with maxlength</label>
													<label class="input">
														<input type="text" maxlength="10">
													</label>
													<div class="note">
														<strong>Maxlength</strong> is automatically added via the "maxlength='#'" attribute
													</div>
												</section>
												
												<section>
													<label class="label">Default text input with maxlength</label>
													<label class="input">
														<input type="text" maxlength="10">
													</label>
													<div class="note">
														<strong>Maxlength</strong> is automatically added via the "maxlength='#'" attribute
													</div>
												</section>
												
												
												<section>
													<label class="label">File input</label>
													<div class="input input-file">
														<span class="button"><input type="file" id="file" name="file" onchange="this.parentNode.nextSibling.value = this.value">Browse</span><input type="text" placeholder="Include some files" readonly="">
													</div>
												</section>
				
												
				
										
											
											</fieldset>
											
											
				
											
												
												<section>
													<label class="label">Select Small</label>
													<label class="select">
														<select class="input-sm">
															<option value="0">Choose name</option>
															<option value="1">Alexandra</option>
															<option value="2">Alice</option>
															<option value="3">Anastasia</option>
															<option value="4">Avelina</option>
														</select> <i></i> </label>
												</section>
												
												<section>
													<label class="label">Select default</label>
													<label class="select">
														<select>
															<option value="0">Choose name</option>
															<option value="1">Alexandra</option>
															<option value="2">Alice</option>
															<option value="3">Anastasia</option>
															<option value="4">Avelina</option>
														</select> <i></i> </label>
												</section>
				
												<section>
													<label class="label">Select Large</label>
													<label class="select">
														<select class="input-lg">
															<option value="0">Choose name</option>
															<option value="1">Alexandra</option>
															<option value="2">Alice</option>
															<option value="3">Anastasia</option>
															<option value="4">Avelina</option>
														</select> <i></i> </label>
												</section>
				
												<section>
													<label class="label">Multiple select</label>
													<label class="select select-multiple">
														<select multiple="" class="custom-scroll">
															<option value="1">Alexandra</option>
															<option value="2">Alice</option>
															<option value="3">Anastasia</option>
															<option value="4">Avelina</option>
															<option value="5">Basilia</option>
															<option value="6">Beatrice</option>
															<option value="7">Cassandra</option>
															<option value="8">Clemencia</option>
															<option value="9">Desiderata</option>
														</select> </label>
													<div class="note">
														<strong>Note:</strong> hold down the ctrl/cmd button to select multiple options.
													</div>
												</section>
											</fieldset>
				
											<fieldset>
												<section>
													<label class="label">Textarea</label>
													<label class="textarea"> 										
														<textarea rows="3" class="custom-scroll"></textarea> 
													</label>
													<div class="note">
														<strong>Note:</strong> height of the textarea depends on the rows attribute.
													</div>
												</section>
				
												<section>
													<label class="label">Textarea resizable</label>
													<label class="textarea textarea-resizable"> 										
														<textarea rows="3" class="custom-scroll"></textarea> 
													</label>
												</section>
				
												<section>
													<label class="label">Textarea expandable</label>
													<label class="textarea textarea-expandable"> 										
														<textarea rows="3" class="custom-scroll"></textarea> 
													</label>
													<div class="note">
														<strong>Note:</strong> expands on focus.
													</div>
												</section>
											</fieldset>
				
											<fieldset>
												<section>
													<label class="label">Columned radios</label>
													<div class="row">
														<div class="col col-4">
															<label class="radio">
																<input type="radio" name="radio" checked="checked">
																<i></i>Alexandra</label>
															<label class="radio">
																<input type="radio" name="radio">
																<i></i>Alice</label>
															<label class="radio">
																<input type="radio" name="radio">
																<i></i>Anastasia</label>
														</div>
														<div class="col col-4">
															<label class="radio">
																<input type="radio" name="radio">
																<i></i>Avelina</label>
															<label class="radio">
																<input type="radio" name="radio">
																<i></i>Basilia</label>
															<label class="radio">
																<input type="radio" name="radio">
																<i></i>Beatrice</label>
														</div>
														<div class="col col-4">
															<label class="radio">
																<input type="radio" name="radio">
																<i></i>Cassandra</label>
															<label class="radio">
																<input type="radio" name="radio">
																<i></i>Clemencia</label>
															<label class="radio">
																<input type="radio" name="radio">
																<i></i>Desiderata</label>
														</div>
													</div>
												</section>
				
												<section>
													<label class="label">Inline radios</label>
													<div class="inline-group">
														<label class="radio">
															<input type="radio" name="radio-inline" checked="checked">
															<i></i>Alexandra</label>
														<label class="radio">
															<input type="radio" name="radio-inline">
															<i></i>Alice</label>
														<label class="radio">
															<input type="radio" name="radio-inline">
															<i></i>Anastasia</label>
														<label class="radio">
															<input type="radio" name="radio-inline">
															<i></i>Avelina</label>
														<label class="radio">
															<input type="radio" name="radio-inline">
															<i></i>Beatrice</label>
													</div>
												</section>
											</fieldset>
				
											<fieldset>
												<section>
													<label class="label">Columned checkboxes</label>
													<div class="row">
														<div class="col col-4">
															<label class="checkbox">
																<input type="checkbox" name="checkbox" checked="checked">
																<i></i>Alexandra</label>
															<label class="checkbox">
																<input type="checkbox" name="checkbox">
																<i></i>Alice</label>
															<label class="checkbox">
																<input type="checkbox" name="checkbox">
																<i></i>Anastasia</label>
														</div>
														<div class="col col-4">
															<label class="checkbox">
																<input type="checkbox" name="checkbox">
																<i></i>Avelina</label>
															<label class="checkbox">
																<input type="checkbox" name="checkbox">
																<i></i>Basilia</label>
															<label class="checkbox">
																<input type="checkbox" name="checkbox">
																<i></i>Beatrice</label>
														</div>
														<div class="col col-4">
															<label class="checkbox">
																<input type="checkbox" name="checkbox">
																<i></i>Cassandra</label>
															<label class="checkbox">
																<input type="checkbox" name="checkbox">
																<i></i>Clemencia</label>
															<label class="checkbox">
																<input type="checkbox" name="checkbox">
																<i></i>Desiderata</label>
														</div>
													</div>
												</section>
				
												<section>
													<label class="label">Inline checkboxes</label>
													<div class="inline-group">
														<label class="checkbox">
															<input type="checkbox" name="checkbox-inline" checked="checked">
															<i></i>Alexandra</label>
														<label class="checkbox">
															<input type="checkbox" name="checkbox-inline">
															<i></i>Alice</label>
														<label class="checkbox">
															<input type="checkbox" name="checkbox-inline">
															<i></i>Anastasia</label>
														<label class="checkbox">
															<input type="checkbox" name="checkbox-inline">
															<i></i>Avelina</label>
														<label class="checkbox">
															<input type="checkbox" name="checkbox-inline">
															<i></i>Beatrice</label>
													</div>
												</section>
											</fieldset>
				
											<fieldset>
												<div class="row">
													<section class="col col-5">
														<label class="label">Radio Toggles</label>
														<label class="toggle">
															<input type="radio" name="radio-toggle" checked="checked">
															<i data-swchon-text="ON" data-swchoff-text="OFF"></i>Alexandra</label>
														<label class="toggle">
															<input type="radio" name="radio-toggle">
															<i data-swchon-text="ON" data-swchoff-text="OFF"></i>Anastasia</label>
														<label class="toggle">
															<input type="radio" name="radio-toggle">
															<i data-swchon-text="ON" data-swchoff-text="OFF"></i>Avelina</label>
													</section>
				
													<div class="col col-2"></div>
				
													<section class="col col-5">
														<label class="label">Checkbox Toggles</label>
														<label class="toggle">
															<input type="checkbox" name="checkbox-toggle" checked="checked">
															<i data-swchon-text="ON" data-swchoff-text="OFF"></i>Cassandra</label>
														<label class="toggle">
															<input type="checkbox" name="checkbox-toggle">
															<i data-swchon-text="ON" data-swchoff-text="OFF"></i>Clemencia</label>
														<label class="toggle">
															<input type="checkbox" name="checkbox-toggle">
															<i data-swchon-text="ON" data-swchoff-text="OFF"></i>Desiderata</label>
													</section>
												</div>
											</fieldset>
				
											<fieldset>
												<section>
													<label class="label">Ratings with different icons</label>
													<div class="rating">
														<input type="radio" name="stars-rating" id="stars-rating-5">
														<label for="stars-rating-5"><i class="fa fa-star"></i></label>
														<input type="radio" name="stars-rating" id="stars-rating-4">
														<label for="stars-rating-4"><i class="fa fa-star"></i></label>
														<input type="radio" name="stars-rating" id="stars-rating-3">
														<label for="stars-rating-3"><i class="fa fa-star"></i></label>
														<input type="radio" name="stars-rating" id="stars-rating-2">
														<label for="stars-rating-2"><i class="fa fa-star"></i></label>
														<input type="radio" name="stars-rating" id="stars-rating-1">
														<label for="stars-rating-1"><i class="fa fa-star"></i></label>
														Stars
													</div>
				
													<div class="rating">
														<input type="radio" name="trophies-rating" id="trophies-rating-7">
														<label for="trophies-rating-7"><i class="fa fa-trophy"></i></label>
														<input type="radio" name="trophies-rating" id="trophies-rating-6">
														<label for="trophies-rating-6"><i class="fa fa-trophy"></i></label>
														<input type="radio" name="trophies-rating" id="trophies-rating-5">
														<label for="trophies-rating-5"><i class="fa fa-trophy"></i></label>
														<input type="radio" name="trophies-rating" id="trophies-rating-4">
														<label for="trophies-rating-4"><i class="fa fa-trophy"></i></label>
														<input type="radio" name="trophies-rating" id="trophies-rating-3">
														<label for="trophies-rating-3"><i class="fa fa-trophy"></i></label>
														<input type="radio" name="trophies-rating" id="trophies-rating-2">
														<label for="trophies-rating-2"><i class="fa fa-trophy"></i></label>
														<input type="radio" name="trophies-rating" id="trophies-rating-1">
														<label for="trophies-rating-1"><i class="fa fa-trophy"></i></label>
														Trophies
													</div>
				
													<div class="rating">
														<input type="radio" name="asterisks-rating" id="asterisks-rating-10">
														<label for="asterisks-rating-10"><i class="fa fa-asterisk"></i></label>
														<input type="radio" name="asterisks-rating" id="asterisks-rating-9">
														<label for="asterisks-rating-9"><i class="fa fa-asterisk"></i></label>
														<input type="radio" name="asterisks-rating" id="asterisks-rating-8">
														<label for="asterisks-rating-8"><i class="fa fa-asterisk"></i></label>
														<input type="radio" name="asterisks-rating" id="asterisks-rating-7">
														<label for="asterisks-rating-7"><i class="fa fa-asterisk"></i></label>
														<input type="radio" name="asterisks-rating" id="asterisks-rating-6">
														<label for="asterisks-rating-6"><i class="fa fa-asterisk"></i></label>
														<input type="radio" name="asterisks-rating" id="asterisks-rating-5">
														<label for="asterisks-rating-5"><i class="fa fa-asterisk"></i></label>
														<input type="radio" name="asterisks-rating" id="asterisks-rating-4">
														<label for="asterisks-rating-4"><i class="fa fa-asterisk"></i></label>
														<input type="radio" name="asterisks-rating" id="asterisks-rating-3">
														<label for="asterisks-rating-3"><i class="fa fa-asterisk"></i></label>
														<input type="radio" name="asterisks-rating" id="asterisks-rating-2">
														<label for="asterisks-rating-2"><i class="fa fa-asterisk"></i></label>
														<input type="radio" name="asterisks-rating" id="asterisks-rating-1">
														<label for="asterisks-rating-1"><i class="fa fa-asterisk"></i></label>
														Asterisks
													</div>
													<div class="note">
														<strong>Note:</strong> you can use more than 300 vector icons for rating.
													</div>
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
            <!-- END MAIN CONTENT -->

        </div>
        <!-- END MAIN PANEL -->
@include('backend/adminfooter')