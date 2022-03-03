@extends('welcome')
@section('content')
<div class="card-body">

<form action="" method="post" enctype="multipart/form-data">
    @csrf 
    <div class="form-group">
        <label for="">Title</label>
        <input class="form-control" type="text"  name="title" value="{{$model->title}}">
    </div>
    <div class="form-group">
        <label for="">Content</label>
        <input class="form-control" type="text" name="content" value="{{$model->content}}">
    </div>
    <div class="form-group">
        <label for="">Imagee</label>
        <input class="form-control" type="file" name="image">
        <div>
          
        </div>
    </div>
    <img src="{{$model->image}}" alt="">
    <div>
        <button class="btn btn-success" type="submit"> Save</button>
    </div>
</form>
</div>
@endsection