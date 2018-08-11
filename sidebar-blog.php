<?php
/**
 * The blogs sidebar.
 *
 * @link https://codex.wordpress.org/Customizing_Your_Sidebar
 * @package gramophone
 **/

?>

<div class="col-md-3" id="sidebar">
	<?php if ( ! dynamic_sidebar( 'blog' ) ) : ?>
	<?php endif; ?>
</div>
