<?php

namespace App\Http\Controllers\Visitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function sitemap(Request $request){

      $slugs = DB::table('posts')->select('postSlug')->get();

      return response()->view('sitemap', compact('slugs'))
          ->header('Content-Type', 'text/xml');
    }

    public function changeFeature_next(Request $request){
      $data =  get_feature_posts($request->count,$request->offset);

      if(count($data) == 0){
        $data =  get_feature_posts($request->count,$request->offset);
      }

      $html = '';
      for ($i=0; $i < count($data); $i++) {
        $clock = \Carbon\Carbon::parse($data[$i]->created_at)->diffForHumans();
        $html .= '
        <li>
            <div class="vk-item-fea">
                <div class="uni-play-img vk-item-fea-img">';
                  if (!empty($feature_post->postImage)){

                    $html.='<a href="/blog/'.$data[$i]->postSlug.'"><img src="/public_assets/image/posts/'.$data[$i]->postSlug.'/'.$data[$i]->postImage.'" alt="'.$data[$i]->postTitle.'"></a>';
                  }
                  else{
                    $html.='<a href="/blog/'.$data[$i]->postSlug.'"><img src="/public_assets/image/posts/general_images.png" alt="'.$data[$i]->postTitle.'"></a>';
                  }
                $html.='</div>
                <div class="vk-item-fea-text">
                    <h2><a href="/blog/'.$data[$i]->postSlug.'">'.$data[$i]->postTitle.'</a></h2>
                    <div class="vk-item-fea-time">
                        <ul>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i> '.$clock.'</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </li>
        ';
      }

      return $html;
    }

    public function changeFeature_prev(Request $request){
      $data =  get_feature_posts($request->count,$request->offset);

      if(count($data) == 0){
        $data =  get_feature_posts($request->count,$request->offset);
      }

      $html = '';
      for ($i=0; $i < count($data); $i++) {
        $clock = \Carbon\Carbon::parse($data[$i]->created_at)->diffForHumans();
        $html .= '
        <li>
            <div class="vk-item-fea">
                <div class="uni-play-img vk-item-fea-img">';
                  if (!empty($feature_post->postImage)){

                    $html.='<a href="/blog/'.$data[$i]->postSlug.'"><img src="/public_assets/image/posts/'.$data[$i]->postSlug.'/'.$data[$i]->postImage.'" alt="'.$data[$i]->postTitle.'"></a>';
                  }
                  else{
                    $html.='<a href="/blog/'.$data[$i]->postSlug.'"><img src="/public_assets/image/posts/general_images.png" alt="'.$data[$i]->postTitle.'"></a>';
                  }
                $html.='</div>
                <div class="vk-item-fea-text">
                    <h2><a href="/blog/'.$data[$i]->postSlug.'">'.$data[$i]->postTitle.'</a></h2>
                    <div class="vk-item-fea-time">
                        <ul>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i> '.$clock.'</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </li>
        ';
      }

      return $html;
    }

    public function index(Request $request){
      $data['categories'] = get_all_active_category();
      $data['pageInfo'] = [
        "title" => "TOLGA KOCADAĞ",
        "description" => "Burada neye ihtiyacın varsa emin ol bulabilirsin",
        "keywords" => "Tolga Kocadağ,Tolga,Kocadağ"
      ];
      return view('visitor.index',$data);
    }

    public function blog(Request $request){
      $data['categories'] = get_all_active_category();
      $request->slug = clear($request->slug);
      $data['postDetails'] = get_slug_posts($request->slug);
      if(empty($data['postDetails'])){
         return abort(404);
      }

      DB::table('postDetails')->where('postDetailID',$data['postDetails']->postDetailID)->update([
        "postHit" => DB::raw('postHit + 1')
      ]);

      $data['pageInfo'] = [
        "title" => "TOLGA KOCADAĞ",
        "description" => $data['postDetails']->postDescription,
        "keywords" => $data['postDetails']->postTag
      ];
      return view('visitor.single',$data);
    }
}
