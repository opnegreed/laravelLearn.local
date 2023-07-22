@extends('layouts.app')
@section('content')
<div>
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
        </div>

        <div class="form-group">
            <label for="text" class="form-text">Text</label>
            <input type="text" name="content" class="form-control" id="text" placeholder="Text">
        </div>

        <div class="form-group">
            <label for="image" class="form-image">image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="image">
        </div>

        <button type="submit" class="btn btn-primary">create</button>
    </form>

</div>
@endsection
