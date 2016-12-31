  <aside class="span3">
         <!-- Category-->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Categories</span></h2>
            <ul class="nav nav-list categories">
            @foreach($menu as $mn)
              <li>
                <a href="{!! URL('loai_san_pham',[$mn->id,$mn->tenspc]) !!} ">{{ $mn->tensp }}</a>
              </li>
              @endforeach
            </ul>
          </div>
         <!--  Best Seller -->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Best Seller</span></h2>
            <ul class="bestseller">
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Women Accessories</span>
                <span class="price">$250</span>
              </li>
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
              </li>
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
              </li>
            </ul>
          </div>
          <!-- Latest Product -->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Latest Products</span></h2>
            <ul class="bestseller">
            @foreach($lastest as $l)
              <li>
                <img width="40" height="40" src="{!! url( $l->hinhanh) !!}" alt="product" title="product">
                <a class="productname" href="{!! URL('chitietsanpham',[$l->id,$l->tensp]) !!}"> {{ $l->tensp }}</a>
                <span class="procategory">{{ $name->tensp }}</span>
                <span class="price">{{ number_format($l->gia) }}</span>
              </li>
             @endforeach
            </ul>
          </div>
          <!--  Must have -->  
          <div class="sidewidt">
          <h2 class="heading2"><span>Must have</span></h2>
          <div class="flexslider" id="mainslider">
            <ul class="slides">
              <li>
                <img src="{{ url('img/product1.jpg') }}" alt="" />
              </li>
              <li>
                <img src="{{ url('img/product2.jpg') }}" alt="" />
              </li>
            </ul>
          </div>
          </div>
        </aside>