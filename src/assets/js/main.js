$(window).on('load', () => {
	$(".mmenu").click(function (e) {
		e.preventDefault;
        $(this).parents('header').toggleClass('open');
    });
});
