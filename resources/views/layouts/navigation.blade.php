  <nav class="main-nav">
                    <ul class="list-unstyled ">

 <li> <a href="{{ url('/brands') }}">Brands</a></li>
                            <li> <a href="{{ url('/maps') }}">Maps</a></li>
                    @if (Auth::guest())
                           
                            <li class="login-open"><a href="{{ route('login') }}">Log in</a></li>
                            <li class="signup-open"><a href="{{ route('register') }}">Sign Up</a></li>
                        @else
                            <li class=""><a href="{{ route('home') }}">MY Account</a></li>

                           <!--  <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li> -->
                        @endif


                    </ul>
                </nav> <!-- end .main-nav -->