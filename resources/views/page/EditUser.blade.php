@extends('layout.index')
@section('content')
@include('layout.menu');
  <div id="page-wrapper">
    <div class="container-fluid">
        <div class="panel panel-danger">
            <div class="panel-heading"><h3>EDIT</h3></div>
            <!-- /.col-lg-12 -->
            
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
            <form action="PostEditAccount/{{$Edtinfos->id}}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <label>Sửa thông tin</label>
                <input type="checkbox" name="box" id="changebox">

                <div class="form-group">
                    <label>Fist_Name</label>
                    <input class="form-control change1" name="name"  value="{{$Edtinfos->first_name}}" disabled="" />
                </div>
                <div class="form-group">
                    <label>Last_Name</label>
                    <input class="form-control change1" name="lastname"  value="{{$Edtinfos->last_name}}"  disabled=""/>
                </div>
                <div class="form-group">
                    <label>Country</label>
                    <input class="form-control change1" name="country"  value="{{$Edtinfos->country}}" disabled="" />
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input class="form-control change1" name="phone"  value="{{$Edtinfos->phone_number}}" disabled="" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email"  value="{{$Edtinfos->email}}" 
                    readonly="" />
                </div>
                <div class="form-group">
                    
                    <label>Mật Khẩu</label>
                    <input type="password" class="form-control change" name="pass" disabled />
                </div>
                <div class="form-group">
                    <label>Nhập lại mật khẩu</label>
                    <input type="password" class="form-control" name="passagain" 
                    disabled />
                </div>
               
                <button type="submit" class="btn btn-default">Sửa</button>
                </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
     @endsection
    @section('script')
    <script >
        $(document).ready(function(){
            $('#changebox').change(function(){
                if($(this).is(":checked"))
                {
                    $(".change1").removeAttr('disabled');
                }
                else
                {
                    $(".change1").attr('disabled','');
                }

            });

            });
        </script>
        @endsection