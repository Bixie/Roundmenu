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
	});
})(document,window,jQuery);