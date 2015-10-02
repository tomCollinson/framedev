(function($, window, undefined){

	var tabs = $('.undercore-options__tab'),
		panels = $('.undercore-options__panel');

	tabs.on('click',function(){
		var id = $(this).attr('data-id');
		panels.hide();
		$('.undercore-options__main').find("[data-id='" + id + "']").show();
	});

})($, window, undefined);