<?php get_header(); ?>
    <body>
        <div class="content container">
            <div class="row">
                <div class="col-sm-8">

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    <?php endwhile; else: ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>
                </div>

                <div class="col-sm-4">
                    <?php get_sidebar(); ?> 
                </div>
            </div>
        </div>
<?php get_footer(); ?>
          
