<?php

class WPBakeryShortCode_pt_rules_vertical extends WPBakeryShortCode {

	protected function content($atts, $content = null) {

		$style = $styleDiv = $class = $style_hr = '';
		$css_animation = $animation_attr = '';

		extract(shortcode_atts(array(
			'pt_separator' 	=> 'separator1',
			'color' 		=> '',
			'margin_top' 	=> '',
			'margin_bottom' => '',
			'align'  		=> '',
			'width'   		=> '',
			'el_class'   	=> '',
			'css_animation' => '',
			'css_delay' 	=> '',
			'pt_hidden_viewport' => ''
			), $atts));

		$el_class = $this->getExtraClass($el_class);

		$pt_hidden_viewport = str_replace(',', ' ', $pt_hidden_viewport);
		$el_class .= $this->getExtraClass($pt_hidden_viewport);

		if ($css_animation)
		{
			$animation_attr = ' data-animation="' . $css_animation . '" data-delay="' . ($css_delay ? $css_delay : '0') . '"';
		}

		$style_hr .= (trim($margin_top)) ? 'margin-top: '. (int)$margin_top .'px; ' 			: '';
		$style_hr .= (trim($margin_bottom)) ? 'margin-bottom: '. (int)$margin_bottom .'px; ' 	: '';
		$style_hr .= (trim($color)) ? 'border-color: '. $color .'; color: '. $color .'; ' 	: '';
		$style_hr .= (trim($width)) ? 'height: '. (int)$width.'px;' 									: '';

		if ($pt_separator == "separator9") {
			$style_hr .= ' background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0), rgba('.pt_hex2rgb($color).',.75), rgba(0, 0, 0, 0));';
			$style_hr .= ' background-image:    -moz-linear-gradient(left, rgba(0, 0, 0, 0), rgba('.pt_hex2rgb($color).',.75), rgba(0, 0, 0, 0));';
			$style_hr .= ' background-image:     -ms-linear-gradient(left, rgba(0, 0, 0, 0), rgba('.pt_hex2rgb($color).',.75), rgba(0, 0, 0, 0));';
			$style_hr .= ' background-image:      -o-linear-gradient(left, rgba(0, 0, 0, 0), rgba('.pt_hex2rgb($color).',.75), rgba(0, 0, 0, 0));';
		}	

		$output = '<div class="pt_rules_vertical'. $el_class .' '. $align .'" style="'.$styleDiv.'" ' . $animation_attr . '>';
			$output .= '<hr class="'. $pt_separator .'" style="'.$style_hr.'" >';
		$output .= '</div>';

		return $output;
	}
}


vc_map( array(
	"base"      => "pt_rules_vertical",
	"name"      => __("Vertical Separator", "js_composer"),
	"class"     => "",
	"icon"      => "fa fa-arrows-v",
	"category"  => __('Misc', "js_composer"),
	"params"    => array(
		array(
			"type" => "dropdown",
			"save_always"      => true,
			"heading" => __("Select Separator type", "js_composer"),
			"param_name" => "pt_separator",
			"value" => array(
				"Double dashed" => "separator3",
				"Double dotted" => "separator4",
				"Thick solid" => "separator5",
				"Thin solid" => "separator6",
				"Single dashed" => "separator7",
				"Single dotted" => "separator8",
				"Gradient" => "separator9",
				),
			"description" => ""
			),
		array(
			"type" => "textfield",
			"save_always"      => true,
			"heading" => __("Width (px)", "js_composer"),
			"param_name" => "width",
			"value" => "50",
			"description" => __("Only numbers. Value in px", "js_composer")
			),
		array(
			"type" => "textfield",
			"save_always"      => true,
			"heading" => __("Margin Top (px)", "js_composer"),
			"param_name" => "margin_top",
			"value" => "60",
			"description" => __("Only numbers. Value in pixels", "js_composer")
			),
		array(
			"type" => "textfield",
			"save_always"      => true,
			"heading" => __("Margin Bottom (px)", "js_composer"),
			"param_name" => "margin_bottom",
			"value" => "60",
			"description" => __("Only numbers. Value in pixels", "js_composer")
			),
		array(
			"type" => "colorpicker",
			"save_always"      => true,
			"heading" => __("Line color", "js_composer"),
			"param_name" => "color",
			"value" => '', //Default color
			"description" => __("Choose color", "js_composer")
			),
		array(
			"type" => "dropdown",
			"save_always"      => true,
			"class" => "",
			"heading" => __("Align", "js_composer"),
			"param_name" => "align",
			"value" => $pt_array_text_align,
			"description" => __("", "js_composer")
			),
		$pt_css_animation,
		$pt_css_delay,
		$pt_hidden_viewport,
		array(
			"type" => "textfield",
			"save_always"      => true,
			"heading" => __("Extra class name", "js_composer"),
			"param_name" => "el_class",
			"description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "js_composer")
			),
		)
) );