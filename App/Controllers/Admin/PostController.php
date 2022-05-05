<?php

namespace App\Controllers\Admin;

use App\Models\Tag;
use App\Models\Post;
use App\Controllers\Controller;
use App\Models\Comment;
use App\Models\User;

class PostController extends Controller
{

    // Controller tous les Posts
    public function index()
    {

        $this->isAdmin();

        $posts = (new Post($this->getDB()))->all();
        return $this->view('admin.post.index', compact('posts'));
    }

        // Controller tous les Posts
        public function comments()
        {
    
            $this->isAdmin();
    
            $comments = (new Comment($this->getDB()))->all();
            return $this->view('admin.post.comments', compact('comments'));
        }

    // Creéation des tags
    public function create()
    {
        $this->isAdmin();

        $tags = (new Tag($this->getDB()))->all();

        return $this->view('admin.post.form', compact('tags'));
    }

    // creation du Post
    public function createPost()
    {

        $id = $this->isAdmin();
        $post = new Post($this->getDB());
        $posts = filter_input_array(INPUT_POST);
        $tags = array_pop($posts);

        $result = $post->createPost($posts, null,  $id);

        if ($result) {
            return header('Location: /admin/posts');
        } else {
            return header('Location: /admin/create');
        }
    }



    public function edit(int $id)
    {
        $this->isAdmin();

        $post = (new Post($this->getDB()))->findById($id);
        $tags = (new Tag($this->getDB()))->all();
        return $this->view('admin.post.form', compact('post', 'tags'));
    }

    // Mis à jour des posts
    public function update(int $id)
    {

        $this->isAdmin();

        $post = new Post($this->getDB());
        $posts = filter_input_array(INPUT_POST);
        $tags = array_pop($posts);

        $result = $post->update($id, $posts, $tags);

        if ($result) {
            return header('Location: /admin/posts');
        }
    }
    // Suppression des posts
    public function destroy(int $id)
    {

        $this->isAdmin();

        $post = new Post($this->getDB());
        $result = $post->destroy($id);

        if ($result) {
            return header('Location: /admin/posts');
        }
    }

     // Suppression des posts
     public function confirmed(int $id)
     {
 
       

         $this->isAdmin();
        
         $comment = new Comment($this->getDB());

         $result = $comment->updateConfirmed($id);
        
         var_dump($result);

         if ($result) {
             return header('Location: /admin/comments');
         }
     }
}
