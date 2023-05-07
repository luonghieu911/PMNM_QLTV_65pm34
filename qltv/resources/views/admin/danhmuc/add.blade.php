@extends('admin.main')
@section('content')
    <form action="/admin/danhmuc/add/store" method="post" id="quickForm" novalidate="novalidate">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Mã danh mục:</label>
                <input type="text" name="MaDM" class="form-control" id="MaDM" placeholder="Nhập mã danh mục">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tên danh mục:</label>
                <input type="text" name="TenDM" class="form-control" id="TenDM" placeholder="Nhập tên danh mục">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mô tả</label>
                <input type="text" name="MoTa" class="form-control" id="MoTa" placeholder="Nhập mô tả">
            </div>
{{--            <textarea name="editor1" id="editor1" rows="10" cols="80">--}}
{{--                This is my textarea to be replaced with CKEditor 4.--}}
{{--            </textarea>--}}
{{--            <script>--}}
{{--                // Replace the <textarea id="editor1"> with a CKEditor 4--}}
{{--                // instance, using default configuration.--}}
{{--                CKEDITOR.replace( 'editor1' );--}}
{{--            </script>--}}
            <div class="form-group">
                <label for="exampleInputPassword1">Vị trí</label>
                <input type="text" name="ViTri" class="form-control" id="ViTri" placeholder="Nhập vị trí">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        @csrf
    </form>
@endsection
