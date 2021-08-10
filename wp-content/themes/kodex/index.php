<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */
get_header('home'); ?>
    <div class="py-3">
        <div class="container">
            <div class="row">
                <main class="col-12 col-md-8">
                    <?php if ( have_posts() ) : ?>

                        <header class="page-header">
                            <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<div class="taxonomy-description">', '</div>' );
                            ?>
                        </header><!-- .page-header -->

                        <?php
                        get_template_part( 'loop' );

                    else :

                        get_template_part( 'content', 'none' );

                    endif;
                    ?>
                </main>
                <aside class="col-12 col-md-4">
                    <?php
                    do_action( 'storefront_sidebar' );
                    ?>
                </aside>
            </div>
        </div>
    </div>
<?php
get_footer('home');