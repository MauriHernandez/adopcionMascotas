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
            <form action="<?= base_url('index.php/admin/agregarDieta'); ?>" method="POST">
                <?= csrf_field() ?>
                <h2 align="center">Agregar Dieta</h2>
                <div class="mb-3">
    <label for="tipo" class="form-label">Tipo</label>
    <input type="text" class="form-control" name="tipo" id="tipo">
</div>     
<div class="mb-3">
    <label for="ingredientes" class="form-label">Ingredientes</label>
    <input type="text" class="form-control" name="ingredientes" id="ingredientes">
</div>       

<div class="mb-3">
    <label for="instrucciones" class="form-label">Instrucciones</label>
    <input type="text" class="form-control" name="instrucciones" id="instrucciones">
</div>  
<div class="mb-3">
    <label for="porcion" class="form-label">Porción</label>
    <input type="number" class="form-control" name="porcion" id="porcion">
</div>


                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>
