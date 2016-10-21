<?php
/**
 *******************************************************************************
 * //config/woocommerce.php
 *******************************************************************************
 * 
 * Woommerce theme config.
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
 **/

// Filters
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// Override action after shop loop - remove link close
add_action('woocommerce_after_shop_loop_item', 'remove_link_close_from_after_shop_loop_item');

// Function to override action after shop loop
function remove_link_close_from_after_shop_loop_item() {

    add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

}
// Close item link in loop
add_action( 'woocommerce_close_item_link', 'woocommerce_template_loop_category_link_close', 10 );

// Remove each style one by one
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}

// Or just remove them all in one line
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

/*********************************************************************************************/
/** WooCommerce - Modify each individual input type $args defaults /**
/*********************************************************************************************/

add_filter('woocommerce_form_field_args','wc_form_field_args',10,3);

function wc_form_field_args( $args, $key, $value = null ) {

/*********************************************************************************************/
/** This is not meant to be here, but it serves as a reference
/** of what is possible to be changed. /**

$defaults = array(
    'type'              => 'text',
    'label'             => '',
    'description'       => '',
    'placeholder'       => '',
    'maxlength'         => false,
    'required'          => false,
    'id'                => $key,
    'class'             => array(),
    'label_class'       => array(),
    'input_class'       => array(),
    'return'            => false,
    'options'           => array(),
    'custom_attributes' => array(),
    'validate'          => array(),
    'default'           => '',
);
/*********************************************************************************************/

// Start field type switch case

switch ( $args['type'] ) {

    case "select" :  /* Targets all select input type elements, except the country and state select input types */
        $args['class'][] = 'form-group'; // Add a class to the field's html element wrapper - woocommerce input types (fields) are often wrapped within a <p></p> tag  
        $args['input_class'] = array('form-control', 'input-lg'); // Add a class to the form input itself
        //$args['custom_attributes']['data-plugin'] = 'select2';
        $args['label_class'] = array('control-label');
        $args['custom_attributes'] = array( 'data-plugin' => 'select2', 'data-allow-clear' => 'true', 'aria-hidden' => 'true',  ); // Add custom data attributes to the form input itself
    break;

    case 'country' : /* By default WooCommerce will populate a select with the country names - $args defined for this specific input type targets only the country select element */
        $args['class'][] = 'form-group single-country';
        $args['label_class'] = array('control-label');
    break;

    case "state" : /* By default WooCommerce will populate a select with state names - $args defined for this specific input type targets only the country select element */
        $args['class'][] = 'form-group'; // Add class to the field's html element wrapper 
        $args['input_class'] = array('form-control', 'input-lg'); // add class to the form input itself
        //$args['custom_attributes']['data-plugin'] = 'select2';
        $args['label_class'] = array('control-label');
        $args['custom_attributes'] = array( 'data-plugin' => 'select2', 'data-allow-clear' => 'true', 'aria-hidden' => 'true',  );
    break;


    case "password" :
    case "text" :
    case "email" :
    case "tel" :
    case "number" :
        $args['class'][] = 'form-group';
        //$args['input_class'][] = 'form-control input-lg'; // will return an array of classes, the same as bellow
        $args['input_class'] = array('form-control', 'input-lg');
        $args['label_class'] = array('control-label');
    break;

    case 'textarea' :
        $args['input_class'] = array('form-control', 'input-lg');
        $args['label_class'] = array('control-label');
    break;

    case 'checkbox' :  
    break;

    case 'radio' :
    break;

    default :
        $args['class'][] = 'form-group';
        $args['input_class'] = array('form-control', 'input-lg');
        $args['label_class'] = array('control-label');
    break;
    }

    return $args;
}

// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
    $fields['billing']['billing_first_name']['class'] = array('col-sm-6');
    $fields['billing']['billing_last_name']['class'] = array('col-sm-6');
    $fields['billing']['billing_company']['class'] = array('col-sm-12');
    $fields['billing']['billing_email']['class'] = array('col-sm-6');
    $fields['billing']['billing_phone']['class'] = array('col-sm-6');
    $fields['billing']['billing_address_1']['class'] = array('col-sm-12');
    $fields['billing']['billing_address_2']['class'] = array('col-sm-12');
    $fields['billing']['billing_city']['class'] = array('col-sm-12');
    $fields['billing']['billing_country']['class'] = array('col-sm-12');
    $fields['billing']['billing_postcode']['class'] = array('col-sm-6');
    $fields['billing']['billing_state']['class'] = array('col-sm-6');
    
     $fields['order']['order_comments']['class'] = array('col-sm-12');
    return $fields;
}


