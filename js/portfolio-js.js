

var header = {
	
	setHeight: function(){
		var screenH = $(window).height();
		$("header").css({'height': (screenH-100)+'px'});
		$("#main-nav").css({'margin-top': (screenH-100)+'px'});
	},

};