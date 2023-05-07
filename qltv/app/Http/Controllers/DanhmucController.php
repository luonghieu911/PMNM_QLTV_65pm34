<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DanhmucController extends Controller
{
    //
    public function create(){
        return view('admin.danhmuc.add',[
           'title'=>'Thêm mới danh mục'
        ]);
    }
    public function store(Request $request){
      //xử lý thêm mới danh mục
        dd($request->input());

    }
}
