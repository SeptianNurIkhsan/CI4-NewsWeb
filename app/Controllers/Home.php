<?php

namespace App\Controllers;

use App\Models\PostModel;

class Home extends BaseController
{
    public function index()
    {
        $postModel = new PostModel();
        $data['posts'] = $postModel->orderBy('created_at', 'desc')->limit(3)->findAll();

        return view('home/index', $data);
    }
}