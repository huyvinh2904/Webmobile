@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Menu
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Create</th>
                        <th>Update</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Item as $it)
                            <tr class="odd gradeX" align="center">
                                <td>{{$it->id}}</td>
                                <td>{{ $it->name}}</td> 
                                <td>{!! \Carbon\Carbon::createFromTimeStamp(strtotime($it["created_at"]))->diffForHumans() !!}</td> 
                                <td>{!! \Carbon\Carbon::createFromTimeStamp(strtotime($it["created_at"]))->diffForHumans() !!}</td> 
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/item/delete/{{$it->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/item/edit/{{$it->id}}">Edit</a></td>
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