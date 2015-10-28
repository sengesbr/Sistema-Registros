<div class="page-header">
	<h1> Perfiles <small> mantenimiento de registros </small> </h1>
</div>
<div class="form-group">
<?= form_open('perfil/search', array('class'=>'form-inline')); ?>
	<?= form_input(array('class'=>'form-control', 'type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por nombre...')); ?>
	<?= form_button(array('type'=>'submit', 'content'=>'<i class="glyphicon glyphicon-search"> </i>', 'class'=>'btn')); ?>
	<?= anchor('perfil/create', 'Agregar', array('class'=>'btn btn-primary')); ?>
<?= form_close(); ?>
</div>

<table class="table table-condensed table-bordered table-hover">
	<thead>
		<tr>
			<th> ID </th>
			<th> Nombre </th>
			<th> Creado </th>
			<th> Modificado </th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($query as $registro): ?>
		<tr>
			<td> <?= anchor('perfil/edit/'.$registro->id, $registro->id); ?> </td>
			<td> <?= $registro->name ?> </td>
			<td> <?= date("d/m/Y - H:i", strtotime($registro->created)); ?> </td>
			<td> <?= date("d/m/Y - H:i", strtotime($registro->updated)); ?> </td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
