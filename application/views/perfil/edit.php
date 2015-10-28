<?= form_open('perfil/update', array('class'=>'form-horizontal')); ?>
	<legend> Actualizar Registro </legend>

	<?= my_validation_errors(validation_errors()); ?>

	<div class="form-group">
		<?= form_label('ID', 'id', array('class'=>'col-sm-2 control-label')); ?>
                <fieldset disabled>
                    <div class="col-sm-2">
                        <?= form_input(array('class'=>'form-control', 'type'=>'text', 'id'=>'disabledTextInput', 'placeholder'=>$registro->id));?>
                    </div>
                    </fieldset>
		<?= form_hidden('id', $registro->id); ?>
	</div>

	<div class="form-group">
		<?= form_label('Nombre', 'name', array('class'=>'col-sm-2 control-label')); ?>
            <div class="col-sm-5">
		<?= form_input(array('class'=>'form-control', 'type'=>'text', 'name'=>'name', 'id'=>'name', 'value'=>$registro->name)); ?>
            </div>
	</div>

	<div class="form-group">
		<?= form_label('Creado', 'created', array('class'=>'col-sm-2 control-label')); ?>
            <fieldset disabled>
            <div class="col-sm-4">
                <?= form_input(array('class'=>'form-control', 'type'=>'text', 'id'=>'disabledTextInput', 'placeholder'=>$registro->created));?>
            </div>
            </fieldset>
		<?= form_hidden('created', $registro->created); ?>
	</div>

	<div class="form-group">
		<?= form_label('Modificado', 'updated', array('class'=>'col-sm-2 control-label')); ?>
		<fieldset disabled>
            <div class="col-sm-4">
                <?= form_input(array('class'=>'form-control', 'type'=>'text', 'id'=>'disabledTextInput', 'placeholder'=>$registro->updated));?>
            </div>
            </fieldset>
		<?= form_hidden('updated', $registro->updated); ?>
	</div>

	<div class="form-group">
		<?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
		<?= anchor('perfil/index', 'Cancelar', array('class'=>'btn btn-default')); ?>
		<?= anchor('perfil/delete/'.$registro->id, 'Eliminar', array('class'=>'btn btn-danger', 'onClick'=>"return confirm('¿Está Seguro?')")); ?>
	</div>
<?= form_close(); ?>
