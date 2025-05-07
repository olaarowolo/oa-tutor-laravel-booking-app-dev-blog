@extends('layouts.blog')

@section('content')
<div class="container">
    <h1>Create New Blog Post</h1>
    <form method="POST" action="{{ route('blog.store') }}">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ old('category') }}">
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ old('author') }}">
        </div>

        <div class="mb-3">
            <label for="excerpt" class="form-label">Excerpt</label>
            <textarea class="form-control" id="excerpt" name="excerpt">{{ old('excerpt') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5">{{ old('content') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="published_at" class="form-label">Published At</label>
            <input type="date" class="form-control" id="published_at" name="published_at" value="{{ old('published_at') }}">
        </div>

        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>
@endsection
