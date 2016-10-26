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
function div_wrapper($content)
{
    $supported_formats = ["youtube", "vimeo", "dailymotion"];

    // Match any iframes
    $pattern = '~<iframe.*</iframe>|<embed.*</embed>~';
    preg_match_all($pattern, $content, $matches);

    foreach ($matches[0] as $match) {
        foreach ($supported_formats as $format) {
            // Make sure the iframe/embed is of a supported format to avoid wrapping any non-video iframes
            if (strpos($match, $format) !== false) {
                // Wrap matched iframe with div
                $wrappedframe = '<div class="video-wrapper"><div class="video-inner">' . $match . '</div></div>';

                // Replace original iframe with new in content
                $content = str_replace($match, $wrappedframe, $content);
            }
        }
    }

    return $content;
}
add_filter('the_content', 'div_wrapper');

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