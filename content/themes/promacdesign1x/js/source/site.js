jQuery(document).ready(function($) {
	$(window).load(function() {
		$("#loader").fadeOut(150);
	});
	var root = $('html, body'),
			FullHeight = $(".landing");
	//Smooth scroll
	$('a.smoothy').click(function() {
		 var href = $.attr(this, 'href');
		 root.stop().animate({
				 scrollTop: $(href).offset().top - 120
		 }, 500, function () {
				 window.location.hash = href;
		 });
		 return false;
	});
	$(window).on('resize',resize);
	resize();
	$(window).scroll(function() {
								if ( !$(window).scrollTop() ) {
			$('.view-more').fadeIn();
		} else {
			$('.view-more').fadeOut();
		}
	});
	if (!$(window).scrollTop()) {
		$('.view-more').fadeIn();
	} else {
		$('.view-more').fadeOut();
	}
	$('.landing.carousel-fade').carousel({
		interval: 3000,
		pause: 'none'
	});
	$('.view-more a').click(function(e) {
		e.preventDefault();
		e.stopPropagation();
		$("html, body").animate({ scrollTop: $(document).height() }, "slow");
		return false;
	});
	$("#search-bar input").focus(function() {
		// Input open
	}).blur(function() {
			$("#search-bar").collapse('hide')
	});

	// SECTION FILTER
	$('#filter-section li a').click(function(e){
		if (!$(this).hasClass('link')) {
			e.preventDefault();
			e.stopPropagation();
			$(".filter li a").each(function(){
				$(this).removeClass('active');
			});
			$(this).addClass('active');
			$('section.filtering').hide();
			var showclicked = $(this).attr("href");
			if (showclicked.indexOf("artworks") != -1) {
				$('#artwork-slider').hide();
				$('#list').hide();
				$('#thumbs').fadeIn();
			}
			$(showclicked).fadeIn();
			return false;
		}
	});
				// ARTISTS LIST / THUMBS
	if ( $(".artists-list").length > 0 ) {
		$(".artists-list a").mouseenter(function() {
			$(".artists-thumb").empty();
			var thumb = $(this).data("thumb");
			if ( thumb !== undefined ) {
				if ( thumb.length > 0 ) {
					var image = new Image();
					$(image).load(function () {
						$(image).hide().appendTo(".artists-thumb").fadeIn(500);
					}).attr("src", thumb);
				}
			}
		}).mouseleave(function() {
			$(".artists-thumb").empty();
		});
	}
	// DATE FILTER
	if ( ( $("#exhibitions").length > 0 ) || ( $("#artfairs").length > 0 ) ){
		$(".filter li a").click( function(e) {
			e.preventDefault();
			$year = $(this).data('year');
			if ($year == 'all') {
				$(".result-filter article").each(function(){
					$(this).fadeIn();
				});
			} else {
				$(".result-filter article").each(function(){
					$year2 = $(this).data('year');
					if($year != $year2) {
						$(this).hide();
					} else if ($year == $year2) {
						$(this).fadeIn();
					}
				});
			}
		});
	}
	// PRESENTATION FILTER
	if ( $(".filtering").length > 0 ) {
		$(window).load(function() {
			$('#artwork-slider').flexslider({
				controlNav : false,
				slideshow : false,
				animationSpeed: 500,
			});
			var slider = $('#artwork-slider').data('flexslider');
			$('#thumbs article figure').click(function () {
				slides = $(this).data('slide');
				$('#thumbs').hide();
				$('#artwork-slider').fadeIn(1100);
				slider.flexAnimate(slides);
			});
		});
		// SLIDE / THUMBS / DETAILS FILTER
		$('#grid a').click(function(e) {
			$(".filter li a").each(function(i){
				if (i > 0){
					$(this).removeClass('active');
				}
			});
			$(this).addClass('active');
			e.preventDefault();
			$('#artwork-slider').hide();
			$('#list').hide();
			$('#thumbs').fadeIn();
			return false;
		});
		$('#slideshow a').click(function(e) {
			$(".filter li a").each(function(){
				$(this).removeClass('active');
			});
			$(this).addClass('active');
			e.preventDefault();
			$('#thumbs').hide();
			$('#list').hide();
			$('#artwork-slider').fadeIn();
			return false;
		});
		$('#two-col a').click(function(e) {
			$(".filter li a").each(function(){
				$(this).removeClass('active');
			});
			$(this).addClass('active');
			e.preventDefault();
			$('#thumbs').hide();
			$('#artwork-slider').hide();
			$('#list').fadeIn();
			return false;
		});
	}
	//FANCYBOX
	$(".fancybox").attr('rel', 'gallery').fancybox({
		padding : 0,
		margin : [70, 60, 70, 60],
		maxWidth: "100%",
		maxHeight: "100%",
		autoResize	: true,
		fitToView	: false,
		nextEffect : 'fade',
		prevEffect : 'fade',
		openEffect : 'elastic',
		closeEffect : 'elastic',
		tpl: {
			closeBtn: '<a title="Close" class="fancybox-item fancybox-close" href="javascript:;">CLOSE</a>'
		},
	});
	function resize(){
		var windowHeight = $(window).height();
		var windowWidth = $(window).width();
		FullHeight.css ({ height:windowHeight});
	}
	if ( $("#slider").length > 0 ) {
		$('#page-slider').flexslider({
			controlNav : false,
			directionNav : false,
			slideshow : true,
			animationSpeed: 500,
			slideshowSpeed: 3000,
		});
	}
});
