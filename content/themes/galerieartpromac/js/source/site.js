// -------------------------------------------------------------------------------------
// Fixed iOS iPad landscape mode bug with 100% height
// http://stackoverflow.com/questions/18855642/ios-7-css-html-height-100-692px
// -------------------------------------------------------------------------------------
if (navigator.userAgent.match(/iPad;.*CPU.*OS 7_\d/i)) {
    $('body').height(window.innerHeight);
    window.scrollTo(0, 0);
}

jQuery(document).ready(function($) {
	$(window).load(function() {
		$("#loader").fadeOut(150);
		$('.row-thumb').each(function() {
			var h = $(this).delay(500).height();
			$(this).children('.row-info').css({'height':h-40});
		});
	});
	$(document).on('facetwp-loaded', function() {
		$('.row-thumb').each(function() {
			var h = $(this).height();
			$(this).children('.row-info').css({'height':h-40});
		});
	});
	var root = $('html, body'),
		ctHeight = $(".ct-height"),
		ctHeightPt = $(".ct-heightPt"),
		ctWidth = $(".ct-width"),
		tlSection = $(".time-nav"),
		tlBlocks = $(".tl-blocks"),
		tlItem = $('.tl-item'),
		windowWidth,
		windowHeight,
		timer,
		scrolled;
	if (root.hasClass('single-artist')){
			headerHeight = 114;
       } else {
			headerHeight = 55;
       }
  $(window).on('resize',resize);
	resize();
	if ($("body").hasClass("home")) {
		if (timer) clearTimeout(timer);
		timer = setTimeout(function(){
			$('header').addClass('showmenu');
		}, 3000);
	} else {
		$('header').addClass('showmenu');
	}
	$(window).scroll(function() {
		scrolled = Math.max(0, $(window).scrollTop());
		if ( scrolled >= 10 ){
            $('header').addClass('showmenu');
        }
	});
    $('.rideau.carousel-fade').carousel();
    //Bullet Menu scroll
    $('a.smoothy').click(function() {
       var href = $.attr(this, 'href');
       root.stop().animate({
           scrollTop: $(href).offset().top - (headerHeight-1)
       }, 500, function () {
           window.location.hash = href;
       });
       return false;
    });
    //Tooltip
    $("[rel='tooltip']").tooltip({
		placement : 'left',
    });
	//Timeline
	if ($("#timeline").length){
		var	blW    = tlSection.outerWidth(),
			blSW   = tlSection[0].scrollWidth,
			wDiff  = (blSW/blW)-1,
			mPadd  = 60,
			damp   = 20,
			mX     = 0,
			mX2    = 0,
			posX   = 0,
			mmAA   = blW-(mPadd*2),
			mmAAr  = (blW/mmAA);
		
		tlSection.mousemove(function(e) {
			mX = e.pageX - this.offsetLeft;
			mX2 = Math.min( Math.max(0, mX-mPadd), mmAA ) * mmAAr;
		});
		setInterval(function(){
			posX += (mX2 - posX) / damp;
			tlBlocks.css({marginLeft: -posX*wDiff });
		}, 10);
	}
	//Artists
	$('#all').on('click', function() {
            $('.mix.in-the-list').show();
            $('.mix.project-with').show();
    });
    $('#rep').on('click', function() {
            $('.mix.in-the-list').show();
            $('.mix.project-with').hide();
    });
    $('#proj').on('click', function() {
           $('.mix.in-the-list').hide();
           $('.mix.project-with').show();
    });
    //showmore
    $('#ShowMore').hide();
    $('#loadMore').click(function () {
        $('#ShowMore').show();
         $('#loadMore').hide();
    });
	//video
	$('.x-play-button').on('click', function() {
            $('#PosterVideo').hide();
            $('.x-play-button').hide();
            $('iframe').show();
    });
	//FANCYBOX
	$(".fancybox")
			.attr('rel', 'gallery')
			.fancybox({
				padding : 0,
				margin : [70, 60, 10, 60],
				maxWidth: "100%",
				maxHeight: "100%",
				autoResize	: true,
				fitToView	: false,
				nextEffect : 'fade',
				prevEffect : 'fade',
				openEffect : 'elastic',
				closeEffect : 'elastic',
				helpers : {
					title : {
						type : 'over'
					}
				},
				afterShow : function() {
					stButtons.locateElements();
					$(".fancybox-title").hide();
					$(".fancybox-wrap").hover(function() {
							$(".fancybox-title").stop(true,true).slideDown(200);
						}, function() {
							$(".fancybox-title").stop(true,true).slideUp(200);
					});
				},
				afterLoad: function() {
					this.title = this.title ? this.title + buildShareThis(this.href) : buildShareThis(this.href);
				},
	});
	function buildShareThis(url){
		var customShareThis  = "<div class='socials'>";
			customShareThis += "<span class='st_tumblr_large' displayText='Tumblr' st_url='"+url+"'></span>";
			customShareThis += "<span class='st_pinterest_large' displayText='Pinterest' st_url='"+url+"' st_img='"+url+"'></span>";
			customShareThis += "<span class='st_googleplus_large' displayText='Google +' st_url='"+url+"'></span>";
			customShareThis += "<span class='st_instagram_large' displayText='instagram' st_url='"+url+"'></span>";
			customShareThis += "<span class='st_twitter_large' displayText='Tweet' st_url='"+url+"'></span>";
			customShareThis += "<span class='st_facebook_large' displayText='Facebook' st_url='"+url+"'></span>";
			customShareThis += "</div>";
			return customShareThis;
	}
	function resize(){
		windowHeight = Math.max($(window).height(),480);
		windowWidth = Math.max($(window).width(),480);
		ctHeight.css ({ height:windowHeight});
		ctHeightPt.css ({ height:windowHeight-headerHeight});
		ctWidth.css ({ width:windowWidth});
		// tlHeight = tlItem.height();
		tlWidth = tlItem.width();
		tlOver = tlItem.children('.item-inner');
		tlOver.css({width:tlWidth});
	}
});
