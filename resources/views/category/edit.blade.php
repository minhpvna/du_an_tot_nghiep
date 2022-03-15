@extends('welcome')
@section('content')
<div class="card-body">
<form action="{{ route('category.update') }}" method="post" enctype="multipart/form-data">
    @csrf 
    <div  class="form-group">
        <label  for="">name</label>
        <input class="form-control"  type="text"  name="name" value="{{$model->name}}">
    </div>
    <div>
        <button class="btn btn-success" type="submit"> update</button>
    </div>
</form>
</div>
@endsection