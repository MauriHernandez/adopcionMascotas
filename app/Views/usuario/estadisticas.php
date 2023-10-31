<div class="container">
    <h1 class="mt-5" align="center">Estadísticas de Mascotas</h1>

    <div class="row mt-4">
        <!-- Sección de Mascotas Adoptadas -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mascotas Adoptadas</h5>
                    <p class="card-text">Cantidad: <?= $adoptadas ?></p>
                    <!-- Puedes agregar más información de las mascotas adoptadas aquí -->
                </div>
            </div>
        </div>

        <!-- Sección de Mascotas No Adoptadas -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mascotas No Adoptadas</h5>
                    <p class="card-text">Cantidad: <?= $noAdoptadas ?></p>
                    <!-- Puedes agregar más información de las mascotas no adoptadas aquí -->
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <!-- Otras estadísticas o información -->
        <!-- Por ejemplo, el total de mascotas -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total de Mascotas</h5>
                    <p class="card-text">Cantidad: <?= $totalMascotas ?></p>
                    <!-- Puedes agregar más información sobre el total de mascotas aquí -->
                </div>
            </div>
        </div>
    </div>

    
</div>
