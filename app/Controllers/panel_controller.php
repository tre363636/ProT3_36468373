<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_Model;


class panel_controller extends Controller {
    public function index() {
        $model = new Usuario_Model();
        $data['usuarios'] = $model->where('baja', 'NO')->findAll();

        $session = session();
        $nombre = $session->get('usuario'); 
        $perfil = $session->get('perfil_id');

        $data['perfil_id'] = $perfil;
        $dato['titulo'] = 'Panel del Usuario'; 
        echo view('front/head_view_logueado',$dato);
        echo view('front/navbar_view');
        echo view('Back/usuario/usuario_logeado', $data);
        echo view('front/footer_view');
             
       
    }
   
} 
