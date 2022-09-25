<?php include(TEMPLATEPATH . '/header.php'); ?>

<div class="banner">
		
	<div class="container banner__container">
			
		<header class="banner__header">
			
			<a href="/wealth-management-insights/blog" class="post__btn">All Posts</a>
		    
		    <h1 class="banner__headline"><?php single_cat_title(); ?></h1>
		    				    				    
		</header>
			
	</div>
		
</div>

<article class="posts">

	<div class="container post__wrapper">
		
		<nav class="sub-nav"><?php wp_nav_menu( array( 'theme_location' => 'insights-nav' ) ); ?></nav>
		
		<div class="wrapper">
		
			<ul class="cat-item__wrapper">
				<li class="cat-item"><a href="/blog">All</a></li>
				<?php wp_list_categories('title_li='); ?>
			</ul>
			
			<div class="post-list">
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<?php if( has_term( 'company-news', 'filter' ) ) { ?>
					
					<?php } else { ?>
				
						<div class="post-list__item">
							
							<?php if (has_post_thumbnail() ) { ?>
							
								<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );?>
							
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-list__image" style="background-image: url('<?php echo $thumb['0'];?>')"></a>
							
							<?php } else { ?>
							
								<a href="<?php the_permalink(); ?>" class="post-list__image post-list__image--placeholder"></a>
							
							<?php } ?>
							
							<div class="post-list__content">
											
								<h3 class="post-list__headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><h3>
								
								<div class="post-list__excerpt"><?php the_excerpt(); ?></div>
													
							</div>
								
						</div>
					
					<?php } ?>
			
				<?php endwhile; endif; ?>
			
			</div>
		
		</div>
	
	</div>

</article>

<?php get_footer(); ?>



