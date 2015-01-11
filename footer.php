<footer class="footer">
	<div class="container">
		<div class="col-xs-12 col-md-6" id="copyright">
			<p class="text-muted">
				&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved
			</p>
		</div>
	</div>
</footer>

<script type="application/ld+json">
{
   "@context": "http://schema.org",
   "@type": "WebSite",
   "url": "https://www.example.com/",
   "potentialAction": {
     "@type": "SearchAction",
     "target": "http://example.com/?s={search_term_string}",
     "query-input": "required name=search_term_string"
   }
}
</script>

<?php wp_footer(); ?>

</body>
</html>
