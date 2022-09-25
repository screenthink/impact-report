<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<article class="push">
			
			<div class="container container--min">
				
				<header class="page__header page__header--short">
					
					<h1 class="page__headline"><?php the_title(); ?></h1>
				    
				</header>
							
				<?php the_content(); ?>
			
			</div>
		
		</article>
								
	<?php endwhile; endif; ?>

<?php get_footer(); ?>