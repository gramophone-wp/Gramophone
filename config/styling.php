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
