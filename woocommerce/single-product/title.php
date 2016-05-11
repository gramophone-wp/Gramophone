<?php
/**
 **********************************************
 * woocommerce/single-product/title.php
 **********************************************
 *
 * Single Product title
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<h1 itemprop="name" class="product_title entry-title"><?php the_title(); ?></h1>
