<?php
/*
Template Name: Impact Report
*/
?>

<?php
	wp_enqueue_style( 'st-ir-style', get_stylesheet_directory_uri() . '/impact-report/assets/css/impact-report.min.css', array(), filemtime( get_stylesheet_directory() . '/impact-report/assets/css/impact-report.min.css' ));
	wp_enqueue_style( 'st-owl-style', get_stylesheet_directory_uri() . '/impact-report/assets/css/owl.carousel.css', array() );
	wp_enqueue_script( 'st-global', get_stylesheet_directory_uri() . '/impact-report/assets/js/global-min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'st-owl-js', get_stylesheet_directory_uri() . '/impact-report/assets/js/owl.carousel.js', array(), false, true );
	wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js', array(), false, true );
	wp_enqueue_script( 'gsap-scroll-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollToPlugin.min.js', array(), false, true );
	wp_enqueue_script( 'gsap-scrolltrigger-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js', array(), false, true );
	wp_enqueue_script( 'gsap-draw-js', get_stylesheet_directory_uri() . '/assets/js/DrawSVGPlugin.min.js', array(), false, true );
?>

<?php get_header(); ?>

<div class="hero">
	<header class="hero__header">
		<div class="hero__header--notch"></div>
		<h1 class="hero__headline"><?php _e('Building meaningful impact on the future of work in Canada.', 'impact-report'); ?></h1>
	</header>
	<div class="hero__bars">
		<div class="hero__bar"></div>
		<div class="hero__bar"></div>
		<div class="hero__bar"></div>
		<div class="hero__bar"></div>
		<div class="hero__bar"></div>
		<div class="hero__bar"></div>
		<div class="hero__bar"></div>
		<div class="hero__bar"></div>
		<div class="hero__bar"></div>
		<div class="hero__bar"></div>
		<div class="hero__bar"></div>
		<div class="hero__bar"></div>
		<div class="hero__bar"></div>
		<div class="hero__bar"></div>
		<div class="hero__bar"></div>
		<div class="hero__bar"></div>
		<div class="hero__bar"></div>
		<div class="hero__bar"></div>
		<div class="hero__bar"></div>
		<div class="hero__bar"></div>
	</div>
</div>

<section class="ir-intro__wrapper">
	<div class="ir-intro">
		<div class="ir-intro__content">
			<p><?php _e('The world is changing at an unprecedented rate. Canada needs skills innovation that can respond to these changes and build prosperity for all.', 'impact-report'); ?></p>
				
			<p><?php _e('We are pleased to bring you this report and showcase some of the impact we have had, alongside our incredible partners, on the skills development ecosystem over the past few years.', 'impact-report'); ?></p>
		</div>
		<div class="ir-intro__hexagons">
			<?php include(TEMPLATEPATH . '/impact-report/assets/img/hexagons.svg'); ?>
		</div>
	</div>
</section>

<article class="">
	
	<div class="pillars-intro">
		<div class="pillars-intro__wrapper">
			
			<header class="pillars-intro__header">
				<h2 class="pillars-intro__headline">
					<?php _e('We transform Canada’s skills development ecosystem through:', 'impact-report'); ?>
				</h2>
			</header>
			
			<div class="pillars-intro__pillars">
				<button class="pillars-intro__pillar insights__button">
					<div class="pillars-intro__pillar--pattern">
						<?php include(TEMPLATEPATH . '/impact-report/assets/img/pillar-pattern--insights.svg'); ?>
					</div>
					<div class="pillars-intro__pillar--title pillars-intro__pillar--title--insights"><?php _e('Insights', 'impact-report'); ?></div>
				</button>
				<button class="pillars-intro__pillar solutions__button">
					<div class="pillars-intro__pillar--pattern">
						<?php include(TEMPLATEPATH . '/impact-report/assets/img/pillar-pattern--solutions.svg'); ?>
					</div>
					<div class="pillars-intro__pillar--title pillars-intro__pillar--title--solutions"><?php _e('Solutions', 'impact-report'); ?></div>
				</button>
				<button class="pillars-intro__pillar systems__button">
					<div class="pillars-intro__pillar--pattern">
						<?php include(TEMPLATEPATH . '/impact-report/assets/img/pillar-pattern--systems.svg'); ?>
					</div>
					<div class="pillars-intro__pillar--title pillars-intro__pillar--title--systems"><?php _e('Systems', 'impact-report'); ?><br /><?php _e('Change', 'impact-report'); ?></div>
				</button>
			</div>
		
		</div>
	</div>
	
	<div class="pillars">
		<div class="pillars-menu">
			<button class="pillars-menu__button pillars-menu--insights" aria-label="Scroll To Insights"><?php include(TEMPLATEPATH . '/impact-report/assets/img/icon--insights.svg'); ?></button>
			<button class="pillars-menu__button pillars-menu--solutions" aria-label="Scroll To Solutions"><?php include(TEMPLATEPATH . '/impact-report/assets/img/icon--solutions.svg'); ?></button>
			<button class="pillars-menu__button pillars-menu--systems" aria-label="Scroll To Systems Change"><?php include(TEMPLATEPATH . '/impact-report/assets/img/icon--systems.svg'); ?></button>
		</div>
		
		<div class="pillar pillars--insights">
			<div class="pillar__gradient"></div>
			<div class="pillar__pattern">
				<?php include(TEMPLATEPATH . '/impact-report/assets/img/pillar-pattern--insights.svg'); ?>
			</div>
			<div class="pillar__wrapper">
				<h2 class="pillar__header"><?php _e('Insights', 'impact-report'); ?></h2>
				<p class="pillar__text">
					<?php _e('We bring together leaders, practitioners and experts across sectors and jurisdictions to gain and share the insights that', 'impact-report'); ?> <strong><?php _e('ensure Canada has the skills and innovation needed for the future', 'impact-report'); ?></strong>.
				</p>
				<div class="pillar__stats">
					<div class="pillar-stat">
						<div class="pillar-stat__wrap">
							<div class="pillar-stat__num pillar-stat--01">0</div>
							<div>+</div>
						</div>
						<div class="pillar-stat__text"><?php _e('partnerships with ecosystem experts', 'impact-report'); ?></div>
					</div>
					<div class="pillar-stat">
						<div class="pillar-stat__wrap">
							<div class="pillar-stat__num pillar-stat--02">0</div>
							<div>+</div>
						</div>
						<div class="pillar-stat__text"><?php _e('research reports, learning bulletins and web content published', 'impact-report'); ?></div>
					</div>
					<div class="pillar-stat">
						<div class="pillar-stat__wrap">
							<div class="pillar-stat__num pillar-stat--03">0</div>
						</div>
						<div class="pillar-stat__text"><?php _e('digital platforms and career navigation tools delivered', 'impact-report'); ?></div>
					</div>
					<div class="pillar-stat">
						<div class="pillar-stat__wrap">
							<div class="pillar-stat__num pillar-stat--04">0</div>
							<div>+</div>
						</div>
						<div class="pillar-stat__text"><?php _e('speaking engagements and event appearances', 'impact-report'); ?></div>
					</div>
				</div>
			</div>
		</div>
		<div class="pillar pillars--solutions">
			<div class="pillar__gradient"></div>
			<div class="pillar__pattern">
				<?php include(TEMPLATEPATH . '/impact-report/assets/img/pillar-pattern--solutions.svg'); ?>
			</div>
			<div class="pillar__wrapper">
				<h2 class="pillar__header"><?php _e('Solutions', 'impact-report'); ?></h2>
				<p class="pillar__text">
					<?php _e('We are working with governments, industry, post-secondary institutions and skills practitioners to', 'impact-report'); ?> <strong><?php _e('scale solutions from pilots to pan-Canadian programs', 'impact-report'); ?></strong>.
				</p>
				<div class="pillar__stats">
					<div class="pillar-stat">
						<div class="pillar-stat__wrap">
							<div>$</div>
							<div class="pillar-stat__num pillar-stat--05">0</div>
							<div>M</div>
						</div>
						<div class="pillar-stat__text"><?php _e('invested in projects', 'impact-report'); ?></div>
					</div>
					<div class="pillar-stat">
						<div class="pillar-stat__wrap">
							<div class="pillar-stat__num pillar-stat--06">0</div>
						</div>
						<div class="pillar-stat__text"><?php _e('sectors supported across all provinces and territories', 'impact-report'); ?></div>
					</div>
					
					<div class="pillar-stat">
						<div class="pillar-stat--donut-wrap">
							<div class="pillar-stat--donut">
								<svg class="pillar-stat--07--svg" viewBox="0 0 160 160" height="160" width="160" xmlns="http://www.w3.org/2000/svg">
									<circle class="pillar-stat--07--bg" cx="80" cy="80" r="70" fill="none" stroke="#4C294F" stroke-width="20"/>
									<circle class="pillar-stat--07--path" cx="80" cy="80" r="70" fill="none" stroke="#ffb6ff" stroke-width="20"/>
								</svg>
							</div>
							<div class="pillar-stat--donut-percentage">
								<div class="pillar-stat__wrap pillar-stat__wrap--percentage">
									<div class="pillar-stat__num pillar-stat--07">0</div>
									<div>%</div>
								</div>
							</div>
						</div>
						<div class="pillar-stat__text"><?php _e('of projects are employer-led or partnered solutions', 'impact-report'); ?></div>
					</div>
					
					<div class="pillar-stat">
						<div class="pillar-stat--donut-wrap">
							<div class="pillar-stat--donut">
								<svg class="pillar-stat--08--svg" viewBox="0 0 160 160" height="160" width="160" xmlns="http://www.w3.org/2000/svg">
									<circle class="pillar-stat--08--bg" cx="80" cy="80" r="70" fill="none" stroke="#4C294F" stroke-width="20"/>
									<circle class="pillar-stat--08--path" cx="80" cy="80" r="70" fill="none" stroke="#ffb6ff" stroke-width="20"/>
								</svg>
							</div>
							<div class="pillar-stat--donut-percentage">
								<div class="pillar-stat__wrap pillar-stat__wrap--percentage">
									<div class="pillar-stat__num pillar-stat--08">0</div>
									<div>%</div>
								</div>
							</div>
						</div>
						<div class="pillar-stat__text"><?php _e('of projects are growing or scaling', 'impact-report'); ?></div>
					</div>
				</div>
			</div>
		</div>
		<div class="pillar pillars--systems">
			<div class="pillar__gradient"></div>
			<div class="pillar__pattern">
				<?php include(TEMPLATEPATH . '/impact-report/assets/img/pillar-pattern--systems.svg'); ?>
			</div>
			<div class="pillar__wrapper">
				<h2 class="pillar__header"><?php _e('Systems Change', 'impact-report'); ?></h2>
				<p class="pillar__text">
					<?php _e('We are now recognized as a trusted partner and leader in skills innovation that influences systems change. By fostering collaboration, engaging with policy-makers and investing in the skills development ecosystem, we ensure promising solutions grow in scale and innovation, and are adopted.', 'impact-report'); ?>
				</p>
				<div class="pillar__stats">
					<div class="pillar-stat">
						<div class="pillar-stat__wrap">
							<div class="pillar-stat__num pillar-stat--09">0</div>
						</div>
						<div class="pillar-stat__text"><?php _e('provincial partnerships with Quebec, Alberta, Saskatchewan, and British Columbia', 'impact-report'); ?></div>
					</div>
					<div class="pillar-stat">
						<div class="pillar-stat__wrap">
							<div class="pillar-stat__num pillar-stat--10">0</div>
							<div>+</div>
						</div>
						<div class="pillar-stat__text"><?php _e('active members in our Community of Practice', 'impact-report'); ?></div>
					</div>
					
					<div class="pillar-stat">
						<div class="pillar-stat--donut-wrap">
							<div class="pillar-stat--donut">
								<svg class="pillar-stat--11--svg" viewBox="0 0 160 160" height="160" width="160" xmlns="http://www.w3.org/2000/svg">
									<circle class="pillar-stat--11--bg" cx="80" cy="80" r="70" fill="none" stroke="#4C294F" stroke-width="20"/>
									<circle class="pillar-stat--11--path" cx="80" cy="80" r="70" fill="none" stroke="#ffb6ff" stroke-width="20"/>
								</svg>
							</div>
							<div class="pillar-stat--donut-percentage">
								<div class="pillar-stat__wrap pillar-stat__wrap--percentage">
									<div class="pillar-stat__num pillar-stat--11">0</div>
									<div>%</div>
								</div>
							</div>
						</div>
						<div class="pillar-stat__text"><?php _e('of partners participating in our Innovation Lab', 'impact-report'); ?></div>
					</div>
					
					<div class="pillar-stat">
						<div class="pillar-stat__wrap">
							<div class="pillar-stat__num pillar-stat--12">1st</div>
						</div>
						<div class="pillar-stat__text"><?php _e('example of a pilot being adopted as a policy solution at scale by provincial government', 'impact-report'); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="economy">
		<div class="economy__wrapper">
			<header class="economy__header">
				<h2 class="economy__headline"><?php _e('The need to anticipate significant changes to our rapidly evolving economy is urgent:', 'impact-report'); ?></h2>
			</header>
			<div class="economy__grid">
				<div class="economy-item">
					<div class="economy-item__icon"><?php include(TEMPLATEPATH . '/impact-report/assets/img/plus.svg'); ?></div>
					<div class="economy-item__text">
						<strong><?php _e('<a href="https://www.conferenceboard.ca/e-library/abstract.aspx?did=11534">Unmet skills needs cost the economy $25B</a>', 'impact-report'); ?></strong> <?php _e('or 1.3% of GDP in 2020, up 60% from 2015', 'impact-report'); ?>
					</div>
				</div>
				<div class="economy-item">
					<div class="economy-item__icon"><?php include(TEMPLATEPATH . '/impact-report/assets/img/plus.svg'); ?></div>
					<div class="economy-item__text">
						<strong><?php _e('900,000+ positions were unfilled in 2021', 'impact-report'); ?></strong>, <?php _e('half remained unfilled for 60 days', 'impact-report'); ?>
					</div>
				</div>
				<div class="economy-item">
					<div class="economy-item__icon"><?php include(TEMPLATEPATH . '/impact-report/assets/img/plus.svg'); ?></div>
					<div class="economy-item__text">
						<strong><?php _e('The pandemic has accelerated automation', 'impact-report'); ?></strong>, <?php _e('disrupting more sectors and workers', 'impact-report'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="economy__gradient"></div>
	</div>
	
	<div class="stats__wrapper--media">
		
		<div class="stats">
			<div class="stats__wrapper">
				<header class="stats__header">
					<h2 class="stats__headline">
						<?php _e('FSC’s impact at a glance', 'impact-report'); ?>
					</h2>
				</header>
				<div class="stats__grid">
					<div class="stat">
						<h3 class="stat__headline">
							Creating more than<br />
							<strong><?php _e('13 new digital platforms for labour market information and career navigation tools'); ?></strong> <?php _e('to help people and industries navigate change.'); ?>
						</h3>
						<div class="stat__wrap">
							<div class="stat__num stat--01">0.1</div>
							<div>M</div>
						</div>
						<div class="stat__text"><?php _e('audience reach of our projects and insights', 'impact-report'); ?></div>
					</div>
					<div class="stat">
						<h3 class="stat__headline">
							<?php _e('Partnering on', 'impact-report'); ?><br />
							<strong><?php _e('195+ innovation pilots</strong> with industry, post-secondary and skills practitioners & growing/scaling 25 initiatives across sectors and regions.', 'impact-report'); ?>
						</h3>
						<div class="stat__wrap">
							<div class="stat__num stat--02">100</div>
							<div>+</div>
						</div>
						<div class="stat__text"><?php _e('network of practitioners, influencers and decision makers', 'impact-report'); ?></div>
					</div>
					<div class="stat">
						<h3 class="stat__headline">
							<?php _e('Influencing policy adoption through', 'impact-report'); ?></br />
							<strong><?php _e('4 established provincial partnerships', 'impact-report'); ?></strong> <?php _e('(BC, AB, SK, QC) and growing, encouraging investment into systems-oriented approaches.', 'impact-report'); ?>
						</h3>
						<div class="stat__wrap">
							<div class="stat__num stat--03">100</div>
							<div>+</div>
						</div>
						<div class="stat__text"><?php _e('people benefited from skills training and/or employment opportunities', 'impact-report'); ?></div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="stats-chart">
			<div class="stats-chart__wrapper">
				<div class="stats-chart__grid">
					<div class="stats-chart__text">
						<h2><?php _e('79% of our projects focus on addressing barriers and advancing opportunities for', 'impact-report'); ?> <strong><?php _e('<a href="/building-an-inclusive-workforce/">under-represented groups</a>', 'impact-report'); ?></strong>.</h2>
					</div>
					<div class="stats-chart__stat">
						<div class="chart">
							<div class="chart__image"><?php include(TEMPLATEPATH . '/impact-report/assets/img/chart.svg'); ?></div>
							<div class="chart__data">
								<div class="chart__data-item chart__data-item--01"><?php _e('Language Minority Groups', 'impact-report'); ?></div>
								<div class="chart__data-item chart__data-item--02"><?php _e('Indigenous Peoples', 'impact-report'); ?></div>
								<div class="chart__data-item chart__data-item--03"><?php _e('Women', 'impact-report'); ?></div>
								<div class="chart__data-item chart__data-item--04"><?php _e('Youth', 'impact-report'); ?></div>
								<div class="chart__data-item chart__data-item--05"><?php _e('Rural, Remote & Northern Communities', 'impact-report'); ?></div>
								<div class="chart__data-item chart__data-item--06"><?php _e('Racialized Communities', 'impact-report'); ?></div>
								<div class="chart__data-item chart__data-item--07"><?php _e('People with Disabilities', 'impact-report'); ?></div>
								<div class="chart__data-item chart__data-item--08"><?php _e('Newcomers & Immigrants', 'impact-report'); ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="media media--01">
			<div class="media__grid">
				<div class="media__label"><?php _e('Building partnerships', 'impact-report'); ?></div>
				<div class="media__icon"><?php include(TEMPLATEPATH . '/impact-report/assets/img/quotes.svg'); ?></div>
				<div class="media__content">
					<p class="media__text">
						<?php _e('The agreement between FSC and CPMT will allow us to', 'impact-report'); ?> <strong><?php _e('accelerate the development, enhancement, recognition and transferability of current and future skills in key sectors of the Quebec economy', 'impact-report'); ?></strong>.<br /><br />
						<?php _e('The future of employment for all depends on the ability of the government and its partners to innovate and stimulate the development of skills. I applaud FSC’s openness and responsiveness to Quebec’s distinct realities in this area.', 'impact-report'); ?>
					</p>
					<div class="media__cite">
						<div class="media__cite-name">Audrey Murray</div>
						<div class="media__cite-position"><?php _e('Former chair of the Commission des partenaires du marché du travail', 'impact-report'); ?></div>
					</div>
				</div>
				<div class="media__plus"><?php include(TEMPLATEPATH . '/impact-report/assets/img/plus.svg'); ?></div>
			</div>
		</div>
		
	</div>

	<div class="stats-map">
		<div class="stats-map__wrapper">
			<div class="stats-map__grid">
				<div class="stats-map__stat">
					<div class="map">
						<div class="map__image"><?php include(TEMPLATEPATH . '/impact-report/assets/img/map.svg'); ?></div>
					</div>
				</div>
				<div class="stats-map__content">
					<h2><?php _e('Investments in skills innovation across Canada', 'impact-report'); ?></h2>
					<p><?php _e('We are working directly with many stakeholders including practitioners, employers and labour, post-secondary institutions and federal and provincial governments to co-invest and pilot new <a href="/innovation-projects/">systems-oriented approaches</a> that expand and improve skills training.', 'impact-report'); ?>
					
					<div class="map__data">
						<div class="map__data-header"><?php _e('Projects', 'impact-report'); ?></div>
						<div class="map__data-item map__data-item--NL"><div class="prov">NL</div><div class="prov-projects">17</div></div>
						<div class="map__data-item map__data-item--PE"><div class="prov">PE</div><div class="prov-projects">9</div></div>
						<div class="map__data-item map__data-item--NS"><div class="prov">NS</div><div class="prov-projects">23</div></div>
						<div class="map__data-item map__data-item--NB"><div class="prov">NB</div><div class="prov-projects">16</div></div>
						<div class="map__data-item map__data-item--QC"><div class="prov">QC</div><div class="prov-projects">16</div></div>
						<div class="map__data-item map__data-item--ON"><div class="prov">ON</div><div class="prov-projects">67</div></div>
						<div class="map__data-item map__data-item--MB"><div class="prov">MB</div><div class="prov-projects">14</div></div>
						<div class="map__data-item map__data-item--SK"><div class="prov">SK</div><div class="prov-projects">9</div></div>
						<div class="map__data-item map__data-item--AB"><div class="prov">AB</div><div class="prov-projects">27</div></div>
						<div class="map__data-item map__data-item--BC"><div class="prov">BC</div><div class="prov-projects">32</div></div>
						<div class="map__data-item map__data-item--YT"><div class="prov">YT</div><div class="prov-projects">7</div></div>
						<div class="map__data-item map__data-item--NT"><div class="prov">NT</div><div class="prov-projects">1</div></div>
						<div class="map__data-item map__data-item--NU"><div class="prov">NU</div><div class="prov-projects">2</div></div>
						<div class="map__data-item map__data-item--PC"><div class="prov">Pan-Canadian</div><div class="prov-projects">43</div></div>
					</div>
				</div>
			</div>
		</div>
		<div class="media media--03">
			<div class="media__grid">
				<div class="media__label"><?php _e('Watch Felipe’s Story', 'impact-report'); ?></div>
				<div class="media__icon"><?php include(TEMPLATEPATH . '/impact-report/assets/img/video.svg'); ?></div>
				<div class="media__content">
					<video controls width="100%">
						<source src="<?php bloginfo('template_directory'); ?>/impact-report/assets/video/ir-clip.mp4" type="video/mp4">
					</video>
					<!-- <p class="media__text"><small><?php _e('This video is in English. For French subtitles, please select the "auto-translate" option by clicking on the gear icon and opening the subtitle menu.', 'impact-report'); ?></small></p> -->
				</div>
				<div class="media__plus"><?php include(TEMPLATEPATH . '/impact-report/assets/img/plus.svg'); ?></div>
			</div>
		</div>
	</div>
	
	<div class="impact-stories-carousel">
		<div class="impact-stories-carousel__wrapper owl-carousel">
			
			<div class="impact-story">
				<div class="impact-story__image">
					<img src="<?php bloginfo('template_directory'); ?>/impact-report/assets/img/Kate.jpg" alt="">
				</div>
				<div class="impact-story__content">
					<header class="impact-story__header">
						<div class="impact-story__icon"><?php include(TEMPLATEPATH . '/impact-report/assets/img/icon--insights.svg'); ?></div>
						<h2 class="impact-story__headline"><?php _e('Insights to enable opportunities beyond social assistance', 'impact-report'); ?></h2>
					</header>
					<p><?php _e('Kate, an Inuit woman living in a remote community, had been struggling for years with anxiety and precarious work. Like many, she entered the labour market before being work-ready, cycling back into social assistance. Through In Motion & Momentum, a program that serves people with systemic and intrapersonal challenges, she formulated new life goals and enrolled in a trades and technology program to start a career.', 'impact-report'); ?></p>
					
					<p><?php _e('As the program expands across Canada, there has been evidence of success. In the program’s seven years in New Brunswick, <stong>the province’s social assistance caseloads dropped by 10%</stong> and had a positive impact on participants and their families and government investments. The results indicate more vulnerable and marginalized groups can be reached.', 'impact-report'); ?></p>
					
					<p><?php _e('<a href="/impact-stories/independence-from-social-assistance/" class="button-neon button-neon--small">Read Impact Story</a>', 'impact-report'); ?></p>
				</div>
			</div>
			<div class="impact-story">
				<div class="impact-story__image">
					<img src="<?php bloginfo('template_directory'); ?>/impact-report/assets/img/Filipe.jpg" alt="">
				</div>
				<div class="impact-story__content">
					<header class="impact-story__header">
						<div class="impact-story__icon"><?php include(TEMPLATEPATH . '/impact-report/assets/img/icon--solutions.svg'); ?></div>
						<h2 class="impact-story__headline"><?php _e('Mid-career transitions from energy to tech', 'impact-report'); ?></h2>
					</header>
					<p><?php _e('The oil and gas sector in Calgary has had to pivot, displacing many highly skilled workers. FSC is supporting a Calgary Economic Development solution to help these workers transition to the high-growth IT sector and fuel Alberta’s economy.', 'impact-report'); ?></p>
					
					<p><?php _e('The EDGE UP program offers training pathways developed by post-secondary institutions, training organizations and employers. The OECD has endorsed the program’s promise for replication in other sectors and regions, and to inform future policies. Companies like Amazon Web Services have partnered to fuel their local talent pipeline.', 'impact-report'); ?></p>
					
					<p><strong><?php _e('More than 70% of the first cohort is now employed in tech jobs or furthering their education', 'impact-report'); ?></strong>. <?php _e('Felipe Moreno spent 15 years as a mechanical engineer. After completing EDGE UP, he landed a job as a data analyst at a Calgary fintech company. The program is expanding to new cohorts and digital platforms.', 'impact-report'); ?></p>
					
					<p><?php _e('<a href="/impact-stories/energy-to-tech/" class="button-neon button-neon--small">Read Impact Story</a>', 'impact-report'); ?></p>
				</div>
			</div>
			<div class="impact-story">
				<div class="impact-story__image">
					<img src="<?php bloginfo('template_directory'); ?>/impact-report/assets/img/Saeed.jpg" alt="">
				</div>
				<div class="impact-story__content">
					<header class="impact-story__header">
						<div class="impact-story__icon"><?php include(TEMPLATEPATH . '/impact-report/assets/img/icon--systems.svg'); ?></div>
						<h2 class="impact-story__headline"><?php _e('Accelerating newcomer integration', 'impact-report'); ?></h2>
					</header>
					<p><?php _e('Saeed arrived from Iran with a decade of experience in the financial industry but couldn’t get a foothold in the Canadian labour market. Many newcomers whose foreign credentials aren’t recognized face barriers that exacerbate higher unemployment and low wages.', 'impact-report'); ?></p>
					
					<p><?php _e('Through FAST, an innovative online program that connects organizations that serve immigrants with those that provide career guidance, Saeed received assessments of his technical and soft skills to land a job in finance.', 'impact-report'); ?></p>
					
					<p><?php _e('FAST’s success in helping newcomers navigate Canada’s job market is resulting in its expansion into more sectors including biotechnology and life sciences, skilled trades, culinary arts and long-term care. The government of New Brunswick has adopted FAST as a policy solution at scale.', 'impact-report'); ?></p>
					
					<p><?php _e('<a href="/impact-stories/accelerating-newcomer-potential/" class="button-neon button-neon--small">Read Impact Story</a>', 'impact-report'); ?></p>
				</div>
			</div>
			
		</div>
	</div>
	
	<div class="milestones__wrapper">
		<div class="milestones">
			<header class="milestones__header">
				<h2 class="milestones__headline"><?php _e('Milestones', 'impact-report'); ?></h2>
			</header>
			<div class="timeline__grid">
				<div class="timeline"></div>
				<div class="milestone milestone--01">
					<header class="milestone__header">
						<div class="milestone__header--edge-01"></div>
						<div class="milestone__header--date">2019</div>
						<div class="milestone__header--edge-02"></div>
					</header>
					<ul class="milestone__list">
						<li><?php _e('FSC is launched', 'impact-report'); ?></li>
						<li><?php _e('First cross-Canada regional sounding tour', 'impact-report'); ?></li>
						<li><?php _e('Inaugural research series', 'impact-report <a href="/research/skills-next/">"Skills Next"</a>'); ?></li>
						<li><?php _e('First round of innovation pilots launched', 'impact-report'); ?></li>
					</ul>
				</div>
				<div class="milestone milestone--02">
					<header class="milestone__header flip">
						<div class="milestone__header--edge-01"></div>
						<div class="milestone__header--date">2020</div>
						<div class="milestone__header--edge-02"></div>
					</header>
					<ul class="milestone__list flip">
						<li><?php _e('Appointment of advisory board', 'impact-report'); ?></li>
						<li><?php _e('Launch of <a href="/wp-content/uploads/2020/07/Strategic-Plan-2020.pdf">Strategic Plan</a>', 'impact-report'); ?></li>
						<li><?php _e('Launch of <a href="https://magnet.whoplusyou.com/lp/fsc-ccf-cop/">Community of Practice</a>', 'impact-report'); ?></li>
						<li><?php _e('Second cross-Canada regional sounding tour', 'impact-report'); ?></li>
						<li><?php _e('30 innovation and evaluation pilots funded', 'impact-report'); ?></li>
					</ul>
				</div>
				<div class="milestone milestone--03">
					<header class="milestone__header">
						<div class="milestone__header--edge-01"></div>
						<div class="milestone__header--date">2021</div>
						<div class="milestone__header--edge-02"></div>
					</header>
					<ul class="milestone__list">
						<li><?php _e('64 <a href="/shock-proofing-the-future-of-work-open-call/future-of-work-innovation-projects/">shock-proofing</a> the future of work pilot launched', 'impact-report'); ?></li>
						<li><?php _e('Launch of <a href="https://www.opportunext.ca/">OpportuNext</a> tool for jobseekers', 'impact-report'); ?></li>
						<li><?php _e('<a href="/innovation-projects/scaling-up-skills-development/">10 promising pilots scaled</a>', 'impact-report'); ?></li>
						<li><?php _e('Upskilling partnerships targeted to key economic sectors', 'impact-report'); ?></li>
					</ul>
				</div>
				<div class="milestone milestone--04">
					<header class="milestone__header flip">
						<div class="milestone__header--edge-01"></div>
						<div class="milestone__header--date">2022</div>
						<div class="milestone__header--edge-02"></div>
					</header>
					<ul class="milestone__list flip">
						<li><?php _e('<a href="/futureskillscentre/events/2022-summit/">Inaugural Future Skills Summit</a>', 'impact-report'); ?></li>
						<li><?php _e('Milestone partnership with Quebec on future skills innovation', 'impact-report'); ?></li>
						<li><?php _e('13 pilots expanded to tackle skills shortages', 'impact-report'); ?></li>
					</ul>
				</div>
				<div class="timeline__transition"></div>
			</div>
			
			<div class="pandemic-pivot">	
				<div class="pandemic-pivot__open">
					<div class="pandemic-pivot__dot"></div>
					<div class="pandemic-pivot__line"><?php include(TEMPLATEPATH . '/impact-report/assets/img/dotted-line.svg'); ?></div>
					<div class="pandemic-pivot__label"><?php _e('Pandemic Pivot', 'impact-report'); ?></div>
					<button class="pandemic-pivot__plus"><?php include(TEMPLATEPATH . '/impact-report/assets/img/plus.svg'); ?></button>
				</div>
				<div class="pandemic-pivot__wrapper">
					<div class="pandemic-pivot__content">
						<h2 class="pandemic-pivot__headline">
							<?php _e('When COVID-19 hit in FSC’s second year, we pivoted to <a href="/engage/a-skills-agenda-for-the-future-now/">support Canada’s recovery</a> while staying attuned to future labour market disruptions.', 'impact-report'); ?>
						</h2>
						<ul class="pandemic-pivot__list">
							<li><?php _e('We supported displaced hospitality and tourism workers with our rapid response project', 'impact-report'); ?></li>
							<li><?php _e('We researched COVID’s impact on jobs, sectors, youth, mental health and equity', 'impact-report'); ?></li>
							<li><?php _e('We funded 64 innovation pilots to shock-proof Canada’s workforce in the most significant economic disruption of our times', 'impact-report'); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div class="accountability-box__wrapper">
			<div class="accountability-box">
				<h2 class="accountability-box__headline"><?php _e('Our commitment to excellence and accountability', 'impact-report'); ?></h2>
				<p class="accountability-box__text"><?php _e('We adhere to the highest standards of financial accountability and transparency, earning the trust of everyone in Canada to steward public funds to catalyze skills innovation and training and enable everyone to thrive in an evolving economy.', 'impact-report'); ?></p>
				<div class="accountability-box__cta">
					<?php _e('<a href="/who-we-are/" class="button"><span>Learn More</span></a>', 'impact-report'); ?>
				</div>
			</div>
		</div>
		
		<div class="media media--02">
			<div class="media__grid">
				<div class="media__label"><?php _e('Helping partners test & evaluate', 'impact-report'); ?></div>
				<div class="media__icon"><?php include(TEMPLATEPATH . '/impact-report/assets/img/quotes.svg'); ?></div>
				<div class="media__content">
					<p class="media__text"><?php _e('These solutions – the testing and evaluation of some of the actual assets that have been developed – we would’ve been very hard pressed to make the progress that we’ve made without the Future Skills Centre’s support.', 'impact-report'); ?> <strong><?php _e('We can scale some of the best practices that were identified as we’re working with other provinces.', 'impact-report'); ?></strong> <?php _e('It makes it exciting – not just in how it helped us  to begin to respond and provide solutions, but also to start to think ahead.', 'impact-report'); ?></p>
					<div class="media__cite">
						<div class="media__cite-name">Adam Morrison</div>
						<div class="media__cite-position"><?php _e('President and CEO, Ontario Tourism Education Corporation, Tourism and Hospitality Emergency Response Project', 'impact-report'); ?></div>
					</div>
				</div>
				<div class="media__plus"><?php include(TEMPLATEPATH . '/impact-report/assets/img/plus.svg'); ?></div>
			</div>
		</div>
		
	</div>
	<section class="cards">
		<div class="cards__wrapper">
			<header class="cards__header">
				<h2 class="cards__headline"><?php _e('Engage with us to drive innovation in skills development', 'impact-report'); ?></h2>
				<p class="cards__byline"><?php _e('There’s much more to be done to ensure that everyone in Canada can participate in our shared prosperity today and tomorrow.', 'impact-report'); ?></p>
			</header>
			<div class="cards__grid">
				<div class="card card--01">
					<h2 class="card__headline"><?php _e('Events', 'impact-report'); ?></h2>
					<p class="card__text"><?php _e('Explore the upcoming and past events from the Future Skills Centre and its partners across the country. From events exploring entrepreneurship, to sustainability, and career guidance, we hope to see you there.', 'impact-report'); ?></p>
					<?php _e('<a href="/events/" class="card__cta button-neon button-neon--small">Explore Events</a>', 'impact-report'); ?>
				</div>
				<div class="card card--02">
					<h2 class="card__headline"><?php _e('Join the Community of Practice', 'impact-report'); ?></h2>
					<p class="card__text"><?php _e('Facilitate connections to make change happen. Share your experiences, access curated products, case studies and tools, explore common interests, and network with others who are preparing Canadians for the future of work!', 'impact-report'); ?></p>
					<?php _e('<a href="/fsc-engage/community-of-practice/" class="card__cta button-neon button-neon--small">Join the COP</a>', 'impact-report'); ?>
				</div>
				<div class="card card--03">
					<h2 class="card__headline"><?php _e('Perspectives on future skills', 'impact-report'); ?></h2>
					<p class="card__text"><?php _e('Dive into the stories and perspectives of the skills development ecosystem and the Canadian labour market by reading our blog, or listening to our podcast.', 'impact-report'); ?></p>
					<?php _e('<a href="/engage-with-us/" class="card__cta button-neon button-neon--small">Explore Stories</a>', 'impact-report'); ?>
				</div>
			</div>
			<<div class="download-report"><?php _e('<a href="https://fsc-ccf.ca/wp-content/uploads/2022/09/FSC_ImpactReport2022_EN_Digital_FINAL.pdf" class="button-dark">Download the full Impact Report PDF</a>', 'impact-report'); ?></div>>
		</div>
	</section>

</article>

<?php get_footer(); ?>

