<?php
/**
 * search.php
 *
 * The search results page
 *
 * @author pjh
 * @copyright 2014 - 2015
 * @link http://codex.wordpress.org/Creating_a_Search_Page
 * @since BigBooty 1.0.0
 */
?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div id="main" class="col col-lg-8 clearfix" role="main">

            <div class="page-header">
                <h1>Results for: <?php echo esc_attr(get_search_query()); ?></h1>
            </div>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

                    <h3>
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <p class="meta">Posted: <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time> by <?php the_author_posts_link(); ?> <span class="amp">&amp;</span> 
    					in <?php the_category(', '); ?>.
                    </p>
                    <?php the_excerpt(); ?>

                </article>

            <?php endwhile; ?>	

            <?php if (function_exists('wp_bootstrap_page_navi')): ?>

            <?php wp_bootstrap_page_navi(); ?>

            <?php else: ?>
                <nav class="wp-prev-next">
                    <ul class="clearfix">
                        <li class="prev-link">Older Entries</li>
                        <li class="next-link">Newer Entries</li>
                    </ul>
                </nav>
            <?php endif; ?>

            <?php else: ?>

            <article id="post-not-found">
                <h1>Not Found</h1>

                <p>Sorry, but your search returned no results.</p>
            </article>

            <?php endif; ?>

        </div>

        <?php get_sidebar(); ?>

    </div>
</div>

<?php get_footer(); ?>
