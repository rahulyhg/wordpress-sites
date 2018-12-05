<?php
$header_classes = '';
if ($header_transparent = get_post_meta($wp_query->get_queried_object_id(), '_lee_header_transparent', true)){
    $header_classes = ' header-transparent';
}
?>
<div class="header-wrapper header-type-1<?php echo esc_attr($header_classes);?>">
    <!-- Top bar -->
    <?php include get_template_directory() . '/headers/top-bar.php';?>
    <!-- Masthead -->
    <div class="sticky-wrapper">
        <header id="masthead" class="row site-header">
            <div class="large-12 columns header-container">
                <!-- Mobile Menu -->
                <div class="mobile-menu">
                    <?php lt_mobile_header(); ?>
                </div>
                <!-- Logo -->
                <div class="logo-wrapper">
                    <?php lt_logo(); ?>
                </div>
                <!-- Main navigation - Full width style -->
                <div class="wide-nav text-right">
                    <?php lt_get_main_menu('2'); ?>
                </div>
                <!-- Search icons -->
                <div class="header-search">
                    <?php lt_search('icon'); ?>
                </div>
            </div>
        </header>
    </div>
</div>



