<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogPost;
use Carbon\Carbon;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'image' => './assets/img/blog/blog-1.png',
                'title' => 'First Blog Post',
                'category' => 'News',
                'excerpt' => 'This is the excerpt of the first blog post.',
                'author' => 'OA Tutor Team',
                'published_at' => Carbon::parse('2024-06-01'),
            ],
            [
                'image' => './assets/img/blog/blog-2.png',
                'title' => 'Second Blog Post',
                'category' => 'Updates',
                'excerpt' => 'This is the excerpt of the second blog post.',
                'author' => 'OA Tutor Team',
                'published_at' => Carbon::parse('2024-06-15'),
            ],
            [
                'image' => './assets/img/blog/blog-3.png',
                'title' => 'Third Blog Post',
                'category' => 'Tutorial',
                'excerpt' => 'This is the excerpt of the third blog post.',
                'author' => 'OA Tutor Team',
                'published_at' => Carbon::parse('2024-06-20'),
            ],
            [
                'image' => './assets/img/blog/blog-4.png',
                'title' => 'Fourth Blog Post',
                'category' => 'News',
                'excerpt' => 'This is the excerpt of the fourth blog post.',
                'author' => 'OA Tutor Team',
                'published_at' => Carbon::parse('2024-06-25'),
            ],
            [
                'image' => './assets/img/blog/blog-5.png',
                'title' => 'Fifth Blog Post',
                'category' => 'Updates',
                'excerpt' => 'This is the excerpt of the fifth blog post.',
                'author' => 'OA Tutor Team',
                'published_at' => Carbon::parse('2024-07-01'),
            ],
            [
                'image' => './assets/img/blog/blog-6.png',
                'title' => 'Sixth Blog Post',
                'category' => 'Tutorial',
                'excerpt' => 'This is the excerpt of the sixth blog post.',
                'author' => 'OA Tutor Team',
                'published_at' => Carbon::parse('2024-07-05'),
            ],
            [
                'image' => './assets/img/blog/blog-7.png',
                'title' => 'Seventh Blog Post',
                'category' => 'News',
                'excerpt' => 'This is the excerpt of the seventh blog post.',
                'author' => 'OA Tutor Team',
                'published_at' => Carbon::parse('2024-07-10'),
            ],
            [
                'image' => './assets/img/blog/blog-8.png',
                'title' => 'Eighth Blog Post',
                'category' => 'Updates',
                'excerpt' => 'This is the excerpt of the eighth blog post.',
                'author' => 'OA Tutor Team',
                'published_at' => Carbon::parse('2024-07-15'),
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::create($post);
        }
    }
}
