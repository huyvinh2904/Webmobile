@extends('layout.index')
@section('content')
@include('layout.menu');
<div class="container" >
<div class="panel panel-danger">
	
		<!-- Default panel contents -->
		<div class="panel-heading"><h3>Your Account</h3></div>
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
		 <table class="table table-hover">
		 	<thead>
		 		<tr>
		 			<th>First_Name</th>
		 			<th>Last_Name</th>
		 			<th>Số điện thoại</th>
		 			<th>Email</th>
		 			<th>Địa chỉ</th>
		 			<th>Thành phố</th>
		 			<th>Chỉnh sửa</th>
		 		</tr>
		 	</thead>
		 	<tbody>
		 		<tr>
		 			<td>{{$infos->first_name}}</td>
		 			<td>{{$infos->last_name}}</td>
		 			<td>{{$infos->phone_number}}</td>
		 			<td>{{$infos->email}}</td>
		 			<td>{{$infos->address}}</td>
		 			<td>{{$infos->country}}</td>
		 			<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="EditMyaccount/{{$infos->id}}">Edit</a></td>
		 		</tr>
		 	</tbody>
		 </table>
		
</div>		

</div>
@endsection
