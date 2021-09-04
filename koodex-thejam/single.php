<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

get_header('home'); ?>

    <div class="py-3">
    <div class="container">
    <div class="row">
        <main class="col-12 col-md-8">

		<?php
		while ( have_posts() ) :
			the_post();

			do_action( 'storefront_single_post_before' );

			get_template_part( 'content', 'single' );

			do_action( 'storefront_single_post_after' );

		endwhile; // End of the loop.
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
