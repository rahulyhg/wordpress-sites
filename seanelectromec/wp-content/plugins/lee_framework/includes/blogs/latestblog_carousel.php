<div class="row group-slider">
    <div class="group-blogs lt-slider owl-carousel" data-columns="<?php echo esc_attr($columns_number);?>" data-columns-small="<?php echo esc_attr($columns_number_small); ?>" data-columns-tablet="<?php echo esc_attr($columns_number_tablet); ?>">
        <?php while ( $recentPosts->have_posts() ) {
            $recentPosts->the_post();?>
            <div class="blog_item">
                <div class="large-6 columns">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <div class="entry-blog">
                            <div class="blog-image img_left">
                                <div class="blog-image-attachment" style="overflow:hidden;">
                                    <?php
                                    if (has_post_thumbnail() ):
                                    the_post_thumbnail( 'lt-grid-thumb', array(
                                        'alt' => trim( strip_tags( get_the_title() ) )
                                    ));
                                    else:
                                        echo '<img src="'.get_template_directory_uri().'/images/placeholder.png" alt="" />';
                                    endif;
                                    ?>
                                    <div class="image-overlay"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="large-6 columns">
                    <div class="blog_info">
                        <div class="post-date">
                            <span class="post-date-day"><?php echo get_the_time('d', get_the_ID()); ?></span>
                            <span class="post-date-month"> /<?php echo get_the_time('F', get_the_ID()); ?></span>
                        </div>
                        <div class="bery-hr medium"></div>
                        <div class="blog_title"><h2><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h2></div>
                        <div class="read_more"><a href="<?php the_permalink();?>" title="Continue"><?php _e('Continue ','lee_framework');?><span class="read-more-icon fa fa-long-arrow-right primary-color"></span></a></div>
                    </div>
                </div>
            </div>
        <?php }?>
    </div> 
</div> 