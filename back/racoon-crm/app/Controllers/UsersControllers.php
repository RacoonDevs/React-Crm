<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class UsersControllers extends BaseController
{
    protected $modelName = 'App\Models\Medicine';
    protected $format    = 'json';
    public $content = ['result' => false, 'message' => ['title' => 'Error!', 'content' => 'Internal Server Error.']];
    
    public function getUsers()
    {
        
        $this->content['data'] = "Respondiendo";
        return $this->response->setJSON($this->content);
    }
}