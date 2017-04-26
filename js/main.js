//MENU 1 - HAMBURGER MENU
$('.closeMenuToggle').click(function() {
	$(".menu").animate({width:'15%'},350);
	$( "#signin" ).hide();
	
	$(".Icon").show();
	$(".Button").hide();
	$(".closeMenuToggle").hide();
	$(".openMenuToggle").show();
});

$('.openMenuToggle').click(function() {
	$(".menu").animate({width:'75%'},350);
	$( "#signin" ).show();
	
	$(".closeMenuToggle").show();
	$(".Icon").hide();
	$(".Button").show();
	$(".Button").css("display", "block");
	$(".closeMenuToggle").css("display", "flex");
	
	$(".secondMenu").animate({width:'0px'},350);
	
});


//MENU 2 - HAMBURGER MENU
$('.openSpace').click(function() {
	$(".secondMenu").animate({width:'75%'},350);
	

	$(".menu").animate({width:'15%'},350);
	$( "#signin" ).hide();
	
	$(".Icon").show();
	$(".Button").hide();
	$(".closeMenuToggle").hide();
	$(".openMenuToggle").show();
});

$('.closeSpace').click(function() {
	$(".secondMenu").animate({width:'0px'},350);
});




//BUTTONS - LOADING CONTENT

$(document).ready(function() {
    $(".homePage").click(function() {
        $.ajax({
            url : "content/home.html",
            dataType: "text",
            success : function (data) {
                $("#content").html(data);
            }
        });
    });

    $(".reservePage").click(function() {
        $.ajax({
            url : "content/hireABikeInput.php",
            dataType: "text",
            success : function (data) {
                $("#content").html(data);
            }
        });
    });
	
	$(".aboutPage").click(function() {
        $.ajax({
            url : "content/about.html",
            dataType: "text",
            success : function (data) {
                $("#content").html(data);
            }
        });
    });
	
	$(".mapPage").click(function() {
        $.ajax({
            url : "content/map.html",
            dataType: "text",
            success : function (data) {
                $("#content").html(data);
            }
        });
    });
	
	$(".reportPage").click(function() {
		$.ajax({
			type: "POST",
            url : "content/report.php",
            dataType: "text",
            success : function (data) {
				$("#content").html(data);
            }
        });

    });
	
	$(".settingPage").click(function() {
		$.ajax({
			type: "POST",
            url : "content/setting.php",
            dataType: "text",
            success : function (data) {
				$("#content").html(data);
            }
        });

    });
	
	$(".hirePage").click(function() {
		$.ajax({
											type: "POST",
            	url : "content/currentHire.php",
            	dataType: "text",
            	success : function (data) {
				$("#content").html(data);
            }
        });

    });
	
}); 
	


