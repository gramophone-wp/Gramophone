<?php
/**
 *******************************************************************************
 * //config/styling.php
 *******************************************************************************
 *
 * Custom styling functionality.
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/

// Add Bootstrap Styling to Password Protected form
function bootstrap_password_form() {
    global $post;
    $label = 'pwbox-' . ( empty($post->ID) ? rand() : $post->ID );
    $output = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" class="post-password-form form-control" method="post">
    <p>' . __( 'This content is password protected. To view it please enter your password below:' ) . '</p>
    <div class="form-group"><p><label for="' . $label . '">' . __( 'Password:' ) . ' <input name="post_password" class="form-control" id="' . $label . '" type="password" size="20" /></label> <input type="submit" class="btn btn-primary" name="Submit" value="' . esc_attr_x( 'Enter', 'post password form' ) . '" /></p></div></form>
    ';
    return $output;
};

add_filter( 'the_password_form', 'bootstrap_password_form' );

//Add bootstrap styling to search form

add_filter( 'get_search_form', 'gramophone_search_form' );

function gramophone_search_form( $form_html ) {
    //Removing the check for html5 format as nothing html5 specific or that would break xhtml
    $search_form_template = locate_template( 'searchform.php' );
    if ( '' != $search_form_template ) {
        //This makes sure we don't mess with anyone's child theme implementation
        ob_start();
        require( $search_form_template );
        $form_html = ob_get_clean();
    } else {
        $input_classes = apply_filters( 'gramophone_bootstrap_search_input_classes', array( 'form-control', 'input-lg') );
        $btn_classes = apply_filters( 'gramophone_bootstrap_search_button_classes', array( 'btn', 'btn-primary' ) );
            $form_html = '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
                <div class="input-group col-md-12">
                    <input type="text" class="' . implode( ' ', $input_classes ) . '" name="s" placeholder="' . esc_attr_x( 'Search &hellip;', 'placeholder' ) . '" />
                    <span class="input-group-btn">
                        <button class="' . implode( ' ', $btn_classes ) . '"  type="submit">
                            ' . esc_attr_x( 'Search', 'submit button' ) . '
                        </button>
                    </span>
                </div>
            </form>';
    }
    return $form_html;
}
