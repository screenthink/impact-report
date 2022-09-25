<?php
/*
Template Name: Home
*/
?>

<?php include(TEMPLATEPATH . '/header.php'); ?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article>
		
		<div class="container">
			
			<?php the_content(); ?>
			
			<section class="projects">
				
				<header><h2>Recent Projects</h2></header>
				
				<nav class="project-list">
				
					<ul>
						<li><a target="_blank" rel="noopener" href="https://booth.events/">Booth.Events</a><span>dev</span><span>react</span></li>
						<li><a target="_blank" rel="noopener" href="https://tellingtales.org/">Telling Tales</a><span>dev</span><span>design</span><span>wordpress</span></li>
						<li><a target="_blank" rel="noopener" href="https://branchhq.ca/">Branch HQ</a><span>dev</span><span>design</span><span>wordpress</span></li>
						<li><a target="_blank" rel="noopener" href="https://aksextherapy.com/">Alan Kaine Sex Therapy</a><span>dev</span><span>design</span><span>wordpress</span></li>
						<li><a target="_blank" rel="noopener" href="https://hamiltonfarmersmarket.ca/">Hamilton Farmers' Market</a><span>dev</span><span>wordpress</span></li>
						<li><a target="_blank" rel="noopener" href="https://solodigitalis.com/">Solodigitalis</a><span>dev</span><span>gatsby</span></li>
						<li><a target="_blank" rel="noopener" href="https://www.sarnia.ca/">City Of Sarnia</a><span>dev</span><span>wordpress</span></li>
						<li><a target="_blank" rel="noopener" href="https://wifibooth.com/">WifiBooth</a><span>dev</span><span>design</span><span>wordpress</span></li>
						<li><a target="_blank" rel="noopener" href="https://rahfish.com/">Rahfish</a><span>dev</span><span>design</span><span>WooCommerce</span></li>
						<li><a target="_blank" rel="noopener" href="https://culprit.com/">Culprit Lures</a><span>dev</span><span>WooCommerce</span></li>
					</ul>
				
				</nav>
				
			</section>
			
		</div>
			
	</article>
								
<?php endwhile; endif; ?>

<?php get_footer(); ?>