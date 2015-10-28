<div class="page-header">
	<h1> Registros <small> Persnas ya Registradas </small> </h1>
</div>
<div class="form-group">
<?= form_open('usuario/search', array('class'=>'form-inline')); ?>
	<?= form_input(array('class'=>'form-control', 'type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por nombre...')); ?>
	<?= form_button(array('type'=>'submit', 'content'=>'<i class="glyphicon glyphicon-search"> </i>', 'class'=>'btn')); ?>
	<?= anchor('personas/create', 'Agregar', array('class'=>'btn btn-primary')); ?>
<?= form_close(); ?>
</div>

<table class="table table-condensed table-bordered table-hover">
	<thead>
		<tr>
			
			<th> Nombre y Apellido </th>
			<th> Institucion </th>
            <th> Dia de Registro</th>
            <th> Asistio</th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($query as $registro): ?>
		<tr>
			
			<td> <?= $registro->nombre_apellido ?> </td>
			<td> <?= $registro->institucion ?> </td>
			<td> <?= date("d/m/Y - H:i", strtotime($registro->creado)); ?> </td>
            <td> <?= $registro->asistencia_valor ?> </td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>