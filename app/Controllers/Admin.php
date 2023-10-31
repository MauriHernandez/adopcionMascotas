<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
// función para mostrar mascotas
    public function mostrarMascota(){
        $db = db_connect();
        $sql="SELECT  m.idMascota, m.edad, m.sexo, m.esterilizado,  m.status, m.descripcion,
        r.raza, c.color,
        a.nombreA AS nombre_adoptador, a.apellidoP AS apellido_paterno_adoptador, a.apellidoM AS apellido_materno_adoptador
 FROM mascota AS m
 LEFT JOIN raza AS r ON m.idRaza = r.idRaza
 LEFT JOIN color AS c ON m.idColor = c.idColor 
 LEFT JOIN adoptador AS a ON m.idAdoptador = a.idAdoptador";
        $query=$db->query($sql);
        $data['mascotas'] = $query->getResult();

// regresar vistas
        return 
        view('common/head') .
        view('admin/menu') .
        view('admin/mostrarMascota', $data) .
        view('common/footer');
    }


//funcion para agregar mascota
public function agregarMascota() {
    helper(['form', 'url']);
    $razaModel = model('RazaModel');
    $colorModel = model('ColorModel');
    $dietaModel = model('DietaModel');
    $data['razas'] = $razaModel->findAll();
    $data['colores'] = $colorModel->findAll();
    $data['dietas'] = $dietaModel->findAll();
    $data['title'] = "Agregar Mascota";
    $validation = \Config\Services::validation();

    if (strtolower($this->request->getMethod()) === 'get') {
        return view('common/head') .
            view('admin/menu') .
            view('admin/agregarMascota', $data) .
            view('common/footer');
    }

    $rules = [
        
        "idRaza"=>'required',
        "idColor"=>'required',
        "edad" => 'required',
        "descripcion" => 'required',
        "sexo" => 'required',
        "esterilizado" => 'required',
        "status"=>'required' 
    ];

    if (!$this->validate($rules)) {
        return view('common/head') .
            view('admin/menu') .
            view('admin/agregarMascota', $data, ['validation' => $validation]) .
            view('common/footer');
    } else {
        if ($this->insertM()) {
            return redirect()->to('admin/mostrarMascota'); 
        }
    }
}

// Función para insertar datos
public function insertM() {
    $mascotaModel = new \App\Models\MascotaModel(); 

    $data = [
        "edad" => $this->request->getPost('edad'), 
        "descripcion" => $this->request->getPost('descripcion'),
        "sexo" => $this->request->getPost('sexo'),
        "status" => $this->request->getPost('status'), 
        "esterilizado" => $this->request->getPost('esterilizado'),
        "idRaza"=>$this->request->getPost('idRaza'),
        "idColor"=>$this->request->getPost('idColor'),
        "status"=>$this->request->getPost('status')
    ];

    return $mascotaModel->insert($data); 
}



//funcion para eliminar mascota
            public function deleteMascota($id){
                $mascotaModel = model('MascotaModel');
                $mascotaModel->delete($id);
                return redirect('admin/mostrarMascota','refresh');
            }

     public function editarMascota($id){
        $mascotaModel = model('MascotaModel');
        $colorModel = model('ColorModel'); 
        $razaModel = model('RazaModel'); 
       
        $data['mascota'] = $mascotaModel->find($id);
$data['colores'] = $colorModel->findAll();
$data['razas'] = $razaModel->findAll();
          

        return 
        view('common/head') .
        view('admin/menu') .
        view('admin/editarMascota',$data) .
        view('common/footer');
    }
            public function updateM(){
                $mascotaModel = model('MascotaModel');
                $data = [
                    "idRaza"=>$_POST['idRaza'],
                    "idColor"=>$_POST['idColor'],
                    "edad" => $_POST['edad'],
                    "descripcion"=>$_POST['descripcion'],
                    "sexo"=>$_POST['sexo'],
                    "esterilizado"=>$_POST['esterilizado'],
                    "status"=>$_POST['status']
                ];
               
                $mascotaModel ->update( $_POST['idMascota'],$data);
                return redirect('admin/mostrarMascota','refresh');
           } 
            

// adoptador
public function mostrarAdoptador(){
    $db = db_connect();
    $sql="SELECT a.idAdoptador,a.nombreA, a.apellidoP, a.apellidoM, a.fechaNacimiento, a.calle, a.numeroCasa, a.idCiudad, a.celular, 
    c.idCiudad AS ciudad_id, c.nombre,
    c.estado
FROM adoptador a 
LEFT JOIN ciudad c ON a.idCiudad = c.idCiudad; ";
    $query=$db->query($sql);
    $data['adoptadores'] = $query->getResult();
    return 
    view('common/head') .
    view('admin/menu') .
    view('admin/mostrarAdoptador', $data) .
    view('common/footer');
}
public function agregarAdoptador() {
    helper(['form', 'url']);
    $ciudadModel=model ('CiudadModel');
    $data['ciudades']=$ciudadModel->findAll();
    $data['title'] = "Agregar Adoptador";
    $validation = \Config\Services::validation();

    if (strtolower($this->request->getMethod()) === 'get') {
        return view('common/head') .
            view('admin/menu') .
            view('admin/agregarAdoptador', $data) .
            view('common/footer');
    }

    $rules = [
        "nombreA" => 'required',
        "apellidoP" => 'required',
        "apellidoM" => 'required',
        "fechaNacimiento" => 'required',
        "calle" => 'required',
        "numeroCasa" => 'required',
        "celular" => 'required',
        "idCiudad"=>'required'
    ];

    if (!$this->validate($rules)) {
        return view('common/head') .
            view('admin/menu') .
            view('admin/agregarAdoptador', $data, ['validation' => $validation]) .
            view('common/footer');
    } else {
        if ($this->insertA()) {
            return redirect()->to('admin/mostrarAdoptador');
        }
    }
}

public function insertA() {
    $adoptadorModel = new \App\Models\AdoptadorModel();
    $data = [
        "nombreA" => $this->request->getPost('nombreA'),
        "apellidoP" => $this->request->getPost('apellidoP'),
        "apellidoM" => $this->request->getPost('apellidoM'),
        "fechaNacimiento" => $this->request->getPost('fechaNacimiento'),
        "calle" => $this->request->getPost('calle'),
        "numeroCasa" => $this->request->getPost('numeroCasa'),
        "celular" => $this->request->getPost('celular'),
        "idCiudad"=>$this->request->getPost('idCiudad')
    ];

    $adoptadorModel->insert($data);

    return true;
}


        public function editarAdoptador($id){
            $adoptadorModel = model('AdoptadorModel');
            $data['adoptador'] = $adoptadorModel->find($id);
    
                $ciudadModel = model('CiudadModel'); 
        $data['ciudades'] = $ciudadModel->findAll();
      
                  
        
                return 
                view('common/head') .
                view('admin/menu') .
                view('admin/editarAdoptador',$data) .
                view('common/footer');
            }
            
            public function deleteAdoptador($id){
            $adoptadorModel = model('AdoptadorModel');
                $adoptadorModel->delete($id);
                return redirect('admin/mostrarAdoptador','refresh');
            }
            public function updateA() {
                $adoptadorModel = model('AdoptadorModel');
                $data = [
                    "nombreA" => $_POST['nombreA'],
                    "apellidoP" => $_POST['apellidoP'], 
                    "apellidoM" => $_POST['apellidoM'],
                    "fechaNacimiento" => $_POST['fechaNacimiento'],
                    "calle" => $_POST['calle'],
                    "numeroCasa" => $_POST['numeroCasa'],
                    "idCiudad" => $_POST['idCiudad'],
                    "celular" => $_POST['celular']
                ];
            
                $adoptadorModel->update($_POST['idAdoptador'], $data); 
                return redirect('admin/mostrarAdoptador', 'refresh');
            }
            

//dieta
public function mostrarDieta(){
    $dietaModel = model('DietaModel'); //cargar el modelo
    $data['dietas'] = $dietaModel->findAll();

    return 
    view('common/head') .
    view('admin/menu') .
    view('admin/mostrarDieta', $data) .
    view('common/footer');
}
public function agregarDieta() {
    helper(['form', 'url']);
           
    $data['title'] = "Agregar Dieta";

    $validation = \Config\Services::validation();

    if (strtolower($this->request->getMethod()) === 'get') {
        return  
            view('common/head') .
            view('admin/menu') .
            view('admin/agregarDieta', $data) .
            view('common/footer');
    } 

    $rules = [
        "tipo" => 'required',
        "ingredientes" => 'required',
        "porcion" => 'required', 
        "instrucciones"=>'required'
    ];

    if (!$this->validate($rules)) {
        return view('common/head') .
            view('admin/menu') .
            view('admin/agregarDieta', $data, ['validation' => $validation]) .
            view('common/footer');
    } else {
        if ($this->insertD()) { 
            return redirect()->to('admin/mostrarDieta'); 
        }
    }
}

// Función para insertar datos de Dieta
public function insertD() {
    $dietaModel = new \App\Models\DietaModel();
 
    
    $data = [
        "tipo" => $_POST['tipo'],
        "ingredientes" => $_POST['ingredientes'],   
        "porcion" => $_POST['porcion'],
        "instrucciones"=>$_POST['instrucciones']
    ];
    
    $dietaModel->insert($data, false);
    
    return true;
}

        public function editarDieta($id){
            $dietaModel = model('DietaModel');
            $data['dieta'] = $dietaModel->find($id);
            
  
            
            return view('common/head') .
                   view('admin/menu') .
                   view('admin/editarDieta', $data) .  
                   view('common/footer');
        }
        public function deleteDieta($id){
            $dietaModel = model('DietaModel');
            $dietaModel->delete($id);
            return redirect('admin/mostrarDieta','refresh');
        }


        public function updateD(){
            $dietaModel = model('DietaModel');
            $data = [
                "tipo" => $_POST['tipo'],
                "porcion" => $_POST['porcion'],
                "instrucciones"=>$_POST['instrucciones'],
                "ingredientes"=>$_POST['ingredientes']
            ];
           
            $dietaModel ->update( $_POST['idDieta'],$data);
            return redirect('admin/mostrarDieta','refresh');
       } 
        

        //raza
public function mostrarRaza(){
    $razaModel = model('RazaModel'); //cargar el modelo
    $data['razas'] = $razaModel->findAll();

    return 
    view('common/head') .
    view('admin/menu') .
    view('admin/mostrarRaza', $data) .
    view('common/footer');
}

public function agregarRaza(){
    helper(['form','url']);
           
            $data['title']="Agregar Raza";
        
            $validation = \Config\Services::validation();
        
            if(strtolower($this->request->getMethod()) ==='get'){
                return  
                view('common/head') .
                view('admin/menu') .
                view('admin/agregarRaza', $data) .
                view('common/footer');
            } 
        
            $rules = [
                "raza" => 'required|max_length[40]',
                "origen" => 'required|max_length[30]'
            ];
            if(! $this->validate($rules)){
                return view('common/head').
                view('admin/menu') .
                view('admin/agregarRaza',$data, ['validation'=>$validation]).
                view('common/footer');
            }
            else{
                        if($this->insertR()){
                            return redirect('admin/mostrarRaza','refresh');
                        }
                    }
        }

       
        public function insertR(){
            $razaModel = model('RazaModel');
            $data = [
                "raza" => $_POST['raza'],
                "origen" => $_POST['origen']
            ];
            $razaModel->insert($data, false);
            return true;




        }

     
        public function editarRaza($id){
            $razaModel = model('RazaModel');
            $data['raza'] = $razaModel->find($id);
            
              
    
            return 
            view('common/head') .
            view('admin/menu') .
            view('admin/editarRaza',$data) .
            view('common/footer');
        }
        public function deleteRaza($id){
            $dietaModel = model('RazaModel');
            $dietaModel->delete($id);
            return redirect('admin/mostrarRaza','refresh');
        }



public function updateR(){
    $razaModel = model('RazaModel');
    $data = [
        "raza" => $_POST['raza'],
      
        "origen" => $_POST['origen']
    ];
   
    $razaModel ->update( $_POST['idRaza'],$data);
    return redirect('admin/mostrarRaza','refresh');
} 
}

