$(document).ready(function(){

	$("#content > section").hide();
	$("#content section:first").show();
	$("#tabs li:first").addClass("active");

	$(".nav").click(function(){
		$("#tabs li").removeClass("active");

		var current = $(this).attr("href");

		$("#tabs li a[href='"+current+"']").parent().addClass("active");
		$("#content > section").hide();
		$(current).show();
		
		return false;
	});

});