<h2 class="mt-5" align="center">Mascotas Adoptadas</h2>
<div class="row">
    <?php
    $adoptedCounter = 0; 
    foreach ($mascotas as $mascota):
        if ($mascota->status == 1):
            if ($adoptedCounter % 4 == 0): 
                echo '</div><div class="row">'; 
            endif;
    ?>
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="card-title">Raza: <?= $mascota->raza ?></p>
                        <p class="card-text">Color: <?= $mascota->color ?></p>
                        <p class="card-text">Edad: <?= $mascota->edad ?> años</p>
                        <p class="card-text">Status: Adoptado</p>
                        <p class="card-text">Sexo: <?= $mascota->sexo ?></p>
                        <p class="card-text">Esterilizado: <?= $mascota->esterilizado == 1 ? 'Si' : 'No'; ?></p>
                    </div>
                </div>
            </div>
    <?php
            $adoptedCounter++;
        endif;
    endforeach;
    ?>
</div>

<hr>

<h2 class="mt-5" align="center">Mascotas No Adoptadas</h2>
<div class="row">
    <?php
    $notAdoptedCounter = 0; 
    foreach ($mascotas as $mascota):
        if ($mascota->status == 0):
            if ($notAdoptedCounter % 4 == 0): 
                echo '</div><div class="row">'; 
            endif;
    ?>
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="card-title">Raza: <?= $mascota->raza ?></p>
                        <p class="card-text">Color: <?= $mascota->color ?></p>
                        <p class="card-text">Edad: <?= $mascota->edad ?> años</p>
                        <p class="card-text">Status: No adoptado</p>
                        <p class="card-text">Sexo: <?= $mascota->sexo ?></p>
                        <p class="card-text">Esterilizado: <?= $mascota->esterilizado == 1 ? 'Si' : 'No'; ?></p>
                    </div>
                </div>
            </div>
    <?php
            $notAdoptedCounter++;
        endif;
    endforeach;
    ?>
</div>
