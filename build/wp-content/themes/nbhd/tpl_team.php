<?php
/**
 * Template Name: Team
 */

get_header(); ?>

<?php if ( function_exists('yoast_breadcrumb') ) : ?>
    <aside class="breadcrumbs">
        <div class="container">
            <div class="row">
                <?php 
                    $args = array(
                        'delimiter' => '➞',
                        'wrap_before' => '<div class="col-12"><span>',
                        'wrap_after' => '</span></div>',
                        'before' => '<span>',
                        'after' => '</span>'
                    );
                    woocommerce_breadcrumb($args);
                ?>
            </div>
        </div>
    </aside>
<?php endif; ?>

<header class="team__header">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-9">
                <h1>
                    <?= get_field('team-title'); ?>
                </h1>
            </div>
        </div>
    </div>
</header>

<?php if(have_rows('people')) : ?>
<section class="team__people">
    <div class="container">
        <div class="row">
            <?php while(have_rows('people')) : the_row(); ?>
            <div class="col-lg-4 col-sm-6 col-12 team__people-person">
                <div class="person-img">
                    <img src="<?= esc_url(get_sub_field('img')['sizes']['medium']); ?>" alt="" class="bg-cover">
                    <div class="socials">
                        <?php if(get_sub_field('fb')): ?>
                            <a href="<?= get_sub_field('fb'); ?>" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        <?php endif; ?>
                        <?php if(get_sub_field('insta')): ?>
                            <a href="<?= get_sub_field('insta'); ?>" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="person-text">
                    <h2>
                        <?= get_sub_field('name'); ?>
                    </h2>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>


<?php get_footer();
