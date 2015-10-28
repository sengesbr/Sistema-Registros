<?= form_open('perfil/insert', array('class'=>'form-horizontal')); ?>
	<legend> Crear Perfil </legend>

	<?= my_validation_errors(validation_errors()); ?>

	<div class="form-group">
		<?= form_label('Nombre', 'name', array('class'=>'col-sm-2 control-label')); ?>
            <div class="col-sm-4">
		<?= form_input(array('class'=>'form-control','type'=>'text', 'name'=>'name', 'id'=>'name', 'value'=>set_value('name'))); ?>
            </div>
	</div>

	<div class="form-group">
		<?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
		<?= anchor('perfil/index', 'Cancelar', array('class'=>'btn btn-default')); ?>
	</div>
<?= form_close(); ?>
