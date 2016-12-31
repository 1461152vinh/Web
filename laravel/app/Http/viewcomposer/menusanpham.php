<?php

namespace App\Http\viewcomposer;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class menusanpham
{
	public function compose(View $view){
    	 $menu_lv1= DB::select('select * from danhmucsanpham where parent_id=0');			
   		 $view->with('menu1',$menu_lv1);
	}
}