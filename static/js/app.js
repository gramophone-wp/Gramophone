jQuery( document ).ready(
	function($) {

		jQuery( '#list' ).click(
			function(event){
				event.preventDefault();
				jQuery( '#posts .item' ).addClass( 'col-lg-12' );
				jQuery( '[id=post-image]' ).hide();
				jQuery( '.post-metadata' ).show();
				Cookies.set( 'display-type', 'list' );
			}
		);

		jQuery( '#grid' ).click(
			function(event){
				event.preventDefault();
				jQuery( '#posts .item' ).removeClass( 'col-lg-12' );
				jQuery( '#products .item' ).addClass( 'grid-group-item' );
				jQuery( '.post-metadata' ).hide();
				jQuery( "[id=post-image]" ).show();
				Cookies.set( 'display-type', 'grid' );
			}
		);

		$( "select[name='archive-dropdown']" ).addClass( 'form-control' );
		$( 'li.widget-li' ).closest( 'ul' ).addClass( 'list-group' );
		$( '.widget li' ).addClass( 'list-group-item' ).parent().addClass( 'list-group' );
	}
);
