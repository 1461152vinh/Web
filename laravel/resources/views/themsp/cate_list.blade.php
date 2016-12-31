@extends('layout.layoutthem.master')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- tạo thông báo -->
                     <div class="col-lg-12">
                        @if(Session::has('flash_message'))
                            <div class="alert alert-{!! Session::get('flash_level') !!}">
                                {!! Session::get('flash_message') !!}
                            </div>
                         @endif
                     </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>MãCT</th>
                                <th>Mã SP</th>
                                <th>tên sp</th>
                                <th>giá</th>
                                <th>chiếc khấu</th>
                                <th>hình ảnh</th>           
                                <th>view</th>
                                <th>DMSP_ID</th>
                                <th>DElete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ds as $d)
                            <tr class="even gradeC" align="center">
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->mact }}</td>
                                <td>{{ $d->masp }}</td>
                                <td>{{ $d->tensp }}</td>
                                <td>{{ $d->gia }}</td>
                                <td>{{ $d->chieckhau }}</td>
                                <td>{{ $d->hinhanh }}</td>
                                <td>{{ $d->view }}</td>
                                <td>{{ $d->dmsp_id }}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('bạn có chắc muốn xóa không')" href="{!! URL::route('admin.deletesp',$d->id) !!}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.editsp',$d->id) !!}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop