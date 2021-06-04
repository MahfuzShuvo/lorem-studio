$(document).ready(function() {
	// scroll
	$(window).on('scroll', function() {
		var scroll = $(window).scrollTop();
		if (scroll >= 50) {
			$(".sticky").addClass("stickyadd");
		} else {
			$(".sticky").removeClass("stickyadd")
		}
	});

	// mixitup filter portfolio
	var containerEl = document.querySelector('.portfolio-container');
    var mixer;

    if (containerEl) {
        mixer = mixitup(containerEl, {
             selectors: {
				target: '.portfolio-content',
                 control: '[data-mixitup-control]'
             },
             animation: {
				effects: 'fade translateZ(-100px)',
				duration: 400
			}
        });
    }
	

	// testimonial owl-carousel
	$(".testimonials-carousel").owlCarousel({
		// autoplay: true,
		dots: false,
		loop: true,
		nav: true,
		navText: ["<img src='public/assets/img/nav-icon-prev.png' style='width: 60%;'>","<img src='public/assets/img/nav-icon-next.png' style='width: 60%;'>"],
		responsive: {
		  0: {
			items: 1
		  },
		  768: {
			items: 2
		  },
		  900: {
			items: 2
		  }
		}
	  });


});