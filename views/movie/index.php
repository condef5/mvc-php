<div class="container">
	<h2 class="page-header">Lista de peliculas</h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>Id</td>
				<td>Nombre</td>
				<td width="500">Descripción</td>
				<td>Año</td>
				<td>Genero</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($movies as $movie): ?>
				<tr>
					<td><?= $movie['id'] ?></td>
					<td><?= $movie['name'] ?></td>
					<td><?= $movie['description']?></td>
					<td><?= $movie['year']?></td>
					<td><?= Category::find($movie['category_id'])->name() ?></td>
					<td>
						<a href="?controller=movie&action=edit&id=<?= $movie['id'] ?>" class="btn btn-success">Editar</a> 
						<a href="?controller=movie&action=delete&id=<?= $movie['id'] ?>" class="btn btn-danger">Eliminar</a>  
					</td>
				</tr>	
			<?php endforeach ?>
		</tbody>
	</table>
</div>
