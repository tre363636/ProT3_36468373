<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario_Model;

class Usuario_Controller extends BaseController
{
    public function create()
    {
        helper(['form', 'url']);
        $data['titulo'] = 'registro';
        echo view('front/head_view', $data);
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
            $data['titulo'] = 'registro';
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('Back/usuario/registro', [
                'validation' => $this->validator
            ]);
            echo view('front/footer_view');
        } else {
            $model = new Usuario_Model();
            $data = [
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            session()->setFlashdata('msg', 'Te has registrado con éxito!');
            return redirect()->to('/login');
        }
    }

    public function index()
    {
        $model = new Usuario_Model();
        $data['usuarios'] = $model->findAll();
        return view('Back/usuario/usuario_logeado', $data);
    }

    public function edit($id)
    {
        $model = new Usuario_Model();
        $data['usuario'] = $model->find($id);
        $dato['titulo'] = 'Editar Usuario'; 
        $session = session();
        $nombre = $session->get('usuario'); 
        $perfil = $session->get('perfil_id');

        $data['perfil_id'] = $perfil;
        echo view('front/head_view_logueado', $dato);
        echo view('back/usuario/edit_view', $data);
        echo view('front/footer_view');
    }

    public function update($id)
    {
        $model = new Usuario_Model();

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'email' => $this->request->getPost('email'),
            'usuario' => $this->request->getPost('usuario'),
            'apellido' => $this->request->getPost('apellido'),
        ];

        $model->update($id, $data);

        return redirect()->to('/panel');
    }

    public function delete($id)
    {
        $model = new Usuario_Model();
        $data = ['baja' => "SI"];
        $model->update($id, $data);

        return redirect()->to('/panel');
    }

    public function newUser()
    {
        helper(['form', 'url']);
        $data['titulo'] = 'Agregar Nuevo Usuario';
        echo view('front/head_view_logueado', $data);
        echo view('Back/usuario/new_user');
        echo view('front/footer_view');
    }

    public function saveNewUser()
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
            $data['titulo'] = 'Agregar Nuevo Usuario';
            echo view('front/head_view_logueado', $data);
            echo view('front/navbar_view');
            echo view('Back/usuario/new_user', [
                'validation' => $this->validator
            ]);
            echo view('front/footer_view');
        } else {
            $model = new Usuario_Model();
            $data = [
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            session()->setFlashdata('msg', 'Nuevo usuario agregado con éxito!');
            return redirect()->to('/panel');
        }
    }
    public function terminos()
    {
        echo view('front/terminos');
    }
}
