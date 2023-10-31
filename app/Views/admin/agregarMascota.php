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
    <div class="row justify-content-center">
        <div class="col-8">
            <?php if (isset($validation)): ?>
                <div class="alert alert-danger">
                    <?= $validation->listErrors() ?>
                </div>
            <?php endif; ?>
            <form action="<?= base_url('index.php/admin/agregarMascota'); ?>" method="POST">
                <?= csrf_field() ?>
                <h2 class="text-center">Agregar Mascota</h2>


                <div class="mb-3">
                <label for="edad" class="form-label">Raza</label>
    <select name="idRaza" class="form-control">
<?php foreach($razas as $raza):?>
    <option value="<?=$raza->idRaza?>"><?=$raza->raza?></option>
    <?php endforeach?>
    </select>
    </div>
    <div class="mb-3">
    <label for="edad" class="form-label">Color</label>
    <select name="idColor" class="form-control">
<?php foreach($colores as $color):?>
    <option value="<?=$color->idColor?>"><?=$color->color?></option>
    <?php endforeach?>
    </select>
    </div>


                <div class="mb-3">
                    <label for="edad" class="form-label">Edad</label>
                    <input type="number" class="form-control" name="edad" id="edad">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion">
                </div>
                <div class="mb-3">
                    <label for="sexo">Sexo</label>
                    <select name="sexo" id="sexo" class="form-control">
                        <option value="Macho">Macho</option>
                        <option value="Hembra">Hembra</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="esterilizado">Esterilizado</label>
                    <select name="esterilizado" id="esterilizado" class="form-control">
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="esterilizado">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1">Adoptado</option>
                        <option value="0">No Adoptado</option>
                    </select>
                </div>

                <div class="mb-3 text-center">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
