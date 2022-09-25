<?php include(TEMPLATEPATH . '/header.php'); ?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<article class="">
			
			<div class="container container--min">
				
				<header class="page-header">
					
					<h1 class=""><?php the_title(); ?></h1>
				    
				</header>
			
				<?php the_content(); ?>
			
			</div>
		
		</article>
								
	<?php endwhile; endif; ?>

<?php get_footer(); ?>