jQuery(document).ready(function() {

    jQuery('#list').click(function(event){
        event.preventDefault();
        jQuery('#posts .item').addClass('col-lg-12');
        jQuery('[id=post-image]').hide();
        jQuery('#post-metadata').show();
     });

    jQuery('#grid').click(function(event){
        event.preventDefault();
        jQuery('#posts .item').removeClass('col-lg-12');
        jQuery('#products .item').addClass('grid-group-item');
        jQuery('#post-metadata').hide();
        jQuery("[id=post-image]").show();
     });

});
