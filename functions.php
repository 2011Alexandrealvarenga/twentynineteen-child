<?php 
function carrega_estilos(){
  wp_enqueue_style('estilos-pai', get_template_directory_uri() . '/style.css');
  // wp_enqueue_style('estilos-filho', '"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array('jquery'),'4.0.0',true);

  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Rajdhani:400,500,600,700|Seaweed+Script' );


wp_enqueue_script('jquery', get_template_directory_uri().'/js/query-3.4.1.min.js', array('jquery'),'4.0.0', true);
// <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
}
add_action('wp_enqueue_scripts','carrega_estilos');
 ?>
 <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>