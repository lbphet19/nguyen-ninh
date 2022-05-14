$(document).ready(function() {
	$(window).scroll(function() {
		alert('Hello');
		/* Act on the event */
		/*
		$('.my-post-item').each(function() {
			var top_object = $(this).position().top + $(this).outerHeight();
			var top_of_windows = $(window).scrollTop() + $(window).height();
			console.log(top_object);
			console.log(top_of_windows);
			// if(top_of_windows > top_object){
			// 	$(this).animate(
			// 		{"opacity:1"},1500
			// 	);
					
			// 	}
		})*/
	});	
});