<?php
/**
 * The general siderbar
 *
 * @link https://codex.wordpress.org/Customizing_Your_Sidebar
 * @package gramophone
 **/

?>

<div class="col-md-offset-1 col-md-4" id="sidebar">
	<?php if ( ! dynamic_sidebar( 'page' ) ) : ?>
	<?php endif; ?>
</div>
