$(function () {
    var maxOfferingHeights,
    headerHeight = $('header').innerHeight();
    if ($(window).width() > 768 && $('.dropdown_content').is(':visible')) {
		setTimeout(function() {
			var offeringHeights = $(".nav li .dropdown_content li").map(function(){
				return $(this).height();
			}).get();
			maxOfferingHeights = Math.max.apply(null, offeringHeights);
			$(".nav li .dropdown_content li, .dropdown_content-hover_bg").css({
				'height': maxOfferingHeights,
				'min-width': maxOfferingHeights
			});
			// $('.dropdown_content').css({
            //     'left': $(window).width() - ($('.dropdown_content').offset().left + (maxOfferingHeights * $('.dropdown_content>li').length))
            // });            
		}, 1500);

		$('.dropdown_main').hover(
			function() { //hover in
				$(this).find('.dropdown_content').css({
					'width': maxOfferingHeights * $(this).find('.dropdown_content>li').length,//$(window).width() - $(this).find('.dropdown_content').offset().left,
					'height': maxOfferingHeights,
					'top': headerHeight - 4
				});
			},
			function() { //hover out
				$(this).find('.dropdown_content').css({
					'width': 0,
					'height': 0
				});
			}
		);
		$('.dropdown_content>li').hover(
			function() { //hover in
				$('.dropdown_content-hover_bg').css({
					'opacity': 1,
					'transform': 'translate3d(' + ($(this).offset().left - $('.dropdown_content').offset().left) + 'px, 0px, 0px)'
				});
			},
			function() { //hover out
				$('.dropdown_content-hover_bg').css({
					'opacity': 0
				});
			}
		);
	}
    $('.footer_top .lc_plus').on('click', function(){
      $('.footer_content').slideToggle();
      $('html, body').animate({
          scrollTop: $(document).height()
      }, 500);
    });
    if($('.blog_container').length > 0){
      $('body').css({'background-color': '#f8fafa', 'height': 'auto'});
    }
    $('.tags_list').each(function( index ) {
        cards = $(this).find('li');
        if(cards.length > 2){
            var numTimes = cards.length - 2;
            for (var i = 0; i < numTimes; i++) {
                $(this).find("li:last").remove();
            }
            $(this).append("<li>+"+numTimes+"</li>")
        }
    });
});