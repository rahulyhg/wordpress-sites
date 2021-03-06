<?php
add_action( 'widgets_init', 'lt_recent_posts_widget' );

function lt_recent_posts_widget() {
    register_widget( 'LT_Recent_Post_Widget' );
}

/**
 *
 * @since 2.8.0
 */
class LT_Recent_Post_Widget extends WP_Widget {
	
    function __construct() {
        $widget_ops = array( 'classname' => 'lt_recent_posts', 'description' => __('A widget that displays recent posts ', 'lee_framework') );

        $control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'lt_recent_posts' );

        parent::__construct( 'lt_recent_posts', __('LT Recent Posts', 'lee_framework'), $widget_ops, $control_ops );
    }

    function widget($args, $instance) {
        $cache = wp_cache_get('widget_recent_posts', 'widget');

        if ( !is_array($cache) )
            $cache = array();

        if ( ! isset( $args['widget_id'] ) )
            $args['widget_id'] = $this->id;

        if ( isset( $cache[ $args['widget_id'] ] ) ) {
            echo $cache[ $args['widget_id'] ];
            return;
        }

        ob_start();
        extract($args);

        $title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts', 'lee_framework') : $instance['title'], $instance, $this->id_base);
        if ( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
            $number = 10;

        $r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
        
        if ($r->have_posts()) :?>
            <?php echo $before_widget; ?>
            <?php if ( $title ) echo $before_title . $title . $after_title; ?>

            <ul>
            <?php while ( $r->have_posts() ) : $r->the_post(); ?>
                <li>
                    <div class="post-date">
                        <span class="post-date-day"><?php echo get_the_time('M d ,Y');?></span>
                    </div>
                    <div class="post-excerpt">
                        <?php
                            $excerpt = get_the_excerpt();
                            echo string_limit_words($excerpt,10) . '<a class="read-more" href="'.get_permalink().'">&nbsp;&nbsp;[more]</a>';
                        ?>
                    </div>
                    <?php /*a class="post-title" href="<?php the_permalink() ?>" title="<?php echo esc_attr( get_the_title() ? get_the_title() : get_the_ID() ); ?>"><?php if ( get_the_title() ) the_title(); else the_ID(); ?></a*/?>
                </li>
            <?php endwhile; ?>
            </ul>
            <?php echo $after_widget; ?>
            <?php
            wp_reset_postdata();
        endif;

        $cache[$args['widget_id']] = ob_get_flush();
        wp_cache_set('widget_recent_posts', $cache, 'widget');
    }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['number'] = (int) $new_instance['number'];
        //$this->flush_widget_cache();

        $alloptions = wp_cache_get( 'alloptions', 'options' );
        if ( isset($alloptions['widget_recent_entries']) )
            delete_option('widget_recent_entries');

        return $instance;
    }

    function form( $instance ) {
        $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
        $number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
?>
        <p><label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php _e( 'Title:', 'lee_framework' ); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

        <p><label for="<?php echo esc_attr($this->get_field_id( 'number' )); ?>"><?php _e( 'Number of posts to show:', 'lee_framework' ); ?></label>
        <input id="<?php echo esc_attr($this->get_field_id( 'number' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'number' )); ?>" type="text" value="<?php echo esc_attr($number); ?>" size="3" /></p>
<?php
    }
}