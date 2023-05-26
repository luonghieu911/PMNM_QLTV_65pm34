@extends('admin.main')
@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mã danh mục</th>
                <th>Tên danh mục</th>
                <th>Mô tả</th>
                <th>Vị trí</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($danhmucs as $danhmuc)
                <tr>
                    <td>{{$danhmuc->id}}</td>
                    <td>{{$danhmuc->MaDM}}</td>
                    <td>{{$danhmuc->TenDM}}</td>
                    <td>{!! $danhmuc->MoTa !!}</td>
                    <td>{{$danhmuc->Vitri}}</td>
                    <td><a class="btn btn-primary mr-3" href="/admin/danhmuc/edit/{{$danhmuc->id}}"><i class="fa fa-edit "></i></a>
                        <a class="btn btn-danger" href="#" onclick="Delete({{$danhmuc->id}},'/admin/danhmuc/delete')"><i class = "fa fa-trash"></i></a>
                    </td>
                </tr
            @endforeach
        </tbody>
    </table>
{{ $danhmucs->links() }}
@endsection
