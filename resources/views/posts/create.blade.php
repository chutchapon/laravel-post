@extends('layouts.app')
@section('content')
    <form action="/store" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="mt-2 col-md-12">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="selectCategory">Category </label>
                            <select name="category_id" id="" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <p><label for="thumbnail">Thumbnail</label></p>
                            <input type="file" name="thumbnail" class="form-file-input">
                        </div>
                        <label for="title">Title</label>
                        <input type="text" placeholder="Title" class="form-control" name="title">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" placeholder="Description" name="description" rows="5"></textarea>
                        <label for="detail" class="form-label">Detail</label>
                        <textarea class="form-control" placeholder="Detail" name="detail" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Submit</button>
            </div>
        </div>
        </div>
    </form>
@endsection
