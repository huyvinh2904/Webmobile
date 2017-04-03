@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Comment
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                   @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif
                <form action="admin/comment/delete_many" method="post">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="right">
                        <th ><button type="submit" class="btn btn-danger"
                         onclick="return confirm('delete all comments checked?')" >DEL</button></th>
                        <th align="center">Client</th>
                        <th>Product</th>
                        <th>Content</th>
                        <th>Created at</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($comment as $cm)
                        <tr class="odd gradeX" align="center">
                            <td><input type="checkbox" name="comment_check[]" value="{{$cm->id}}"></td>
                            <td>{{$cm->getClient->email}}</td>
                            <td>
                            <p>{{$cm->getProduct->name}}</p>
                             <img width="100px" src="admin_asset/catalogue/{{$cm->getProduct->image}}">
                            </td>
                            <td>{{$cm->content}}</td>
                            <td>{{$cm->created_at}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Sure?')"
                                        href="admin/comment/delete/{{$cm->id}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </form>
                {{$comment->links()}}
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

@endsection