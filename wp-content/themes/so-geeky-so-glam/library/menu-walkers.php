<?php
/**
 * Customize the output of menus for Foundation top bar
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 // Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker

 if ( ! class_exists( 'Foundationpress_Top_Bar_Walker' ) ) :
 class Foundationpress_Top_Bar_Walker extends Walker_Nav_Menu {

 	function start_lvl( &$output, $depth = 0, $args = array() ) {
 			$indent = str_repeat("\t", $depth);
      $output .= "\n$indent<ul class=\"dropdown menu vertical\" data-toggle>\n";
 	}
     function start_el(&$output, $item, $depth, $args){
         global $wp_query;
         static $column = 1;
         $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
         $class_names = $value = '';
         $classes = empty( $item->classes ) ? array() : (array) $item->classes;
         $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
         $class_names = ' class="'. esc_attr( $class_names ) . '"';
         $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
         $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
         $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
         $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
         $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

         $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';
         if($depth != 0)
         {
             $description = $append = $prepend = "";
         }
         $item_output = $args->before;
         $item_output .= '<a'. $attributes .'>';
         $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
         $item_output .= $description.$args->link_after;
         $item_output .= '</a>';
         $item_output .= $args->after;
         $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
         $column += 1;
     }
 }


 if ( ! class_exists( 'Foundationpress_Mobile_Walker' ) ) :
 class Foundationpress_Mobile_Walker extends Walker_Nav_Menu {
 	function start_lvl( &$output, $depth = 0, $args = array() ) {
 			$indent = str_repeat("\t", $depth);
 			$output .= "\n$indent<ul class=\"vertical nested menu\">\n";
 	}

     function start_el(&$output, $item, $depth, $args){
         global $wp_query;
         static $column = 1;
         $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
         $class_names = $value = '';
         $classes = empty( $item->classes ) ? array() : (array) $item->classes;
         $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
         $class_names = ' class="'. esc_attr( $class_names ) . '"';
         $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
         $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
         $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
         $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
         $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

         $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';
         if($depth != 0)
         {
             $description = $append = $prepend = "";
         }
         $item_output = $args->before;
         $item_output .= '<a'. $attributes .'>';
         $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
         $item_output .= $description.$args->link_after;
         $item_output .= '</a>';
         $item_output .= $args->after;
         $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
         $column += 1;
     }
 }


 endif;

     if ( ! class_exists( 'Foundationpress_Footer_Walker' ) ) :
         class Foundationpress_Footer_Walker extends Walker_Nav_Menu {
             function start_lvl( &$output, $depth = 0, $args = array() ) {
                 $indent = str_repeat("\t", $depth);
                 $output .= "\n$indent<ul class=\"vertical nested menu\">\n";
             }

             function start_el(&$output, $item, $depth, $args){
                 global $wp_query;
                 static $column = 1;
                 $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
                 $class_names = $value = '';
                 $classes = empty( $item->classes ) ? array() : (array) $item->classes;
                 $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
                 $class_names = ' class="'. esc_attr( $class_names ) . '"';
                 $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
                 $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
                 $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
                 $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
                 $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

                 $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';
                 if($depth != 0)
                 {
                     $description = $append = $prepend = "";
                 }
                 $item_output = $args->before;
                 $item_output .= '<a'. $attributes .'>';
                 $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
                 $item_output .= $description.$args->link_after;
                 $item_output .= '</a>';
                 $item_output .= $args->after;
                 $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
                 $column += 1;
             }
         }
     endif;

endif;
