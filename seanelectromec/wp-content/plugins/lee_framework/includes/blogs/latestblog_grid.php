<div class="row group-blogs">
    <div class="large-12 columns">
        <div class="blog-grid">
            <?php 
            $k = 0;
            $r = 0;
            $count = wp_count_posts()->publish;
            if($count > 0){
                while ( $recentPosts->have_posts() ) {
                    $recentPosts->the_post();
                    if($k % 2 == 0) echo '<div class="row blog-grid-item">';?>
                    <div class="large-3 columns<?php echo ($count == $k + 1)?' end':'';?>">
                        <?php if($r % 2 == 0){?>
                            <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                                <div class="entry-blog">
                                    <div class="blog-image img_left">
                                        <div class="blog-image-attachment" style="overflow:hidden;">
                                            <?php
                                            if (has_post_thumbnail() ):
                                                the_post_thumbnail('lt-grid-thumb', array(
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
                        <?php }else{?>
                            <div class="blog_info align_right">
                                <div class="post-date">
                                    <span class="post-date-day"><?php echo get_the_time('d', get_the_ID()); ?></span>
                                    <span class="post-date-month"> /<?php echo get_the_time('F', get_the_ID()); ?></span>
                                </div>
                                <div class="bery-hr medium text-right"></div>
                                <div class="clearfix"></div>
                                <div class="blog_title"><h2><a href="<?php the_permalink() ?>" title="<?php echo trim( strip_tags( get_the_title() ) );?>"><?php the_title(); ?></a></h2></div>
                                <div class="read_more"><a href="<?php the_permalink();?>" title="Continue"><?php _e('Continue ','lee_framework');?><span class="read-more-icon fa fa-long-arrow-right primary-color"></span></a></div>
                            </div>
                        <?php }?>
                    </div>
                    <div class="large-3 columns<?php echo ($count == $k + 1)? ' end': '';?>">
                        <?php if($r % 2 == 1){?>
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                <div class="entry-blog">
                                    <div class="blog-image img_right">
                                        <div class="blog-image-attachment" style="overflow:hidden;">
                                            <?php
                                            if (has_post_thumbnail() ):
                                                the_post_thumbnail('lt-grid-thumb', array(
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
                        <?php }else{?>
                            <div class="blog_info align_left">
                                <div class="post-date">
                                    <span class="post-date-day"><?php echo get_the_time('d', get_the_ID()); ?></span>
                                    <span class="post-date-month"> /<?php echo get_the_time('F', get_the_ID()); ?></span>
                                </div>
                                <div class="bery-hr medium"></div>
                                <div class="blog_title"><h2><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h2></div>
                                <div class="read_more"><a href="<?php the_permalink();?>" title="Continue"><?php _e('Continue ','lee_framework');?><span class="read-more-icon fa fa-long-arrow-right primary-color"></span></a></div>
                            </div>
                        <?php }?>
                    </div>
                    <?php 
                    if($k > 0 && $k % 2 == 1) echo '</div>';
                    $k++;
                    if(($k + 1) % 2 == 1 && $k > 0) $r++;
                    ?>
                <?php }?>
            <?php }?>
            <?php if($k > 0 && $k % 2 == 0) echo '</div>';?>
        </div>
    </div>
</div> 