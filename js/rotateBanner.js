$(document).ready(function() {

	function rotateBanner(){
		var rotator = $("#header");
		if(rotateBanner.is('#indexHead')){
			$("#header").css("background", "url([../img/banner_large.jpg])");
			} else if (rotateBanner.is('#movieHead')){
				$("#header").css("background", "url([../img/banner_large_Two.jpg])");
			} else if (rotateBanner.is('#contactHead')){
				$("#header").css("background", "url([../img/banner_large_Three.jpg])");
			}
		}
	}

}); // End document ready 