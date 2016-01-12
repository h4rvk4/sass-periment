$(function() {
	$("nav a").bind( "click", function(event) {
		event.preventDefault();
		event.stopPropagation();

		$("nav li").removeClass("active");
		$("section").css("display", "none");

		var anchor = $(this).prop("href").split("#")[1];
		location.hash = anchor;

		$(this).parent().addClass("active");
		$("#section_"+anchor).css("display", "block");
		return false;
	});

	if (location.hash != "") {
		var anchor = location.hash.split("#")[1];
		$("a[href=#"+anchor+"]").parent().addClass("active");
		$("#section_"+anchor).css("display", "block");
	}
});