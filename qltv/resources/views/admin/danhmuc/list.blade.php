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
                </tr
            @endforeach
        </tbody>
    </table>
{{ $danhmucs->links() }}
@endsection
