<?php
/**
 **********************************************
 * footer.php
 **********************************************
 *
 * The general footer.
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

<section class="widgets">
    <div class="container">

	<div class="col-md-4">
        <?php if ( !dynamic_sidebar( 'footer_left' ) ): ?>
            <h4 class="text-center">Sidebar (Page)</h4>
            <p>Oh! No Sidebar?</p>	
        <?php endif; ?>
	</div>

	<div class="col-md-4">
        <?php if ( !dynamic_sidebar( 'footer_center' ) ): ?>
            <h4 class="text-center">Sidebar (Page)</h4>
            <p>Oh! No Sidebar?</p>	
        <?php endif; ?>
	</div>

	<div class="col-md-4">
        <?php if ( !dynamic_sidebar( 'footer_right' ) ): ?>
            <h4 class="text-center">Sidebar (Page)</h4>
            <p>Oh! No Sidebar?</p>	
        <?php endif; ?>
	</div>

    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="col-xs-12 col-md-12 text-center" id="copyright">
            <p class="text-muted">&copy; 
                <a href="<?php bloginfo( 'url' ); ?>">
                <?php bloginfo('name'); ?> 
                </a>
                <?php echo date('Y'); ?>. All Rights Reserved
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
