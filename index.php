<?php

	get_header();

 ?>

	<!-- Contenido -->
	<div class="container my-5">
		<div class="row">
			<!-- Articulos -->
			<?php if ( have_posts()):while ( have_posts()) :  the_post(); ?>
			<div class="col-12 col-sm-6 col-md-4">
				<div class="card mb-3">
					<!--  -->
					<?php if ( has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
						<?php the_post_thumbnail( 'post-thumbnails', array( 'class' => 'card-img-top img-fluid' ) ); ?>
						</a>
					<?php endif; ?>
					
					<div class="card-block">
						<a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_title(); ?></h4></a>
						<p class="card-text"><?php the_excerpt(); ?></p>
					</div>
					<div class="card-footer">
						<small class="text-muted"><?php echo get_the_date(); ?> / <?php the_category(','); ?> / <?php the_author(); ?></small>
					</div>
				</div>
			</div>
			<?php endwhile; endif; ?>
			<!-- Articulos Fin -->
		</div>
	</div>
	<!-- Contenido Fin -->
<?php 

	get_footer();

 ?>