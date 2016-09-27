jQuery(function() {
    var post_type = jQuery('input[name="wpcf[post-type]"]:checked').val();
    if( post_type === 'fave'){
        jQuery("#types-child-table-post-featured-gallery").hide();
        jQuery("#types-child-table-post-feat-products-footer").hide();
    }else if( post_type === 'technology'){
        jQuery("#types-child-table-post-feat-product-fave").hide();
    }else if(post_type === 'article'){
        jQuery("#types-child-table-post-feat-product-fave").hide();
        jQuery("#types-child-table-post-feat-products-footer").hide();
    }

    jQuery('input[name="wpcf[post-type]"]').on('change', function(){
        jQuery("#types-child-table-post-featured-gallery").show();
        jQuery("#types-child-table-post-feat-products-footer").show();
        jQuery("#types-child-table-post-feat-product-fave").show();
        var post_type = jQuery('input[name="wpcf[post-type]"]:checked').val();
        console.log(post_type);
        if( post_type === 'fave'){
            jQuery("#types-child-table-post-featured-gallery").hide();
            jQuery("#types-child-table-post-feat-products-footer").hide();
        }else if( post_type === 'technology'){
            jQuery("#types-child-table-post-feat-product-fave").hide();
        }else if(post_type === 'article'){
            jQuery("#types-child-table-post-feat-product-fave").hide();
            jQuery("#types-child-table-post-feat-products-footer").hide();
        }
    });
});