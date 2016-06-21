$(document).bind("mobileinit", 

	function() {
		
		$.mobile.page.prototype.options.domCache = false;

		$.mobile.fixedToolbars.setTouchToggleEnabled(false);

		$.extend(
			
			$.mobile, {

				loadingMessage: "One moment while we load everything...",

				defaultPageTransition: "none",
				
				orientationChangeEnabled: true,
				
				touchOverflowEnabled: true

			}	// .mobile
			
		);	// .extend


		$(".header-toggle-button").bind("tap", function() {

			$(".header-toggle-button").toggleClass("on");

			$(".ui-navbar").slideToggle("slow","swing");
			
			$(this).trigger("updatelayout");

		});

	}	// anon
	
);

function checkOrientation() {

	var targetScale;
	
	var targetDensity = "96";
	
	var targetDPI;
	
	var targetWidth = "device-width";
	
	var YAW_DEG = 90;
	
	var TRUE_SCALE = "1.0";

	var TRUE_DENSITY = "140";

	/* Rezound/Vigor/EVO 3D Values */

	var ZOOM_SCALE = "1.5";

	var ZOOM_DENSITY = "80";
	
	if (Math.abs(window.orientation) == YAW_DEG)
	
	{
	
		targetScale = ZOOM_SCALE;
	
		targetDensity = ZOOM_DENSITY;
		
	}
	
	else
	
	{
		
		targetScale = TRUE_SCALE;
	
		targetDensity = TRUE_DENSITY;
		
	}

	var ua = navigator.userAgent.toLowerCase();

	if ((ua.indexOf("android") > -1)) {
	
		targetDPI = "target-densitydpi=" + targetDensity + ", ";
		
	} else {
		
		targetDPI = "";
		
	}
	
	$(this).trigger("updatelayout");
	
	$("meta[name=\"viewport\"]").attr("content", targetDPI + "height=device-height, width=" + targetWidth + ", user-scalable=no, initial-scale=" + targetScale + ", maximum-scale=" + targetScale + ", minimum-scale=" + targetScale);
	
	
	var debugString = "";
	
	debugString = debugString + "<p>viewport content is: " + $("meta[name=\"viewport\"]").attr("content") + "</p>";

	debugString = debugString + "<p>window.width is: " + $(window).width() + "</p>";
	
	debugString = debugString + "<p>User-agent: " + ua + "</p>";
	
	//	$(".view-root").append(debugString);
	
}

window.addEventListener("onresize", function() {

	checkOrientation();

});

window.addEventListener("orientationchange", function() {

	checkOrientation();

});

$(window).bind("pageinit", function() {
	
	checkOrientation();
	
});

$("#vp-1").bind("tap", function() {
	
	$(this).controller.play();
	
});

if (typeof BigD == "undefined") {

	var BigD = {};

}

$(function() {

	// Metaglobals

	var MY_FRAME_WIDTH = 133;	// The width of an individual frame 
	
	var MY_FRAME_HEIGHT = 277;	// The height of an individual frame
	
	var MY_FRAME_COUNT = 48;	// The total number of frames in the series

	BigD.init = function() {

		var sPath;
		
		var arrayofImages = [];

		for (i = 0 ; i < MY_FRAME_COUNT ; i++) {
			
			sPath = i
	
			// TODO: This would lend itself nicely to a recursive function

			// The image file names incorporate leading zeroes in their series.
			
			// This pads the loop iteration counter with zeroes to match the file name.
			
			if (i < 100) {
				
				sPath = "0" + sPath;		
				
				if (i < 10) sPath = "0" + sPath;
				
			}
			
			arrayofImages[i] = "/img/360-240/Rezound_Vertical_Phone_" + sPath + ".png";
			
		}
		
		BigD.zoetrope.init(arrayofImages, $(".viewport-container"));

	};

	BigD.zoetrope = {

		init : function(arrayofImages, parentElement) {
			
			/*

			INFO: No need to inject html; keep this for development, but

			use markup for production; put it in /include/content/img-tags.php
			
			*/

			/*

			$(arrayofImages).each(function() {

				var img = $("<img>");

				img.attr("src", this);

				img.attr("width", MY_FRAME_WIDTH);

				img.attr("height", MY_FRAME_HEIGHT);

				$(parentElement).append(img);

			});

			*/
			
			BigD.zoetrope.FRAME_COUNT = MY_FRAME_COUNT;
			
			BigD.zoetrope.FRAME_WIDTH = MY_FRAME_WIDTH;
			
			BigD.zoetrope.MAX_WIDTH = MY_FRAME_COUNT * MY_FRAME_WIDTH;

			// Bind our functionality to the touch gestures

			$(parentElement).parent().bind("touchstart", BigD.zoetrope.touchStart);

			$(parentElement).parent().bind("touchmove", BigD.zoetrope.touchMove);

			$(parentElement).parent().bind("touchend", BigD.zoetrope.resetTouch);
			
		},
		
		locX : 0,

		locY : 0,

		touchStart : function(e) {

			// Run only if a touch event covers more than three pixels

			if (Math.abs(BigD.zoetrope.locX - e.originalEvent.touches[0].pageX) > 3) {

				BigD.zoetrope.locX = e.originalEvent.touches[0].pageX;

			}

			BigD.zoetrope.locY = e.originalEvent.touches[0].pageY;

		},

		touchMove : function(e) {
			
			// If the swipe is more upward or downward, gtfo

			if (Math.abs(BigD.zoetrope.locY - e.originalEvent.touches[0].pageY) > 30) {

				return;

			}

			e.preventDefault();

			// Now we're cooking. Horizontal swipe.
			
			// Determine the extant left margin

			var currentLocation = parseInt($(this).css("margin-left").replace("px", ""));
			
			var newLocation = 0;
			
			// This is where the magic happens.
		
			// Which direction was the swipe?
			
			if (BigD.zoetrope.locX > e.originalEvent.touches[0].pageX) {	// LEFT
			
				if (Math.abs(newLocation) < (BigD.zoetrope.MAX_WIDTH) ) {

					newLocation = (currentLocation - BigD.zoetrope.FRAME_WIDTH);
					
					newLocation = (newLocation % BigD.zoetrope.MAX_WIDTH)

				}
			
// console.log("LEFT SWIPE");

			} else {	// RIGHT

				if (currentLocation >= 0) {

					newLocation = -1 * BigD.zoetrope.MAX_WIDTH;

				} else {

					newLocation = (currentLocation + BigD.zoetrope.FRAME_WIDTH);
				
				}

// console.log("RIGHT SWIPE");

			}
			
// console.log("Modulus value is " + (newLocation % BigD.zoetrope.MAX_WIDTH));
		
// console.log("currentLocation is " + currentLocation + ", newLocation is " + newLocation);

			// Simulates the effect of wrapping around at the end of the spin.
			
			$(this).css("margin-left", newLocation);

			BigD.zoetrope.locX = e.originalEvent.touches[0].pageX;

		},

		resetTouch : function() {

			BigD.zoetrope.locX = 0;

			BigD.zoetrope.locY = 0;

		}

	}

	// run init

	BigD.init();

});