<?php get_header(); ?>
<section class="sect_1">
    <div class="sect_1__wrapper">
        <div class="l-wrap">

            <!-- Heading -->
            <p class="heading_title heading-title"><span>N</span><span>E</span><span>W</span><span>S</span></p>

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
                <div class="cont_1" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col_1">
                        <p class="date"><?php echo get_the_date(); ?></p>
                        <span class="barrier"></span>
                        <p class="para_1"><?php echo the_title(); ?></p>
                    </div>
                    <a class="col_2 btn_read_more active" href='javascript:;'>
                        <p class="read_more">READ MORE</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_1/arrow_icon.png"
                            alt="">
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
            <div class="pos_img_sp" data-aos="fade-up" data-aos-duration="1000">
                <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_6_sp.png" alt="">
                <p class="sub_desc_img mt-25">日替わりランチ</p>
                <p>※メニューは全て税込価格です</p>
            </div>

            <!-- Title -->
            <h3 class="heading-title heading-title-primary wrap">
                <span>ス</span><span>シ</span><span>ャ</span><span>ー</span><span>ル</span><br><span>メ</span><span>ニ</span><span>ュ</span><span>ー</span>
            </h3>
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
                        <p class="heading-title-table heading-title-primary wrap" data-aos="fade-up"
                            data-aos-duration="1000">Morning <span class="text">★サービスタイム7:00～11:00</span>
                        <div class="accordion_item">
                            <a class="active">
                                <span class="open_desc" data-aos="fade-up" data-aos-duration="1000">
                                    <span class="open_txt">OPEN</span>
                                    <img class="open_img"
                                        src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/open_arrow.png"
                                        alt="">
                                </span>
                            </a>
                            </p>
                            <p class="text_sp wrap mb-20" data-aos="fade-up" data-aos-duration="1000">★サービスタイム7:00～11:00
                            </p>
                            <div class="content">
                                <!-- <div class="flex sp wrap">
                                    <div class="w-48">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_1.png"
                                            alt="">
                                        <p>Aset</p>
                                    </div>
                                    <div class="w-48">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_2.png"
                                            alt="">
                                        <p>Bset</p>
                                    </div>
                                </div> -->
                                <div class="wrap dblock">
                                    <div class="col_img mt-50">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_1.png"
                                            alt="" data-aos="fade-up" data-aos-duration="1000">
                                        <p class="price flex mt-0 mt-15" data-aos="fade-up" data-aos-duration="1000">
                                            Aset
                                            <span>￥450</span>
                                        </p>
                                        <p class="desc mb-15" data-aos="fade-up" data-aos-duration="1000">
                                            トースト／ゆでたまご／<br class="br_pc-p"><br class="br_sp-p">サラダ／コーヒー
                                            OR
                                            紅茶 </p>
                                    </div>

                                    <div class="col_img mt-50">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_2.png"
                                            alt="" data-aos="fade-up" data-aos-duration="1000">
                                        <p class="price flex mt-0 mt-15" data-aos="fade-up" data-aos-duration="1000">
                                            Bset
                                            <span>￥550</span>
                                        </p>
                                        <p class="desc mb-15 " data-aos="fade-up" data-aos-duration="1000">
                                            ミックスサンド／<br class="br_pc-p"><br class="br_sp-p">コーヒー
                                            OR 紅茶
                                        </p>
                                    </div>
                                </div>
                                <p class="btm-desc sp" data-aos="fade-up" data-aos-duration="1000">※アイスコーヒーに変更+50円</p>
                            </div>
                            <!-- <div class="flex pc" data-aos="fade-up" data-aos-duration="1000">
                            </div> -->
                            <p class="btm-desc min-tp pc" data-aos="fade-up" data-aos-duration="1000">※アイスコーヒーに変更+50円
                            </p>
                        </div>
                    </div>

                    <div class="sect_2__circle_2" data-aos="fade-up" data-aos-duration="1000">
                        <span class="circle-1"></span>
                        <span class="circle-1"></span>
                        <span class="circle-1"></span>
                        <span class="circle-1"></span>
                    </div>
                    <!-- Food Menu -->
                    <!-- <div class="mt-55" style="position: relative;">
                        <p class="heading-title-table heading-title-primary mt-60 wrap active" data-aos="fade-up"
                            data-aos-duration="1000">Food menu <span class="text">★ランチタイム11:00〜14:00</span>
                        </p>
                        <div class="accordion_item">
                            <a class="open_desc" data-aos="fade-up" data-aos-duration="1000"><span
                                    class="open_txt">OPEN</span> <img class="open_img"
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/open_arrow.png"
                                    alt=""></a>

                            <p class="text_sp wrap" data-aos="fade-up" data-aos-duration="1000">★ランチタイム 11:00〜14:00</p>
                            <div class="content">
                                <p class="btm-desc" data-aos="fade-up" data-aos-duration="1000">★11:00〜14:00 <br
                                        class="br_pc"><br class="br_sp">セットドリンク+¥200（コーヒー、紅茶）
                                </p>
                                <div class="wrap" data-aos="fade-up" data-aos-duration="1000">
                                    <p class="price flex">日替わりランチ<span>￥700</span></p>
                                    <p class="sub-title">ごはん大盛り無料</p>
                                </div>
                                <div class="flex mb-48 pc" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_3.png"
                                            alt="">
                                        <p>ビーフカレー</p>
                                    </div>
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_4.png"
                                            alt="">
                                        <p>親子丼</p>
                                    </div>
                                </div>
                                <div class="flex mb-48 pc" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_5.png"
                                            alt="">
                                        <p>ミートスパゲティ</p>
                                    </div>
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_5_dummy.JPG"
                                            alt="">
                                        <p>日替わりランチ</p>
                                    </div>
                                </div>
                                <div class="cont_slider mb-48 sp-sec" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_3.png"
                                            alt="">
                                        <p>ビーフカレー</p>
                                    </div>
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_4.png"
                                            alt="">
                                        <p>親子丼</p>
                                    </div>
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_5.png"
                                            alt="">
                                        <p>ミートスパゲティ</p>
                                    </div>
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_5_dummy.JPG"
                                            alt="">
                                        <p>日替わりランチ</p>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <p class="price flex mt-20 line_h_sp_min" data-aos="fade-up"
                                        data-aos-duration="1000">
                                        <span>玉子丼<span class="sub-desc"><br class="br_sp_min">（味噌汁、漬物付き）</span>
                                        </span><span>￥650</span>
                                    </p>
                                    <p class="price flex mt-20 line_h_sp_min" data-aos="fade-up"
                                        data-aos-duration="1000">
                                        <span>親子丼<span class="sub-desc"><br class="br_sp_min">（味噌汁、漬物付き）</span>
                                        </span><span>￥700</span>
                                    </p>
                                    <p class="price flex mt-20 line_h_sp_min" data-aos="fade-up"
                                        data-aos-duration="1000"><span>牛丼<span class="sub-desc"><br
                                                    class="br_sp_min">（味噌汁、漬物付き）</span>
                                        </span><span>￥700</span></p>
                                    <p class="sub-title" data-aos="fade-up" data-aos-duration="1000">ごはん大盛り無料<br
                                            class="br_pc"><br class="br_sp">／+50円でサラダが追加できます。
                                    </p>
                                    <hr data-aos="fade-up" data-aos-duration="1000">
                                    <p class="price flex mt-20 line_h_sp_min" data-aos="fade-up"
                                        data-aos-duration="1000">
                                        <span>ピラフ<span class="sub-desc"><br class="br_sp_min">（サラダ付き）</span>
                                        </span><span>￥750</span>
                                    </p>
                                    <p class="price flex mt-20 line_h_sp_min" data-aos="fade-up"
                                        data-aos-duration="1000">
                                        <span>ビーフカレー<span class="sub-desc"><br class="br_sp_min">（サラダ付き）</span>
                                        </span><span>￥750</span>
                                    </p>
                                    <p class="price flex mt-20 line_h_sp_min" data-aos="fade-up"
                                        data-aos-duration="1000">
                                        <span>オムライス<span class="sub-desc"><br class="br_sp_min">（サラダ付き）</span>
                                        </span><span>￥750</span>
                                    </p>
                                    <p class="sub-title" data-aos="fade-up" data-aos-duration="1000">ごはん大盛り無料</p>
                                    <hr data-aos="fade-up" data-aos-duration="1000">
                                    <p class="price flex mt-5 line_h_sp" data-aos="fade-up" data-aos-duration="1000">
                                        <span>焼きそば定食<span class="sub-desc"><br class="br_sp">（ご飯、漬物、みそ汁）</span>
                                        </span><span>￥750</span>
                                    </p>
                                    <p class="price flex mt-20 line_h_sp" data-aos="fade-up" data-aos-duration="1000">
                                        <span>オムそば定食<span class="sub-desc"><br class="br_sp">（ご飯、漬物、みそ汁）</span>
                                        </span><span>￥800</span>
                                    </p>
                                    <p class="price flex mt-20 line_h_sp" data-aos="fade-up" data-aos-duration="1000">
                                        <span>きつね定食<span class="sub-desc ls"><br class="br_sp">（きつねうどん・そば+ミニ玉子丼）</span>
                                        </span><span class="laps_price">￥800</span>
                                    </p>
                                    <p class="sub-title" data-aos="fade-up" data-aos-duration="1000">+50円でサラダが追加できます。
                                    </p>
                                    <hr data-aos="fade-up" data-aos-duration="1000">
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        ミートスパゲティ<span>￥700</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        イタリアンスパゲティ<span>￥700</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        たらこスパゲティ<span>￥700</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        焼きそば<span>￥600</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        オムそば<span>￥650</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        きつねうどん・そば<span>￥500</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        肉うどん・そば<span>￥550</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        鍋焼きうどん<span>￥750</span></p>
                                    <p class="sub-title ls-2 mb-20" data-aos="fade-up" data-aos-duration="1000">
                                        +50円でサラダ<br class="br_pc"> <br class="br_sp">+150円でご飯、漬物、みそ汁が<br class="br_pc">
                                        <br class="br_sp">追加できます。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Sweet Menu -->
                    <div class="mt-55" style="position: relative;">
                        <p class="heading-title-table heading-title-primary wrap mt-70" data-aos="fade-up"
                            data-aos-duration="1000">Sweets menu <span class="text" data-aos="fade-up"
                                data-aos-duration="1000">★11:00〜17:00</span></p>
                        <div class="accordion_item">
                            <a class="text_sp wrap active"><span data-aos="fade-up"
                                    data-aos-duration="1000">★11:00〜17:00</span> <span class="open_desc pos"><span
                                        class="open_txt" data-aos="fade-up" data-aos-duration="1000">OPEN</span> <img
                                        class="open_img" data-aos="fade-up" data-aos-duration="1000"
                                        src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/open_arrow.png"
                                        alt=""></span></a>
                            <div class="content">
                                <p class="btm-desc" data-aos="fade-up" data-aos-duration="1000">★11:00〜14:00 <br
                                        class="br_pc"><br class="br_sp">セットドリンク+¥200（コーヒー、紅茶）
                                </p>
                                <div class="cont_slider mb-48 sp">
                                    <div class="col_img_1" data-aos="fade-up" data-aos-duration="1000">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_10.png"
                                            alt="">
                                        <p>京風ぜんざい</p>
                                    </div>
                                    <div class="col_img_1" data-aos="fade-up" data-aos-duration="1000">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_11.png"
                                            alt="">
                                        <p>フルーツパフェ</p>
                                    </div>
                                    <div class="col_img_1" data-aos="fade-up" data-aos-duration="1000">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_8.jpg"
                                            alt="">
                                        <p>パンケーキ</p>
                                    </div>
                                    <!-- <div class="col_img_1" data-aos="fade-up" data-aos-duration="1000">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_9.png"
                                            alt="">
                                        <p></p>
                                    </div> -->
                                </div>
                                <div class="wrap">
                                    <div class="flex flex_start line_h_sp" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="price">京風ぜんざい<span class="price_desc"><br
                                                    class="br_sp">日本茶とご一緒に…</span>
                                        </div>
                                        <div class="price">￥550</div>
                                    </div>
                                    <div class="flex flex_start mt-5 mt-10-sp line_h_sp" data-aos="fade-up"
                                        data-aos-duration="1000">
                                        <div class="price">パンケーキ<span class="price_desc"><br
                                                    class="br_sp">自家製ブルーベリージャム</span>
                                        </div>
                                        <div class="price">￥450</div>
                                    </div>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        パンケーキセット<span>￥650</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        フルーツパフェ<span>￥600</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        フルーツパフェ<span>￥600</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        バニラアイス<span>￥400</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        タマゴサンド<span>￥550</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        ミックスサンド<span>￥550</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        バタートースト<span>￥300</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        ジャムトースト<span>￥350</span></p>
                                    <p class="sub-title" data-aos="fade-up" data-aos-duration="1000">
                                        バタートースト、ジャムトーストは単品のみのご注文可。※セットドリンク不可</p>
                                    <div class="flex mb-48 pc" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="col_img_1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_7.png"
                                                alt="">
                                            <p>京風ぜんざい</p>
                                        </div>
                                        <div class="col_img_2">
                                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_8.jpg"
                                                alt="">
                                            <p>パンケーキ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Drink Menu -->
                    <div class="accordion_item mt-55" style="position: relative;">
                        <p onclick="myFunction()" class="heading-title-table heading-title-primary wrap mt-60 mb-22"
                            data-aos="fade-up" data-aos-duration="1000">Drink
                            menu </p><a class="open_desc active" data-aos="fade-up" data-aos-duration="1000"><span
                                class="open_txt">OPEN</span> <img class="open_img"
                                src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/open_arrow.png"
                                alt=""></a>
                        <div class="content mt-50">
                            <div class="wrap ">
                                <p class="price flex mt-0" data-aos="fade-up" data-aos-duration="1000">
                                    ブレンドコーヒー<span>￥400</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    アメリカンコーヒー<span>￥420</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    ウィンナーコーヒー<span>￥500</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    カフェオレ<span>￥480</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    アイスコーヒー<span>￥450</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    アイスオレ<span>￥500</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    ココア<span>￥500</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    アイスココア<span>￥500</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    紅茶（レモン・ミルク）<span>￥400</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    アイスティー<span>￥450</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    ミルク<span>￥400</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    コーラ<span>￥420</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    レモンスカッシュ<span>￥500</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    カルピス<span>￥450</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    カルピスソーダ<span>￥480</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    メロンソーダ<span>￥480</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    クリームソーダ<span>￥500</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    オレンジジュース<span>￥420</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    トマトジュース<span>￥450</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    バナナジュース<span>￥480</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    ミックスジュース<span>￥500</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    缶ビール<span>￥400</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Column 1 -->

                <!-- Column 2 -->
                <div class="column-2">
                    <div class="pos_img" data-aos="fade-up" data-aos-duration="1000">
                        <p>※メニューは全て税込価格です</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_6.png"
                            alt="">
                        <p class="sub_desc_img mt-25">日替わりランチ</p>
                    </div>
                    <!-- Sweet Menu -->
                    <!-- <div class="mt-55" style="position: relative;">
                        <p class="heading-title-table heading-title-primary wrap mt-70" data-aos="fade-up"
                            data-aos-duration="1000">Sweets menu <span class="text" data-aos="fade-up"
                                data-aos-duration="1000">★11:00〜17:00</span></p>
                        <div class="accordion_item">
                            <a class="text_sp wrap active"><span data-aos="fade-up"
                                    data-aos-duration="1000">★11:00〜17:00</span> <span class="open_desc pos"><span
                                        class="open_txt" data-aos="fade-up" data-aos-duration="1000">OPEN</span> <img
                                        class="open_img" data-aos="fade-up" data-aos-duration="1000"
                                        src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/open_arrow.png"
                                        alt=""></span></a>
                            <div class="content">
                                <p class="btm-desc" data-aos="fade-up" data-aos-duration="1000">★11:00〜14:00 <br
                                        class="br_pc"><br class="br_sp">セットドリンク+¥200（コーヒー、紅茶）
                                </p>
                                <div class="cont_slider mb-48 sp">
                                    <div class="col_img_1" data-aos="fade-up" data-aos-duration="1000">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_9.png"
                                            alt="">
                                        <p>パンケーキ</p>
                                    </div>
                                    <div class="col_img_1" data-aos="fade-up" data-aos-duration="1000">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_10.png"
                                            alt="">
                                        <p>京風ぜんざい</p>
                                    </div>
                                    <div class="col_img_1" data-aos="fade-up" data-aos-duration="1000">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_11.png"
                                            alt="">
                                        <p>フルーツパフェ</p>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <div class="flex flex_start line_h_sp" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="price">京風ぜんざい<span class="price_desc"><br
                                                    class="br_sp">日本茶とご一緒に…</span>
                                        </div>
                                        <div class="price">￥550</div>
                                    </div>
                                    <div class="flex flex_start mt-5 mt-10-sp line_h_sp" data-aos="fade-up"
                                        data-aos-duration="1000">
                                        <div class="price">パンケーキ<span class="price_desc"><br
                                                    class="br_sp">自家製ブルーベリージャム</span>
                                        </div>
                                        <div class="price">￥450</div>
                                    </div>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        パンケーキセット<span>￥650</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        フルーツパフェ<span>￥600</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        フルーツパフェ<span>￥600</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        バニラアイス<span>￥400</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        タマゴサンド<span>￥550</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        ミックスサンド<span>￥550</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        バタートースト<span>￥300</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        ジャムトースト<span>￥350</span></p>
                                    <p class="sub-title ls-2" data-aos="fade-up" data-aos-duration="1000">
                                        バタートースト、ジャムトーストは単品のみのご注文可。※セットドリンク不可</p>
                                    <div class="flex mb-48 pc" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="col_img_1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_7.png"
                                                alt="">
                                            <p>京風ぜんざい</p>
                                        </div>
                                        <div class="col_img_2">
                                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_8.png"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Drink Menu -->
                    <!-- <div class="accordion_item mt-55" style="position: relative;">
                        <p onclick="myFunction()" class="heading-title-table heading-title-primary wrap mt-60"
                            data-aos="fade-up" data-aos-duration="1000">Drink
                            Menu </p><a class="open_desc active" data-aos="fade-up" data-aos-duration="1000"><span
                                class="open_txt">OPEN</span> <img class="open_img"
                                src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/open_arrow.png"
                                alt=""></a>
                        <div class="content mt-50">
                            <div class="mt-55 wrap">
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    ブレンドコーヒー<span>￥400</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    アメリカンコーヒー<span>￥420</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    ウィンナーコーヒー<span>￥500</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    カフェオレ<span>￥480</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    アイスコーヒー<span>￥450</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    アイスオレ<span>￥500</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    ココア<span>￥500</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    アイスココア<span>￥500</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    紅茶（レモン・ミルク）<span>￥400</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    アイスティー<span>￥450</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    ミルク<span>￥400</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    コーラ<span>￥420</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    レモンスカッシュ<span>￥500</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    カルピス<span>￥450</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    カルピスソーダ<span>￥480</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    メロンソーダ<span>￥480</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    クリームソーダ<span>￥500</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    オレンジジュース<span>￥420</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    トマトジュース<span>￥450</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    バナナジュース<span>￥480</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    ミックスジュース<span>￥500</span></p>
                                <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                    缶ビール<span>￥400</span></p>
                            </div>
                        </div>
                    </div> -->
                    <!-- Food Menu -->
                    <div class="mt-55" style="position: relative;">
                        <p class="heading-title-table heading-title-primary mt-60 wrap active" data-aos="fade-up"
                            data-aos-duration="1000">Food menu <span class="text">★ランチタイム11:00〜14:00</span>
                        </p>
                        <div class="accordion_item">
                            <a class="open_desc" data-aos="fade-up" data-aos-duration="1000"><span
                                    class="open_txt">OPEN</span> <img class="open_img"
                                    src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/open_arrow.png"
                                    alt=""></a>

                            <p class="text_sp wrap" data-aos="fade-up" data-aos-duration="1000">★ランチタイム 11:00〜14:00</p>
                            <div class="content">
                                <p class="btm-desc" data-aos="fade-up" data-aos-duration="1000">★11:00〜14:00 <br
                                        class="br_pc"><br class="br_sp">セットドリンク+¥200（コーヒー、紅茶）
                                </p>
                                <div class="wrap" data-aos="fade-up" data-aos-duration="1000">
                                    <p class="price flex">日替わりランチ<span>￥700</span></p>
                                    <p class="sub-title">ごはん大盛り無料</p>
                                </div>
                                <div class="flex mb-48 pc" data-aos="fade-up" data-aos-duration="1000">
                                    <!-- Daily lunch -->
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_5_dummy.JPG"
                                            alt="">
                                        <p>日替わりランチ</p>
                                    </div>
                                    <!-- Beef curry -->
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_3.png"
                                            alt="">
                                        <p>ビーフカレー</p>
                                    </div>
                                </div>
                                <div class="flex mb-48 pc" data-aos="fade-up" data-aos-duration="1000">
                                    <!-- Oyakodon -->
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_4.png"
                                            alt="">
                                        <p>親子丼</p>
                                    </div>
                                    <!-- Meat spaghetti -->
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_5.png"
                                            alt="">
                                        <p>ミートスパゲティ</p>
                                    </div>
                                </div>
                                <!-- Cont Slider -->
                                <div class="cont_slider mt-40-pri sp-sec" data-aos="fade-up" data-aos-duration="1000">
                                    <!-- Daily lunch -->
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_5_dummy.JPG"
                                            alt="">
                                        <p>日替わりランチ</p>
                                    </div>
                                    <!-- Beef curry -->
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_3.png"
                                            alt="">
                                        <p>ビーフカレー</p>
                                    </div>
                                    <!-- Oyakodon -->
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_4.png"
                                            alt="">
                                        <p>親子丼</p>
                                    </div>
                                    <!-- Meat spaghetti -->
                                    <div class="col_img_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_2/sect_2_img_5.png"
                                            alt="">
                                        <p>ミートスパゲティ</p>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <p class="price flex mt-20 line_h_sp_min" data-aos="fade-up"
                                        data-aos-duration="1000">
                                        <span>玉子丼<span class="sub-desc"><br class="br_sp_min">（味噌汁、漬物付き）</span>
                                        </span><span>￥650</span>
                                    </p>
                                    <p class="price flex mt-20 line_h_sp_min" data-aos="fade-up"
                                        data-aos-duration="1000">
                                        <span>親子丼<span class="sub-desc"><br class="br_sp_min">（味噌汁、漬物付き）</span>
                                        </span><span>￥700</span>
                                    </p>
                                    <p class="price flex mt-20 line_h_sp_min" data-aos="fade-up"
                                        data-aos-duration="1000"><span>牛丼<span class="sub-desc"><br
                                                    class="br_sp_min">（味噌汁、漬物付き）</span>
                                        </span><span>￥700</span></p>
                                    <p class="sub-title" data-aos="fade-up" data-aos-duration="1000">ごはん大盛り無料<br
                                            class="br_pc"><br class="br_sp">／+50円でサラダが追加できます。
                                    </p>
                                    <hr data-aos="fade-up" data-aos-duration="1000">
                                    <p class="price flex mt-20 line_h_sp_min" data-aos="fade-up"
                                        data-aos-duration="1000">
                                        <span>ピラフ<span class="sub-desc"><br class="br_sp_min">（サラダ付き）</span>
                                        </span><span>￥750</span>
                                    </p>
                                    <p class="price flex mt-20 line_h_sp_min" data-aos="fade-up"
                                        data-aos-duration="1000">
                                        <span>ビーフカレー<span class="sub-desc"><br class="br_sp_min">（サラダ付き）</span>
                                        </span><span>￥750</span>
                                    </p>
                                    <p class="price flex mt-20 line_h_sp_min" data-aos="fade-up"
                                        data-aos-duration="1000">
                                        <span>オムライス<span class="sub-desc"><br class="br_sp_min">（サラダ付き）</span>
                                        </span><span>￥750</span>
                                    </p>
                                    <p class="sub-title" data-aos="fade-up" data-aos-duration="1000">ごはん大盛り無料</p>
                                    <hr data-aos="fade-up" data-aos-duration="1000">
                                    <p class="price flex mt-5 line_h_sp" data-aos="fade-up" data-aos-duration="1000">
                                        <span>焼きそば定食<span class="sub-desc"><br class="br_sp">（ご飯、漬物、みそ汁）</span>
                                        </span><span>￥750</span>
                                    </p>
                                    <p class="price flex mt-20 line_h_sp" data-aos="fade-up" data-aos-duration="1000">
                                        <span>オムそば定食<span class="sub-desc"><br class="br_sp">（ご飯、漬物、みそ汁）</span>
                                        </span><span>￥800</span>
                                    </p>
                                    <p class="price flex mt-20 line_h_sp" data-aos="fade-up" data-aos-duration="1000">
                                        <span>きつね定食<span class="sub-desc ls"><br class="br_sp">（きつねうどん・そば+ミニ玉子丼）</span>
                                        </span><span class="laps_price">￥800</span>
                                    </p>
                                    <p class="sub-title" data-aos="fade-up" data-aos-duration="1000">+50円でサラダが追加できます。
                                    </p>
                                    <hr data-aos="fade-up" data-aos-duration="1000">
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        ミートスパゲティ<span>￥700</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        イタリアンスパゲティ<span>￥700</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        たらこスパゲティ<span>￥700</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        焼きそば<span>￥600</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        オムそば<span>￥650</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        きつねうどん・そば<span>￥500</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        肉うどん・そば<span>￥550</span></p>
                                    <p class="price flex mt-5" data-aos="fade-up" data-aos-duration="1000">
                                        鍋焼きうどん<span>￥750</span></p>
                                    <p class="sub-title ls-2 mb-20 ls-2" data-aos="fade-up" data-aos-duration="1000">
                                        +50円でサラダ<br class="br_pc"> <br class="br_sp">+150円でご飯、漬物、みそ汁が<br class="br_pc">
                                        <br class="br_sp">追加できます。
                                    </p>
                                </div>
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
                <img class="animate__animated"
                    src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/take_out.png" alt="">
            </div>

            <div class="sect_3__pack">

                <div class="col-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/pack_1.png" alt=""
                        data-aos="fade-up" data-aos-duration="1000">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/pack_2.png" alt=""
                        data-aos="fade-up" data-aos-duration="1000">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/pack_3.png" alt=""
                        data-aos="fade-up" data-aos-duration="1000">
                </div>

                <div class="col-2">
                    <p class="title heading-title">
                        <span>お</span><span>弁</span><span>当</span><span>ご</span><span>予</span><span>約</span><span>受</span><span>付</span><span>中</span>
                    </p>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/pack_1.png" alt=""
                        data-aos="fade-up" data-aos-duration="1000">
                    <p class="desc" data-aos="fade-up" data-aos-duration="1000">予約受付時間<span
                            class="space"></span>当日10:00まで<br>／お渡し時間11:30〜／お弁当ラストオーダー16:00まで</p>
                    <p class="txt" data-aos="fade-up" data-aos-duration="1000">
                        当店自慢の味をテイクアウトで。大きな鮭がどんと乗ったスペシャル弁当とワンコイン弁当をご用意しております。</p>
                    <table>
                        <tr data-aos="fade-up" data-aos-duration="1000">
                            <td>スペシャル弁当</td>
                            <td>¥700</td>
                        </tr>
                        <tr data-aos="fade-up" data-aos-duration="1000">
                            <td>焼き鮭弁当</td>
                            <td>¥500</td>
                        </tr>
                        <tr data-aos="fade-up" data-aos-duration="1000">
                            <td>唐揚げ弁当</td>
                            <td>¥500</td>
                        </tr>
                        <tr data-aos="fade-up" data-aos-duration="1000">
                            <td>焼肉弁当</td>
                            <td>¥500</td>
                        </tr>
                    </table>
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/pack_2.png" alt=""
                        data-aos="fade-up" data-aos-duration="1000">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/pack_3.png" alt=""
                        data-aos="fade-up" data-aos-duration="1000">
                </div>
            </div>
            <div class="sect_3__contact_info">
                <a class="line" href="https://lin.ee/XscVr0N" target="_blank" data-aos="fade-up"
                    data-aos-duration="1000">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/line_icon.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/release/image/sect_3/line_icon_white.png"
                        alt="">
                    <p class="txt">LINEで注文</p>
                </a>

                <a class="phone" href="tel:077-524-0963" data-aos="fade-up" data-aos-duration="1000">
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
                            <img src=" <?php echo get_template_directory_uri(); ?>/release/image/sect_4/icon_1.png"
                                alt="">
                            <p>大津市竜が丘3-6</p>
                        </div>

                        <div class="info">
                            <img src=" <?php echo get_template_directory_uri(); ?>/release/image/sect_4/icon_2.png"
                                alt="">
                            <p>077-524-0963</p>
                        </div>

                        <div class="info">
                            <img src=" <?php echo get_template_directory_uri(); ?>/release/image/sect_4/icon_3.png"
                                alt="">
                            <p>有り</p>
                        </div>
                    </div>

                    <div class="bottom_sp_image">
                        <a href="https://www.instagram.com/suchard0963/?hl=ja" target="_blank">
                            <img src=" <?php echo get_template_directory_uri(); ?>/release/image/sect_4/img_1.png"
                                alt="">
                        </a>
                    </div>

                </div>
            </div>


        </div>


        <div class="sect_4__map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.3284479488357!2d135.87788871512558!3d34.998482380359064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60010d1dd857d0bf%3A0x76045ac5a965659e!2z44CSNTIwLTA4MDMg5ruL6LOA55yM5aSn5rSl5biC56uc44GM5LiY77yT4oiS77yW!5e0!3m2!1sja!2sjp!4v1626305031900!5m2!1sja!2sjp"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

    </div>
</section>
<?php get_footer(); ?>