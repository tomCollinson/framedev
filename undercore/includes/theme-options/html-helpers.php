<?php

function undercore_html_helper_option($fieldType, $option) {
	
	$output = '<div class="undercore-option-wrap">
    	<h4>'. $option['name'] .'</h4>
    	<div class="undercore-option-control ';

    if ($fieldType === "upload") {
    	$output .= ($option['value'] !== '') ? 'undercore-media-active' :'';
    }	
    
    $output .= '"><div class="undercore-option-field-wrap '.  $option['id'] .'">';

    if ($fieldType === "upload"){
    	$output .= '<input class="header_logo_url undercore-upload-field media-url" type="text" name="'. $option['id'] .'" size="60" value="'.  $option['value'] .'">
				    	<a href="#" class="header_logo_upload media-upload">Upload</a>
				 
				    <img class="undercore-upload-img-preview media-preview" src="'.  $option['value'] . '" height="100" width="100"/>';
				       if ($option['value'] !== ''){ 
		                $output .= '<div class="undercore-media-delete"></div>';
		                };
    }

    if ($fieldType === "text"){
    	$output .= '<input type="text" name="' .  $option['id'] . '" id="' . $option['id'] . '" value="' . $option['value'] . '">';
    }
    if ($fieldType === "textarea") {
    	$output .= '<textarea name="' . $option['id'] . '"></textarea>';
    }
    if ($fieldType === "checkbox") {
    	$output .= '<input type="checkbox" value="true" name="' . $option['id'] . '"';
    	$output .=  ($option['value']) ? ' checked="checked"' : '';
    	$output .=  '>'; 
    }
    if ($fieldType === "select") {
    	$output .= '<select name="' . $option['id'] . '" id="' . $option['id'] . '">';
    		foreach($option['options'] as $key => $val) {
    			$output .= '<option value="' . $key . '"';

    			if ($key == $option['value']){ 
    				$output .= " selected";
    			};

    			$output .= '>' . $val . '</option>';
    		};
    	$output .= '</select>';
    }

    $output .= '</div></div><div class="undercore-option-description">'. $option['desc'] . '</div></div>';

    return $output;
}

?>