<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\usuario_Model;

class usuario_controller extends BaseController
{
    public function create()
    {
        helper(['form', 'url']);
        $data['titulo']='registro';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('Back/usuario/registro');
        echo view('front/footer_view');
    }

    public function formValidation()
    {
        helper(['form', 'url']);
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'pass' => 'required|min_length[6]'
        ]);

        if (!$input) {
            $data['titulo']='registro';
            echo view('front/head_view',$data);
            echo view('front/navbar_view');
            echo view('Back/usuario/registro', [
                'validation' => $this->validator
            ]);
            echo view('front/footer_view');
        } else {
            $model = new usuario_Model();
            $data = [
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            session()->setFlashdata('msg', 'Te has Mapachegistrado con exito YEAH!');
            return redirect()->to('/login');
        }
    }
}
