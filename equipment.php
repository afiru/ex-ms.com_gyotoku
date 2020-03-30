<?php include 'include/header.php'; ?>
<?php include 'include/tuijuu_sp.php'; ?>
<section class="display_flex_center under_page_contents under_page_contents_equipment">
    <div class="text_box">
        <h1 class="t_center color_231815 mintyou">Equipment</h1>
        <p class="mintyou color_231815 t_center main_plan_contenr_contents_p">
            暮らしやすさと機能性へのこだわりの追求が、<br>日常を美しく変える。
        </p>
    </div>
</section>
<?php
    $page_link = array('Storage','Comfortable_Planning','Kitchen','Bathroom','Powder_room','Toilet','Ecology','Amenity','Security','Structure');
?>
<main class="wapper margin_50 equipment_main">
    <?php $x=1; foreach ($page_link as $key2 => $val2): ?>
        <nav id="<?php echo $val2; ?>" class="equipment_main_nav">
            <ul class="display_flex_stretch display_row equipment_main_nav_ul">
                <?php $i=1 ;foreach ($page_link as $key => $val): ?>
                <li class="equipment_main_nav_li">
                    <a href="#<?php echo $val; ?>">
                        <figure class="equipment_main_nav_li_figure">
                            <?php if($val == $val2): ?>
                                <picture>
                                    <source class="lazy" media="(min-width: 768px)" srcset="img/equipment/equipment_main_nav_li_figure_pc_<?php echo str_pad($i, 2, 0, STR_PAD_LEFT); ?>_active.png"><!--PC画像-->
                                    <source class="lazy"  media="(max-width: 768px)" srcset="img/equipment/equipment_main_nav_li_figure_sp_<?php echo str_pad($i, 2, 0, STR_PAD_LEFT); ?>_active.png"><!--SP画像-->
                                    <img class="lazy" src="img/equipment/equipment_main_nav_li_figure_pc_<?php echo str_pad($i, 2, 0, STR_PAD_LEFT); ?>_active.svg" alt="" />
                                </picture>
                            <?php else: ?>
                                <picture>
                                    <source class="lazy" media="(min-width: 768px)" srcset="img/equipment/equipment_main_nav_li_figure_pc_<?php echo str_pad($i, 2, 0, STR_PAD_LEFT); ?>.png"><!--PC画像-->
                                    <source class="lazy"  media="(max-width: 768px)" srcset="img/equipment/equipment_main_nav_li_figure_sp_<?php echo str_pad($i, 2, 0, STR_PAD_LEFT); ?>.png"><!--SP画像-->
                                    <img class="lazy" src="img/equipment/equipment_main_nav_li_figure_pc_<?php echo str_pad($i, 2, 0, STR_PAD_LEFT); ?>.png" alt="" />
                                </picture>
                            <?php endif; ?>
                        </figure>
                    </a>
                </li>
                <?php $i++; endforeach; ?>
            </ul>
        </nav>
        <article class="margin_wapper_30 equipment_main_article">
            <figure class="equipment_main_article_figure">
                <picture>
                    <source class="lazy" media="(min-width: 768px)" srcset="img/equipment/equipment_main_article_figure_pc_<?php echo str_pad($x, 2, 0, STR_PAD_LEFT); ?>.png"><!--PC画像-->
                    <source class="lazy"  media="(max-width: 768px)" srcset="img/equipment/equipment_main_article_figure_sp_<?php echo str_pad($x, 2, 0, STR_PAD_LEFT); ?>.png"><!--SP画像-->
                    <img class="lazy" src="img/equipment/equipment_main_article_figure_pc_<?php echo str_pad($x, 2, 0, STR_PAD_LEFT); ?>.png" alt="" />
                </picture>
            </figure>
        </article>
    <?php $x++; endforeach; ?>
</main>
<nav class="margin_80 wapper index_top_nav location_bottom_nav">
    <ul class="display_flex_stretch display_row index_top_nav_ul">
        <li class="index_top_nav_ul_li">
            <a href="https://www.ex-ms.com/sendmail/sendmail01.php?no=2070" target="_blank">
                <img src="img/location/button_index_top_nav_ul_li_01.svg" alt="資料請求">
            </a>
        </li>
        <li class="index_top_nav_ul_li">
            <a href="https://airrsv.net/AKR6399203893/calendar" target="_blank">
                <img src="img/location/button_index_top_nav_ul_li_02.svg" alt="お電話でのお問合せは「エクセレントシティ南行徳1丁目」ゲストサロン受付時間：10：00～19：00火・水曜定休（祝日は除く）">
            </a>
        </li>
    </ul>
</nav>
<?php include 'include/footer.php'; ?>
