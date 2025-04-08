@extends('layout')

@section('content')
<h1>Create Post</h1>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title" required><br>
    <textarea name="body" placeholder="Body" required></textarea><br>
    <button type="submit">Save</button>
</form>
@endsection
