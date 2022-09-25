// remap jQuery to $
(function($){


/* trigger when page is ready */
$(document).ready(function (){
	gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
	
	const tlPillars = gsap.timeline(
		{
			scrollTrigger: {
				trigger: '.pillars-intro',
				start: 'top 80%',
				toggleActions: 'play none none reset', //onEnter onLeave onEnterBack onLeaveBack
				toggleClass: 'active'
			}
		}
	);
	
	tlPillars.from('.pillars-intro__header', {
		duration: 1,
		ease: "power1",
		xPercent: 20,
		opacity: 0
	});
	
	tlPillars.from('.pillars-intro__pillar', {
		opacity: 0,
		ease: "power1",
		stagger: {
			each: 0.1
		}
	}, '-=0.8');
	
	tlPillars.from('.pillars-intro__pillar--pattern', {
		opacity: 0,
		scale: 2,
		duration: 1.2,
		ease: "power1",
		stagger: {
			each: 0.05
		}
	}, '-=0.5');
	
	tlPillars.from('.pillars-intro__pillar--pattern', {
		rotation: '90deg',
		duration: 1.2,
		ease: "power1.out",
		stagger: {
			each: 0.05
		}
	}, '-=1');
	
	tlPillars.from('.pillars-intro__pillar--title', {
		opacity: 0,
		duration: 0.8,
		scale: 0.5,
		ease: "power1.out",
		stagger: {
			each: 0.05
		}
	}, '-=1');
	
	
	
	
	
	
	
	const tlEconomy = gsap.timeline();
	
	tlEconomy.from('.economy__header', {
		duration: 1,
		ease: "power1.inOut",
		xPercent: 0
	}, '-=0.3');
	
	
	
	
	
	// Hero
	const tlHero = gsap.timeline();
	
	tlHero.to('.hero__bar', {
		xPercent: -100,
		ease: "power4.out",
		stagger: {
			each: 0.05,
			from: 'random'
		}
	});
	
	tlHero.from('.hero__header', {
		duration: 1,
		ease: "power1.inOut",
		xPercent: -100
	}, '-=0.3');
	
	tlHero.from('.hero__headline', {
		duration: 3,
		ease: "power1",
		opacity: 0
	}, '-=0.5');
	
	
	// Isights
	const tlInsights = gsap.timeline(
		{
			scrollTrigger: {
				trigger: '.impact-stories',
				pin: true,
				start: '-74px top',
				end: "+=9000",
				toggleActions: 'play none none reset', //onEnter onLeave onEnterBack onLeaveBack
				toggleClass: 'active',
				scrub: 1
			}
		}
	);
	
	tlInsights.to('.slide--transition-start', {
		opacity: 0
	});
	
	tlInsights.from('.slide--icon-insights', {
		opacity: 0,
		scale: 5
	});
	tlInsights.to('.slide--icon-insights', {
		opacity: 0.05
	});
	tlInsights.from('.slide--01', {
		opacity: 0,
		scale: 10
	}, '-=0.7');
	tlInsights.to('.slide--01', {
		y: -150,
		ease: "power4.inOut"
	});
	tlInsights.from('.slide--02', {
		opacity: 0,
		y: -20
	});
	tlInsights.to('.slide--02', {
		opacity: 0
	}, '+=1');
	tlInsights.from('.slide--03', {
		opacity: 0
	});
	tlInsights.to('.slide--03', {
		opacity: 0
	}, '+=1');
	tlInsights.to('.slide--01', {
		opacity: 0
	}, '-=0');
	tlInsights.to('.slide--icon-insights', {
		opacity: 0
	}, '-=0');
	
	tlInsights.from('.slide--icon-solutions', {
		opacity: 0,
		scale: 5
	});
	tlInsights.to('.slide--icon-solutions', {
		opacity: 0.05
	});
	tlInsights.from('.slide--04', {
		opacity: 0,
		scale: 10
	}, '-=0.7');
	tlInsights.to('.slide--04', {
		y: -150,
		ease: "power4.inOut"
	});
	tlInsights.from('.slide--05', {
		opacity: 0,
		y: -20
	});
	tlInsights.to('.slide--05', {
		opacity: 0
	}, '+=1');
	tlInsights.from('.slide--06', {
		opacity: 0
	});
	tlInsights.to('.slide--06', {
		opacity: 0
	}, '+=1');
	tlInsights.to('.slide--04', {
		opacity: 0
	}, '-=0');
	tlInsights.to('.slide--icon-solutions', {
		opacity: 0
	}, '-=0');
	
	tlInsights.from('.slide--icon-systems', {
		opacity: 0,
		scale: 5
	});
	tlInsights.to('.slide--icon-systems', {
		opacity: 0.05
	});
	tlInsights.from('.slide--07', {
		opacity: 0,
		scale: 10
	}, '-=0.7');
	tlInsights.to('.slide--07', {
		y: -170,
		ease: "power4.inOut"
	});
	tlInsights.from('.slide--08', {
		opacity: 0,
		y: -20
	});
	tlInsights.to('.slide--08', {
		opacity: 0
	}, '+=1');
	tlInsights.from('.slide--09', {
		opacity: 0
	});
	tlInsights.to('.slide--09', {
		opacity: 0
	}, '+=1');
	tlInsights.to('.slide--07', {
		opacity: 0
	}, '-=0');
	tlInsights.to('.slide--icon-systems', {
		opacity: 0
	}, '-=0');
	
	tlInsights.from('.slide--transition-end', {
		opacity: 0
	}, '-=0');
	
	//tlEconomy.play();
	
	
	
	
	
	
	
	
	let pandemic = document.querySelector('.pandemic-pivot__wrapper');
	let pandemicButton = document.querySelector('.pandemic-pivot__plus');
	let tlPandemic = gsap.timeline({paused: true});
	
	pandemicButton.addEventListener('click', (e) => {
		e.preventDefault();
		if (pandemic.classList.contains('active')) {
			pandemic.classList.remove("active");
			tlPandemic.reverse(0);
		} else {
			pandemic.classList.add("active");
			tlPandemic.play();
		}
	});
	
	tlPandemic.to('.pandemic-pivot__dot, .pandemic-pivot__line, .pandemic-pivot__label', {
		duration: .5,
		ease: "power1",
		opacity: 0
	});
	
	tlPandemic.to('.pandemic-pivot__wrapper', {
		duration: 1,
		ease: "power4.inOut",
		xPercent: -100
	}, '-=0.3');
	
	tlPandemic.to('.plus--svg', {
		duration: 0.2,
		ease: "power1",
		rotation: "45deg",
		transformOrigin: "50% 50%"
	}, '-=0.3');
	
	tlPandemic.from('.pandemic-pivot__content', {
		duration: 1,
		ease: "power1",
		opacity: 0
	}, '-=0.5');
	
	
	
	
	
	
	
	
	// Milestones
	const tlMilestones = gsap.timeline(
		{
			scrollTrigger: {
				trigger: '.milestones',
				start: 'top 80%',
				end: "-=10",
				toggleActions: 'play none none none', //onEnter onLeave onEnterBack onLeaveBack
				toggleClass: 'active',
				scrub: 1
			}
		}
	);
	
	tlMilestones.from('.milestone--01 .milestone__header', {
		xPercent: 20,
		opacity: 0,
		duration: 0.5,
		ease: "power1.inOut"
	});
	
	tlMilestones.from('.milestone--01 .milestone__list', {
		xPercent: 20,
		opacity: 0,
		duration: 0.5,
		ease: "power1.inOut"
	});
	
	tlMilestones.from('.milestone--02 .milestone__header', {
		xPercent: -20,
		opacity: 0,
		duration: 0.5,
		ease: "power1.inOut"
	});
	
	tlMilestones.from('.milestone--02 .milestone__list', {
		xPercent: -20,
		opacity: 0,
		duration: 0.5,
		ease: "power1.inOut"
	});
	
	tlMilestones.from('.milestone--03 .milestone__header', {
		xPercent: 20,
		opacity: 0,
		duration: 0.5,
		ease: "power1.inOut"
	});
	
	tlMilestones.from('.milestone--03 .milestone__list', {
		xPercent: 20,
		opacity: 0,
		duration: 0.5,
		ease: "power1.inOut"
	});
	
	tlMilestones.from('.milestone--04 .milestone__header', {
		xPercent: -20,
		opacity: 0,
		duration: 0.5,
		ease: "power1.inOut"
	});
	
	tlMilestones.from('.milestone--04 .milestone__list', {
		xPercent: -20,
		opacity: 0,
		duration: 0.5,
		ease: "power1.inOut"
	});
	
	
	
	
	
	
	
	// Skills
	const tlSkills = gsap.timeline(
		{
			scrollTrigger: {
				trigger: '.ir-intro__wrapper',
				start: 'top bottom',
				toggleActions: 'play none none none', //onEnter onLeave onEnterBack onLeaveBack
				toggleClass: 'active'
				//markers: true
			}
		}
	);
	
	tlSkills.to('.ir-intro', {
		duration: 2,
		yPercent: -20,
		ease: "power4.inOut"
	});
	
	// tlSkills.from('.ir-intro__content', {
	// 	duration: 2,
	// 	yPercent: -2,
	// 	ease: "power1.in"
	// }, '-=1.5');
	
	tlSkills.from('.ir-intro__hexagons', {
		duration: 2,
		yPercent: 2,
		ease: "power1.in"
	}, '-=2');
	
	tlSkills.from('.hexagon', {
		duration: 2,
		opacity: 0,
		ease: "power1.in",
		stagger: {
			each: 0.3,
			from: 'random'
		}
	}, '-=2');
	
	
	
	
	
	
	
	
	
	
	
	// Stats
	const tlStats = gsap.timeline(
		{
			scrollTrigger: {
				trigger: '.stats',
				start: 'top 80%',
				toggleActions: 'play none none none', //onEnter onLeave onEnterBack onLeaveBack
				toggleClass: 'active'
			}
		}
	);
	
	tlStats.from('.stats__header', {
		duration: 1,
		ease: "power1",
		xPercent: 20,
		opacity: 0
	});
	
	tlStats.from('.stat', {
		duration: 0.5,
		ease: "power1",
		yPercent: 20,
		opacity: 0,
		stagger: {
			each: 0.2
		}
	});
	
	tlStats.to('.stat--01', {
		innerText: 3.9,
		duration: 3,
		ease: "power1",
		snap: {
			innerText: 0.1
		}
	}, '-=1');
	
	tlStats.to('.stat--02', {
		innerText: 2000,
		duration: 3,
		ease: "power1",
		snap: {
			innerText: 10
		}
	}, '-=3');
	
	tlStats.to('.stat--03', {
		innerText: 25000,
		duration: 3,
		ease: "power1",
		snap: {
			innerText: 200
		}
	}, '-=3');
	
	const tlChart = gsap.timeline(
		{
			scrollTrigger: {
				trigger: '.stats-chart',
				start: 'top 80%',
				toggleActions: 'play none none none', //onEnter onLeave onEnterBack onLeaveBack
				toggleClass: 'active'
			}
		}
	);
	
	tlChart.from('.stats-chart__text', {
		duration: 1,
		ease: "power4",
		xPercent: -20,
		opacity: 0
	});
	
	const tlMap = gsap.timeline(
		{
			scrollTrigger: {
				trigger: '.stats-map',
				start: 'top 80%',
				toggleActions: 'play none none none', //onEnter onLeave onEnterBack onLeaveBack
				toggleClass: 'active'
			}
		}
	);
	
	tlMap.from('.stats-map__text', {
		duration: 1,
		ease: "power4",
		xPercent: 20,
		opacity: 0
	});
	
	
	// Cards
	const tlCards = gsap.timeline(
		{
			scrollTrigger: {
				trigger: '.cards',
				start: 'top center',
				toggleActions: 'play none none none', //onEnter onLeave onEnterBack onLeaveBack
				toggleClass: 'active'
			}
		}
	);
	
	tlCards.from('.card', {
		duration: 0.5,
		ease: "power1",
		yPercent: 20,
		opacity: 0,
		stagger: {
			each: 0.2
		}
	});
	
	
	
	
	
	let media = document.querySelector('.media--01');
	let mediaButton = document.querySelector('.media--01 .media__plus');
	let tlMedia = gsap.timeline({paused: true});
	
	tlMedia.to('.media--01 .media__label', {
		duration: 0.5,
		ease: "power1",
		opacity: 0
	});
	
	tlMedia.to('.media--01', {
		duration: 0.8,
		ease: "power4.inOut",
		y: "media.clientHeight + 'px'"
	}, '-=0.1');
	
	tlMedia.to('.media--01 .media__content', {
		duration: 0.5,
		ease: "power1",
		opacity: 1
	}, '-=0.6');
	
	tlMedia.to('.media--01 .plus--svg', {
		duration: 0.2,
		ease: "power1",
		rotation: "45deg",
		transformOrigin: "50% 50%"
	}, '-=0.3');
	
	mediaButton.addEventListener('click', (e) => {
		e.preventDefault();
		if (media.classList.contains('active')) {
			media.classList.remove("active");
			tlMedia.reverse(0);
		} else {
			media.classList.add("active");
			tlMedia.play();
		}
	});
	
	let media2 = document.querySelector('.media--02');
	let mediaButton2 = document.querySelector('.media--02 .media__plus');
	let tlMedia2 = gsap.timeline({paused: true});
	
	tlMedia2.to('.media--02 .media__label', {
		duration: 0.5,
		ease: "power1",
		opacity: 0
	});
	
	tlMedia2.to(media2, {
		duration: 0.8,
		ease: "power4.inOut",
		y: "media2.clientHeight + 'px'"
	}, '-=0.1');
	
	tlMedia2.to('.media--02 .media__content', {
		duration: 0.5,
		ease: "power1",
		opacity: 1
	}, '-=0.6');
	
	tlMedia2.to('.media--02 .plus--svg', {
		duration: 0.2,
		ease: "power1",
		rotation: "45deg",
		transformOrigin: "50% 50%"
	}, '-=0.3');
	
	mediaButton2.addEventListener('click', (e) => {
		e.preventDefault();
		if (media2.classList.contains('active')) {
			media2.classList.remove("active");
			tlMedia2.reverse(0);
		} else {
			media2.classList.add("active");
			tlMedia2.play();
		}
	});
	
	let media3 = document.querySelector('.media--03');
	let mediaButton3 = document.querySelector('.media--03 .media__plus');
	let tlMedia3 = gsap.timeline({paused: true});
	
	tlMedia3.to('.media--03 .media__label', {
		duration: 0.5,
		ease: "power1",
		opacity: 0
	});
	
	tlMedia3.to(media3, {
		duration: 0.8,
		ease: "power4.inOut",
		y: "media3.clientHeight + 'px'"
	}, '-=0.1');
	
	tlMedia3.to('.media--03 .media__content', {
		duration: 0.5,
		ease: "power1",
		opacity: 1
	}, '-=0.6');
	
	tlMedia3.to('.media--03 .plus--svg', {
		duration: 0.2,
		ease: "power1",
		rotation: "45deg",
		transformOrigin: "50% 50%"
	}, '-=0.3');
	
	mediaButton3.addEventListener('click', (e) => {
		e.preventDefault();
		if (media3.classList.contains('active')) {
			media3.classList.remove("active");
			tlMedia3.reverse(0);
		} else {
			media3.classList.add("active");
			tlMedia3.play();
		}
	});
	
	
	
	
	
	
	$(".impact-stories-carousel__wrapper").owlCarousel({
		items:1,
		loop:true,
		nav:true
	});
	
});

})(window.jQuery);