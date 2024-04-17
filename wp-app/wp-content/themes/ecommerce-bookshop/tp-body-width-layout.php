<?php

$author_writer_tp_theme_css = '';

//======================= slider Content layout ===================== //

$ecommerce_bookshop_slider_content_layout = get_theme_mod('ecommerce_bookshop_slider_content_layout', 'LEFT-ALIGN'); 
$author_writer_tp_theme_css .= '#slider .carousel-caption{';
switch ($ecommerce_bookshop_slider_content_layout) {
    case 'LEFT-ALIGN':
        $author_writer_tp_theme_css .= 'text-align:left; right: 5%; left: 10%';
        break;
    case 'CENTER-ALIGN':
        $author_writer_tp_theme_css .= 'text-align:center; left: 25%; right: 25%';
        break;
    case 'RIGHT-ALIGN':
        $author_writer_tp_theme_css .= 'text-align:right; left: 40%; right: 10%';
        break;
    default:
        $author_writer_tp_theme_css .= 'text-align:left; right: 5%; left: 10%';
        break;
}
$author_writer_tp_theme_css .= '}';