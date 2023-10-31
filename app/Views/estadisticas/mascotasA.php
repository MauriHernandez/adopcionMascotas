<?php
// Contar todas las mascotas
$totalMascotas = count($mascotas);

// Contar las mascotas adoptadas
$totalAdoptadas = 0;

// Contar las mascotas no adoptadas
$totalNoAdoptadas = 0;

foreach ($mascotas as $mascota) {
    if ($mascota->status == "adoptado") {
        $totalAdoptadas++;
    } elseif ($mascota->status == "no adoptado") {
        $totalNoAdoptadas++;
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 align="center">Mascotas</h2>
            <p>Total de Mascotas: <?= $totalMascotas ?></p>
            <p>Total de Mascotas Adoptadas: <?= $totalAdoptadas ?></p>
            <p>Total de Mascotas No Adoptadas: <?= $totalNoAdoptadas ?></p>

            <?php foreach($mascotas as $mascota): ?>
                <!-- Aquí va el código para mostrar cada mascota -->
                <div class="card" style="width: 18rem;">
                    <!-- Tu código para mostrar los detalles de la mascota -->
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
