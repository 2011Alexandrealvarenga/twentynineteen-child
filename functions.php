<?php 
function carrega_estilos(){
  wp_enqueue_style('estilos-pai', get_template_directory_uri() . '/style.css');

}
add_action('wp_enqueue_scripts','carrega_estilos');
 ?>
 