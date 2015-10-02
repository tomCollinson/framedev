<?php
/*
	ADD PACKAGE DETAILS

	Theme Options General holds the output for the general options panel

    MOVE THE JS OUT OF THIS FILE!
*/ 
?>
<script>
(function($){
    undercore_media_upload = {

        bind_click : function(){
            $('.media-upload').on('click', function(e){
                e.preventDefault();
                var container = $(this).closest('.undercore-option-control');
                var custom_uploader = wp.media({
                    title: 'Media upload',
                    button: {
                        text: 'Upload image'
                    },
                    multiple: false
                })
                .on('select', function(){
                    var attachement = custom_uploader.state().get('selection').first().toJSON();
                    container.find('.media-preview').attr('src', attachement.url);
                    container.find('.media-url').val(attachement.url).trigger('change');
                    container.addClass('undercore-media-active');
                })
                .open();
            });
        },

        bind_delete : function(){
            $('.undercore-media-delete').live('click', function(e){
                e.preventDefault();
                var container = $(this).closest('.undercore-option-control');
                container.find('.media-url').val('');
                container.find('.media-preview').hide(400, function(){ container.removeClass('undercore-media-active'); container.find('.media-preview').removeAttr('style'); });
                container.find('.undercore-media-delete').remove();
            });
        },

        bind_change : function(){
            $('.media-url').on('change blur',function(e){
                e.preventDefault();
                var container = $(this).closest('.undercore-option-control'),
                    input = $(this),
                    inputVal = input.val();

                    if (inputVal === ''){
                        container.removeClass('undercore-media-active');
                        container.find('.undercore-media-delete').remove();
                    } else {
                        container.addClass('undercore-media-active');
                        console.log('haha');
                        container.append('<div class="undercore-media-delete"></div>');
                    }

            })
        }

}

})(jQuery)

    jQuery(document).ready(function($) {
         
        undercore_media_upload.bind_click();
        undercore_media_upload.bind_delete();
        undercore_media_upload.bind_change();

    });
</script>

<div class="undercore-options__panel undercore-options__general" data-id="general">
        
     <?php 

        $generalOptions = undercore_section_options('general');

       foreach($generalOptions as $option) {

          echo undercore_html_helper_option($option["type"], $option);
        }
        ?>
 
</div> <!-- end options panel -->
