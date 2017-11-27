<?php

	get_header();

 ?>

	<!-- Contenido Single -->
	<div class="container">
		<div class="row">

			<!-- Articulo -->
			<div class="col-12 col-md-9 my-5">
				<?php if ( have_posts()):while ( have_posts()) :  the_post();
				if ( has_post_thumbnail()) :
					the_post_thumbnail( 'post-thumbnails', array( 'class' => 'img-fluid' ) );
				endif; ?>

				<h2 class="my-3"><?php 	the_title(); ?></h2>
				<p class="lead"><?php echo get_the_date(); ?></p>
				<blockquote class="blockquote">
					<?php 	the_excerpt(); ?>
				</blockquote>
				<div class="text-justify">
					<?php 	the_content(); ?>
				</div>
				<?php endwhile; endif; ?>
			</div>
			<!-- Articulo Fin -->

			<!-- Sidebar -->
				<div class="col-12 col-md-3 my-5">
					<?php 	get_sidebar(); ?>
				</div>
			<!-- Sidebar Fin -->
			
		</div>



	</div>
		
	<!-- Fin Contenido Single -->

<?php 

	get_footer();

 ?>