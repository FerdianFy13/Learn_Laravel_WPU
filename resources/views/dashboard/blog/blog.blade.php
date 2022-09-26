@extends('layout.main');

@section('container')
    <form method="POST">
        @csrf
        for ($i = $post->id; $i < count($post->id)) {
            <h1></h1>
        }
    </form>
@endsection