<?php
/**
 * Class Name: bootstrap_walker
 * GitHub URI: https://github.com/pjhampton/wp-bootstrap4-navwalker
 * Description: A custom WordPress nav walker class to implement the Bootstrap 4 navigation style in a custom theme using the WordPress built in menu manager.
 * Version: 1.0.0
 * Author: PJ Hampton - https://github.compjhampton
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

class Bootstrap_Walker extends Walker_Nav_Menu {


	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent  = str_repeat( "\t", $depth );
		$output .= "\n$indent\n";
	}


	function end_lvl( &$output, $depth = 0, $args = array() ) {
		$indent  = str_repeat( "\t", $depth );
		$output .= "$indent\n";
	}


	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent       = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$class_names  = $value = '';
		$classes      = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[]    = 'menu-item-' . $item->ID;
		$class_names  = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names  = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
		$id           = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args );
		$id           = $id ? ' id="' . esc_attr( $id ) . '"' : '';
		$output      .= $indent . '<li class="nav-item">';
		$attributes   = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
		$attributes  .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
		$attributes  .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
		$attributes  .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';
		$item_output  = $args->before;
		$item_output .= '<a class="nav-link"' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a></li>';
		$item_output .= $args->after;
		$output      .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}


	function end_el( &$output, $item, $depth = 0, $args = array() ) {
		$output .= "\n";
	}


	public static function fallback( $args ) {
		// add fallback code here.
	}

}
