
<!-- Header End -->


  <!-- Slider Start-->
  
  <!-- Slider End-->
  
  <!-- Section Start-->
  
  <!-- Section End-->
  
  <!-- Featured Product-->
  @extends('master.master')
  @section('title','Trang Chủ')
  @section('content')
  <div id="maincontainer">
  <!-- Slider Start-->
  @include('master.blog.slider')
  <!-- Slider End-->
  
  <!-- Section Start-->
  @include('master.blog.bieutuong')
  <!-- Section End-->
  </div>
  <section id="featured" class="row mt40">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Featured Products</span><span class="subtext"> See Our Most featured Products</span></h1>
      <ul class="thumbnails">
        @foreach($spham as $sp)
        <li class="span3">
          <a class="prdocutname" href="{!! URL('chitietsanpham',[$sp->id,$sp->tensp]) !!}">{{ $sp->tensp }}</a>
          <div class="thumbnail">
            <span class="sale tooltip-test">Sale</span>
            <a href="{!! URL('chitietsanpham',[$sp->id,$sp->tensp]) !!}"><img alt="" style="height:300px " src='{{ $sp->hinhanh }}'></a>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">{{ number_format($sp->gia) }}</div>
                <div class="priceold"></div>
              </div>
            </div>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </section>
  <!-- Latest Product-->
  <section id="latest" class="row">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Latest Products</span><span class="subtext"> See Our  Latest Products</span></h1>
      <ul class="thumbnails">
      <?php
       $sapham =DB::table('sanpham')->select('id','tensp','gia','chieckhau','hinhanh')->orderby('id','DESC')->skip(0)->take(4)->get(); ?>
        @foreach($sapham as $sp)
        <li class="span3">
          <a class="prdocutname" href="{!! URL('chitietsanpham',[$sp->id,$sp->tensp]) !!}">{{ $sp->tensp }}</a>
          <div class="thumbnail">
            <a href="{!! URL('chitietsanpham',[$sp->id,$sp->tensp]) !!}"><img alt="" src='{{ $sp->hinhanh }}'></a>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">{{ number_format($sp->gia)  }}</div>
                <div class="priceold"></div>
              </div>
            </div>
          </div>
        </li>
       @endforeach
      </ul>
    </div>
  </section>

<!-- Footer -->
@stop