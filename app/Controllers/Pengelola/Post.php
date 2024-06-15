<?php

namespace App\Controllers\Pengelola;

use App\Models\PostModel;
use CodeIgniter\Controller;

class Post extends Controller
{
    public function index()
    {
        $model = new PostModel();
        $data['posts'] = $model->findAll();
        return view('pengelola/post/index', $data);
    }

    public function create()
    {
        return view('pengelola/post/create');
    }

    public function store()
    {
        $model = new PostModel();
        $data = [
            'title' => $this->request->getVar('title'),
            'content'  => $this->request->getVar('content'),
        ];
        $model->save($data);
        return redirect()->to('/pengelola/posts');
    }

    public function edit($id = null)
    {
        $model = new PostModel();
        $data['post'] = $model->find($id);
        return view('pengelola/post/edit', $data);
    }

    public function update($id = null)
    {
        $model = new PostModel();
        $data = [
            'title' => $this->request->getVar('title'),
            'content'  => $this->request->getVar('content'),
        ];
        $model->update($id, $data);
        return redirect()->to('/pengelola/posts');
    }
}