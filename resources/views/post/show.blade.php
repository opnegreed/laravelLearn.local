@extends('layouts.app')
@section('content')
    <div>
        {{ $post->id }}.{{ $post->title }}
    </div>

    <div>
        {{ $post->content }}
    </div>
@endsection
