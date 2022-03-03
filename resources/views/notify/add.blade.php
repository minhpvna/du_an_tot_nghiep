@extends('welcome')
@section('content')

<div class="card-body">
<form action="" method="post" enctype="multipart/form-data">
    @csrf 
    <div  class="form-group">
        <label  for="">Title</label>
        <input class="form-control"  type="text"  name="title">
    </div>
    <div>
        <label class="form-group" for="">Content</label>
        <input class="form-control" type="text" name="content">
    </div>
    <div>
        <label for="">Image</label>
        <input type="file" name="image">
    </div>
    <div>
        <button class="btn btn-success" type="submit"> Add</button>
    </div>
</form>
</div>
@endsection