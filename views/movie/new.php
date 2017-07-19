 <div class="container">
 	<h3 class="text-center">Crear pelicula</h3>
 	<form action="/?controller=movie&action=create" method="POST" class="form col-md-8"> 
 		<div class="form-group">
 			<label for="name">Nombre</label>
 			<input type="text" class="form-control" name="name" placeholder="Nombre de la pelicula"> 
 		</div>
 		<div class="form-group">
 			<label for="name">Descripción</label>
 			<textarea class="form-control" name="description" cols="20" rows="3"  placeholder="Descripción de la pelicula"></textarea>
 		</div>
 		<div class="form-group">
 			<label for="name">Año</label>
 			<input type="text" class="form-control" name="year" placeholder="Año de la pelicula"> 
 		</div>
 		<div class="form-group">
 			<label for="name">Image</label>
 			<input type="text" class="form-control" name="image" placeholder="Imagen de la pelicula"> 
 		</div>
 		<div class="form-group">
 			<label for="name">Categoría</label>
 			<select class="form-control" name="category_id" placeholder="Categoría de la pelicula">
 				<option value="">Escoge un valor</option> 
 				<?php foreach ($categories as $category): ?> 
					<option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
 				<?php endforeach ?> 
 			</select> 
 		</div>
 		<div class="form-group">
 			<button class="btn btn-primary">Guardar</button>
 		</div>
 	</form>
 </div> 