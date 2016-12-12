/*MOBILE MENU*/

$(document).ready(function(){

	if (matchMedia) {
		var mq = window.matchMedia("(max-width: 1024px)");
		var mq2 = window.matchMedia("(min-width: 1024px)");
		mq.addListener(mobileNav);
		mobileNav(mq);
		mq2.addListener(mobileText);
		mobileText(mq2);
	}

	function mobileNav(mq) {
		if (mq.matches) {
			$(".open").css("display", "block");

			$(".open").click(function(){
				$(".open").css("display", "none");
				$(".close").css("display", "block");
				$(".Nmobile").css("display", "block");
			});

			$(".close").click(function(){
				$(".open").css("display", "block");
				$(".close").css("display", "none");
				$(".Nmobile").css("display", "none");
			});
		}else {
			$(".open").css("display", "none");
			$(window).scroll(function(){
				chaptersImages();
			});
		}
	}

	function mobileText(mq2){
		if (mq2.matches) {
			$(".vwdesk").addClass("valign-wrapper");

		}
	}

	function chaptersImages(){
		var haut = (document.body.clientHeight);
		var scrolled = $(window).scrollTop();
		$('.chapterImage').css('margin-top',(0-(scrolled*0.05))+'px');
	}

});
