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
            <h2 align="center">Mascotas</h2>
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Tipo</th>
                        <th>Porción</th>
                        <th>Instrucciones</th>
                        <th>Ingredientes</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($dietas as $dieta): ?>  
                        <tr>
                            <td><?=$dieta->tipo?></td>
                            <td><?=$dieta->porcion?></td>
                            <td><?=$dieta->instrucciones?></td>
                            <td><?=$dieta->ingredientes?></td>

                            <td>
                                <a href="<?=base_url('index.php/admin/deleteDieta/'.$dieta->idDieta);?>" class="btn btn-danger btn-sm">Eliminar</a>
                                <a href="<?=base_url('index.php/admin/editarDieta/'.$dieta->idDieta);?>" class="btn btn-primary btn-sm">Editar</a>
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
