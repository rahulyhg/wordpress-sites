<?php
function lt_sc_buttons( $atts, $content = null ){
    extract( shortcode_atts( array(
        'text' => '',
        'style' => '',
        'color' => '',
        'size' => '',
        'link' => '',
        'target' => ''
    ), $atts ) );

    if($target) {
        $target = 'target="'.$target.'"';
    }
    if($color) {
        $color = 'style = "background-color: '.$color.' !important"';
    }
    
    return  '<a href="'.$link.'" class="button '.$size.' '.$style.'" '.$color.' '.$target.'>'
                .$text.
            '</a>';

}

add_shortcode('button', 'lt_sc_buttons');