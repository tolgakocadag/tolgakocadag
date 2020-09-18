<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Login extends Controller
{

    public function login(){
      return view('admin.pages.auth.login');
    }

    public function index(Request $request){
      $data = [];
      if(isset($request->lasturl)){
        $data["lasturl"] = $request->lasturl;
      }
      return view('admin.index',$data);
    }

    public function loginPost(Request $request){

      if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
        return redirect()->route('admin.index');
      } elseif (Auth::attempt(['username' => $request->email, 'password' => $request->password])) {
        return redirect()->route('admin.index');
      } else {
        return redirect()->route('admin.login')->withErrors('Hatalı Giriş Yaptınız!');
      }

    }

    public function logout(){
      Auth::logout();
      return redirect()->route('admin.login');
    }
}
