      <style type="text/css">
          .btn-number{
                font-size: 9px;
    background-color: #f44336;
    border-radius: 5px;
          }

      </style>      

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
                                          your cart
                                        <span class="price">$45.00</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                    
                                        <div class="cart-listing" id="cart-listing">
                                          @if(session('listProduct'))  
                                     @foreach (session('listProduct') as $vl)
                                    <div class="media">
                                    <div class="media-left"><a href="#"><img src="admin_asset/catalogue/{{$vl->getProduct->image}}" alt="" class="img-responsive"></a></div>
                                    <div class="media-body">
                                    <button type="button" class="remove-cart-item">&times;</button>
                                    <h4>{{$vl->getProduct->name}}</h4>
                                    <div class="mini-cart-qty">{{$vl->qty}}</div>
                                    <div class="mini-cart-price">{{$vl->price}}</div>
                                    </div>
                                    </div>
                                    @endforeach
                                      @endif
                                             
                                        </div><!-- /.cart-listing -->
                                        <div class="checkout-btn">
                                            <a href="checkout" class="btn btn-default btn-md fwb">CHECK OUT</a>
                                       <button type="button" style="float: right;" onclick="addCartDetail()" class="btn btn-default btn-md fwb" data-toggle="modal" data-target="#myModal">DETAIL</button>
                                        </div>

                                    </div>
                                </div>
                            </div>





                            
                        </div>
                    </div>

                     <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">List Product</h4>
        </div>
        <div class="modal-body">

           <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th >Name</th>
                        <th>Image</th>
                        <th>Quality</th>
                        <th>Price</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody id="tableID">
<!--                @foreach (session('listProduct') as $vl)
                    <tr class="odd gradeX header" align="center">
                        <td>{{$vl->getProduct->name}}</td>
                        <td><img style="width: 70px" src="admin_asset/catalogue/{{$vl->getProduct->image}}" alt="" class="img-responsive"></td>
                        <td><input  id="quantity" type="number" value="{{$vl->qty}}" name="quantity" min="1" max="5"></td>
                        <td>{{$vl->price}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('sure?')" href=""> Delete</a></td>
                        
                    </tr> -->
                    <!-- @endforeach -->
                      </tbody>
        </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mega-container visible-lg visible-md" style="position: relative; z-index: 250;">
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
                                <li><a href="index">Trang chủ</a></li>
                                <li><a href="gioithieu">Giới thiệu</a></li>
                                <?php  $Item=DB::table('items')->get();  ?>
                                @foreach($Item as $it1)
                                <li><a href="all-list/{{$it1->id}}">{{$it1->name}}</a></li>                                
                               @endforeach
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

    <script type="text/javascript">
      
                function addCartDetail() { 
                             $.get("add-cart-detail/", function (data) {
                                  $('#tableID').html(data);
                          });

                   }

                   function updateCartDetail(number){
                        $.get("update-cart-detail/"+number, function (data) {
                                  $('#tableID').html(data);
                          });
                       updateMiniCart();
                   }

                   function updateMiniCart(){
                    $.get("update-mini-cart/", function (data) {
                                $('#cart-listing').html(data);
                          });
                   }

                   function down_qty(number){
                     $.get("down-qty-cart/"+number, function (data) {
                                  $('#tableID').html(data);
                          });

                   }

                    function up_qty(number){
                     $.get("up-qty-cart/"+number, function (data) {
                                  $('#tableID').html(data);
                          });

                   }
 
    </script>
