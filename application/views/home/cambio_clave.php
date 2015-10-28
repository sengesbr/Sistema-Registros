<?= form_open('home/cambiar_clave', array('class'=>'form-horizontal')); ?>
	<legend> Cambiar la Clave de Usuario </legend>

	<?= my_validation_errors(validation_errors()); ?>

	<div class="form-group">
		<?= form_label('Clave Actual', 'clave_act', array('class'=>'col-lg-2 control-labe')); ?>
        <div class="col-lg-3">
		<?= form_input(array('class'=>'form-control', 'type'=>'password', 'name'=>'clave_act', 'id'=>'clave_act', 'value'=>set_value('clave_act'))); ?>
        </div>
	</div>

	<div class="form-group">
		<?= form_label('Clave Nueva', 'clave_new', array('class'=>'col-lg-2 control-labe')); ?>
        <div class="col-lg-3">
		<?= form_input(array('class'=>'form-control','type'=>'password', 'name'=>'clave_new', 'id'=>'clave_new', 'value'=>set_value('clave_new'))); ?>
        </div>
	</div>

	<div class="form-group">
		<?= form_label('Repita Nueva', 'clave_rep', array('class'=>'col-lg-2 control-labe')); ?>
         <div class="col-lg-3">
		<?= form_input(array('class'=>'form-control','type'=>'password', 'name'=>'clave_rep', 'id'=>'clave_rep', 'value'=>set_value('clave_rep'))); ?>
        </div>
	</div>

	<div class="form-actions">
		<?= form_button(array('type'=>'submit', 'content'=>'Confirmar', 'class'=>'btn btn-primary')); ?>
		<?= anchor('home/index', 'Cancelar', array('class'=>'btn btn-danger')); ?>
	</div>
<?= form_close(); ?>