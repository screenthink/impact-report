<?php get_header(); ?>

	<div class="row banner banner--small">
		
		<h1>Site Search Results</h1>
		
	</div>
	
	<div class="row breadcrumbs">
		
		<div class="container">
			
			<ul>
				<li><a href="/">Home</a></li>
				<li>Site Search Results</li>
			</ul>
			
		</div>
		
	</div>

	<article class="row page-content">
			
		<div class="container container--short">

			<?php if (have_posts()) : ?>
				
				<section class="search-results">
		
					<?php while (have_posts()) : the_post(); ?>
						
						<div class="search-results__item">
							
							<span class="search-results__title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></span>
						
						</div>
			
					<?php endwhile; ?>
				
				</section>
		
			<?php else : ?>
		
				<h2><?php _e('Nothing Found','html5reset'); ?></h2>
		
			<?php endif; ?>
	
		</div>
		
	</article>

<?php get_footer(); ?>
