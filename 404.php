<?php get_header(); ?>

<div class="container">   
    <div class="row">
        <div class="col-md-9">

        <div class="page-header">
          <h1>404: OMG!</h1>
        </div>

        <!-- 404 Message: Please change me! -->

        <p>
            Lorem ipsum dolor sit amet, augue inani concludaturque ex nec. Sea elit deserunt id. Ei commune vivendum adolescens pro, at per verterem ullamcorper, eu solum nemore adipisci mel. Cu vide aliquid pro, salutatus percipitur sadipscing mel at, epicuri consequat suscipiantur pro ne. Meliore eligendi vis ne, diceret antiopam nam et.
        </p>

        <p>
            Democritum percipitur necessitatibus eu ius. Ex eam assum theophrastus. Eu vim malis vidisse, quis dolor et his. Eam ei wisi summo scribentur, putant accumsan persequeris in vim, no mentitum perfecto sed. Per sint idque cu, ea esse dicam disputando sed. Cetero habemus ad eum, reformidans delicatissimi ut usu.
        </p>

        <p>
            Cu lorem detraxit per. Eruditi iudicabit his ei, cum eu prodesset deterruisset. Munere cetero has ne, eu reque recusabo vituperatoribus duo. Sed et dico falli inciderint.
        </p>

        <hr>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="post">
            
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><em>
                    By <?php the_author(); ?> 
                    on <?php echo the_time('l, F jS, Y');?>
                    in <?php the_category( ', ' ); ?>.
                <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
                </em></p>            

            <?php the_excerpt(); ?>

            <hr>
            </article>

         
        <?php endwhile; else: ?>

          <p>It Doesn't look like there is any Posts!</p>

        <?php endif; ?>


      </div>
      
      <?php get_sidebar( 'blog' ); ?>

    </div>

<?php get_footer(); ?>