<?php
/*
	ADD PACKAGE DETAILS

	Theme Options General holds the output for the general options panel

    MOVE THE JS OUT OF THIS FILE!
*/ 
?>
<script>
(function($){

	var socialArray = [];

	undercore_social_options = {

		

		bind_click : function(){
			$('.undercore-social-account-add').on('click', function(e){

				e.preventDefault();

				var container = $('.undercore-options__social'),
					socialIcon = container.find('#undercore_social_icon').val(),
					socialUrl = container.find('#undercore_social_url').val();

				socialArray.push({
					'icon' : socialIcon,
					'url' : socialUrl
				});
				undercore_social_options.update_listing();

			});

			$('.undercore-social-remove').on('click',function(e){
				e.preventDefault();
				var index = $(this).attr('data-id');
				socialArray.splice(index,1);
				undercore_social_options.update_listing();
			})
		},

		update_listing : function(){
			var socialList = $('.undercore-social-listing'),
				output = '';
				socialList.html('');
			for (var i =0; i < socialArray.length; i +=1){
				output = '<div class="undercore-social-list-item">';
				output += '<input type="text" disabled value="' + socialArray[i].icon + '" name="undercore_social_icon[' + i +']">';
				output += '<input type="text" value="' + socialArray[i].url + '" name="undercore_social_url[' + i +']">';
				output += '<div class="undercore-social-remove" data-id="' + i + '">Remove</div>';
				output += '</div>';
				socialList.append(output);
			}

		}

	}

})(jQuery);

 jQuery(document).ready(function($) {
         
        undercore_social_options.bind_click();

    });

</script>

<div class="undercore-options__panel undercore-options__social" data-id="social">
        
     <?php 

        global $undercore_options;

        $socialOptions = undercore_section_options('social');

        foreach($socialOptions as $option) {

            echo undercore_html_helper_option($option["type"], $option);
        }
        ?>

     <div class="undercore-option-field-wrap">
		    	<a class="undercore-social-account-add">Add Account</a>
		    </div>
	<div class="undercore-social-listing">
	
	</div>
 
</div> <!-- end options panel -->
