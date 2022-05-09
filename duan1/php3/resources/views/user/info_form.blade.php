@php
    $genderList = [
        [
            'id' => 1,
            "name" => "Nam"
        ],
        [
            'id' => 2,
            "name" => "Nữ"
        ],
        [
            'id' => 3,
            "name" => "Khác"
        ],
    ];
    
@endphp

<form action="{{route('save.info')}}" method="get" >
    <div>
        <label for="">Họ và tên</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">Tuổi</label>
        <input type="text" name="age">
    </div>
    <div>
        <label for="">Giới tính</label>
        @foreach ($genderList as $item)
            <input type="radio" name="gender" value="{{$item['id']}}" 
                @if($loop->index == 0 ) checked @endif> {{$item['name']}}
        @endforeach
    </div>
    <div>
        <label for="">Tình trạng hôn nhân</label>
        <input type="checkbox" name="isMarried" value="1"> Đã kết hôn
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>