$('.closeMenuToggle').click(function() {
	$(".menu").animate({width:'15%'},350);
	$( "#signin" ).hide()
	
	$(".Icon").show();
	$(".Button").hide();
	$(".closeMenuToggle").hide();
	$(".openMenuToggle").show();
});

$('.openMenuToggle').click(function() {
	$(".menu").animate({width:'75%'},350);
	$( "#signin" ).show()
	
	$(".closeMenuToggle").show();
	$(".Icon").hide();
	$(".Button").show();
	$(".Button").css("display", "block");
	$(".closeMenuToggle").css("display", "flex");
	
	$(".secondMenu").animate({width:'0px'},350);
	
});



$('.openSpace').click(function() {
	$(".secondMenu").animate({width:'75%'},350);
	
	
	
	$(".menu").animate({width:'15%'},350);
	$( "#signin" ).hide()
	
	$(".Icon").show();
	$(".Button").hide();
	$(".closeMenuToggle").hide();
	$(".openMenuToggle").show();
});

$('.closeSpace').click(function() {
	$(".secondMenu").animate({width:'0px'},350);
});



