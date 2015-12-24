<?php
/**
 **********************************************
 * sidebar-blog.php
 **********************************************
 *
 * The blogs sidebar.
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

<div class="col-md-3" id="sidebar">

    <?php if ( ! dynamic_sidebar( 'blog' ) ): ?>

    <h3>Sidebar (Blog)</h3>
    <p>...</p>

    <?php endif; ?>

</div>
