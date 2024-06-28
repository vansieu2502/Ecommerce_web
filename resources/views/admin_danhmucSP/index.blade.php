@extends('admin_danhmucSP.layout_home')

@section('content')
<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin_danhmucSP.create') }}" class="btn btn-success btn-sm"
                        title="Add danh muc">Add Danh Mục sản phẩm</a>
                    <br /><br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>Thao Tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dmsp as $dmsp)
                                    <tr>
                                        <td>{{ $dmsp->id }}</td>
                                        <td>{{ $dmsp->name }}</td>

                                        <td>
                                            <a href="{{ route('admin_danhmucSP.edit', $dmsp->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <form method="POST" action="{{ route('admin_danhmucSP.destroy', $dmsp->id) }}"
                                                accept-charset="UTF-8" style="display:inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Category"
                                                    onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?')">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- !! ($categories->links()) !! -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
