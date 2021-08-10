<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: follow me
 *
 * @package storefront
 */

get_header('home'); ?>
<style>
    .followme-header {
        height: 5rem;
        width: 100%;
    }
    main{
        direction: ltr;
        min-height: 100vh;
    }
</style>
<header>
     <img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/kodex/assets/images/product-header-bg.jpg" alt="followmebg" class="followme-header">
</header>
<main class="p-5">

            <?php
            while ( have_posts() ) :
                the_post();

                do_action( 'storefront_page_before' );

                get_template_part( 'content', 'page' );

                /**
                 * Functions hooked in to storefront_page_after action
                 *
                 * @hooked storefront_display_comments - 10
                 */
                do_action( 'storefront_page_after' );

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->

<?php
get_footer('home');
