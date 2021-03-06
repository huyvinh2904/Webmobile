@extends('layout.index')
@section('content')
     @include('layout.menu')
  <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-offset-3">
                        <div class="flexslider ma-nivoslider">
                            <div class="ma-loading"></div>
                            <div id="ma-inivoslider-banner7" class="slides">
                                <img src="images/slider/slide-01.jpg" class="dn" alt="" title="#banner7-caption1"  />                           
                                <img src="images/slider/slide-02.jpg" class="dn" alt="" title="#banner7-caption2"  />
                            </div>
                            <div id="banner7-caption1" class="banner7-caption nivo-html-caption nivo-caption">
                                <div class="timethai"></div>
                                <div class="banner7-content slider-1">
                                    <div class="title-container">
                                        <h1 class="title1">headphones az12</h1>
                                        <h2 class="title2" >Typi non habent claritatem insitam; est usus legentis</h2>                                          
                                    </div>
                                    <div class="banner7-des">
                                        <div class="des">
                                            <h1>sale up to!</h1>
                                            <h2>30% off</h2>
                                            <div class="check-box">
                                                <ul class="list-unstyled">
                                                    <li>With all products in shop</li>
                                                    <li>All combos $69.96</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>                                                                                              
                                    <img class="img1" src="images/slider/img-04.png" alt="" />                                                                              
                                </div>
                            </div>                      
                            <div id="banner7-caption2" class="banner7-caption nivo-html-caption nivo-caption">
                                <div class="timethai"></div>
                                <div class="banner7-content slider-2">
                                    <div class="title-container">
                                        <h1 class="title1">Samsung s5</h1>
                                        <h2 class="title2" >Typi non habent claritatem insitam; est usus legentis</h2>                                          
                                    </div>
                                    <div class="banner7-des">
                                        <div class="des">
                                            <h1>sale up to!</h1>
                                            <h2>50% off</h2>
                                        </div>
                                    </div>                                                                                              
                                    <img class="img1" src="images/slider/img-05.png" alt="" />                                                                                  
                                </div>
                            </div>
                        </div><!-- /.flexslider -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="banner-left"><a href="#"><img src="images/ads/ads-01.jpg" alt=""></a>
                            <div class="banner-content">
                                <h1>sale up to</h1>
                                <h2>20% off</h2>
                                <p>on selected products</p>
                                <a href="#">buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="banner banner-double"><a href="#"><img alt="" src="images/ads/ads-02.jpg"></a></div>
                        <div class="banner banner-double"><a href="#"><img alt="" src="images/ads/ads-03.jpg"></a></div>
                    </div>
                    <div class="col-sm-4">
                        <div class="banner"><a href="#"><img alt="" src="images/ads/ads-04.jpg"></a></div>
                    </div>
                </div><!-- /advertisement -->
                <div class="row">
                    <div class="col-sm-3 col-left">
                        <div class="timely">
                            <div class="title-group"><h2>hot deals</h2></div>
                            <div id="timely-owl" class="owl-container">
                                <div class="owl">
                                 <?php $products = DB::table('products')->where('ishot',8)->limit(5)->get(); ?>
                            @foreach($products as $pr2)

                                    <div class='timer-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#" title="Fusce aliquam" class="product-image"><img src="admin_asset/catalogue/{{$pr2->image}}" alt="{{$pr2->name}}" /></a>
                                                <div class="box-timer">
                                                    <div class="countbox_1 timer-grid"></div>
                                                </div>
                                            </div>
                                            <div class="content-box">

                                                <h2 class="product-name"><a href="" title="Fusce aliquam">Fusce aliquam</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price-label">Special Price</span>
                                                        <span class="price">$99.00</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price-label">Regular Price: </span>
                                                        <span class="price">$170.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='timer-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#" title="Quisque in arcu" class="product-image"><img src="images/products/2.jpg" alt="Quisque in arcu" /></a>
                                                <div class="box-timer">
                                                    <div class="countbox_2 timer-grid"></div>
                                                </div>
                                            </div>
                                            <div class="content-box">
                                                <h2 class="







                                                product-name"><a href="#" title="Quisque in arcu">Quisque in arcu</a></h2>

                                                <h2 class="product-name"><a href="#" title="Fusce aliquam">{{$pr2->name}}</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price-label">Special Price</span>
                                                        <span class="price">@if($pr2->price_sale_off !=0)
                                                            {{$pr2->price_sale_off}}
                                                            @else
                                                            {{$pr2->price}}
                                                            @endif
                                                             USD</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price-label">Regular Price: </span>
                                                        <span class="price">{{$pr2->price}}</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div><!-- /.timely -->
                        <div class="block">
                            <div class="title-group"><h2>Special Offer</h2></div>
                            <div id="special-offer" class="owl-container">
                                <div class="owl">
                                    <div class='sepecialoffer-item item'>
                                        <div class="item-inner first">
                                            <div class="images-container">
                                                <a href="#" title="Primis in faucibus" class="product-image">
                                                    <img src="images/products/15.jpg" alt="Primis in faucibus" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Primis in faucibus">Primis in faucibus</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:87%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#" title="Accumsan elit " class="product-image">
                                                    <img src="images/products/14.jpg" alt="Accumsan elit " />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Accumsan elit ">Accumsan elit </a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#" title="Nunc facilisis" class="product-image">
                                                    <img src="images/products/5.jpg" alt="Nunc facilisis" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Nunc facilisis">Nunc facilisis</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner last">
                                            <div class="images-container">
                                                <a href="#" title="Fusce aliquam" class="product-image">
                                                    <img src="images/products/8.jpg" alt="Fusce aliquam" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Fusce aliquam">Fusce aliquam</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='sepecialoffer-item item'>
                                        <div class="item-inner first">
                                            <div class="images-container">
                                                <a href="h#" title="consequences" class="product-image">
                                                    <img src="images/products/9.jpg" alt="consequences" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="consequences">consequences</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:73%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#" title="Cras neque metus" class="product-image">
                                                    <img src="images/products/12.jpg" alt="Cras neque metus" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Cras neque metus">Cras neque metus</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner ">
                                            <div class="images-container">
                                                <a href="#" title="Etiam gravida" class="product-image">
                                                <img src="images/products/4.jpg" alt="Etiam gravida" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Etiam gravida">Etiam gravida</a></h2>
                                                <div class="price-box">
                                                    <p class="old-price">
                                                        <span class="price-label">Regular Price: </span><span class="price">$432.00</span>
                                                    </p>
                                                    <p class="special-price">
                                                        <span class="price-label">Special Price</span>
                                                        <span class="price">$321.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner last">
                                            <div class="images-container">
                                                <a href="#" title="Donec non est" class="product-image">
                                                <img src="images/products/9.jpg" alt="Donec non est" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Donec non est">Donec non est</a></h2>
                                                <div class="price-box">
                                                    <p class="old-price">
                                                        <span class="price-label">Regular Price: </span><span class="price">$721.00</span>
                                                    </p>
                                                    <p class="special-price">
                                                        <span class="price-label">Special Price</span>
                                                        <span class="price">$631.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:73%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='sepecialoffer-item item'>
                                        <div class="item-inner first">
                                            <div class="images-container">
                                                <a href="#" title="pleasure rationally" class="product-image">
                                                    <img src="images/products/10.jpg" alt="pleasure rationally" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="pleasure rationally">pleasure rationally</a></h2>
                                                <div class="price-box">
                                                    <p class="old-price">
                                                        <span class="price-label">Regular Price: </span><span class="price">$333.00</span>
                                                    </p>
                                                    <p class="special-price">
                                                        <span class="price-label">Special Price</span>
                                                        <span class="price">$222.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner ">
                                            <div class="images-container">
                                                <a href="#" title="Aliquam consequat" class="product-image">
                                                    <img src="images/products/5.jpg" alt="Aliquam consequat" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Aliquam consequat">Aliquam consequat</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:60%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner ">
                                            <div class="images-container">
                                                <a href="#" title=" Donec ac tempus " class="product-image">
                                                    <img src="images/products/11.jpg" alt=" Donec ac tempus " />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title=" Donec ac tempus "> Donec ac tempus </a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:80%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-inner last">
                                            <div class="images-container">
                                                <a href="#" title="occaecati cupiditate" class="product-image">
                                                    <img src="images/products/6.jpg" alt="occaecati cupiditate" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="occaecati cupiditate">occaecati cupiditate</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price">$169.99</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price">$189.00</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.owl-container -->
                        </div><!-- /.block - Special offer -->
                        <div class="menu-recent block">
                            <div class="title-group"><h2>Latest News</h2></div>
                            <div id="latest-news" class="owl-container">
                                <div class="owl">
                                    <div>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#"> <img alt="" src="images/blog/blog-01.jpg" /> </a>
                                            </div>
                                            <div class="des-container">
                                                <div class="date-comments">
                                                    <div class="time"><span class="date">August 04, 2015</span></div>
                                                </div>
                                                <div class="des">
                                                    <h4><a href="#" class="title-blog"><span>swimwear for women</span></a></h4> 
                                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#"> <img alt="" src="images/blog/blog-02.jpg" /> </a>
                                            </div>
                                            <div class="des-container">
                                                <div class="date-comments">
                                                    <div class="time"><span class="date">January 05, 2015</span></div>
                                                </div>
                                                <div class="des">
                                                    <h4><a href="#" class="title-blog"><span>Burberry sport for men</span></a></h4>
                                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#"> <img alt="" src="images/blog/blog-01.jpg" /> </a>
                                            </div>
                                            <div class="des-container">
                                                <div class="date-comments">
                                                    <div class="time"><span class="date">August 04, 2015</span></div>
                                                </div>
                                                <div class="des">
                                                    <h4><a href="#" class="title-blog"><span>swimwear for women</span></a></h4> 
                                                    Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.block - Latest News -->
                        <div class="block">
                            <div class="title-group"><h2>Clients Say</h2></div>
                            <div id="clients-say" class="owl-container">
                                <div class="owl">
                                    <div class='testimonial-list'>
                                        <div class="testimonial-sidebar-content">
                                            <div class="content">
                                                <a href="#">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros...</a>
                                            </div>
                                            <div class="post-by">
                                                <div class="testimonial-content-avatar">
                                                    <img src="images/avatar/avatar-01.jpg" alt="test" />
                                                </div>
                                                <div class="box-author">
                                                    <span class="testimonial-author">Mr rooney</span>
                                                    <span class="testimonial-date">March 24, 2015</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='testimonial-list'>
                                        <div class="testimonial-sidebar-content">
                                            <div class="content">
                                                <a href="#">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et...</a>
                                            </div>
                                            <div class="post-by">
                                                <div class="testimonial-content-avatar">
                                                    <img src="images/avatar/avatar-02.jpg" alt="test" />
                                                </div>
                                                <div class="box-author">
                                                    <span class="testimonial-author">Robert Carlo</span>
                                                    <span class="testimonial-date">January 30, 2015</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='testimonial-list'>
                                        <div class="testimonial-sidebar-content">
                                            <div class="content">
                                                <a href="#">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et... </a>
                                            </div>
                                            <div class="post-by">
                                                <div class="testimonial-content-avatar">
                                                    <img src="images/avatar/avatar-03.jpg" alt="test" />
                                                </div>
                                                <div class="box-author">
                                                    <span class="testimonial-author">mr Lee</span>
                                                    <span class="testimonial-date">January 30, 2015</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.block - Latest News -->
                    </div><!-- /.col-left -->
                    <div class="col-sm-9 col-right">
                        <div class="featuredproductslider-container"> 
                            <div class="title-group1"><h2>SẢN PHẨM HOT</h2></div>
                            <div id="featured-products" class="owl-container">
                                <div class="owl">
                            <?php $products = DB::table('products')->where('ishot',8)->get(); ?>
                            @foreach($products as $pr)
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>new</span></div>
                                                </div>
                                                <a href="detail/{{$pr->id}}" title="Nunc facilisis" class="product-image">
                                                    <img src="admin_asset/catalogue/{{$pr->image}}" alt="{{$pr->name}}" />
                                                </a>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a href="#" class="link-quickview">Quick View</a></li>
                                                        <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Nunc facilisis">{{$pr->name}}</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price-label">Special Price</span>
                                                        <span class="price">
                                                            @if($pr->price_sale_off !=0)
                                                            {{$pr->price_sale_off}}
                                                            @else
                                                            {{$pr->price}}
                                                            @endif
                                                             USD
                                                        </span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price-label">Regular Price: </span>
                                                        <span class="price">{{$pr->price}} USD </span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div><!-- /.featuredproductslider-container -->
                        <div class="banner">
                            <a href="#"><img alt="" src="images/ads/ads-05.jpg"></a>
                        </div>
                        <div class="newproductslider-container"> 
                            <div class="title-group1"><h2>SẢN PHẨM MỚI</h2></div>
                            <div id="new-products" class="owl-container">
                                <div class="owl">
                                 <?php $productNew = DB::table('products')->where('ishot',2)->limit(6)->get(); ?>
                                 @foreach($productNew as $prNew)
                                    <div class='productslider-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <div class="product_icon">
                                                    <div class='new-icon'><span>new</span></div>
                                                    <div class="sale-icon"><span>sale</span></div>
                                                </div>
                                                <a href="detail/{{$prNew->id}}" title="Nunc facilisis" class="product-image">
                                                    <img src="admin_asset/catalogue/{{$prNew->image}}" alt="{{$prNew->name}}" />
                                                </a>
                                                <div class="box-hover">
                                                    <ul class="add-to-links">
                                                        <li><a href="#" class="link-quickview">Quick View</a></li>
                                                        
                                                        <li><a href="#" class="link-cart">Add to Cart</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Nunc facilisis">{{$prNew->name}}</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price-label">Special Price</span>
                                                        <span class="price">
                                                        @if($prNew->price_sale_off !=0)
                                                            {{$prNew->price_sale_off}}
                                                            @else
                                                            {{$prNew->price}}
                                                            @endif
                                                             USD</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price-label">Regular Price: </span>
                                                        <span class="price">{{$prNew->price}} USD</span>
                                                    </p>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:67%"></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div><!-- /.newproductslider-container -->
                        <div class="row">
                            <div class="col-smc-7">
                                <div class="banner">
                                    <a href="#"><img alt="" src="images/ads/ads-06.jpg"></a>
                                </div>
                            </div>
                            <div class="col-smc-5">
                                <div class="banner">
                                    <a href="#"><img alt="" src="images/ads/ads-07.jpg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="title-group"><h2>Phụ kiện</h2></div>
                                <div class="product-list">
                                <?php $hand = DB::table('products')->where('category','>',16)->limit(3)->get()  ?>
                                 @foreach($hand as $ha)
                                    <div class="products-grid">
                                        <div class="images-container">
                                            <a class="product-image" title="Accumsan elit " href="#"><img alt="Accumsan elit " src="admin_asset/catalogue/{{$ha->image}}"></a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a title="Accumsan elit " href="#">{{$ha->name}} </a></h2>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:67%" class="rating"></div>
                                                </div>
                                               
                                            </div>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price">
                                                    @if($ha->price_sale_off !=0)
                                                            {{$ha->price_sale_off}}
                                                            @else
                                                            {{$ha->price}}
                                                            @endif
                                                             USD</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price">{{$ha->price}}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div><!-- /.product-list -->
                            </div>
                            <div class="col-sm-4">
                                <div class="title-group"><h2>Bán chạy</h2></div>
                                <div class="product-list">
                                <?php
                                $pricemax = DB::table('orders_items')->limit(3)
                                ->where('qty','=','5')
                        ->join('products','products.id','=','orders_items.product')
                        ->select('products.name as name','products.price_sale_off as price_sale_off','products.price as price','products.id as id','products.image as image')
                        ->get();
                        ?>
                                   
                              @foreach($pricemax as $pcm)
                           
                                    <div class="products-grid">
                                    
                                        <div class="images-container">
                                            <a class="product-image" title="Accumsan elit " href="#"><img alt="Accumsan elit " src="admin_asset/catalogue/{{$pcm->image}}"></a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a title="Accumsan elit " href="#">{{$pcm->name}}</a></h2>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:67%" class="rating"></div>
                                                </div>
                                                
                                            </div>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price">@if($pcm->price_sale_off !=0)
                                                            {{$pcm->price_sale_off}}
                                                            @else
                                                            {{$pcm->price}}
                                                            @endif
                                                             USD</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price">{{$pcm->price}}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    
                                    
                                </div><!-- /.product-list -->
                            </div>
                            <div class="col-sm-4">
                                <div class="title-group"><h2>Hot sale</h2></div>
                                <div class="product-list">
                                <?php $saleoff = DB::table('products')->where('ishot',2)->limit(3)->get(); ?>
                                @foreach($saleoff as $so)
                                    <div class="products-grid">
                                        <div class="images-container">
                                            <a class="product-image" title="Accumsan elit " href="#"><img alt="{{$so->name}} " src="admin_asset/catalogue/{{$so->image}}"></a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a title="Accumsan elit " href="#">{{$so->name}}</a></h2>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:67%" class="rating"></div>
                                                </div>
                                                
                                            </div>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price">
                                                    @if($so->price_sale_off !=0)
                                                            {{$so->price_sale_off}}
                                                            @else
                                                            {{$so->price}}
                                                            @endif
                                                             USD</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price">{{$so->price}}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div><!-- /.product-list -->
                            </div>
                        </div>
                    </div><!-- /.col-right -->
                </div>
            </div>
        </div><!-- /.main -->





@endsection
