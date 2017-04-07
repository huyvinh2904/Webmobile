@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Client
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                  @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif
                <form action="admin/client/delete_many" method="post">
                     <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th><button type="submit" class="btn btn-danger">DEL</button></th>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Active</th>
                        <th>Delete</th>
                        <th>Detail</th>
                    </tr>
                    </thead>
                    <tbody>
                 
                    @foreach($client as $cl)
                    <tr class="odd gradeX" align="center">
                     <td><input type="checkbox" name="client_check[]" value="{{$cl->id}}"></td>
                        <td>{{$cl->first_name}}</td>
                        <td>{{$cl->email}}</td>
                        <td>{{$cl->address}}</td>
              
                        <td>{{$cl->created_at}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Delete?')" href="admin/client/delete/{{$cl->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a  href="admin/client/detail/{{$cl->id}}"> Detail</a></td>
                    </tr>
                   @endforeach
                    </tbody>
                    </form>
                </table>
                {{$client->links()}}
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
        <?php
        /*
        *    return actived or not active
        */
        function active($active){
            if($active==1) 
                return "actived";
            else 
                return "not active";
        }
        ?>
@endsection