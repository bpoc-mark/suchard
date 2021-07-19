<?php get_header();?>
    <section class="sect_1">
        <div class="sect_1__wrapper">
            <div class="l-wrap">

                    <!-- Heading -->
                    <p class="heading_title">NEWS</p>

                    <!-- Four circle -->
                    <div class="sect_1__circle">
                        <span class="circle-1"></span>
                        <span class="circle-1"></span>
                        <span class="circle-1"></span>
                        <span class="circle-1"></span>
                    </div>

                    <!-- contents -->
                    <div class="content">
                        <!-- first content -->
                        <?php
                        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => 3,
                            'paged' => $paged,
                        );

                        $the_query = new WP_Query($args);
                        ?>

                        <?php if ($the_query->have_posts()) : ?>

                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <div class="cont_1">
                                    <div class="col_1">
                                        <p class="date"><?php echo get_the_date(); ?></p>
                                        <span class="barrier"></span>
                                        <p class="para_1"><?php echo the_title(); ?></p>
                                    </div>
                                    <a class="col_2" href="<?php echo get_permalink(); ?>">
                                        <p class="read_more">READ MORE</p>
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_1/arrow_icon.png" alt="">
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?> 

                    </div>
                    
            </div>
        </div>
    </section>
    <section>2</section>
    <section>3</section>
    <section>4</section>
<?php get_footer();?>