<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class ProductsController extends Controller
{
    public function index()
    {
        $model = new UserModel();
        $data['products'] = $model->findAll();
        return view('products/index', $data);
    }

    public function create()
    {
        return view('products/create');
    }

    public function store()
    {
        $model = new UserModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'description' => $this->request->getPost('description'),
            'images' => $this->request->getPost('images'),
        ];
        $model->insert($data);
        return redirect()->to('/products');
    }

    public function edit($id = null)
    {
        $model = new UserModel();
        $data['product'] = $model->find($id);
        return view('products/edit', $data);
    }

    public function update()
    {
        $model = new UserModel();
        $id = $this->request->getPost('id');
        $data = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'description' => $this->request->getPost('description'),
            'images' => $this->request->getPost('images'),
        ];
        $model->update($id, $data);
        return redirect()->to('/products');
    }

    public function delete($id = null)
    {
        $model = new UserModel();
        $model->delete($id);
        return redirect()->to('/products');
    }

    
}
