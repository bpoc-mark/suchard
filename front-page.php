<?php get_header(); ?>
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
<section class="sect_2">
    <div class="sect_2__wrapper">
        <div class="l-wrap">
            <div class="pos_img_sp">
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_6_sp.png" alt="">
                <p class="sub_desc_img mt-25">日替わりランチ</p>
                <p>※メニューは全て税込価格です</p>
            </div>

            <!-- Title -->
            <h3 class="heading-title heading-title-primary wrap">スシャール<br>メニュー</h3>
            <div class="sect_2__circle">
                <span class="circle-1"></span>
                <span class="circle-1"></span>
                <span class="circle-1"></span>
                <span class="circle-1"></span>
            </div>
            <!-- Text Content -->
            <div class="sect_2__row-table">
                <!-- Column 1 -->
                <div class="column-1">
                    <div class="mt-55" style="position: relative;">
                        <p class="heading-title-table heading-title-primary wrap">Morning <span class="text">★サービスタイム7:00～11:00</span>
                        <div class="accordion_item">
                            <a class="active">
                                <span class="open_desc">
                                    <span class="open_txt">OPEN</span>
                                    <img class="open_img" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/open_arrow.png" alt="">
                                </span>
                            </a>
                            </p>
                            <p class="text_sp wrap mb-20">★サービスタイム7:00～11:00</p>
                            <div class="content">
                                <div class="slide_sp cont_slider">
                                    <div class="">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_1.png" alt="">
                                        <p>Aset</p>
                                    </div>
                                    <div class="">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_2.png" alt="">
                                        <p>Bset</p>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <p class="price flex">Aset <span>￥450</span></p>
                                    <p class="desc">トースト／ゆでたまご／サラダ／コーヒー OR 紅茶 </p>
                                    <p class="price flex">Bset <span>￥550</span></p>
                                    <p class="desc">ミックスサンド／コーヒー OR 紅茶</p>
                                </div>
                                <p class="btm-desc sp">※アイスコーヒーに変更+50円</p>
                            </div>
                            <div class="flex pc">
                                <div class="col_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_1.png" alt="">
                                    <p class="">Aset</p>
                                </div>
                                <div class="col_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_2.png" alt="">
                                    <p class="">Bset</p>
                                </div>
                            </div>
                            <p class="btm-desc min-tp pc">※アイスコーヒーに変更+50円</p>
                        </div>
                    </div>

                    <div class="sect_2__circle_2">
                        <span class="circle-1"></span>
                        <span class="circle-1"></span>
                        <span class="circle-1"></span>
                        <span class="circle-1"></span>
                    </div>

                    <div class="mt-55" style="position: relative;">
                        <p class="heading-title-table heading-title-primary mt-60 wrap active">Food menu <span class="text">★ランチタイム11:00〜14:00</span>
                        </p>
                        <div class="accordion_item">
                            <a class="open_desc"><span class="open_txt">OPEN</span> <img class="open_img" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/open_arrow.png" alt=""></a>

                            <p class="text_sp wrap">★ランチタイム 11:00〜14:00</p>
                            <div class="content">
                                <!-- <p class="text_sp">★ランチタイム11:00〜14:00</p> -->
                                <p class="btm-desc">★11:00〜14:00 <br class="br_pc"><br class="br_sp">セットドリンク+¥200（コーヒー、紅茶）
                                </p>
                                <div class="wrap">
                                    <p class="price flex">日替わりランチ<span>￥700</span></p>
                                    <p class="sub-title">ごはん大盛り無料</p>
                                </div>
                                <div class="flex mb-48 pc">
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_3.png" alt="">
                                        <p>ビーフカレー</p>
                                    </div>
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_4.png" alt="">
                                        <p>親子丼</p>
                                    </div>
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_5.png" alt="">
                                        <p>ミートスパゲティ</p>
                                    </div>
                                </div>
                                <div class="cont_slider mb-48 sp">
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_3.png" alt="">
                                        <p>ビーフカレー</p>
                                    </div>
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_4.png" alt="">
                                        <p>親子丼</p>
                                    </div>
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_5.png" alt="">
                                        <p>ミートスパゲティ</p>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <p class="price flex mt-5"><span>玉子丼<span class="sub-desc">（味噌汁、漬物付き）</span>
                                        </span><span>￥650</span></p>
                                    <p class="price flex mt-5"><span>親子丼<span class="sub-desc">（味噌汁、漬物付き）</span>
                                        </span><span>￥700</span></p>
                                    <p class="price flex mt-5"><span>牛丼<span class="sub-desc">（味噌汁、漬物付き）</span>
                                        </span><span>￥700</span></p>
                                    <p class="sub-title">ごはん大盛り無料<br class="br_pc"><br class="br_sp">／+50円でサラダが追加できます。
                                    </p>
                                    <hr>
                                    <p class="price flex mt-5"><span>ピラフ<span class="sub-desc">（サラダ付き）</span>
                                        </span><span>￥750</span></p>
                                    <p class="price flex mt-5"><span>ビーフカレー<span class="sub-desc">（サラダ付き）</span>
                                        </span><span>￥750</span></p>
                                    <p class="price flex mt-5"><span>オムライス<span class="sub-desc">（サラダ付き）</span>
                                        </span><span>￥750</span></p>
                                    <p class="sub-title">ごはん大盛り無料</p>
                                    <hr>
                                    <p class="price flex mt-5"><span>焼きそば定食<span class="sub-desc">（ご飯、漬物、みそ汁）</span>
                                        </span><span>￥750</span></p>
                                    <p class="price flex mt-5"><span>オムそば定食<span class="sub-desc">（ご飯、漬物、みそ汁）</span>
                                        </span><span>￥800</span></p>
                                    <p class="price flex mt-5"><span>きつね定食<span class="sub-desc ls">（きつねうどん・そば+ミニ玉子丼）</span>
                                        </span><span>￥800</span></p>
                                    <p class="sub-title">+50円でサラダが追加できます。</p>
                                    <hr>
                                    <p class="price flex mt-5">ミートスパゲティ<span>￥700</span></p>
                                    <p class="price flex mt-5">イタリアンスパゲティ<span>￥700</span></p>
                                    <p class="price flex mt-5">たらこスパゲティ<span>￥700</span></p>
                                    <p class="price flex mt-5">焼きそば<span>￥600</span></p>
                                    <p class="price flex mt-5">オムそば<span>￥650</span></p>
                                    <p class="price flex mt-5">きつねうどん・そば<span>￥500</span></p>
                                    <p class="price flex mt-5">肉うどん・そば<span>￥550</span></p>
                                    <p class="price flex mt-5">鍋焼きうどん<span>￥750</span></p>
                                    <p class="sub-title ls-2 mb-20">+50円でサラダ<br class="br_pc"> <br class="br_sp">+150円でご飯、漬物、みそ汁が<br class="br_pc"> <br class="br_sp">追加できます。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Column 1 -->

                <!-- Column 2 -->
                <div class="column-2">
                    <div class="pos_img">
                        <p>※メニューは全て税込価格です</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_6.png" alt="">
                        <p class="sub_desc_img mt-25">日替わりランチ</p>
                    </div>
                    <div class="mt-55" style="position: relative;">
                        <p class="heading-title-table heading-title-primary wrap mt-70">Sweets menu <span class="text">★11:00〜17:00</span></p>
                        <div class="accordion_item">
                            <a class="text_sp wrap active">★11:00〜17:00 <span class="open_desc pos"><span class="open_txt">OPEN</span> <img class="open_img" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/open_arrow.png" alt=""></span></a>
                            <div class="content">
                                <p class="btm-desc">★11:00〜14:00 <br class="br_pc"><br class="br_sp">セットドリンク+¥200（コーヒー、紅茶）
                                </p>
                                <div class="cont_slider mb-48 sp">
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_9.png" alt="">
                                        <p>パンケーキ</p>
                                    </div>
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_10.png" alt="">
                                        <p>京風ぜんざい</p>
                                    </div>
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_11.png" alt="">
                                        <p>フルーツパフェ</p>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <p class="price flex flex_start">京風ぜんざい日本茶とご一緒に… <span>￥550</span></p>
                                    <p class="price flex mt-5">パンケーキ 自家製ブルーベリージャム<span>￥450</span></p>
                                    <p class="price flex mt-5">パンケーキセット<span>￥650</span></p>
                                    <p class="price flex mt-5">フルーツパフェ<span>￥600</span></p>
                                    <p class="price flex mt-5">フルーツパフェ<span>￥600</span></p>
                                    <p class="price flex mt-5">バニラアイス<span>￥400</span></p>
                                    <p class="price flex mt-5">タマゴサンド<span>￥550</span></p>
                                    <p class="price flex mt-5">ミックスサンド<span>￥550</span></p>
                                    <p class="price flex mt-5">バタートースト<span>￥300</span></p>
                                    <p class="price flex mt-5">ジャムトースト<span>￥350</span></p>
                                    <p class="sub-title ls-2">バタートースト、ジャムトーストは単品のみのご注文可。※セットドリンク不可</p>
                                    <div class="flex mb-48 pc">
                                        <div class="col_img_1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_7.png" alt="">
                                            <p>京風ぜんざい</p>
                                        </div>
                                        <div class="col_img_2">
                                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_8.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion_item mt-55" style="position: relative;">
                        <p onclick="myFunction()" class="heading-title-table heading-title-primary wrap mt-60">Drink
                            Menu </p><a class="open_desc active"><span class="open_txt">OPEN</span> <img class="open_img" src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/open_arrow.png" alt=""></a>
                        <!-- <p id="myDIV" class="drink_sub">以下展開イメージ</p> -->
                        <div class="content mt-50">
                            <div class="mt-55 wrap">
                                <!-- <p class="drink_sub">以下展開イメージ</p> -->
                                <p class="price flex mt-5">ブレンドコーヒー<span>￥400</span></p>
                                <p class="price flex mt-5">アメリカンコーヒー<span>￥420</span></p>
                                <p class="price flex mt-5">ウィンナーコーヒー<span>￥500</span></p>
                                <p class="price flex mt-5">カフェオレ<span>￥480</span></p>
                                <p class="price flex mt-5">アイスコーヒー<span>￥450</span></p>
                                <p class="price flex mt-5">アイスオレ<span>￥500</span></p>
                                <p class="price flex mt-5">ココア<span>￥500</span></p>
                                <p class="price flex mt-5">アイスココア<span>￥500</span></p>
                                <p class="price flex mt-5">紅茶（レモン・ミルク）<span>￥400</span></p>
                                <p class="price flex mt-5">アイスティー<span>￥450</span></p>
                                <p class="price flex mt-5">ミルク<span>￥400</span></p>
                                <p class="price flex mt-5">コーラ<span>￥420</span></p>
                                <p class="price flex mt-5">レモンスカッシュ<span>￥500</span></p>
                                <p class="price flex mt-5">カルピス<span>￥450</span></p>
                                <p class="price flex mt-5">カルピスソーダ<span>￥480</span></p>
                                <p class="price flex mt-5">メロンソーダ<span>￥480</span></p>
                                <p class="price flex mt-5">クリームソーダ<span>￥500</span></p>
                                <p class="price flex mt-5">オレンジジュース<span>￥420</span></p>
                                <p class="price flex mt-5">トマトジュース<span>￥450</span></p>
                                <p class="price flex mt-5">バナナジュース<span>￥480</span></p>
                                <p class="price flex mt-5">ミックスジュース<span>￥500</span></p>
                                <p class="price flex mt-5">缶ビール<span>￥400</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Column 2 -->
            </div>

        </div>
    </div>
</section>

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
                <a class="line" href="https://lin.ee/uLZzZvL" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/line_icon.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/line_icon_white.png" alt="">
                    <p class="txt">LINEで注文</p>
                </a>

                <a class="phone" href="tel:077-524-0963">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/phone.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/phone_white.png" alt="">
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
                        <span class="large_text">スシャール</span>
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
<?php get_footer(); ?>