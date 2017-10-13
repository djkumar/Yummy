@include('backend/adminheader')
    <body class="animated fadeInDown">

        <header id="header">

            <div id="logo-group">
                <span id="logo"> <img src="img/logo.png" alt="SmartAdmin"> </span>
            </div>


        </header>
        <div id="main" role="main">

            <!-- MAIN CONTENT -->
            <div id="content" class="container">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-4 "></div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                        <div class="well no-padding">
                            <form action="index.html" id="login-form" class="smart-form client-form">
                                <header>
                                    Sign In
                                </header>

                                <fieldset>
                                    
                                    <section>
                                        <label class="label">E-mail</label>
                                        <label class="input"> <i class="icon-append fa fa-user"></i>
                                            <input type="email" name="email">
                                            <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter email address/username</b></label>
                                    </section>

                                    <section>
                                        <label class="label">Password</label>
                                        <label class="input"> <i class="icon-append fa fa-lock"></i>
                                            <input type="password" name="password">
                                            <b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>
                                        <div class="note">
                                            <a href="forgotpassword.html">Forgot password?</a>
                                        </div>
                                    </section>

                                    <section>
                                        <label class="checkbox">
                                            <input type="checkbox" name="remember" checked="">
                                            <i></i>Stay signed in</label>
                                    </section>
                                </fieldset>
                                <footer>
                                    <button type="submit" class="btn btn-primary">
                                        Sign in
                                    </button>
                                </footer>
                            </form>

                        </div>
                        
                      
                        
                    </div>
                                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-4 "></div>

                </div>
            </div>

        </div>
 