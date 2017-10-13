                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Username or Email Address *" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <input id="password" type="password" class="form-control" name="password"  placeholder="Password *" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                        </div>


                    <div class="button-wrapper"> <button type="submit" class="button">
                                    Login
                                </button> </div>


    <div class="text-center">
                        <p>Don't have an account ? <a href="index.php/register" class="signup-open">Sign up</a></p>
                        <div class="social">
                            <p>Connect with Social Networks</p>
                            <a href=""><img src="{{ asset('frontend/images/facebook.png') }}" alt="facebook"></a>
                            <a href=""><img src="{{ asset('frontend/images/twitter.png') }}" alt="twitter"></a>
                            <a href=""><img src="{{ asset('frontend/images/google-plus.png') }}" alt="google plus"></a><a href=""><img src="{{ asset('frontend/images/instagram-r.png') }}" alt="istagram"></a>
                        </div> <!-- end .social -->
                    </div>
                       
                    </form>