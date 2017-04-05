@extends('admin.layout.index')
@section('content')
    <div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>List</small>
                </h1>
            </div>
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
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                         <th>ID</th>
                         <th>Name</th>
                         <th>Price</th>
                         <th>Price sale off</th>
                         <th>Category</th>
                         <th>Views</th>
                         <th>IsHot</th>
                         <th>Desciption</th>
                         <th>Created_at</th>
                         <th>Delete</th>
                         <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product as $tt)
                    <tr class="odd gradeX" align="center">
                        <td>{{$tt->id}}</td>
                        <td>
                            <p>{{$tt->name}}</p>
                            <img width="130px" src="admin_asset/catalogue/{{$tt->image}}" />
                        </td>
                        <td>{{$tt->price}}</td>
                        <td>{{$tt->price_sale_off}}</td>
                        <td>
                        <?php $cate = DB::table('categories')->where('id',$tt['category'])->first();?>

                         @if(!empty($cate->name))
                        {{$cate->name}}
                        @endif  </td>
                        <td>
                          {{$tt->viewed}}
                        </td>
                        <td>
                          
                          @if($tt->ishot ==1)
                          {{'Thường'}}
                          @elseif($tt->ishot ==2)
                          {{'Bán Chạy'}}
                           @elseif($tt->ishot ==4)
                           {{'Mới'}}
                            @elseif($tt->ishot ==8)
                            {{'Hot'}}
                            @endif
                        </td>
                        <td>{{$tt->description}}</td>
                        <td>{!! \Carbon\Carbon::createFromTimeStamp(strtotime($tt["created"]))->diffForHumans() !!}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product/del/{{$tt->id}}" > Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/product/edit/{{$tt->id}}">Edit</a></td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection