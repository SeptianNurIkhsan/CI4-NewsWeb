<?php

namespace App\Controllers;

use App\Models\PostModel;
use CodeIgniter\Controller;

class Post extends Controller
{
    public function index()
    {
        $model = new PostModel();
        $data['posts'] = $model->orderBy('created_at', 'DESC')->findAll();
        return view('post/index', $data);
    }

    public function detail($id)
    {
        $model = new PostModel();
        $data['post'] = $model->find($id);
        return view('post/detail', $data);
    }

    public function allPosts()
    {
        $model = new PostModel();
        $data['posts'] = $model->orderBy('created_at', 'DESC')->findAll();
        return view('post/all', $data);
    }
}