<?php if (isset($validation)): ?>
    <div class="alert alert-danger">
        <?= $validation->listErrors() ?>
    </div>
<?php endif; ?>

<div class="col-2"></div>
<DIV class="COL-8">
<div class="container">
    
    <div class="row">
        <h2 align="center">Editar Mascota</h2>
        <form action="<?= base_url('index.php/admin/updateMascota'); ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name="idMascota" value="<?= $mascota->idMascota ?>">
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


    <label for="edad" class="form-label">Edad</label>
    <input type="number" class= "form-control" name="edad" id="edad">

    <label for="descripcion" class="form-label">Descripción</label>
    <input type="text" class="form-control" name="descripcion" id="descripcion">

<div class="mb-3">
    <label for="sexo">Sexo</label>
    <select name="sexo" id="sexo" class="form-control">
    <option value="Macho" class="value">Macho</option>
     <option value="Hembra" class="value">Hembra</option>
    </select>
</div>
<div class="mb-3">
    <label for="esterilizado">Esterilizado</label>
    <select name="esterilizado" id="esterilizado" class="form-control">
    <option value="1" class="value">Si</option>
        <option value="0" class="value">No</option>
    </select>
</div>

 <div class="mb-3">
                    <label for="esterilizado">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1">Adoptado</option>
                        <option value="0">No Adoptado</option>
                    </select>
                </div>
 <div class="mb-3">
      <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>
</DIV>