<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ruta/al/archivo/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tu Título</title>
</head>
<style>
    .body {
  background-color: #ffe4aa;
}

</style>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Mascotas</h2>
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Raza</th>
                        <th>Color</th>
                        <th>Edad (años)</th>
                        <th>Sexo</th>
                        <th>Esterilizado</th>
                        <th>Descripción</th>
                        <th>Status</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($mascotas as $mascota): ?>  
                        <tr>             
                            <td><?=$mascota->raza?></td>
                            <td><?=$mascota->color?></td>
                            <td><?=$mascota->edad?></td>
                            <td><?=$mascota->sexo?></td>
                            <td><?php echo $mascota->esterilizado == 1 ? 'Si' : 'No'; ?></td>
                            <td><?php echo $mascota->descripcion?></td>
                            <td><?php echo $mascota->status == 1 ? 'Adoptado' : 'No adoptado'; ?></td>
                            <td>
                                <a href="<?=base_url('index.php/admin/deleteMascota/'.$mascota->idMascota);?>" class="btn btn-danger btn-sm">Eliminar</a>
                                <a href="<?=base_url('index.php/admin/editarMascota/'.$mascota->idMascota);?>" class="btn btn-primary btn-sm">Editar</a>
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
