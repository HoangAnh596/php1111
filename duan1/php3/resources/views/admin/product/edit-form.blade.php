@extends('admin.layouts.main')
@section('content')
@if(session('msg') != "")
    <p class="text-danger">{{session('msg')}}</p>
@endif
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" name="name" class="form-control" value="{{old('name', $product->name)}}">
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Danh mục</label>
                <select name="cate_id" class="form-control" >
                    @foreach($cates as $c)
                    <option 
                        @if($c->id == old('cate_id', $product->cate_id))
                        selected
                        @endif
                    value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">ảnh</label>
                <input type="file" name="file_upload" class="form-control">
                @error('file_upload')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="">Giá</label>
                <input type="text" name="price" value="{{old('price', $product->price)}}" class="form-control">
                @error('price')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="text" name="quantity" value="{{old('quantity', $product->quantity)}}" class="form-control">
                @error('quantity')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            
        </div>
        <div class="col-12 d-flex justify-content-end">
            <button class="btn btn-primary" type="submit">Lưu</button>
        </div>
    </div>
</form>
@endsection