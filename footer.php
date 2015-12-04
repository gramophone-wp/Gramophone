<?php
/**
 * footer.php
 *
 * The template for the footer.
 *
 * @author pjh
 * @copyright 2014 - 2015
 * @todo Finish Structure
 * @since BigBooty 1.0.1
 */
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

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebSite",
    "url": "https://www.example.com/",
    "potentialAction": 
    {
        "@type": "SearchAction",
        "target": "http://example.com/?s={search_term_string}",
        "query-input": "required name=search_term_string"
    }
}
</script>

<?php wp_footer(); ?>

</body>
</html>
