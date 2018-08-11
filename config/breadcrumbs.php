<?php
/**
 * config/breadcrumbs.php
 *
 * Custom breadcrumbs functionality.
 *
 * @license GPL-2
 */

function theme_breadcrumbs() {

	global $post;

	echo '<ol class="breadcrumb">';
	if ( ! is_home() ) {
		echo '<li><a href="';
		echo home_url( '/' );
		echo '">';
		echo 'Home';
		echo '</a></li>';
		if ( is_category() || is_single() ) {

			echo '<li>';
			the_category( ' </li><li class="separator"> / </li><li> ' );

			if ( is_single() ) {
				echo '</li><li>';
				the_title();
				echo '</li>';
			}
		} elseif ( is_page() ) {
			if ( $post->post_parent ) {
				$anc   = get_post_ancestors( $post->ID );
				$title = get_the_title();
				foreach ( $anc as $ancestor ) {
					$output = '<li><a href="' . get_permalink( $ancestor ) . '"
                title="' . get_the_title( $ancestor ) . '">' . get_the_title( $ancestor ) .
					'</a></li> <li class="separator">/</li>';
				}
				echo $output;
				echo '<strong title="' . $title . '"> ' . $title . '</strong>';
			} else {
				echo '<li><strong> ' . get_the_title() . '</strong></li>';
			}
		}
	} elseif ( is_tag() ) {
		single_tag_title(); } elseif ( is_day() ) {
		echo '<li>Archive for ';
		the_time( 'F jS, Y' );
		echo '</li>'; } elseif ( is_month() ) {
			echo '<li>Archive for ';
			the_time( 'F, Y' );
			echo '</li>'; } elseif ( is_year() ) {
			echo '<li>Archive for ';
			the_time( 'Y' );
			echo '</li>'; } elseif ( is_author() ) {
				echo '<li>Author Archive';
				echo '</li>'; } elseif ( isset( $_GET['paged'] ) && ! empty( $_GET['paged'] ) ) {
				echo '<li>Blog Archives';
				echo '</li>'; } elseif ( is_search() ) {
					echo '<li>Search Results';
					echo '</li>'; }

				echo '</ol>';
}


