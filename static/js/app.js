jQuery( document ).ready(
  function($) {

    var display = localStorage.getItem('display-type');

    if (display === 'list') {
      $('.grid-item').addClass('col-lg-12');
      $('.card-img-top').addClass('hidden');
    }

    if (display === 'grid') {
      $('.post-metadata').addClass('hidden');
    }

    jQuery( '#list' ).click(
      function(event){
        event.preventDefault();
        jQuery( '#posts .item' ).addClass( 'col-lg-12' );
        jQuery( '[id=post-image]' ).hide();
        jQuery( '.post-metadata' ).show();
        localStorage.setItem( 'display-type', 'list' );
      }
    );

    jQuery( '#grid' ).click(
      function(event){
        event.preventDefault();
        jQuery( '#posts .item' ).removeClass( 'col-lg-12' );
        jQuery( '#products .item' ).addClass( 'grid-group-item' );
        jQuery( '.post-metadata' ).hide();
        jQuery( "[id=post-image]" ).show();
        localStorage.setItem( 'display-type', 'grid' );
      }
    );

    $( "select[name='archive-dropdown']" ).addClass( 'form-control' );
    $( 'li.widget-li' ).closest( 'ul' ).addClass( 'list-group' );
    $( '.widget li' ).addClass( 'list-group-item' ).parent().addClass( 'list-group' );
  }
);
