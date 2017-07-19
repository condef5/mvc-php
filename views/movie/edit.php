 <div class="container">
 	<h3 class="text-center">Editar pelicula</h3> 
 	<form action="/?controller=movie&action=update" method="POST" class="form col-md-8"> 
 		<input type="text" hidden name="id" value="<?= $movie->id() ?>">
 		<div class="form-group">
 			<label for="name">Nombre</label>
 			<input type="text" class="form-control" value="<?= $movie->name() ?>" name="name" placeholder="Nombre de la pelicula"> 
 		</div>
 		<div class="form-group">
 			<label for="name">Descripción</label>
 			<textarea name="description" id="" cols="20" rows="3" class="form-control" placeholder="Descripción de la pelicula"><?= $movie->description() ?></textarea>
 		</div>
 		<div class="form-group">
 			<label for="name">Año</label>
 			<input type="text" class="form-control" value="<?= $movie->year()?>" name="year" placeholder="Año de la pelicula"> 
 		</div>
 		<div class="form-group">
 			<label for="name">Image</label>
 			<input type="text" class="form-control" value="<?= $movie->image()?>" name="image" placeholder="Imagen de la pelicula"> 
 		</div>
 		<div class="form-group">
 			<label for="name">Categoría</label>
 			<select class="form-control" value="<?= $movie->category_id()?>" name="category_id" placeholder="Categoría de la pelicula">
 				<option value="">Escoge un valor</option> 
 				<?php foreach ($categories as $category): ?> 
					<option <?= $category['id']==$movie->category_id() ? 'selected':'' ?> 
					value="<?= $category['id'] ?>" > <?= $category['name'] ?></option>
 				<?php endforeach ?> 
 			</select> 
 		</div>
 		<div class="form-group">
 			<button class="btn btn-success">Guardar</button>
 		</div>
 	</form>
 </div>