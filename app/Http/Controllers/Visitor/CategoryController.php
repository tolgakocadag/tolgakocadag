<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoryController extends Controller
{
    public function category(Request $request){

      $request->slug = clear($request->slug);
      $request->page = intval(clear($request->page));

      if(empty($request->page) || $request->page == 1){
        $request->page = 0;
      } else {
        $request->page *= 12;
      }

      $data['categories'] = get_all_active_category();

      $category = DB::table('categories')->where('categorySlug',"/category/".$request->slug)->whereNotNull('categorySlug')->first();

      if(empty($category->categoryID)){
        return abort(404);
      }

      $data['posts'] = get_slug_category_post($category->categoryID,$request->page);

      $data['pageInfo'] = [
        "title" => "TOLGA KOCADAĞ",
        "description" => "Burada neye ihtiyacın varsa emin ol bulabilirsin",
        "keywords" => "Tolga Kocadağ,Tolga,Kocadağ,".$request->slug
      ];
      return view('visitor.category',$data);
    }
}
