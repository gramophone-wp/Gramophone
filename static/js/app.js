jQuery(document).ready(function() {

    jQuery('#list').click(function(event){
        event.preventDefault();
        jQuery('#posts .item').addClass('col-lg-12');
        jQuery('[id=post-image]').hide();
     });

    jQuery('#grid').click(function(event){
        event.preventDefault();
        jQuery('#posts .item').removeClass('col-lg-12');
        jQuery('#products .item').addClass('grid-group-item');
        jQuery("[id=post-image]").show();
     });

});
