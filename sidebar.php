<?php
/**
 **********************************************
 * sidebar.php
 **********************************************
 *
 * The general siderbar.
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

<div class="col-md-offset-1 col-md-4" id="sidebar">

    <?php if ( !dynamic_sidebar( 'page' ) ): ?>

    <h3>Sidebar (Page)</h3>
    <p>...</p>	

    <?php endif; ?>

</div>
