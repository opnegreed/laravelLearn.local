@extends('layouts.app')
@section('content')
    <table class="table">
        @foreach($posts as $post)
        <div>
            <a href="{{ route('post.show', $post->id) }}">
                {{ $post->id }}. {{ $post->title }}
            </a>
        </div>
        @endforeach
    </table>
    <button type="button" class="btn btn-primary"><a class="nav-link" href="{{ route('post.create') }}">Create new post</a></button>
@endsection
