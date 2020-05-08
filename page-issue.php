<?php

acf_form_head();
get_header();

?>

<main id="site-content" role="main">

    <?php

    if (have_posts()) {
        while (have_posts()) {
            the_post();

            get_template_part('template-parts/content', get_post_type());

            ?>
			<div class="section-inner">
				<?php

                acf_form([
                    'field_groups' => ['group_5eb5072036203'],
                    'uploader'     => 'basic',
                ]);

				?>
			</div>
            <?php
        }
    }

    ?>

</main><!-- #site-content -->

<?php get_template_part('template-parts/footer-menus-widgets'); ?>

<?php get_footer(); ?>
