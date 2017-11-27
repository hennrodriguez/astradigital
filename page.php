<?php

	get_header();

 ?>

	<!-- Contenido Page -->
	<div class="container my-5">
		
		<?php if ( have_posts()):while ( have_posts()) :  the_post(); ?>
			<h2><?php 	the_title(); ?></h2>
			<?php 	the_content(); ?>
		<?php endwhile; endif; ?>

	</div>
		
	<!-- Contenido Page Fin -->

<?php 

	get_footer();

 ?>