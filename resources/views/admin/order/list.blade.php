@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Order
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                      @if(session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
                @endif
                <form action="admin/order/delete_many" method="post">
                  <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th><button onclick="return confirm('sure?')"  type="submit" class="btn btn-danger">DEL</button></th>
                        <th >Client</th>
                        <th>Total</th>
                        <th>Created At</th>
                        <th style="width: 2.5%">Payment Status</th>
                        <th>Status</th>
                        <th>Note </th>
                        <th>Delete</th>
                        <th>Edit</th>
                        <th>More</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order as $od)
                    <tr class="odd gradeX header" align="center">
                        <td> <input type="checkbox" name="order_check[]" value="{{$od->id}}"></td>
                        <td>{{$od->getClient->email}}</td>
                        <td>{{$od->total}}</td>
                        <td>{{$od->created_at}}</td>
                        <td>{{$od->payment_status}}</td>
                        <td>{{$od->getStatus->name}}</td>
                        <td>{{$od->notes}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('sure?')" href="admin/order/delete/{{$od->id}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/order/edit/{{$od->id}}">Edit</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/order_item/list/{{$od->id}}">Detail</a></td>
            
                    </tr>
                    @endforeach
                      </tbody>
                      </form>
                      {{$order->links()}}
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

@endsection
@section('script')
<script type="text/javascript">
      $('.mainheader').on("click", function(){
        $(this).siblings().slideToggle(100);
        });

        $('.header').on("click", function(){
        $(this).find('.hideMe').slideToggle(100);
        });
</script>
@endsection