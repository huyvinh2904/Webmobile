            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="index" class="logo"><img src="images/logo.png" alt=""></a>
                        </div>
                        <div class="col-md-9">
                            <div class="support-client">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="box-container time">
                                            <div class="box-inner">
                                                <h2>working time</h2>
                                                <p>Mon- Sun: 8.00 - 18.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="box-container free-shipping">
                                            <div class="box-inner">
                                                <h2>Free shipping</h2>
                                                <p>On order over $199</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="box-container money-back">
                                            <div class="box-inner">
                                                <h2>Money back 100%</h2>
                                                <p>Within 30 Days after delivery</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.support-client -->
                            <form class="form-search">
                                <input type="text" class="input-text" name="q" id="search" placeholder="Search products...">
                                <div class="dropdown">
                                    <button type="button" class="btn" data-toggle="dropdown">All category <span class="fa fa-angle-down"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">Computer</a></li>
                                        <li><a href="#">Camera</a></li>
                                        <li><a href="#">Smart Phone</a></li>
                                        <li><a href="#">Electronic</a></li>
                                    </ul>
                                </div>
                                <button type="submit" class="btn btn-danger"><span class="fa fa-search"></span></button>
                            </form>
                            <div class="mini-cart">
                                <div class="top-cart-title">
                                    <a href="cart.html" class="dropdown-toggle" data-toggle="dropdown">
                                          your cart1
                                        <span class="price">$45.00</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="cart-listing">
                                            <div class="media">
                                                <div class="media-left"><a href="#"><img src="images/products/11.jpg" alt="" class="img-responsive"></a></div>
                                                <div class="media-body">
                                                    <button type="button" class="remove-cart-item" >&times;</button>
                                                    <h4>Accumsan elit</h4>
                                                    <div class="mini-cart-qty">Qty:2</div>
                                                    <div class="mini-cart-price">$ 64.00</div>
                                                </div>
                                            </div>
                                        </div><!-- /.cart-listing -->
                                        <div class="mini-cart-subtotal">Total: <span class="price">$200.00</span></div>
                                        <div class="checkout-btn">
                                            <a href="#" class="btn btn-default btn-md fwb">CHECK OUT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mega-container visible-lg visible-md">
                                <div class="navleft-container">
                                    <div class="mega-menu-title"><h3>Category</h3></div>
                                    <div class="mega-menu-category">
                                        <ul class="nav">
                                         @foreach($item_share as $it)
                                            <li>
                                                <a href="all-list/{{$it->id}}">{{$it->name}}</a>
                                                <div class="wrap-popup"  style="width: 150px">
                                                    <div class="popup">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <h3>Category</h3>
                                                                <ul class="nav">
                                                                    @foreach( $it->getCategory as $cate)
                                                                    <li><a href="list-product/{{$cate->id}}">{{$cate->name}}</a></li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
 
                                                        </div>
                                                        <br>
                                  
                                                    </div>
                                                </div>
                                            </li>
                                   @endforeach
                       
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <ul class="menu clearfix visible-lg visible-md">
                                <li><a href="index">Home</a></li>
                                <li><a href="gioithieu">Giới thiệu</a></li>
                                <?php  $Item=DB::table('items')->get();  ?>
                                @foreach($Item as $it1)
                                <li><a href="#">{{$it1->name}}</a></li>                                
                               @endforeach
                                <li><a href="blog.html"></a></li>
                                <li><a href="lienhe">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-primary navbar-static-top hidden-lg hidden-md">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <h2 class="navbar-brand visible-xs">Menu</h2>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Computer <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Desktop PC</a></li>
                                        <li><a href="#">Notebook</a></li>
                                        <li><a href="#">Gaming</a></li>
                                        <li><a href="#">Mouse &amp; Keyboard</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Camera <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Walkera</a></li>
                                        <li><a href="#">Fpv System &amp; Parts</a></li>
                                        <li><a href="#">RC Cars &amp; Parts</a></li>
                                        <li><a href="#">Helicopters &amp; Part</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Smart Phone <span class="fa fa-angle-down"></span></a>                                   <ul class="dropdown-menu">
                                        <li><a href="#">Accessories for iPhone</a></li>
                                        <li><a href="#">Accessories for iPad</a></li>
                                        <li><a href="#">Accessories for Tablet PC</a></li>
                                        <li><a href="#">Tablet PC</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Electtronic <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Batteries &amp; Chargers</a></li>
                                        <li><a href="#">Headphone, Headset</a></li>
                                        <li><a href="#">Home Audio</a></li>
                                        <li><a href="#">Mp3 Player Accessories</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">New Arrivals</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container -->
                </nav>
            </div><!-- /.header-bottom -->