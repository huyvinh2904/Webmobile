        <div class="header">
            <div class="topbar">
                <div class="container">
                    <div class="topbar-left">
                        <ul class="topbar-nav clearfix">
                            <li><span class="phone">01645847929</span></li>
                            <li><span class="email">tranvinhhuy2904@gmail.com</span></li>
                        </ul>
                    </div>
                    <div class="topbar-right">
                     <ul class="topbar-nav clearfix">
                         @if (Auth::guard('clients')->check() && Auth::guard('clients')->user()->active == 2 )                         
                            <li class="dropdown">
                               <a href="#" class="account dropdown-toggle" data-toggle="dropdown">
                                  {{Auth::guard('clients')->user()->first_name}}
                               </a> 
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a title="My Account" href="myaccount/{{Auth::guard('clients')->user()->id}}">My Account</a></li> 
                                    <li><a title="My Cart" href="myorder/{{Auth::guard('clients')->user()->id}}">My Order</a></li>
                                    <li><a title="Checkout" href="checkout.html">Checkout</a></li>
                                    <li><a title="Testimonial" href="logout">Logout</a></li>
                                    
                                </ul> 
                            </li>
                            @else
                            <li><a href="login" class="login">Login</a></li>
                            <li><a href="register" class="login">Register</a></li>
                            @endif
                        </ul>    
                    </div>
                </div><!-- /.container -->
            </div><!-- /.topbar -->

        </div><!-- /.header -->