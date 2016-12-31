<?php

namespace App\Http\viewcomposer;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
class menusanpham2{
	public function compose(View $view,$id){

      $menu_lv2=DB::table('danhmucsanpham')->where('parent_id',$id)->get();
      $view->with('menu2',$menu_lv2);
  }
}
  ?>