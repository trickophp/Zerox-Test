<?php get_header(); ?>

<?php
    $blocks = function_exists('get_field') ? get_field('blocks') : []; 
    if(!empty($blocks)) {
        foreach ($blocks as $value) {
            include "template-parts/blocks/{$value['acf_fc_layout']}.php";
        }
    }
?>

<?php get_footer(); ?>