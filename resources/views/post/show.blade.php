@extends('layouts.app')
@section('content')
    <div>
        {{ $post->id }}.{{ $post->title }}
    </div>

    <div>
        {{ $post->content }}
    </div>

    <div>
        <a href="{{ route('post.index') }}"> get back to all posts</a>
    </div>
@endsection
