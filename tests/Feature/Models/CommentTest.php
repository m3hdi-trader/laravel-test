<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class CommentTest extends TestCase
{
  use RefreshDatabase,ModelHelperTesting;

  protected function model(): Model
  {
    return new Comment();
  }
 
  public function testCommentRelationshipWithPost()
  {
    $comment = Comment::factory()->hasCommentable(Post::factory())->create();

    $this->assertTrue(isset($comment->commentable->id));
    $this->assertTrue($comment->commentable instanceof Post);
  }

  public function testCommentRelationshipWithUser()
  {
    $comment=Comment::factory()->for(User::factory())->create();

    $this->assertTrue(isset($comment->user->id));
    $this->assertTrue($comment->user instanceof User);
  
  }
}
