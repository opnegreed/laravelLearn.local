@extends('layouts.app')
@section('content')
<div>
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title" class="form-label m-lg-3">Title</label>
            <input type="text" name="title" class="form-control mb-2 m-lg-3 " id="title" placeholder="Title">
        </div>

        <div class="form-group">
            <label for="text" class="form-text m-lg-3">Text</label>
            <input type="text" name="content" class="form-control mb-2  m-lg-3" id="text" placeholder="Text">
        </div>

        <div class="form-group">
            <label for="image" class="form-image m-lg-3">image</label>
            <input type="text" name="image" class="form-control mb-2 m-lg-3" id="image" placeholder="image">
        </div>

        <button type="submit" class="btn btn-primary m-lg-3 m-g">create</button>
    </form>

</div>
@endsection
