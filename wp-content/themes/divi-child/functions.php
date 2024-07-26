<?php
function my_theme_enqueue_styles() {
 
    $parent_style = 'divi-style';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/*
add_filter('pre_age_gate_custom_fields', 'my_custom_fields', 10, 1);

function my_custom_fields($fields){
  $fields .= '<label><input type="checkbox" name="ag_field_terms" value="1" /> I accept the <a href="/terms-of-service">Terms of Service</a> and <a href="/privacy-policy">Privacy Policy</a></label></br></br>';
  return $fields;
}
add_filter('age_gate_validation', 'my_validation_rules', 10, 1);

function my_validation_rules($rules){
  return array_merge($rules, [
    'ag_field_terms' => 'required'
  ]);
}
*/


?>