<div class="page-header">
	<h1> Usuarios <small> mantenimiento de registros </small> </h1>
</div>
<div class="form-group">
<?= form_open('usuario/search', array('class'=>'form-inline')); ?>
	<?= form_input(array('class'=>'form-control', 'type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por nombre...')); ?>
	<?= form_button(array('type'=>'submit', 'content'=>'<i class="glyphicon glyphicon-search"> </i>', 'class'=>'btn')); ?>
	<?= anchor('usuario/create', 'Agregar', array('class'=>'btn btn-primary')); ?>
<?= form_close(); ?>
</div>

<table class="table table-condensed table-bordered table-hover">
	<thead>
		<tr>
			<th> ID </th>
			<th> Nombre </th>
			<th> Login </th>
			<th> eMail </th>
			<th> Perfil </th>
			<th> Creado </th>
			<th> Modificado </th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($query as $registro): ?>
		<tr>
			<td> <?= anchor('usuario/edit/'.$registro->id, $registro->id); ?> </td>
			<td> <?= $registro->name ?> </td>
			<td> <?= $registro->login ?> </td>
			<td> <?= $registro->email ?> </td>
			<td> <?= $registro->perfil_name ?> </td>
			<td> <?= date("d/m/Y - H:i", strtotime($registro->created)); ?> </td>
			<td> <?= date("d/m/Y - H:i", strtotime($registro->updated)); ?> </td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>