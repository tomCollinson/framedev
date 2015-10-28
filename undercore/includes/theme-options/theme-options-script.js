(function($, window, undefined){


	var undercoreJS = {

		mainTabs : function(){
			// Simple setup of main tabs in theme options.
			var tabs = $('.undercore-options__tab'),
			panels = $('.undercore-options__panel');

			tabs.on('click',function(){
				var id = $(this).attr('data-id');
				panels.hide();
				$('.undercore-options__main').find("[data-id='" + id + "']").show();

			});
		},

		colorPicker : function(selectEl){
			$(selectEl).each(function(){
				var baseEl = $(this).find('input'),
				    preview = $(this).find('.undercore-color-preview');

			baseEl.UndercoreColorPicker({
				onSubmit: function(hsb, hex, rgb, el) {
					baseEl.val(hex);
					preview.css('background-color', '#' + hex);
					baseEl.UndercoreColorPickerHide();
				},
				onBeforeShow: function () {
					baseEl.UndercoreColorPickerSetColor(this.value);
				},
				onShow: function (colpkr) {
					$(colpkr).fadeIn(500);
					return false;
				},
				onHide: function (colpkr) {
					$(colpkr).fadeOut(500);
					return false;
				},
				onChange: function (hsb, hex, rgb) {
					baseEl.val('#' + hex);
					preview.css('background-color', '#' + hex);
				}
			}).bind('keyup', function(){
					baseEl.UndercoreColorPickerSetColor(this.value);
					preview.css('background-color', this.value);
				});
			});
			
		},

		contentTabs : function() {
			var container = $('.undercore-tabs');

			container.each(function(){
				var base = $(this);
				var tabs = base.find('.undercore-tabs__tab');
				var tabContent = base.find('.undercore-tabs__content');

				tabs.on('click', function(){
					var tabId = $(this).data('id');

					tabs.removeClass('undercore-tabs__tab--active');
					$(this).addClass('undercore-tabs__tab--active');

					tabContent.removeClass('undercore-tabs__content--active');
					base.find('[data-tab="' + tabId + '"]').addClass('undercore-tabs__content--active');
				});

			});
		}

	}




$(document).ready(function(){

		undercoreJS.mainTabs();
		undercoreJS.contentTabs();

		// Create the color picker for theme options
		undercoreJS.colorPicker('.undercore-color-picker');
	});

})($, window, undefined);