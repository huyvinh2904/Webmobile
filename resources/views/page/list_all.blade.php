  
@extends('layout.index')
@section('content')
        <div class="main">
            <div class="container">
                <div class="row">
              @include('layout.menu')
                                  <div class="col-sm-3 col-left">
                        <div class="timely">
                            <div class="title-group"><h2>hot deals</h2></div>
                            <div id="timely-owl" class="owl-container">
                                <div class="owl">
                                    <div class='timer-item item'>
                                        <div class="item-inner">
                                            <div class="images-container">
                                                <a href="#" title="Fusce aliquam" class="product-image"><img src="images/products/1.jpg" alt="Fusce aliquam" /></a>
                                                <div class="box-timer">
                                                    <div class="countbox_1 timer-grid"></div>
                                                </div>
                                            </div>
                                            <div class="content-box">
                                                <h2 class="product-name"><a href="#" title="Fusce aliquam">Fusce aliquam</a></h2>
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
                                                <h2 class="product-name"><a href="#" title="Quisque in arcu">Quisque in arcu</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price-label">Special Price</span>
                                                        <span class="price">$699.00</span>
                                                    </p>
                                                    <p class="old-price">
                                                        <span class="price-label">Regular Price: </span>
                                                        <span class="price">$800.00</span>
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
                                                <a href="#" title="pleasure rationally" class="product-image"><img src="images/products/20.jpg" alt="pleasure rationally" /></a>
                                                <div class="box-timer">
                                                    <div class="countbox_3 timer-grid"></div>
                                                </div>
                                            </div>
                                            <div class="content-box">
                                                <h2 class="product-name"><a href="#" title="pleasure rationally">pleasure rationally</a></h2>
                                                <div class="price-box">
                                                    <p class="special-price">
                                                        <span class="price-label">Special Price</span>
                                                        <span class="price">$222.00</span>
                                                    </p>
                                                    <p class="old-price"><span class="price-label">Regular Price: </span><span class="price">$333.00</span>
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
                        <div class="banner">
                            <a href="#"><img alt="" src="images/ads/ads-17.jpg"></a>
                        </div>
                        <div class="page-title">
                            <h1>{{$item->name}}</h1>
                        </div>
                        <div class="toolbar">
                            <div class="sorter">
                                <p class="view-mode">
                                    <label>View as:</label>
                                    <strong class="grid" title="Grid"></strong>&nbsp;
                                    <a class="list" title="List" href="#">List</a>&nbsp;
                                </p>
                            </div><!-- /.sorter -->
                            <div class="pager">
                                <div class="sort-by hidden-xs">
                                    <label>Sort By:</label>
                                    <select class="form-control input-sm">
                                        <option selected="selected">Position</option>
                                        <option>Name</option>
                                        <option>Price</option>
                                    </select>
                                    <a title="Set Descending Direction" href="#"><span class="fa fa-sort-amount-desc"></span></a>
                                </div>
                                <div class="limiter hidden-xs">
                                    <label>Show:</label>
                                    <div class="limiter-inner">
                                        <select class="form-control input-sm">
                                            <option>9</option>
                                            <option selected="selected">12</option>
                                            <option>24</option>
                                            <option>36</option>
                                        </select> 
                                    </div>
                                </div>
                            </div><!--- /.pager -->
                        </div><!-- /.toolbar -->
                        <div class="row products">

                        @foreach($product as $pr)
                            <div class="col-md-3 col-sm-6" style="height: 350px;">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">

                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                            </div>
                                            <a href="detail/{{$pr->id}}" title="{{$pr->name}}" class="product-image">
                                                <img src="admin_asset/catalogue/{{$pr->image}}" alt="Nunc facilisis" />
                                            </a>
                                  
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="detail/{{$pr->id}}" title="{{$pr->name}}">{{$pr->name}}</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price">{{$pr->price_sale_off}}</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price">{{$pr->price}}</span>
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
                            </div>
                        
                            @endforeach
                           
                        </div><!-- /.product -->
                        {{$product->links()}}
                        <div class="toolbar">
                            <div class="sorter">
                                <p class="view-mode">
                                    <label>View as:</label>
                                    <strong class="grid" title="Grid">Grid</strong>&nbsp;
                                    <a class="list" title="List" href="#">List</a>&nbsp;
                                </p>
                            </div><!-- /.sorter -->
                            <div class="pager">
                                <div class="sort-by hidden-xs">
                                    <label>Sort By:</label>
                                    <select class="form-control input-sm">
                                        <option selected="selected">Position</option>
                                        <option>Name</option>
                                        <option>Price</option>
                                    </select>
                                    <a title="Set Descending Direction" href="#"><span class="fa fa-sort-amount-desc"></span></a>
                                </div>
                                <div class="limiter hidden-xs">
                                    <label>Show:</label>
                                    <div class="limiter-inner">
                                        <select class="form-control input-sm">
                                            <option>9</option>
                                            <option selected="selected">12</option>
                                            <option>24</option>
                                            <option>36</option>
                                        </select> 
                                    </div>
                                </div>
                            </div><!-- /.pager -->
                        </div><!-- /.toolbar -->
                    </div><!-- /.col-right -->
                </div>
            </div>
        </div><!-- /.main -->

        @endsection