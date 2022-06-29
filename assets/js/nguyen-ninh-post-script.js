$("#btnOpenForm").click(function(event) {
	$("body").hasClass("show-mobile-menu") ? 
	$("body").removeClass("show-mobile-menu") :
	$("body").addClass("show-mobile-menu");
});