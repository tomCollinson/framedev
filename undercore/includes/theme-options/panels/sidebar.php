
<div class="undercore-options__panel undercore-options__sidebar" data-id="sidebar">
        
     <?php 

        $sidebarOptions = undercore_section_options('sidebar');

       foreach($sidebarOptions as $option) {

          echo undercore_html_helper_option($option["type"], $option);
        }
        ?>
 
</div> <!-- end options panel -->