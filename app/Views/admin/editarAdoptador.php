<?php if (isset($validation)): ?>
    <div class="alert alert-danger">
        <?= $validation->listErrors() ?>
    </div>
<?php endif; ?>
<div class="container">
    <div class="row">
    <?php 
        if(isset($validation)){
                print $validation->listErrors();
        }
     ?>
     <div class="col-2"></div>
        <div class="col-8">
            <form action="<?= base_url('index.php/admin/updateA'); ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" name="idAdoptador" value="<?= $adoptador->idAdoptador ?>">
                <h2 align="center">Editar Adoptador</h2>


                <div class="mb-3">
                    <label for="nombreA" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombreA" id="nombreA">
                </div>

                <div class="mb-3">
                    <label for="apellidoP" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apellidoP" id="apellidoP">
                </div>

                <div class="mb-3">
                    <label for="apellidoM" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control" name="apellidoM" id="apellidoM">
                </div>

                <div class="mb-3">
                    <label for="calle" class="form-label">Calle</label>
                    <input type="text" class="form-control" name="calle" id="calle">
                </div>

                <div class="mb-3">
                    <label for="numeroCasa" class="form-label">Número de Casa</label>
                    <input type="number" class="form-control" name="numeroCasa" id="numeroCasa">
                </div>
                <div class="mb-3">
    <label for="idCiudad" class="form-label">Ciudad</label>
    <select name="idCiudad" class="form-control">
<?php foreach($ciudades as $ciudad):?>
    <option value="<?=$ciudad->idCiudad?>"><?=$ciudad->nombre?></option>
    <?php endforeach?>
    </select>
                <div class="mb-3">
                    <label for="celular" class="form-label">Celular</label>
                    <input type="text" class="form-control" name="celular" id="celular">
                </div>

          
                <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento">

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>
