
<div class="undercore-options__panel undercore-options__sidebars" data-id="sidebars">
        
     <?php 

        $sidebarOptions = undercore_section_options('sidebars');

       foreach($sidebarOptions as $option) {

          echo undercore_html_helper_option($option["type"], $option);
        }
        ?>
 
</div> <!-- end options panel -->