<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

</div><!-- .col-full -->
</div><!-- #content -->

<?php //do_action( 'storefront_before_footer' ); ?>

<footer class="container-fluid p-0" id="homeFooter">
    <div class="bg-blue">
        <div class="container main-padding">
            <div class="row">
                <div class="col-12 col-md-6">
                    <?php if ( dynamic_sidebar('Footer-Column-3') ) : else : endif; ?>
                </div>
                <div class="col-12 col-md-6">
                    <?php if ( dynamic_sidebar('Footer-Column-4') ) : else : endif; ?>
                </div>
            </div>
        </div>
        <hr class="white-line">
        <div class="text-center p-3">
            طراحی و توسعه توسط شرکت کودکس
        </div>
    </div>
</footer>

<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/kodex/assets/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/kodex/assets/js/all.min.js"></script>
<script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/kodex/assets/js/swiper-bundle.min.js"></script>
<script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/kodex/assets/js/mdb.min.js"></script>
<script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/kodex/assets/js/script.js"></script>
</body>
</html>
