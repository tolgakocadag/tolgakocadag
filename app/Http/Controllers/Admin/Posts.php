<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Posts extends Controller
{

  public function edit(Request $request){

    $request->id = clear($request->id);
    $request->title = clear($request->title);
    $request->slug = clear($request->slug);
    $request->description = clear($request->description);

    if(isset($request->status)){
      $request->status = 1;
    } else {
      $request->status = 0;
    }

    if($request->hasFile('image')){
      $type = $request->image->getClientOriginalExtension();
      if($type == "png" || $type == "jpg" || $type == "gif" || $type == "jpeg")
      {
        if($_FILES['image']['size'] < 2097152){
          $imageName = Auth::user()->userID . "_" . $request->slug . "_" . rand(1,100000);
          $imageName = Str::slug($imageName). "." . $type;

          if(!file_exists(public_path('public_assets/image/posts/'.$request->slug))) {
            mkdir(public_path('public_assets/image/posts/'.$request->slug),755);
          }

          $request->image->move(public_path('public_assets/image/posts/'.$request->slug),$imageName);
        }
        else {
          $response = ['status' => 400, 'message' => "Resim boyutu max 2 MB olmalıdır!"];
          return json_encode($response);
        }
      }
      else {
        $response = ['status' => 400, 'message' => "Resim uzantısı jpg,jpeg,png,gif formantında olmalıdır!"];
        return json_encode($response);
      }
    }

    DB::table('posts')->where('postID',$request->id)->update([
      "postTitle" => $request->title,
      "postDescription" => $request->description,
      "postStatus" => $request->status,
      "edited_at" => now(),
      "edited_user" => Auth::user()->userID
    ]);

    if(isset($imageName)){
      DB::table('postDetails')->where('postID',$request->id)->update([
        "postContent" => $request->content,
        "postImage" => $imageName
      ]);
    } else {
      DB::table('postDetails')->where('postID',$request->id)->update([
        "postContent" => $request->content
      ]);
    }


    $response = [
      "status" => 200,
      "message" => "Gönderi başarıyla düzenlendi!"
    ];
    return json_encode($response);
  }

  public function editshow(Request $request){
    $data['edit_data'] = DB::table('posts')->select('posts.postID','postSlug','postTitle','postDescription','postStatus','postContent')
    ->leftJoin('postDetails','postDetails.postID','=','posts.postID')->where('posts.postID',$request->setRowID)->first();
    return view('admin.pages.posts.edit',$data);
  }

  public function add(Request $request){

    $request->title = clear($request->title);
    $request->description = clear($request->description);

    if(isset($request->status)){
      $request->status = 1;
    } else {
      $request->status = 0;
    }

    $slug = Str::slug($request->title);

    $isSlug = DB::table('posts')->select('postSlug')->where('postSlug',$slug)->count();

    if($isSlug > 0) {
      $slug = Str::slug($request->title."-".microtime(), '-');
    }

    $imageName = null;

    if($request->hasFile('image')){
      $type = $request->image->getClientOriginalExtension();
      if($type == "png" || $type == "jpg" || $type == "gif" || $type == "jpeg")
      {
        if($_FILES['image']['size'] < 2097152){
          $imageName = Auth::user()->userID . "_" . $slug . "_" . rand(1,100000);
          $imageName = Str::slug($imageName). "." . $type;

          if(!file_exists(public_path('public_assets/image/posts/'.$slug))) {
            mkdir(public_path('public_assets/image/posts/'.$slug),755);
          }

          $request->image->move(public_path('public_assets/image/posts/'.$slug),$imageName);
        }
        else {
          $response = ['status' => 400, 'message' => "Resim boyutu max 2 MB olmalıdır!"];
          return json_encode($response);
        }
      }
      else {
        $response = ['status' => 400, 'message' => "Resim uzantısı jpg,jpeg,png,gif formantında olmalıdır!"];
        return json_encode($response);
      }
    }

    DB::table('posts')->insert([
      "postTitle" => $request->title,
      "postDescription" => $request->description,
      "postSlug" => $slug,
      "postStatus" => $request->status,
      "created_at" => now(),
      "created_user" => Auth::user()->userID
    ]);

    $lastInsertID = DB::getPdo()->lastInsertId();

    DB::table('postDetails')->insert([
      "postID" => $lastInsertID,
      "postContent" => $request->content,
      'postImage' => $imageName
    ]);

    $response = [
      "status" => 200,
      "message" => "Gönderi başarıyla eklendi!"
    ];
    return json_encode($response);
  }

  public function addshow(Request $request){
    return view('admin.pages.posts.add');
  }

  public function show(Request $request){
    return view('admin.pages.posts.list');
  }

  public function list(Request $request){

    if ($request->type_data == "user_list") {

    $limit = intval($request->length);
    $offset = intval($request->start);
    if ($request->length > 0) {
      $limit = intval($request->length);
      $offset = intval($request->start);
    } else {
      $limit = 0;
      $offset = 0;
    }

    $search_value = $request->search['value'];

    $data = array();
    $dataset = array();
    $keys = ['postTitle','postDescription','postStatus','created_at'];

    $posts = DB::table('posts')->select('posts.postID','postTitle','postDescription','postStatus','created_at')->leftJoin('postDetails','postDetails.postID','=','posts.postID')
    ->orderBy('created_at','DESC')->offset($offset)->limit($limit)->get();
    $filteredDataCount = DB::table('posts')->select('posts.postID','postTitle','postDescription','postStatus','created_at')->leftJoin('postDetails','postDetails.postID','=','posts.postID')
    ->count();

    foreach ($posts as $post) {

      $dataset = [];
      foreach ($keys as $key) {
        if($key == "postStatus"){
          if($post->$key == 1){
            $dataset[] = '<span class="tb-status text-success">Yayında</span>';
          } else{
            $dataset[] = '<span class="tb-status text-danger">Pasif</span>';
          }
        } else {
          $dataset[] = $post->$key;
        }
      }

      $dataset[] = '<a data-id="'.$post->postID.'" class="btn btn-icon btn-sm btn-warning admin_post_edit_redirect"><em class="icon ni ni-pen"></em></a>';

      $data[] = $dataset;
    }

    $output = array(
      "draw" => intval($request->draw),
      "recordsTotal" => DB::table('posts')->count(),
      "recordsFiltered" => $filteredDataCount,
      "data" => $data,
      "file_name" => "filter"
    );
    echo json_encode($output);
  }
}
}
