<?php
/*
Template Name: Impact Report
*/
?>
<?php get_header(); ?>

<?php
/*
 if (ICL_LANGUAGE_CODE == 'en') {
	 echo "EN";
 } else {
	 echo "FR";
 }
 */
?>

<div class="hero">
	<header class="hero__header">
		<div class="hero__header--notch"></div>
		<h1 class="hero__headline"><?php _e('Building measurable impact on the future of work through insights, innovation, and key partnerships', 'impact-report'); ?></h1>
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
			<p>The world of work is changing at a dizzying rate. Canada needs a skills-innovation ecosystem that can not only respond to these changes, but builds prosperity and sustainability for the long term.</p>
				
			<p>At FSC, we are dedicated to helping everyone in Canada gain the skills they need to thrive in a changing labour market. We have solidified ourselves as Canada’s world-class skills- innovation hub and we are pleased to showcase some of the impact we have had on the ecosystem in the past few years.</p>
		</div>
		<div class="ir-intro__hexagons">
			<?php include(TEMPLATEPATH . '/assets/img/hexagons.svg'); ?>
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
				<div class="pillars-intro__pillar">
					<div class="pillars-intro__pillar--pattern">
						<?php include(TEMPLATEPATH . '/assets/img/pillar-pattern--insights.svg'); ?>
					</div>
					<div class="pillars-intro__pillar--title">Insights</div>
				</div>
				<div class="pillars-intro__pillar">
					<div class="pillars-intro__pillar--pattern">
						<?php include(TEMPLATEPATH . '/assets/img/pillar-pattern--solutions.svg'); ?>
					</div>
					<div class="pillars-intro__pillar--title">Solutions</div>
				</div>
				<div class="pillars-intro__pillar">
					<div class="pillars-intro__pillar--pattern">
						<?php include(TEMPLATEPATH . '/assets/img/pillar-pattern--systems.svg'); ?>
					</div>
					<div class="pillars-intro__pillar--title">Systems<br />Change</div>
				</div>
			</div>
		
		</div>
	</div>
	
	<div class="impact-stories impact--insights">
		<section class="impact-stories__slide slide--transition-start"></section>
		<section class="impact-stories__slide slide--transition-end"></section>
		<div class="slide__grid">
			<section class="impact-stories__slide slide--icon-insights">
				<div class="impact-stories__icon"><?php include(TEMPLATEPATH . '/assets/img/icon--insights.svg'); ?></div>	
			</section>
			<section class="impact-stories__slide slide--a slide--01">
				<h2 class="impact-stories__headline">Insights</h2>	
			</section>
			<section class="impact-stories__slide slide--b slide--02">
				<p class="impact-stories__text">We bring together leaders, practitioners and experts to gain and share the insights that will ensure Canada has the skills and innovation needed for the future.</p>
			</section>
			<section class="impact-stories__slide slide--c slide--03">
				<div class="impact-stories__stats-grid">
					<div class="impact-stories__stat">
						<div class="impact-stories__stat--num">300+</div>
						<div class="impact-stories__stat--text">partnerships with ecosystem experts</div>
					</div>
					<div class="impact-stories__stat">
						<div class="impact-stories__stat--num">250+</div>
						<div class="impact-stories__stat--text">research reports, learning bulletins and web content published</div>
					</div>
					<div class="impact-stories__stat">
						<div class="impact-stories__stat--num">13</div>
						<div class="impact-stories__stat--text">digital platforms and career navigation tools delivered</div>
					</div>
					<div class="impact-stories__stat">
						<div class="impact-stories__stat--num">150+</div>
						<div class="impact-stories__stat--text">speaking engagements and event appearances</div>
					</div>
				</div>
			</section>
			<section class="impact-stories__slide slide--icon-solutions">
				<div class="impact-stories__icon"><?php include(TEMPLATEPATH . '/assets/img/icon--solutions.svg'); ?></div>	
			</section>
			<section class="impact-stories__slide slide--a slide--04">
				<h2 class="impact-stories__headline">Solutions</h2>	
			</section>
			<section class="impact-stories__slide slide--b slide--05">
				<p class="impact-stories__text">We are working with governments, industry, post-secondary institutions and skills practitioners to <strong>scale solutions from pilots to pan-Canadian programs</strong>.</p>
			</section>
			<section class="impact-stories__slide slide--c slide--06">
				<div class="impact-stories__stats-grid">
					<div class="impact-stories__stat">
						<div class="impact-stories__stat--num">209M</div>
						<div class="impact-stories__stat--text">invested in projects</div>
					</div>
					<div class="impact-stories__stat">
						<div class="impact-stories__stat--num">20</div>
						<div class="impact-stories__stat--text">sectors supported across all provinces and territories</div>
					</div>
					<div class="impact-stories__stat">
						<div class="impact-stories__stat--num">44%</div>
						<div class="impact-stories__stat--text">of projects are employer-led or partnered solutions</div>
					</div>
					<div class="impact-stories__stat">
						<div class="impact-stories__stat--num">15%</div>
						<div class="impact-stories__stat--text">of projects are growing or scaling</div>
					</div>
				</div>
			</section>
			<section class="impact-stories__slide slide--icon-systems">
				<div class="impact-stories__icon"><?php include(TEMPLATEPATH . '/assets/img/icon--systems.svg'); ?></div>	
			</section>
			<section class="impact-stories__slide slide--a slide--07">
				<h2 class="impact-stories__headline">Systems Change</h2>	
			</section>
			<section class="impact-stories__slide slide--b slide--08">
				<p class="impact-stories__text">We are now recognized as a trusted partner and leader in skills innovation that influences systems change. By fostering collaboration, engaging with policy-makers and investing in the skills development ecosystem, we ensure promising solutions grow in scale and innovation, and are adopted.</p>
			</section>
			<section class="impact-stories__slide slide--c slide--09">
				<div class="impact-stories__stats-grid">
					<div class="impact-stories__stat">
						<div class="impact-stories__stat--num">4</div>
						<div class="impact-stories__stat--text">provincial partnerships with Quebec, Alberta, Saskatchewan, and British Columbia</div>
					</div>
					<div class="impact-stories__stat">
						<div class="impact-stories__stat--num">1400+</div>
						<div class="impact-stories__stat--text">active members in our Community of Practice</div>
					</div>
					<div class="impact-stories__stat">
						<div class="impact-stories__stat--num">74%</div>
						<div class="impact-stories__stat--text">of partners participating in our Innovation Lab</div>
					</div>
					<div class="impact-stories__stat">
						<div class="impact-stories__stat--num">1st</div>
						<div class="impact-stories__stat--text">example of a pilot being adopted as a policy solution at scale by provincial government</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	
	<div class="midnight"></div>
	
	<div class="economy">
		<div class="economy__wrapper">
			<header class="economy__header">
				<h2 class="economy__headline">The need to anticipate significant changes to our rapidly evolving economy is urgent:</h2>
			</header>
			<div class="economy__grid">
				<div class="economy-item">
					<div class="economy-item__icon"><?php include(TEMPLATEPATH . '/assets/img/plus.svg'); ?></div>
					<div class="economy-item__text">
						<strong>Unmet skills needs cost the economy $25B</strong> or 1.3% of GDP in 2020, up 60% from 2015
					</div>
				</div>
				<div class="economy-item">
					<div class="economy-item__icon"><?php include(TEMPLATEPATH . '/assets/img/plus.svg'); ?></div>
					<div class="economy-item__text">
						<strong>900,000+ positions were unfilled</strong> in 2021; half remained unfilled for 60 days
					</div>
				</div>
				<div class="economy-item">
					<div class="economy-item__icon"><?php include(TEMPLATEPATH . '/assets/img/plus.svg'); ?></div>
					<div class="economy-item__text">
						<strong>The pandemic has accelerated automation</strong>, disrupting more sectors and workers
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="midnight"></div>
	
	<div class="stats">
		<div class="stats__wrapper">
			<header class="stats__header">
				<h2 class="stats__headline">
					<?php _e('FSC’s impact at a glance'); ?>
				</h2>
			</header>
			<div class="stats__grid">
				<div class="stat">
					<h3 class="stat__headline">
						Creating more than<br />
						<strong><?php _e('13 new digital platforms for labour market information and career navigation tools'); ?></strong> <?php _e('to help people and industries navigate change'); ?>.
					</h3>
					<div class="stat__wrap">
						<div class="stat__num stat--01">0.1</div>
						<div>M</div>
					</div>
					<div class="stat__text">audience reach of our projects and insights</div>
				</div>
				<div class="stat">
					<h3 class="stat__headline">
						Partnering on<br />
						<strong>195+ innovation pilots</strong> with industry, post-secondary and skills practitioners & growing/scaling 25 initiatives across sectors and regions.
					</h3>
					<div class="stat__wrap">
						<div class="stat__num stat--02">100</div>
						<div>+</div>
					</div>
					<div class="stat__text">network of practitioners, influencers and decision makers</div>
				</div>
				<div class="stat">
					<h3 class="stat__headline">
						Influencing policy adoption through</br />
						<strong>4 established provincial partnerships</strong> (BC, AB, SK, QC) and growing, encouraging investment into systems-oriented approaches.
					</h3>
					<div class="stat__wrap">
						<div class="stat__num stat--03">100</div>
						<div>+</div>
					</div>
					<div class="stat__text">people benefited from skills training and/or employment opportunities</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="stats-chart">
		<div class="stats-chart__wrapper">
			<div class="stats-chart__grid">
				<div class="stats-chart__text">
					<h2>79% of our projects focus on addressing barriers and advancing opportunities for <strong>under-represented groups</strong>.</h2>
				</div>
				<div class="stats-chart__stat">
					<div class="chart">
						<div class="chart__image"><?php include(TEMPLATEPATH . '/assets/img/chart.svg'); ?></div>
						<div class="chart__data">
							<div class="chart__data-item chart__data-item--01">Language Minority Groups</div>
							<div class="chart__data-item chart__data-item--02">Indigenous Peoples</div>
							<div class="chart__data-item chart__data-item--03">Women</div>
							<div class="chart__data-item chart__data-item--04">Youth</div>
							<div class="chart__data-item chart__data-item--05">Rural, Remote & Northern Communities</div>
							<div class="chart__data-item chart__data-item--06">Racialized Communities</div>
							<div class="chart__data-item chart__data-item--07">People with Disabilities</div>
							<div class="chart__data-item chart__data-item--08">Newcomers & Immigrants</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="media media--03">
			<div class="media__mask"></div>
			<div class="media__grid">
				<div class="media__label">Watch Video</div>
				<div class="media__icon"><?php include(TEMPLATEPATH . '/assets/img/video.svg'); ?></div>
				<div class="media__content">
					<video controls width="100%">
						<source src="<?php bloginfo('template_directory'); ?>/assets/video/ir-clip.mp4" type="video/mp4">
					</video>
				</div>
				<div class="media__plus"><?php include(TEMPLATEPATH . '/assets/img/plus.svg'); ?></div>
			</div>
		</div>
		
	</div>
	
	<div class="stats-map">
		<div class="stats-map__wrapper">
			<div class="stats-map__grid">
				<div class="stats-map__stat">
					<div class="map">
						<div class="map__image"><?php include(TEMPLATEPATH . '/assets/img/map.svg'); ?></div>
					</div>
				</div>
				<div class="stats-map__text">
					<h2>Investments in skills innovation across Canada Language Minority Groups Indigenous Peoples Women Youth</h2>
					<p>We are working directly with many stake- holders including practitioners, employers and labour, post-secondary institutions and federal and provincial governments to co-invest and pilot new systems-oriented approaches that expand and improve skills training.</p>
					
					<div class="map__data">
						<div class="map__data-header">Projects</div>
						<div class="map__data-item map__data-item--01"><div class="prov">YK</div><div class="prov-projects">7</div></div>
						<div class="map__data-item map__data-item--02"><div class="prov">BC</div><div class="prov-projects">67</div></div>
						<div class="map__data-item map__data-item--03"><div class="prov">AB</div><div class="prov-projects">27</div></div>
						<div class="map__data-item map__data-item--04"><div class="prov">MN</div><div class="prov-projects">9</div></div>
						<div class="map__data-item map__data-item--01"><div class="prov">YK</div><div class="prov-projects">7</div></div>
						<div class="map__data-item map__data-item--02"><div class="prov">BC</div><div class="prov-projects">67</div></div>
						<div class="map__data-item map__data-item--03"><div class="prov">AB</div><div class="prov-projects">27</div></div>
						<div class="map__data-item map__data-item--04"><div class="prov">MN</div><div class="prov-projects">9</div></div>
						<div class="map__data-item map__data-item--01"><div class="prov">YK</div><div class="prov-projects">7</div></div>
						<div class="map__data-item map__data-item--02"><div class="prov">BC</div><div class="prov-projects">67</div></div>
						<div class="map__data-item map__data-item--03"><div class="prov">AB</div><div class="prov-projects">27</div></div>
						<div class="map__data-item map__data-item--04"><div class="prov">MN</div><div class="prov-projects">9</div></div>
						<div class="map__data-item map__data-item--01"><div class="prov">YK</div><div class="prov-projects">7</div></div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="media media--01">
			<div class="media__mask"></div>
			<div class="media__grid">
				<div class="media__label">Read Testimonial</div>
				<div class="media__icon"><?php include(TEMPLATEPATH . '/assets/img/quotes.svg'); ?></div>
				<div class="media__content">
					<p class="media__text">FSC has set up something truly amazing to push our ecosystem forward, and we can access experts who support research that uncovers why In Motion & Momentum works, what its impacts are, and how it benefits the system.</p>
					<div class="media__cite">
						<div class="media__cite-name">Donnalee Bell</div>
						<div class="media__cite-position">Managing Director, Canadian Career Development Foundation</div>
					</div>
				</div>
				<div class="media__plus"><?php include(TEMPLATEPATH . '/assets/img/plus.svg'); ?></div>
			</div>
		</div>
		
	</div>
	
	<div class="impact-stories-carousel">
		<div class="impact-stories-carousel__wrapper owl-carousel">
			
			<div class="impact-story">
				<div class="impact-story__image">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/Kate.jpg" alt="">
				</div>
				<div class="impact-story__content">
					<header class="impact-story__header">
						<div class="impact-story__icon"><?php include(TEMPLATEPATH . '/assets/img/icon--insights.svg'); ?></div>
						<h2 class="impact-story__headline">Insights to enable opportunities beyond social assistance</h2>
					</header>
					<p>Kate, an Inuit woman living in a remote community, had been struggling for years with anxiety and precarious work. Like many, she entered the labour market before being work-ready, cycling back into social assistance. Through In Motion & Momentum, a program that serves people with systemic and intrapersonal challenges, she formulated new life goals and enrolled in a trades and technology program to start a career.</p>
					
					<p>As the program expands across Canada, there has been evidence of success. In the program’s seven years in New Brunswick, <stong>the province’s social assistance caseloads dropped by 10%</stong> and had a positive impact on participants and their families and government investments. The results indicate more vulnerable and marginalized groups can be reached.</p>
					
					<p><a href="#" class="button-neon button-neon--small">Read Impact Story</a></p>
				</div>
			</div>
			
			<div class="impact-story">
				<div class="impact-story__image">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/Filipe.jpg" alt="">
				</div>
				<div class="impact-story__content">
					<header class="impact-story__header">
						<div class="impact-story__icon"><?php include(TEMPLATEPATH . '/assets/img/icon--solutions.svg'); ?></div>
						<h2 class="impact-story__headline">Mid-career transitions from energy to tech</h2>
					</header>
					<p>The oil and gas sector in Calgary has had to pivot, displacing many highly skilled workers. FSC is supporting a Calgary Economic Development solution to help these workers transition to the high-growth IT sector and fuel Alberta’s economy.</p>
					
					<p>The EDGE UP program offers training pathways developed by post-secondary institutions, training organizations and employers. The OECD has endorsed the program’s promise for replication in other sectors and regions, and to inform future policies. Companies like Amazon Web Services have partnered to fuel their local talent pipeline.</p>
					<p><strong>More than 70% of the first cohort is now employed in tech jobs or furthering their education</strong>. Felipe Moreno spent 15 years as a mechanical engineer. After completing EDGE UP, he landed a job as a data analyst at a Calgary fintech company. The program is expanding to new cohorts and digital platforms.</p>
					
					<p><a href="#" class="button-neon button-neon--small">Read Impact Story</a></p>
				</div>
			</div>
			
			<div class="impact-story">
				<div class="impact-story__image">
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/Saeed.jpg" alt="">
				</div>
				<div class="impact-story__content">
					<header class="impact-story__header">
						<div class="impact-story__icon"><?php include(TEMPLATEPATH . '/assets/img/icon--systems.svg'); ?></div>
						<h2 class="impact-story__headline">Accelerating newcomer integration</h2>
					</header>
					<p>Saeed arrived from Iran with a decade of experience in the financial industry but couldn’t get a foothold in the Canadian labour market. Many newcomers whose foreign credentials aren’t recognized face barriers that exacerbate higher unemployment and low wages.</p>
					
					<p>Through FAST, an innovative online program that connects organizations that serve immigrants with those that provide career guidance, Saeed received assessments of his technical and soft skills to land a job in finance.</p>
					
					<p>FAST’s success in helping newcomers navigate Canada’s job market is resulting in its expansion into more sectors including biotechnology and life sciences, skilled trades, culinary arts and long-term care. The government of New Brunswick has adopted FAST as a policy solution at scale.</p>
					
					<p><a href="#" class="button-neon button-neon--small">Read Impact Story</a></p>
				</div>
			</div>
			
		</div>
	</div>
	
	<div class="milestones__wrapper">
		<div class="milestones">
			<header class="milestones__header">
				<h2 class="milestones__headline">Milestones</h2>
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
						<li>FSC is launched</li>
						<li>First cross-Canada regional sounding tour</li>
						<li>Inaugural research series "Skills Next"</li>
						<li>First round of innovation pilots launched</li>
					</ul>
				</div>
				<div class="milestone milestone--02">
					<header class="milestone__header flip">
						<div class="milestone__header--edge-01"></div>
						<div class="milestone__header--date">2020</div>
						<div class="milestone__header--edge-02"></div>
					</header>
					<ul class="milestone__list flip">
						<li>Appointment of advisory board</li>
						<li>Launch of Strategic Plan Launch of the Community of Practice</li>
						<li>Second cross-Canada regional sounding tour</li>
						<li>30 innovation and evaluation pilots funded</li>
					</ul>
				</div>
				<div class="milestone milestone--03">
					<header class="milestone__header">
						<div class="milestone__header--edge-01"></div>
						<div class="milestone__header--date">2021</div>
						<div class="milestone__header--edge-02"></div>
					</header>
					<ul class="milestone__list">
						<li>64 shock-proofing the future of work pilot launched</li>
						<li>Launch of OpportuNext tool for jobseekers</li>
						<li>10 promising pilots scaled</li>
						<li>Upskilling partnerships targeted to key economic sectors</li>
					</ul>
				</div>
				<div class="milestone milestone--04">
					<header class="milestone__header flip">
						<div class="milestone__header--edge-01"></div>
						<div class="milestone__header--date">2022</div>
						<div class="milestone__header--edge-02"></div>
					</header>
					<ul class="milestone__list flip">
						<li>Inaugural Future Skills Summit</li>
						<li>Milestone partnership with Quebec on future skills innovation</li>
						<li>13 pilots expanded to tackle skills shortages</li>
					</ul>
				</div>
				<div class="timeline__transition"></div>
			</div>
			
			<div class="pandemic-pivot">
				
				<div class="pandemic-pivot__open">
					<div class="pandemic-pivot__dot"></div>
					<div class="pandemic-pivot__line"><?php include(TEMPLATEPATH . '/assets/img/dotted-line.svg'); ?></div>
					<div class="pandemic-pivot__label">Pandemic Pivot</div>
					<button class="pandemic-pivot__plus"><?php include(TEMPLATEPATH . '/assets/img/plus.svg'); ?></button>
				</div>
				
				<div class="pandemic-pivot__wrapper">
					<div class="pandemic-pivot__content">
						<h2 class="pandemic-pivot__headline">When COVID-19 hit in FSC’s second year, we pivoted to support Canada’s recovery while staying attuned to future labour market disruptions.</h2>
						<ul class="pandemic-pivot__list">
							<li>We supported displaced hospitality and tourism workers with our rapid response project</li>
							<li>We researched COVID’s impact on jobs, sectors, youth, mental health and equity</li>
							<li>We funded 64 innovation pilots to shock-proof Canada’s workforce in the most significant economic disruption of our times</li>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
		
		<div class="accountability-box">
			<h2 class="accountability-box__headline">Our commitment to excellence and accountability</h2>
			<p class="accountability-box__text">We adhere to the highest standards of financial accountability and transparency, earning the trust of everyone in Canada to steward public funds to catalyze skills innovation and training and enable everyone to thrive in an evolving economy.</p>
			<div class="accountability-box__cta">
				<a href="#" class="button"><span>Link To More</span></a>
			</div>
		</div>
		
		<div class="media media--02">
			<div class="media__mask"></div>
			<div class="media__grid">
				<div class="media__label">Read Testimonial</div>
				<div class="media__icon"><?php include(TEMPLATEPATH . '/assets/img/quotes.svg'); ?></div>
				<div class="media__content">
					<p class="media__text">FSC has set up something truly amazing to push our ecosystem forward, and we can access experts who support research that uncovers why In Motion & Momentum works, what its impacts are, and how it benefits the system.</p>
					<div class="media__cite">
						<div class="media__cite-name">Donnalee Bell</div>
						<div class="media__cite-position">Managing Director, Canadian Career Development Foundation</div>
					</div>
				</div>
				<div class="media__plus"><?php include(TEMPLATEPATH . '/assets/img/plus.svg'); ?></div>
			</div>
		</div>
		
	</div>
	
	<section class="cards">
		<div class="cards__wrapper">
			<header class="cards__header">
				<h2 class="cards__headline">Missing Headline... elit libero, a pharetra augue.</h2>
				<p class="cards__byline">Missing byline... Nullam quis risus eget urna mollis ornare vel eu leo.</p>
			</header>
			<div class="cards__grid">
				<div class="card card--01">
					<h2 class="card__headline">Events</h2>
					<p class="card__text">Explore the upcoming and past events from the Future Skills Centre and its partners across the country.</p>
					<a href="#" class="card__cta button-neon button-neon--small">Explore Events</a>
				</div>
				<div class="card card--02">
					<h2 class="card__headline">Join the Community of Practice</h2>
					<p class="card__text">Facilitate connections to make change happen. Share your experiences, access curated products, case studies and tools, explore common interests, and network with others who are preparing Canadians for the future of work! Find out how others are working to support.</p>
					<a href="#" class="card__cta button-neon button-neon--small">Join Community</a>
				</div>
				<div class="card card--03">
					<h2 class="card__headline">Explore the stories of future skills</h2>
					<p class="card__text">Read our blog, or listen to our podcast.</p>
					<a href="#" class="card__cta button-neon button-neon--small">Explore Stories</a>
				</div>
			</div>
		</div>
	</section>

</article>

<?php get_footer(); ?>

