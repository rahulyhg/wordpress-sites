<?php
  $post_image_src = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'thumbnail', false );
?>
<a href="#"
  class="alike-button alike-button-style"
  data-post-id="<?php echo esc_attr( get_the_ID() ) ?>"
  data-post-title="<?php echo esc_attr( get_the_title() ) ?>"
  data-post-thumb="<?php echo esc_url( $post_image_src[0] ) ?>"
  data-post-link="<?php echo esc_url( get_the_permalink() ) ?>"
  title="<?php echo esc_attr($value) ?>"
  ><?php echo ($show_icon) ? '<i class="'.$icon_class.'"></i>' : esc_attr($value); ?></a>