<!-- /.navbar-top-links -->
@extends('admin.layout.index')
@section('content')
     <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"> Order
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(session('message'))
                    <div class="alert alert-success">
                    {{session('message')}}
                    </div>
                    @endif
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/order/edit/{{$order->id}}" method="POST">
                           <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                                 <div class="form-group">
                                <label>Email </label>
                        
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    @foreach( $status as $st)
                                    <option 
                                    @if( $order->status ==$st->id)
                                    {{"selected"}}
                                    @endif
                                    value="{{$st->id}}"

                                    >{{$st->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status Payment</label>
                                <label class="radio-inline">
                                    <input name="payment_status" 
                                    @if ($order->payment_status ==0)
                                    {{"checked"}}
                                    @endif
                                    value="0"  type="radio">not pay
                                </label>
                                <label class="radio-inline">
                                    <input name="payment_status"
                                     @if ($order->payment_status ==1)
                                    {{"checked"}}
                                    @endif
                                     value="1" type="radio">payed
                                </label>
                            </div>
                              <div class="form-group">
                                <label>Note</label>
                                <input class="form-control" name="txtNote"  value="{{$order->notes}}" />
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
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