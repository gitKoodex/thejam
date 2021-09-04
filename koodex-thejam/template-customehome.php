<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: CustomHomepage
 *
 * @package storefront
 */

get_header('home'); ?>
    <section id="slider">
        <div class="swiper-container DefaultSwiper">
            <div class="swiper-wrapper">
                <?php
                $post_id = get_the_ID();
                $post = get_post($post_id);
                $blocks = parse_blocks($post->post_content);
                $i = 0;
                echo "<div class=\"swiper-slide\">" .
                    render_block($blocks[0]) . "</div>";
                echo "<div class=\"swiper-slide\">" .
                    render_block($blocks[2]) . "</div>";

                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <section id="representation" class="representation">
        <div class="container p-mb-0">
            <div class="position-relative min-h-300">
                <div class="row border-top-orang color-full-blue negetive-margin-top inside-slider-div">
                    <div class="col-12 col-md-4 p-0">
                        <div class="light-blue-bg">
                            <?php
                            echo render_block($blocks[4]);
                            ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-0">
                        <div class="dark-blue-bg">
                            <?php
                            echo render_block($blocks[6]);
                            ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 p-0">
                        <div class="light-blue-bg">
                            <?php
                            echo render_block($blocks[8]);
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-5 pt-mb-3">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="color-blue">
                        <?php
                        echo render_block($blocks[10]);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-flouid" id="homeBlueBg">
        <div class="position-relative">
            <div class="custombg"></div>
            <div class="light-greencover"></div>
            <div class="position-absolute ziro-position w-100 h-100 text-white">
                <div class="container w-100 h-100 p-mb-0">
                    <div class="row justify-content-center homeBlueBg">
                        <div class="col-12 col-md-4 p-0">
                            <div class="position-relative">
                                <div class="over-top">
                                    <?php
                                    echo render_block($blocks[12]);
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <?php
                            echo render_block($blocks[14]);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid representation">
        <section class="container" id="fourTuts">
            <div class="main-padding">
                <div class="row">
                    <div class="col-12 col-md-4 p-3">
                        <?php
                        echo render_block($blocks[16]);
                        ?>
                    </div>
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'آموزش',
                        'posts_per_page' => 4,
                    );
                    $postsLoop = new WP_Query($args);
                    if ($postsLoop->have_posts()) {
                        echo "
                        <div class=\"col-12 col-md-8 p-3\">
                                <div class='row'>
                        ";
                        while ($postsLoop->have_posts()) : $postsLoop->the_post();
                            echo "<div class='col-12 col-md-6'>
                                        <div class=\"product-bg\">" .
                                get_the_title() .
                                get_the_content() . "                       
                                        </div>
                                    </div>";
                        endwhile;
                        echo "</div></div>";
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>
    </div>
    <section class="container-fluid" id="bg-blue-products">
        <div class="row">
            <div class="col-12 p-0">
                <div class="second-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 main-padding text-center">
                                <?php
                                echo render_block($blocks[18]);
                                ?>
                            </div>
                        </div>
                        <div class="swiper-container mySwiperResponsive">
                            <div class="swiper-wrapper">
                                <?php
                                $args = array(
                                    'post_type' => 'product',
                                    'order' => 'ASC',
                                    'posts_per_page' => 6
                                );
                                $productsLoop = new WP_Query($args);
                                if ($productsLoop->have_posts()) {
                                    while ($productsLoop->have_posts()) : $productsLoop->the_post();
//                                $string = WC_Product::get_short_description();
                                        echo "
                                        <div class=\"swiper-slide top-radius-20\">
                                            <div class=\"slide-content\">
                                                <div class=\"colig-container\">
                                                    <img src=\"" . get_the_post_thumbnail_url() . "\"  alt=\"" . get_the_title() . "\">
                                                    <div class=\"content-on-img\">
                                                        <a class=\"\" href=\"" . get_permalink() . "\" >
                                                                                                          " .
//                                                    the_excerpt()."
                                            get_the_excerpt() . "  
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class='text-black product-slider-content'>
                                                 <a class=\"\" href=\"" . get_permalink() . "\" >
                                                      <h3 class=\"text-center pt-3\">" .
                                            get_the_title() . " 
                                                            </h3>
</a>
                                                </div>
                                            </div>  
                                        </div> 
                                             
                                        ";
                                    endwhile;
                                }
                                ?>
                            </div>
                            <div class="mySwiperResponsive-pagination"></div>
                            <div class="p-5">
                                <a href="/shop" class="btn btn-single text-white">مشاهده همه محصولات</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <?= render_block($blocks[20]);?>
    </section>
<?php
get_footer('upper');
get_footer('home');
