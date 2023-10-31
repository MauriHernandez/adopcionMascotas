<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        //
    }
//arreglar la consulta para extraer datos
    public function mostrarM(){
        $db = db_connect();
        $sql="SELECT  m.edad, m.sexo, m.esterilizado,  m.status, m.descripcion,
        r.raza, c.color,
        a.nombreA AS nombre_adoptador, a.apellidoP AS apellido_paterno_adoptador, a.apellidoM AS apellido_materno_adoptador
 FROM mascota AS m
 LEFT JOIN raza AS r ON m.idRaza = r.idRaza
 LEFT JOIN color AS c ON m.idColor = c.idColor
 LEFT JOIN adoptador AS a ON m.idAdoptador = a.idAdoptador ";
        $query=$db->query($sql);
        $data['mascotas'] = $query->getResult();

        return 
        view('common/head') .
        view('usuario/menuu') .
        view('usuario/mostrarM', $data) .
        view('common/footer');
    }


public function mostrarD(){
    $dietaModel = model('DietaModel'); 

    $data['dietas'] = $dietaModel->findAll();
    
    return 
    view('common/head') .
    view('usuario/menuu') .
    view('usuario/mostrarD', $data) .
    view('common/footer');
}

    public function estadisticas() {

        $mascotaModel = model('MascotaModel'); 

        $data['mascotas'] = $mascotaModel->findAll();
        $mascotaModel = model('MascotaModel');
        $adoptadas = $mascotaModel->where('status', 1)->countAllResults();
        $noAdoptadas = $mascotaModel->where('status', 0)->countAllResults();
    
        // Contar el total de mascotas
        $totalMascotas = $mascotaModel->countAll();
    
        $data = [
            'adoptadas' => $adoptadas,
            'noAdoptadas' => $noAdoptadas,
            'totalMascotas' => $totalMascotas,
        ];
    
        return 
        view('common/head') .
        view('usuario/menuu') .
        view('usuario/estadisticas', $data) .
        view('common/footer');
    }
    
}

