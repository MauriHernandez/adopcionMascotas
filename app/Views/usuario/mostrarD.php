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
            <h2 align="center">Dietas</h2>
            <?php $d = 0;  foreach ($dietas as $dieta):
            if ($d % 4 == 0): 
                echo '</div><div class="row">'; 
            endif;
    ?>
            <div class="col-md-3">
                <div class="card mb-3" style="width: 18rem;">
                    <div class="card-body" >
                    <p class="card-title">Tipo:<?=$dieta->tipo?></p> 
                        <p class="card-title">Porción:<?=$dieta->porcion?></p>
                        <p class="card-text">Instrucciones: <?=$dieta->instrucciones?></p>
                        <p class="card-text">Ingredientes:<?=$dieta->ingredientes?></p>
                     
                    </div>
                </div>
            </div>
    <?php $d++;   endforeach; ?>
          
</div>
</body>
</html>
