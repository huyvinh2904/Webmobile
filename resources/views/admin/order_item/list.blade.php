@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Orders Items
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div><h2>{{$order->getClient->email}}</h2></div>
                   @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>Product</th>
                        <th>Quanlity</th>
                        <th>Total Price</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orderItem as $odm)
                    <tr class="odd gradeX" align="center">
                        <td>
                        <p>{{$odm->getProduct->name}}</p>
                        <img width="100px" src="admin_asset/catalogue/{{$odm->getProduct->image}}">
                        </td>
                        <td>{{$odm->qty}}</td>
                        <td>{{$odm->price}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('sure?')" href="admin/order_item/delete/{{$odm->id}}/{{$odm->order_id}}"> Delete</a></td>
                     
                    </tr>
                 @endforeach
                    </tbody>
                </table>
                {{$orderItem->links()}}
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

@endsection