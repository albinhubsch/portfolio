

var header = {
	
	setHeight: function(){
		var screenH = $(window).height();
		$("header").css({'height': (screenH-100)+'px'});
		$("#main-nav").css({'margin-top': (screenH-100)+'px'});
		$("#go-down-btn").css({'margin-top': (screenH-248)+'px'});
	},

};

var Scroll = {

	scrollDown: function(){
		$('html, body').animate({ scrollTop: $(window).height()-100 }, 400);
	},
};