<?php

// zararlı html kodlarını temizler
function clear($string){
  return trim(strip_tags($string));
}

//tüm aktif menüleri getir
function get_all_active_category(){
  return DB::table('categories')->select('categoryID','categoryName','categoryTopID')->where('categoryStatus',1)->get();
}

//verilen slug değerine göre gönderi detaylarını çek
function get_slug_posts($slug){
  return DB::table('posts')->select('postTitle','postSlug','postImage','name','posts.created_at','postContent','postDescription','postTag',"postDetailID")
  ->leftJoin('postDetails','postDetails.postID','=','posts.postID')
  ->leftJoin('users','users.userID','=','posts.created_user')
  ->where('postSlug',$slug)->first();
}

//öne çıkan gönderileri çeken fonksiyon
function get_feature_posts($limit,$offset){
  return DB::table('posts')->select('postTitle','postSlug','postImage','name','posts.created_at')
  ->leftJoin('postDetails','postDetails.postID','=','posts.postID')
  ->leftJoin('users','users.userID','=','posts.created_user')
  ->orderBy('postHit')
  ->offset($offset)->limit($limit)->get();
}

//masaüstü menüleri listeleyen fonksiyon
function recursiveMenu($categories, $isdesktop = 1 , $main = 0   ,  $i = 0  ,  $menus = NULL , $nested = FALSE)
{
  if($isdesktop == 1){
    // Sayfalar Boşşa boş döndür.
     if( empty($categories) ){
         return;
     }

     // Eğer fonksiyon içinden çağırılmıyorsa
     if( !$nested ){
         // Sayfaları ebeveyn idsi ile yeni dizi oluştur
         foreach($categories as $row):
             $items[$row->categoryTopID][]=$row;
         endforeach;
     }else{
         // Nested ise gelen sayfaları al
         $items=$categories;
     }

     // Gelen sayfaları aç
     foreach( $items[$main] as $page ){
         // Menuleri değişkene aktar

         if(isset($items[$page->categoryID])){
           $menus .= '<li class="has-sub"><a href="#">'.$page->categoryName.'</a>';
         } else {
           $menus .= '<li><a href="03_01_01_left_sidebar.html">'.$page->categoryName.'</a></li>';
         }

         // Açılan menude bir alt sayfa var ise nested çağır
         if(isset($items[$page->categoryID])){
             $menus .= '<ul>';
             $menus=recursiveMenu($items,$isdesktop,$page->categoryID,($i + 1),$menus,TRUE);
             $menus .= '</ul>';
         }

         $menus .= '</li>';
     }

     // Oluşan menüleri return et
     return $menus;
  } else {
    // Sayfalar Boşşa boş döndür.
     if( empty($categories) ){
         return;
     }

     // Eğer fonksiyon içinden çağırılmıyorsa
     if( !$nested ){
         // Sayfaları ebeveyn idsi ile yeni dizi oluştur
         foreach($categories as $row):
             $items[$row->categoryTopID][]=$row;
         endforeach;
     }else{
         // Nested ise gelen sayfaları al
         $items=$categories;
     }

     // Gelen sayfaları aç
     foreach( $items[$main] as $page ){
         // Menuleri değişkene aktar

         if(isset($items[$page->categoryID])){
           $menus .= '<li class="has-sub"><a href="#">'.$page->categoryName.'</a>';
         } else {
           $menus .= '<li><a href="03_01_01_left_sidebar.html">'.$page->categoryName.'</a></li>';
         }

         // Açılan menude bir alt sayfa var ise nested çağır
         if(isset($items[$page->categoryID])){
             $menus .= '<ul>';
             $menus=recursiveMenu($items,$isdesktop,$page->categoryID,($i + 1),$menus,TRUE);
             $menus .= '</ul>';
         }

         $menus .= '</li>';
     }

     // Oluşan menüleri return et
     return $menus;
  }
}

 ?>
