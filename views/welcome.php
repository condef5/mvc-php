<div class="container">
	<div>		
		<h2 class="page-header">Peliculas</h2>
		<div class="row flex-row">
			<?php foreach ($movies as $movie): ?>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="thumbnail">
						<img class="img-responsive" src="<?=$movie['image']?>" alt="<?=$movie['image']?>">
						<div class="caption">
							<h3><?= $movie['name'] ?> <span class="badge"><?= Category::find($movie['category_id'])->name() ?></span> </h3>  
							<p><?= $movie['description'] ?></p>
						</div>
					</div>
				</div> 
			<?php endforeach ?> 
		</div> 
	</div>
	<div>
		<h2 class="page-header">Lista de categorías</h2>
		<!-- Aquí necesitas completar las categorías -->
	</div>
</div>
