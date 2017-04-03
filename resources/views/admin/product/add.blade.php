<!-- /.navbar-top-links -->
@extends('admin.layout.index')
@section('content')
    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->

                    <div class="col-lg-7" style="padding-bottom:120px">
                     @if(count($errors)>0)
                    <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        
                        {{$err}}<br>
                        @endforeach
                    </div>

                    @endif
                    @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>

                    @endif
                        <form action="admin/product/add" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Menu</label>
                                <select class="form-control" name="menu" id="menu">
                                    @foreach($Item as $it)
                                    <option value="{{$it->id}}">{{$it->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                             <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category" id="category">
                                @foreach($Cate as $cate)
                                    
                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Name </label>
                                <input class="form-control" name="name" placeholder="Please Enter Product Name" value="" required  />
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="descrip" id="demo" class="form-control ckeditor" rows="8" value="" required ></textarea>
                            </div>
                            <div class="form-group">
                                <label> Price</label>
                               <input class="form-control" name="price" placeholder="Please Enter Product Price" value=""  required />
                            </div>
                             <div class="form-group">
                                <label> Price sale off</label>
                               <input class="form-control" name="price_sale_off" placeholder="Please Enter Product Price sale" value="" required  />
                            </div>
                            <div class="form-group">
                            <label> Image</label>
                            <p><img width="100px" src="" /></p>
                            <input type="file" name="image" class="form-control">
                                
                            </div>                          
                            <button type="submit" class="btn btn-default"> Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection
        @section('script')
        <script type="text/javascript">
            $(document).ready(function(){
               $('#menu').change(function(){
                var idMenu = $(this).val();
              $.get("ajax/cate/"+idMenu,function(data){
                $('#category').html(data);
              });
               });
            });
        </script>
@endsection