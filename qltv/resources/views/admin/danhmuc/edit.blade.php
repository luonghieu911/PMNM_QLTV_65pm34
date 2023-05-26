@extends('admin.main')
@section('content')
    <form action="/admin/danhmuc/edit/{{$danhmuc->id}}" method="post" id="quickForm" novalidate="novalidate">
        @include('share.error')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Mã danh mục:</label>
                <input readonly type="text" value="{{$danhmuc->MaDM}}" name="MaDM" class="form-control" id="MaDM" placeholder="Nhập mã danh mục">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tên danh mục:</label>
                <input type="text" value="{{$danhmuc->TenDM}}" name="TenDM" class="form-control" id="TenDM" placeholder="Nhập tên danh mục">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mô tả</label>
                <textarea name="MoTa" id="mota" rows="10" cols="80">
                {{$danhmuc->MoTa}}
                </textarea>
                <script>
                    CKEDITOR.replace( 'mota' );
                </script>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Vị trí</label>
                <input type="text" value="{{$danhmuc->Vitri}}" name="ViTri" class="form-control" id="ViTri" placeholder="Nhập vị trí">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        @csrf
    </form>
@endsection
