<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Users extends ResourceController
{

    protected $modelName    = 'App\Models\UsersModel';
    protected $format       = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null)
    {
        return $this->respond($this->model->find($id));
    }

    public function create()
    {
        return $this->respond($this->model->insert($this->request->getPost()));
    }

    public function update($id = null)
    {
    }

    public function delete($id = null)
    {
        return $this->respond($this->model->delete($id));
    }
}
