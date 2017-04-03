<!-- /.navbar-top-links -->
@extends('admin.layout.index')
@section('content')
     <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User-admin
                            <small>Add</small>
                        </h1>
                    </div>
                       @if( count($errors)>0)
                    <div class="alert alert-danger">
                  @foreach( $errors->all() as $err)
                      {{ $err }} <br>
                      @endforeach
                    </div>
                @endif
                        @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/user/add" method="POST">
                              <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                            <div class="form-group">
                                <label>Name </label>
                                <input class="form-control" name="txtName" placeholder="Please Enter Name" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="txtEmail" placeholder="Please Enter Email" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="txtPassword" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Password again</label>
                                <input type="password" class="form-control" name="txtpasswordAgain" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <select name="level" class="form-control">
                                    <option value="1" >Admin</option>
                                    <option value="2"> Employee</option>
                                </select>
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
    <!-- /.navbar-static-side -->
@endsection