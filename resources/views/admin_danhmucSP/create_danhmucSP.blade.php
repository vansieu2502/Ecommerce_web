@extends('admin_danhmucSP.layout_home')
@section('content')


<div class="card" style="margin:20px;">
  <div class="card-header">Tạo danh mục mới</div>
  <div class="card-body">

      <form action="{{ route('admin_danhmucSP.AddNewDanhMucSP') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Tên Danh Mục</label><br>
        <input type="text" name="name" id="name" class="form-control" required><br>



        <input type="submit" value="Thêm Danh Mục" class="btn btn-success"><br>
    </form>

  </div>
</div>
@endsection



