@extends('layout.index')
@section('content')
@include('layout.menu');
<div class="container" >
	<div class="panel panel-danger">
		<!-- Default panel contents -->
		<div class="panel-heading"><h3>My Order</h3></div>
		<!-- Table -->
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tên Sản Phẩm</th>
					<th>Trạng Thái</th>
					<th>Tổng Tiền</th>
					<th>Ghi chú</th>
					<th>Thời Gian</th>
					<th>InHóa Đơn</th>
				</tr>
			</thead>
			<tbody>
				@foreach($getOrder as $get)
				<tr>
					<td>{{$get->id}}</td>
					<td>
						<?php  $getOrderItem = DB::table('orders_items')
						->where('order_id',$get['id'])
						->join('products','products.id','=','orders_items.product')
						->select('products.name as name')
						->get();
						?>
						@foreach($getOrderItem as $na)
						{{$na->name." , "}}
						@endforeach
					</td>
					<td>
						<?php $getstatus = DB::table('statuses')->where('id',$get['status'])->first(); ?>
						{{$getstatus->name}}
					</td>
					<td>{{$get->total}} USD</td>
					<td>{{$get->notes}}</td>
					<td>{!! \Carbon\Carbon::createFromTimeStamp(strtotime($get["date"]))->diffForHumans() !!}</td>
					<td><a href="#" class = " glyphicon glyphicon-thumbs-up"> In hóa đơn</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection