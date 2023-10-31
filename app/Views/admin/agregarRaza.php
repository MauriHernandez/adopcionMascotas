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
            <form action="<?= base_url('index.php/admin/agregarRaza'); ?>" method="POST">
                <?= csrf_field() ?>
                <h2 align="center">Agregar Raza</h2>

                <div class="mb-3">
    <label for="raza" class="form-label">Raza</label>
    <input type="text" class="form-control" name="raza" id="raza">
</div>  
<div class="mb-3">
    <label for="origen" class="form-label">Origen</label>
    <input type="text" class="form-control" name="origen" id="origen">
</div>          
    <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>
