<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ruta/al/archivo/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tu Título</title>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 align="center">Adoptadores</h2>
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Nombre completo</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Domicilio</th>
                        <th>Celular</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($adoptadores as $adoptador): ?>  
                        <tr>             
                            <td><?=$adoptador->nombreA?> <?=$adoptador->apellidoP?> <?=$adoptador->apellidoM?></td>
                            <td><?=$adoptador->fechaNacimiento?></td>
                            <td><?=$adoptador->calle?> <?=$adoptador->numeroCasa?>, <?=$adoptador->nombre?>, <?=$adoptador->estado?> </td>
                            <td><?=$adoptador->celular?></td>
                            <td>
                                <a href="<?=base_url('index.php/admin/deleteAdoptador/'.$adoptador->idAdoptador);?>" class="btn btn-danger btn-sm">Eliminar</a>
                                <a href="<?=base_url('index.php/admin/editarAdoptador/'.$adoptador->idAdoptador);?>" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
