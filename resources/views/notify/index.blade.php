@extends('welcome')
@section('content')
<div class="card-body">
    <h6 class="card-title">Danh sách notify</h6>
    
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Created at</th>
                    <th>Update at</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
        @foreach($notify as $n)
        <tr>
            <td>{{$n->id}}</td>
            <td>{{$n->title}}</td>
            <td>{{$n->content}}</td>
            <td><img height="50px" src="{{asset($n->image)}}" alt=""></td>
            <td>{{$n->created_at}}</td>
            <td>{{$n->update_at}}</td>
            <td>
                <a href="{{route('notify.remove',['id'=>$n->id])}}">Remove</a>
                <a href="{{route('notify.edit',['id'=>$n->id])}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
        </table>
    </div>
</div>
</div>
<!-- <table>
    <thead>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Image</th>
        <th>Created at</th>
        <th>Update at</th>
        <th>Chức năng</th>
    </thead>
    <tbody>
        @foreach($notify as $n)
        <tr>
            <td>{{$n->id}}</td>
            <td>{{$n->title}}</td>
            <td>{{$n->content}}</td>
            <td><img height="50px" src="{{asset($n->image)}}" alt=""></td>
            <td>{{$n->created_at}}</td>
            <td>{{$n->update_at}}</td>
            <td>
                <a href="{{route('notify.remove',['id'=>$n->id])}}">Remove</a>
                <a href="{{route('notify.edit',['id'=>$n->id])}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table> -->
@endsection
