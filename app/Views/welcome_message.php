<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #FFE4AA;
        }
        .card {
            background-color: #FCA699;
            border-radius: 10px;
            padding: 20px;
        }
        .btn-custom {
            background-color: #c9729f;
            border: none;
            color: #FFF;
        }

    </style>
    <title>Adoptadores S.A</title>
</head>
<body>

<div class="container text-center">
    <h2 class="mt-5">¡Bienvenido a Adoptadores S.A!</h2>
    <p class="lead">Tu plataforma de adopción de mascotas</p>

   

<div class="d-grid gap-2 col-md-4 mx-auto mt-4">
        <div class="card">
            <a href="<?=base_url('index.php/admin/mostrarMascota');?>" class="btn btn-custom ">Administrador</a> <br>
            <a href="<?=base_url('index.php/usuario/estadisticas');?>" class="btn btn-custom">Visitante</a>
        </div>
    </div>

</body>
</html>
