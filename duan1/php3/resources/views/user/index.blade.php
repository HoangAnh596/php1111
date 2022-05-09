<table>
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($users as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>
                    <a href="users/detail/{{$item->id}}">Chi tiết</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>