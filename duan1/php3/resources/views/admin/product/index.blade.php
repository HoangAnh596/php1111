@extends('admin.layouts.main')
@section('title', 'Laravel - CRUD')
@section('content')
    
<form action="" method="get">
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="">Tên sp:</label>
                <input type="text" name="keyword" class="form-control">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="">Danh mục:</label>
                <select name="cate_id" class="form-control">
                    <option value="">Tất cả</option>
                    @foreach($cates as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                </select>    
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="">Sắp xếp theo</label>
                <select name="order_by" class="form-control">
                    <option value="">Mặc định</option>
                    @foreach(config('common.product_order_by') as $k => $val)
                    <option value="{{$k}}">{{$val}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <button class="btn btn-sm btn-primary" type="submit">Tìm kiếm</button>
        </div>    
    </div>
</form>
<br>    
<table class="table table-hover">
    <thead>
        <th>STT</th>
        <th>Tên Sản Phẩm</th>
        <th>Ảnh</th>
        <th>Danh mục</th>
        <th>Giá</th>
        <th>Số Lượng</th>
        <th>
            <a href="{{route('product.add')}}">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        @foreach ($product_data as $p)
            <tr>
                <td>{{(($product_data->currentPage()-1)*config('common.default_page_size')) + $loop->iteration}}</td>
                <td>{{$p->name}}</td>
                <td>
                    <img src="{{asset('storage/' . $p->image)}}" width="70">
                </td>
                <td>{{$p->category->name}}</td>
                <td>{{$p->price}}</td>
                <td>{{$p->quantity}}</td>
                <td>
                    <a href="{{route('product.edit', ['id' => $p->id])}}">Sửa</a>
                    <a href="{{route('product.remove', ['id' => $p->id])}}">Xóa</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$product_data->Links()}}

@endsection