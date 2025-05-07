<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use Carbon\Carbon;

class BlogController extends Controller
{
    // Show form to create a new blog post
    public function create()
    {
        return view('blog.create');
    }

    // Store a new blog post
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'nullable|string|max:255',
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'excerpt' => 'nullable|string',
            'content' => 'nullable|string',
            'author' => 'nullable|string|max:255',
            'published_at' => 'nullable|date',
        ]);

        // Set published_at to now if not provided
        if (empty($validated['published_at'])) {
            $validated['published_at'] = Carbon::now();
        }

        BlogPost::create($validated);

        return redirect()->route('blog.index')->with('success', 'Blog post created successfully.');
    }

    // List all blog posts
    public function index()
    {
        $posts = BlogPost::orderBy('published_at', 'desc')->get();
        return view('blog.posts', compact('posts'));
    }

    // Show a single blog post
    public function show($id)
    {
        $post = BlogPost::findOrFail($id);
        return view('blog.post', compact('post'));
    }

    // Show blog management page with all posts
    public function manage()
    {
        $posts = BlogPost::orderBy('published_at', 'desc')->get();
        return view('blog.manage', compact('posts'));
    }

    // Show form to edit a blog post
    public function edit($id)
    {
        $post = BlogPost::findOrFail($id);
        return view('blog.edit', compact('post'));
    }

    // Update a blog post
    public function update(Request $request, $id)
    {
        $post = BlogPost::findOrFail($id);

        $validated = $request->validate([
            'image' => 'nullable|string|max:255',
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'excerpt' => 'nullable|string',
            'content' => 'nullable|string',
            'author' => 'nullable|string|max:255',
            'published_at' => 'nullable|date',
        ]);

        $post->update($validated);

        return redirect()->route('blog.manage')->with('success', 'Blog post updated successfully.');
    }

    // Delete a blog post
    public function destroy($id)
    {
        $post = BlogPost::findOrFail($id);
        $post->delete();

        return redirect()->route('blog.manage')->with('success', 'Blog post deleted successfully.');
    }
}
