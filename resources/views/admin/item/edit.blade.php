 @extends('admin.layout.index')
  @section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Menu
                            <small>{{$ItemEdit->name}}</small>
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
                        <form action="admin/item/edit/{{$ItemEdit->id}}" method="POST">
                        <input type="hidden"  name="_token" value="{{csrf_token()}}">
                           
                            <div class="form-group">
                                <label>Menu</label>
                                <input class="form-control" name="txtCateName" placeholder="Please Enter Menu..." value="{{$ItemEdit->name}}" />
                            </div>
                            
                            <button type="submit" class="btn btn-default">Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection