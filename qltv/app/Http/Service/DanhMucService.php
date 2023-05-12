<?php

namespace App\Http\Service;

use App\Models\Danhmuc;
use PHPUnit\Exception;

class DanhMucService
{
    public function create($request){
        try {
            Danhmuc::create([
                'TenDM'=>(string)$request->input('TenDM'),
                'MaDM'=>(string)$request->input('MaDM'),
                'MoTa'=>(string)$request->input('MoTa'),
                'Vitri'=>(string)$request->input('ViTri')
            ]);
            Session()->flash('success','Thêm mới danh mục thành công');
        }
        catch (Exception $ex){
            Session()->flash('error',$ex->getMessage());
            return false;
        }
        return true;
    }
}
