<?php

class Walker_Nav_Primary extends Walker_Nav_menu {

    function start_lvl( &$output, $depth = 0, $args = array()){ //ul
        $indent = str_repeat("\t",$depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
    }

//    function start_el(&$output, $category, $depth = 0, $args = array(), $current_object_id = 0) { //li a span
//
//    }

    /*
        function end_el(){ // closing li a span

        }

        function end_lvl(){ // closing ul

        }
    */

}


