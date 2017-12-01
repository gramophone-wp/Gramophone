<?php
/**
 * The blogs sidebar.
 *
 * CODEX REF
 * https://codex.wordpress.org/Customizing_Your_Sidebar
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
