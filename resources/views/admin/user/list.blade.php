@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div><h2></h2></div>
                   @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif
                <form action="admin/user/delete_many" method="post">
                       <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                         <th><button class="btn btn-danger" type="submit" onclick="return confirm('sure?')">DEL</button></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $us)
                    <tr class="odd gradeX" align="center">
                        <td><input type="checkbox" name="user_check[]"  value="{{$us->id}}"></td>
                        <td> {{$us->name}}  </td>
                        <td>{{$us->email}}</td>
                        <td>{{ level($us->level) }}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('sure?')" href="admin/user/delete/{{$us->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/edit/{{$us->id}}"> Edit</a></td>
                    </tr>
                 @endforeach
                    </tbody>
                </table>
                </form>

                {{$user->links()}}
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
  <?php 
          function level($level){
            if($level==1) return "Admin";
            else return "Employee";
        }
  ?>
@endsection