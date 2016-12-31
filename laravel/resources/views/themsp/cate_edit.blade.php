@extends('layout.layoutthem.master')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản Phẩm
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
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
                        <form action="" method="POST">

                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <!--
                            <div class="form-group">
                                <label>Category Parent</label>
                                <select class="form-control">
                                    <option value="0">Please Choose Category</option>
                                    <option value="">Tin Tức</option>
                                </select>
                            </div>
                            -->
                            <div class="form-group">
                                <label>Mã chi tiết:</label>
                                <input class="form-control" name="mact" value="{!! old('mact',isset($product) ? $product['mact']:null) !!}"  readonly="true" />
                            </div>
                            <div class="form-group">
                                <label>Mã DMSP:</label>
                                <input class="form-control" name="masp" value="{!! old('masp',isset($product) ? $product['masp']:null) !!}"  />
                            </div>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control" name="tensp" value="{!! old('tensp ',isset($product) ? $product['tensp']:null) !!}" </div>
                            <div class="form-group">
                                <label>Giá</label>
                                 <input class="form-control" name="gia" value="{!! old('gia',isset($product) ? $product['gia']:null) !!}" />
                            </div>
                          <div class="form-group">
                                <label>chiếc khấu</label>
                                 <input class="form-control" name="chieckhau" value="{!! old('chieckhau',isset($product) ? $product['chieckhau']:null) !!}" />
                            </div>
                          <div class="form-group">
                                <label>hình ảnh</label>
                                 <input class="form-control" name="hinhanh" value="{!! old('hinhanh',isset($product) ? $product['hinhanh']:null) !!}" />
                            </div>
                          <div class="form-group">
                                <label>view</label>
                                 <input class="form-control" name="view" value="{!! old('view',isset($product) ? $product['view']:null) !!}" />
                            </div>
                          <div class="form-group">
                                <label>id DMSP</label>
                                 <input class="form-control" name="iddmsp" value="{!! old('iddmsp',isset($product) ? $product['dmsp_id']:null) !!}" />
                            </div>
                          
                            <button type="submit" class="btn btn-default">Category Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop