 @extends('admin.layout.index')
@section('content')  

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Client
                            <small>Detail</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                          
                            <div class="form-group">
                                <label>First Name</label>
                                <label value="" class="form-control"/>{{$client->first_name}}</label>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <label  value="" class="form-control"   /> {{$client->last_name}}</label>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <label value="" class="form-control"  />{{$client->email}}</label>
                            </div>
                              <div class="form-group">
                                <label>Phone Number</label>
                                <label value="" class="form-control"  />{{$client->phone_number}}</label>
                            </div>
                            <div class="form-group">
                                <label>Address </label>
                                <label value="" class="form-control"/>{{$client->address}}</label>
                            </div>
                             <div class="form-group">
                                <label>Town</label>
                                <label value="" class="form-control" />{{$client->town}}</label>
                            </div>
                              <div class="form-group">
                                <label>Country</label>
                                <label value="" class="form-control" />{{$client->getCountry->name}}</label>
                            </div>
                            <div class="form-group">
                                <label>Create At</label>
                                <label value="" class="form-control"  />{{$client->created_at}}</label>
                            </div>
                             <div class="form-group">
                                <label>Active</label>
                                <label value="" class="form-control" />{{ active($client->active)}}</label>
                            </div>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
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