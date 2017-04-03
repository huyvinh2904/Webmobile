@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product
                        <small>List</small>
                    </h1>
                </div>
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
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Menu</th>
                        <th>model</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($Cate as $cate)
                    
                    <tr class="odd gradeX" align="center">
                        <td>{{$cate->id}}</td>
                        <td>{{$cate->name}}</td>
                        <td>
                        <?php
                        $theloai = DB::table('items')->where('id',$cate["item"])->first();?>
                        @if(!empty($theloai->name))
                        {{$theloai->name}}
                        @endif    
                        </td>
                        
                        <td>
                         @if(!empty($cate->model))
                        {{Trống}}
                        @endif    
                        </td>
                        <td> {!! \Carbon\Carbon::createFromTimeStamp(strtotime($cate["created_at"]))->diffForHumans() !!}</td>
                        <td> {!! \Carbon\Carbon::createFromTimeStamp(strtotime($cate["updated_at"]))->diffForHumans() !!}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/cate/del/{{$cate->id}}" > Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/cate/edit/{{$cate->id}}">Edit</a></td>
                      
                        
                        
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

@endsection