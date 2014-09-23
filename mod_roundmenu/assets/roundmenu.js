(function (doc,win,$) {
	var round_menu_adjust = function(){
		var round_menu = doc.getElementById('roundMenu'),
			ww = win.innerWidth;
		if (ww < 400) {
			round_menu.style.height = ww + 'px';
		} else {
			round_menu.style.height = 400 + 'px';
		}
	}

	
	win.onresize = function() {
		round_menu_adjust();
	}; 

	$(doc).ready(function() {
		round_menu_adjust();
		$(".round_menu_wrapper").click(function(e) {
			$(".round_menu-button").each(function() {
				// check if clicked point (taken from event) is inside element
				var mouseX = e.pageX;
				var mouseY = e.pageY;
				var offset = $(this).offset();
				var width = $(this).width();
				var height = $(this).height();
				if (mouseX > offset.left && mouseX < offset.left+width 
					&& mouseY > offset.top && mouseY < offset.top+height) {
					$(this).click(); // force click event
				}
			});
		});
	});
})(document,window,jQuery);