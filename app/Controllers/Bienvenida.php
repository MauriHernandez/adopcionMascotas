<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Bienvenida extends BaseController
{
    public function index()
    {
        //
    }


    public function bienvenida()
    {
       
            $mascotaModel = model('MascotaModel'); //cargar el modelo
            $data['mascotas'] = $mascotaModel->findAll();
        
            return 
            view('common/head') .
            view('Bienvenida/menuB') .
            view('bienvenida', $data) .
            view('common/footer');
        
    }
}

