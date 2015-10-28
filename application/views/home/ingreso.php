<?= form_open('home/ingresar', array('class'=>'form-horizontal')); ?>
<fieldset>
	<legend> Ingreso al Sistema </legend>
	<?= my_validation_errors(validation_errors()); ?>
	<div class="form-group">
            <?= form_label('Usuario', 'login', array('class'=>'col-lg-2 control-label')); ?>
            <div class="col-lg-3">
            <?= form_input(array('class'=>'form-control', 'type'=>'text', 'name'=>'login', 'id'=>'login', 'placeholder'=>'Usuario...', 'value'=>set_value('login'))); ?>
            </div>
        </div>

	<div class="form-group">
		<?= form_label('Password', 'password', array('class'=>'col-lg-2 control-label')); ?>
            <div class="col-lg-3">
		<?= form_input(array('class'=>'form-control', 'type'=>'password', 'name'=>'password', 'id'=>'password', 'value'=>set_value('password'))); ?>
            </div>
	</div>

	<div class="form-group">
		<?= form_button(array('type'=>'submit', 'content'=>'Ingresar', 'class'=>'btn btn-primary')); ?>
		<?= anchor('home/index', 'Cancelar', array('class'=>'btn btn-danger')); ?>
	</div>
</fieldset>
<?= form_close(); ?>
