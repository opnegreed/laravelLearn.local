@extends('layouts.app')
@section('content')
    <table class="table">
        @foreach($posts as $post)
        <thead>
        <tr>
            <th scope="col">{{ $post -> id }}</th>
            <th scope="col">{{ $post -> title }}</th>
            <th scope="col">{{ $post -> content }}</th>
        </tr>
        </thead>
        @endforeach
    </table>
@endsection
