<?php 
function carrega_estilos(){
  wp_enqueue_style('estilos-pai', get_template_directory_uri() . '/style.css');

}
add_action('wp_enqueue_scripts','carrega_estilos');
 ?>
 <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>