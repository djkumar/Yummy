@include('backend/adminheader')
    <body class="animated fadeInDown">

        <header id="header">

            <div id="logo-group">
                <span id="logo" style="margin-top:1px;"> <img src="{{ asset('/backend/img/logo-white.png') }}" alt="SmartAdmin"> </span>
            </div>


        </header>
        <div id="main" role="main">

            <!-- MAIN CONTENT -->
            <div id="content" class="container">

                <div class="row">

           <div class="col-xs-12 col-sm-12 col-md-7 col-lg-4 "></div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                        <div class="well no-padding"> 

                        <form class="form-horizontal smart-form client-form" role="form"  method="POST" action="{{ route('admin.login.submit') }}">
                            {{ csrf_field() }}  <header>
                                    Sign In
                                </header>

                                <fieldset>
 <section>
                            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="label">E-Mail Address</label>
<label class="input">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </label>
                            </div>
</section> <section>
                            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="label">Password</label>

                                  <label class="input">  <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </label>
                            </div>
                            <div class="note">
                                            <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                        </div>
</section>
                          <section>
                            <label class="checkbox">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} checked="">
                                            <i></i>Stay signed in</label>


                                   
                                </section>
</fieldset>
<footer>
                           
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                    
                               </footer>
                        </form>
                    </div>
                        
                      
                        
                    </div>
                                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-4 "></div>

                </div>
            </div>

        </div>
 

