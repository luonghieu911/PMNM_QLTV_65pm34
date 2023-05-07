<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('admin.login', [
            'title'=>'Trang đăng nhập'
        ]);
    }
    public function store(Request $request){
        //hàm xử lý cho việc login
        //echo "xử lý login";
        //dd($request->input());
        $this->validate($request,[
            'email'=>'required|email:filter',
            'password'=>'required'
        ]);

        if(Auth::attempt([
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ]))
        {
            //echo "đăng nhập thành công";
            return redirect()->route('admin');
        }
        Session()->flash('error','Tên đăng nhập hoặc mật khẩu không chính xác');
        return redirect()->back();
    }
}
