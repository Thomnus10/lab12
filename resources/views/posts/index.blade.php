@extends('layout')

@section('content')
<h1>All Posts</h1>
<a href="{{ route('posts.create') }}">Create New Post</a>
@foreach ($posts as $post)
    <div>
        <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
        <p>{{ \Str::limit($post->body, 100) }}</p>
        <a href="{{ route('posts.edit', $post) }}">Edit</a>
        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
@endsection
