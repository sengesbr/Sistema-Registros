<?= form_open('usuario/insert', array('class'=>'form-horizontal')); ?>
    <legend> Crear Usuarios </legend>

    <?= my_validation_errors(validation_errors()); ?>

    <div class="form-group">
        <?= form_label('Nombre', 'name', array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-5">
        <?= form_input(array('class'=>'form-control','type'=>'text', 'name'=>'name', 'id'=>'name', 'value'=>set_value('name'))); ?>
        </div>
    </div>

    <div class="form-group">
        <?= form_label('Login', 'login', array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-5">
        <?= form_input(array('class'=>'form-control','type'=>'text', 'name'=>'login', 'id'=>'login', 'value'=>set_value('login'))); ?>
        </div>
    </div>

    <div class="form-group">
        <?= form_label('eMail', 'email', array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-5">
        <?= form_input(array('class'=>'form-control','type'=>'email', 'name'=>'email', 'id'=>'email', 'value'=>set_value('email'))); ?>
        </div>
    </div>

    <div class="form-group">
        <?= form_label('Perfil', 'perfil_id', array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-5">
        <?= form_dropdown('perfil_id', $perfiles, 0); ?>
        </div>
    </div>

    <div class="form-group">
        <?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
        <?= anchor('usuario/index', 'Cancelar', array('class'=>'btn btn-default')); ?>
    </div>
<?= form_close(); ?>
