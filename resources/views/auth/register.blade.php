
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Username" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <input id="password" type="password" class="form-control" name="password" placeholder="password"  required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder=" Confirm password"  required>
                        </div>

                        <div class="button-wrapper">
                                <button type="submit" class="button">
                                    Register
                                </button>
                        </div>
                        <div class="text-center">
                        <p>Already have an account? <a href="" class="login-open">Log in</a></p>
                        <div class="social">
                            <p>Connect with Social Networks</p>
                            <a href=""><img src="{{ asset('frontend/images/facebook.png') }}" alt="facebook"></a>
                            <a href=""><img src="{{ asset('frontend/images/twitter.png') }}" alt="twitter"></a>
                            <a href=""><img src="{{ asset('frontend/images/google-plus.png') }}" alt="google plus"></a><a href=""><img src="{{ asset('frontend/images/instagram-r.png') }}" alt="istagram"></a>
                        </div> <!-- end .social -->
                    </div>
                    </form>