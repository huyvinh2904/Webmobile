 @extends('admin.layout.index')
  @section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Edit</small>
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
                        <form action="cate/edit/{{$CateEdit->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Menu</label>
                                <select class="form-control" name="theloai1">
                                    <option value="0">Please Choose Category</option>
                                    @foreach($Item as $tl)
                                    <option
                                    @if($CateEdit->item == $tl->id)
                                       {{"selected"}}
                                    @endif
                                     value="{{$tl->id}}">{{$tl->name}}</option>
                                    @endforeach
                                    
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <input class="form-control" name="txtCateName" placeholder="Please Enter Category..." value="{{$CateEdit->name}}" />
                            </div>
                            
                            <button type="submit" class="btn btn-default"> Sửa</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection