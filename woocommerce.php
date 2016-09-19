<?php
/**
 *******************************************************************************
 * //woocommerce.php
 *******************************************************************************
 *
 * The WooCommerce wrapper template.
 *
 * CODEX REF
 * https://docs.woocommerce.com/document/template-structure/
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/
?>

<?php get_header(); ?>

<div id="woocommerce" class="container">   
    <div class="row">
        <?php woocommerce_content(); ?>
    </div>
</div>

<?php get_footer(); ?>
