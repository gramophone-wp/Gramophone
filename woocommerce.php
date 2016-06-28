<?php
/**
 **********************************************
 * page.php
 **********************************************
 *
 * The general page.
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
  <div class="row row-offcanvas row-offcanvas-right">
    <div class="col-md-12 text-justify">
    <?php woocommerce_content(); ?>          
    </div>
   </div>
</div>

<?php get_footer(); ?>
