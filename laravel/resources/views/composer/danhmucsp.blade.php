 @foreach($menu1 as $item)
          <li><a class="active"  href="#">{{ $item->tensp }}</a>
            <div>          
              <ul>
              <?php 
              		 $menu2=DB::table('danhmucsanpham')->where('parent_id',$item->id)->get();			
               ?>
                @foreach($menu2 as $item1)
                <li><a href="{!! URL('loai_san_pham',[$item1->id,$item->tenspc]) !!} ">{{ $item1->tensp }}</a></li>  
                 @endforeach         
              </ul>
            </div>
            </li>
@endforeach 