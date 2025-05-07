@extends('layouts.blog')

@section('content')
<div class="container">
    <h1>Manage Blog Posts</h1>
    <a href="{{ route('blog.create') }}" class="btn btn-primary mb-3">Create New Post</a>

    @if($posts->isEmpty())
        <p>No blog posts found.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Published At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category }}</td>
                    <td>{{ $post->author }}</td>
                    <td>{{ $post->published_at ? $post->published_at->format('Y-m-d') : 'Not Published' }}</td>
                    <td>
                        <a href="{{ route('blog.edit', $post->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('blog.destroy', $post->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this post?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
