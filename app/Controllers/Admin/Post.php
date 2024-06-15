<?php

namespace App\Controllers\Admin;

use App\Models\PostModel;
use CodeIgniter\Controller;

class Post extends Controller
{
    public function index()
    {
        $model = new PostModel();
        $data['posts'] = $model->findAll();
        return view('admin/post/index', $data);
    }

    public function store()
    {
        $model = new PostModel();
        $data = [
            'title' => $this->request->getVar('title'),
            'content'  => $this->request->getVar('content'),
        ];
        $model->save($data);
        return redirect()->to('/admin/posts');
    }

    public function delete($id = null)
    {
        $model = new PostModel();
        $model->delete($id);
        return redirect()->to('/admin/posts');
    }
}