@extends('welcome')
@section('content')
<table class="table table-light">
    <tbody>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>chức năng</th>
        </tr>

        
            @foreach ($categories as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->name}}</td>
            <td>{{$c->created_at}}</td>
            <td>{{$c->updated_at}}</td>
            <td>
                {{-- <a href="{{route('category.remove',['id'=>$c->id])}}">Remove</a> --}}
                <a href="{{route('category.edit',['id'=>$c->id])}}">Edit</a>
            </td>
        </tr>
            @endforeach
            
        
    </tbody>
</table>
@endsection