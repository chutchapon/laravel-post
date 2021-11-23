@extends("layout.master")
@section('titel', 'My website')
@section("content")
<h1>Create User</h1>
<form action="/store" method="post">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" placeholder="ชื่อรายการ" class="form-control" name="title">
    </div>
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Submit</button>
@endsection
