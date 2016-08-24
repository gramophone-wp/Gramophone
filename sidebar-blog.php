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
    <?php endif; ?>
</div>
