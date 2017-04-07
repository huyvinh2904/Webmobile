     
@extends('layout.index')
@section('content')

       <div class="main">
            <div class="container">
                <div class="row">
                @include('layout.menu')
                    <div class="col-sm-9 col-right">
                        <div class="product-view">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="product-img-box">
                                        <p class="product-image">
                                            <a href="images/products/1.jpg" class="cloud-zoom" id="ma-zoom1">
                                                <img src="admin_asset/catalogue/{{$product->image}}" />
                                            </a>
                                        </p>
                
                                    </div>
                                </div>
                                <div class="product-shop col-sm-7">
                                    <div class="product-name">
                                        <h1>{{$product->name}}</h1>
                                    </div>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div style="width:67%" class="rating"></div>
                                        </div>
                                    </div>
                                    <div class="box-container2"> 
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price-label">gia </span>
                                            <span id="product-price-1" class="price">{{$product->price_sale_off}}</span>
                                            </p>
                                            <p class="old-price">
                                                <span class="price-label">Regular Price:</span>
                                                <span id="old-price-1" class="price">{{$product->price}}</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="short-description">
                                        <div class="std">
                                           {!! $product->description !!}
                                        </div>
                                    </div>
                                    <p class="availability in-stock">Availability: <span>In stock</span></p>
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-md-2 col-sm-3 control-label">Quantity:</label>
                                            <div class="col-md-3 col-sm-5">
                                                <div class="input-group qty">
                                                    <span class="input-group-btn">
                                                    </span>
                                                   <input  id="quantity" type="number" value="1" name="quantity" min="1" max="5">
                                                </div><!-- /input-group -->
                                            </div>
                                        </div>
                                        <button id="add_cart" class="btn btn-danger btn-cart">Add to cart</button>
                                    
                                    </div>
                                </div><!-- /.product-shop -->
                            </div>
                         
                        </div><!-- /.product-view -->

                    </div><!-- /.col-right -->
                    <div class="col-sm-3 col-left">
                        <div class="block">
                            <div class="title-group"><h2>Related</h2></div>
                            <div id="special-offer" class="owl-container">
                                <div class="owl">


                                    <div class='sepecialoffer-item item'>
                                    @foreach($product->getCategory->getProduct as $pr)

                                        <div class="item-inner last">
                                            <div class="images-container">
                                                <a href="detail/{{$pr->id}}" title="Fusce aliquam" class="product-image">
                                                    <img src="admin_asset/catalogue/{{$pr->image}}" alt="Fusce aliquam" />
                                                </a>
                                            </div>
                                            <div class="des-container">
                                                <h2 class="product-name"><a href="#" title="Fusce aliquam">{{$pr->name}}</a></h2>
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

                                        @endforeach

                                    </div>


                                </div>
                            </div><!-- /.owl-container -->
                        </div><!-- /.block - Special offer -->


                    </div><!-- /.col-left -->
                </div>
            </div>
        </div><!-- /.main -->

        @endsection

        @section('script')
    <script>

                document.getElementById("add_cart").addEventListener("click", addCart);

                function addCart() {
                    // debugger;
                      var quantity= $('#quantity').val();
                      var idProduct = {{$product->id}};
                             $.get("addCategory/" + idProduct+"/"+quantity , function (data) {
                                  $('#cart-listing').html(data);
                          });

                   }
    </script>
@endsection