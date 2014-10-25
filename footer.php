      <hr>

      <footer>
        <p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>
      </footer>
    </div> <!-- /container -->


	<div class="modal fade" id="contactForm">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title">Contact Us</h4>
	      </div>
	      <div class="modal-body">
	      	<?php 

				if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }

	      	?>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->


    <?php wp_footer(); ?>

  </body>
</html>
