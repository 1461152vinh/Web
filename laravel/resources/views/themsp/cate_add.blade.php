@extends('layout.layoutthem.master')
@section('content') 
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">sản phẩm
                            <small>Add</small>
                        </h1>
                    </div>
                     
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                            @if( count(@errors)>0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $e)
                                                <li>{!! $e !!}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                             @endif
            
                            
                        <form action="/admin/themdssp" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <div class="form-group">
                                <label>mã sản phẩm</label>
                                <input class="form-control" name="masp" placeholder="nhập mã sản phẩm" />
                            </div>

                            <div class="form-group">
                                <label>mã chi tiết sp</label>
                                <input class="form-control" name="mact" placeholder="mã chi tiết sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>tên sản phẩm</label>
                                <input class="form-control" name="tensp" placeholder="tên sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>giá sản phẩm</label>
                                <input class="form-control" name="gia" placeholder="giá sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>chiếc khấu</label>
                                <input class="form-control" name="chieckhau" placeholder="chiếc khấu" />
                            </div>
                            <div class="form-group">
                                <label>hình ảnh</label>
                                <input class="form-control" name="hinhanh" placeholder="đường dẫn hình ảnh" />
                            </div>
                            <div class="form-group">
                                <label>lượt view</label>
                                <input class="form-control" name="view" placeholder="số lượt view sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>id mã danh mục</label>
                                <input class="form-control" name="idmdm" placeholder="id mã danh mục" />
                            </div>
                            
                            <button type="submit" class="btn btn-default">Category Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop

