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
                                    <a class="col_2 btn_read_more active" href='javascript:;'>
                                        <p class="read_more">READ MORE</p>
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_1/arrow_icon.png" alt="">
                                    </a>
                                    <div class="col_3">
                                        <p><?php echo the_content(); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?> 

                    </div>
                    
            </div>
        </div>
    </section>
    <section></section>
    <section class="sect_3">
        <div class="sect_3__wrapper">
            <div class="l-wrap">

                <div class="sect_3__takeout">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/take_out.png" alt="">
                </div>

                <div class="sect_3__pack">

                    <div class="col-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/pack_1.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/pack_2.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/pack_3.png" alt="">
                    </div>

                    <div class="col-2">
                        <p class="title">お弁当ご予約受付中</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/pack_1.png" alt="">
                        <p class="desc">予約受付時間<span class="space"></span>当日10:00まで<br>／お渡し時間11:30〜／お弁当ラストオーダー16:00まで</p>
                        <p class="txt">当店自慢の味をテイクアウトで。大きな鮭がどんと乗ったスペシャル弁当とワンコイン弁当をご用意しております。</p>
                        <table>
                            <tr>
                                <td>スペシャル弁当</td>
                                <td>¥700</td>
                            </tr>
                            <tr>
                                <td>焼き鮭弁当</td>
                                <td>¥500</td>
                            </tr>
                            <tr>
                                <td>唐揚げ弁当</td>
                                <td>¥500</td>
                            </tr>
                            <tr>
                                <td>焼肉弁当</td>
                                <td>¥500</td>
                            </tr>
                        </table>
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/pack_2.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/pack_3.png" alt="">
                    </div>
                </div>
                <div class="sect_3__contact_info">
                    <a class="line" href="">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/line_icon.png" alt="">
                        <p class="txt">LINEで注文</p>
                    </a>

                    <a class="phone" href="tel:077-524-0963">
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/phone.png" alt="">
                        <p class="txt">電話で注文</p>
                    </a>
                </div>
            </div>
    </section>
    <section class="sect_4">
        <div class="sect_4__wrapper">
            <div class="l-wrap">
                
                <!--Header -->
                <div class="sect_4__header">
                    <!-- Header content -->
                    <div class="header_content">
                        <!-- Text content  -->
                        <div class="text_content">
                            <span class="small_text">喫茶・軽食</span>
                            <span  class="large_text">スシャール</span>
                        </div>
                        <!-- image/icon content -->
                        <div class="icon_content">
                            <img src=" <?php echo get_template_directory_uri(); ?>/release/image/sect_4/img_1.png" alt="">
                        </div>
                    </div>

                    <!-- Header body content -->
                    <div class="header_body_content">

                        <p class="time_open">
                        OPEN 7:00〜17:00 <br>
                        モーニング〜11:00<br><span>／</span>ランチ11:00〜14:00<span>／</span><br>不定休
                        </p>

                        <div class="contact_info">
                            <div class="info">
                                <img src=" <?php echo get_template_directory_uri(); ?>/release/image/sect_4/icon_1.png" alt="">
                                <p>大津市竜が丘3-6</p>
                            </div>

                            <div class="info">
                                <img src=" <?php echo get_template_directory_uri(); ?>/release/image/sect_4/icon_2.png" alt="">
                                <p>077-524-0963</p>
                            </div>

                            <div class="info">
                                <img src=" <?php echo get_template_directory_uri(); ?>/release/image/sect_4/icon_3.png" alt="">
                                <p>有り</p>
                            </div>
                        </div>

                        <div class="bottom_sp_image">
                            <a href="https://www.instagram.com/suchard0963/?hl=ja" target="_blank">
                                <img src=" <?php echo get_template_directory_uri(); ?>/release/image/sect_4/img_1.png" alt="">
                            </a>
                        </div>

                    </div>
                </div>

     
            </div>


            <div class="sect_4__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.3284479488357!2d135.87788871512558!3d34.998482380359064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60010d1dd857d0bf%3A0x76045ac5a965659e!2z44CSNTIwLTA4MDMg5ruL6LOA55yM5aSn5rSl5biC56uc44GM5LiY77yT4oiS77yW!5e0!3m2!1sja!2sjp!4v1626305031900!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>
    </section>
<?php get_footer();?>
