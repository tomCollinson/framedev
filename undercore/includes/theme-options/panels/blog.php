
<div class="undercore-options__panel undercore-options__blog" data-id="blog">
     <div class="undercore-options__overview">
     	<h2>Blog Options</h2>
     	<p><?php echo __("Control which elements appear on single blog posts","undercore") ?></p>
     </div>
     <?php 

        $blogOptions = undercore_section_options('blog');

       foreach($blogOptions as $option) {

          echo undercore_html_helper_option($option["type"], $option);
        }
      ?>
 
</div> <!-- end options panel -->