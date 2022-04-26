<?php

namespace App\Controllers\Admin;

use App\Models\Tag;
use App\Models\Post;
use App\Controllers\Controller;
use App\Models\User;

class PostController extends Controller
{

    // Controller Posts
    public function index()
    {

        $this->isAdmin();

        $posts = (new Post($this->getDB()))->all();
        return $this->view('admin.post.index', compact('posts'));
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
        $tags = array_pop($_POST);

        $result = $post->createPost($_POST, null,  $id);

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
        $data = $_POST;
        $tags = array_pop($_POST);

        $result = $post->update($id, $_POST, $tags);

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
}
