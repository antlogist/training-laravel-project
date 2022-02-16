<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\BlogPost;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function testNoBlogPostsWhenNothinginDatabase()
    {
        $response = $this->get('/posts');

        $response->assertSeeText('No Posts Found');
    }

    public function testSee1BlogPostWhenThereIs1() {
        //Arrange
        $post = new BlogPost();

        $post->title = 'New title';
        $post->content = 'Content of the blog post';

        $post->save();

        //Act
        $response = $this->get('/posts');

        //Assert
        $response->assertSeeText('New title');

        $this->assertDatabaseHas('blog_posts', [
            'title' => 'New title'
        ]);
    }
}
