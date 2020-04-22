<?php include 'include/header.php'; ?>
<?php include 'include/tuijuu_sp.php'; ?>
<section class="display_flex_center under_page_contents under_page_contents_equipment">
    <div class="text_box">
        <h1 class="t_center color_231815 mintyou">EQUIPMENT</h1>
    </div>
</section>

<main class="margin_50 equipment_main">
    <?php
        $page_link = array('SKILLFULLYPLANNING','ZEH-M','SMARTHEMS','EQUIPMENT','ECOSMARTLIFE','AMENITYSECURITY','STRUCTURE','QUALITYOFTRUST');
        $top_title_page_link = array('EQUIPMENT','ECOSMARTLIFE','AMENITYSECURITY','STRUCTURE','QUALITYOFTRUST');
    ?>

    <?php $x=1; foreach ($page_link as $key2 => $val2): ?>
    
        <?php if($val2 === 'EQUIPMENT'): ?>
            <div id="<?php echo $val2; ?>" class="wapper margin_100 equipment_title_wap">
                <h2 class="equipment_title">
                    <picture>
                        <source media="(min-width: 768px)" srcset="img/equipment/equipment_title_pc.svg"><!--PC画像-->
                        <source media="(max-width: 768px)" srcset="img/equipment/equipment_title_sp.svg"><!--SP画像-->
                        <img src="img/equipment/equipment_title_pc.svg" alt="" />
                    </picture>
                </h2>
            </div>
        <?php elseif($val2 === 'ECOSMARTLIFE'): ?>
            <div id="<?php echo $val2; ?>" class="wapper margin_50 ecosmartlife_title_wap">
                <h2 class="equipment_title">
                    <picture>
                        <source media="(min-width: 768px)" srcset="img/equipment/title_ecosmartlife_pc.svg"><!--PC画像-->
                        <source media="(max-width: 768px)" srcset="img/equipment/title_ecosmartlife_sp.svg"><!--SP画像-->
                        <img src="img/equipment/title_ecosmartlife_pc.svg" alt="" />
                    </picture>
                </h2>
            </div>
        <?php elseif($val2 === 'AMENITYSECURITY'): ?>
            <div id="<?php echo $val2; ?>" class="wapper margin_50 ecosmartlife_title_wap">
                <h2 class="equipment_title">
                    <picture>
                        <source media="(min-width: 768px)" srcset="img/equipment/title_amenitysecurity_pc.svg"><!--PC画像-->
                        <source media="(max-width: 768px)" srcset="img/equipment/title_amenitysecurity_sp.svg"><!--SP画像-->
                        <img src="img/equipment/title_amenitysecurity_pc.svg" alt="" />
                    </picture>
                </h2>
            </div>
        <?php elseif($val2 === 'STRUCTURE'): ?>
            <div id="<?php echo $val2; ?>" class="wapper margin_50 structure_title_wap">
                <h2 class="equipment_title">
                    <picture>
                        <source media="(min-width: 768px)" srcset="img/equipment/title_structure_title_wap_pc.svg"><!--PC画像-->
                        <source media="(max-width: 768px)" srcset="img/equipment/title_structure_title_wap_sp.svg"><!--SP画像-->
                        <img src="img/equipment/title_structure_title_wap_pc.svg" alt="" />
                    </picture>
                </h2>
            </div>
        <?php elseif($val2 === 'QUALITYOFTRUST'): ?>
            <div id="<?php echo $val2; ?>" class="wapper margin_50 qualityoftrust_title">
                <h2 class="equipment_title">
                    <picture>
                        <source media="(min-width: 768px)" srcset="img/equipment/title_qualityoftrust_pc.svg"><!--PC画像-->
                        <source media="(max-width: 768px)" srcset="img/equipment/title_qualityoftrust_sp.svg"><!--SP画像-->
                        <img src="img/equipment/title_qualityoftrust_pc.svg" alt="" />
                    </picture>
                </h2>
            </div>
        <?php endif; ?>
    
        <nav id="<?php echo $val2; ?>" class="<?php if($val2 === 'EQUIPMENT'): ?>margin_20<?php else: ?>margin_20<?php endif; ?> wapper">
            <ul class="display_flex_stretch display_row equipment_main_nav_ul">
                <?php $i=1 ;foreach ($page_link as $key => $val): ?>
                <li class="equipment_main_nav_li">
                    <a href="#<?php echo $val; ?>">
                        <figure class="equipment_main_nav_li_figure">
                            <?php if($val == $val2): ?>
                                <picture>
                                    <source class="lazy" media="(min-width: 768px)" srcset="img/equipment/button_0<?php echo $i; ?>_on.svg"><!--PC画像-->
                                    <source class="lazy"  media="(max-width: 768px)" srcset="img/equipment/button_0<?php echo $i; ?>_on_sp.svg"><!--SP画像-->
                                    <img class="lazy" src="img/equipment/button_0<?php echo $i; ?>_on.svg" alt="" />
                                </picture>
                            <?php else: ?>
                                <picture>
                                    <source class="lazy" media="(min-width: 768px)" srcset="img/equipment/button_0<?php echo $i; ?>.svg"><!--PC画像-->
                                    <source class="lazy"  media="(max-width: 768px)" srcset="img/equipment/button_0<?php echo $i; ?>_sp.svg"><!--SP画像-->
                                    <img class="lazy" src="img/equipment/button_0<?php echo $i; ?>.svg" alt="" />
                                </picture>
                            <?php endif; ?>
                        </figure>
                    </a>
                </li>
                <?php $i++; endforeach; ?>
            </ul>
        </nav>
        <?php if($val2 === 'SKILLFULLYPLANNING'): ?>
            <section  class="margin_50 equipment_main_01">
            </section>
            <section class="back_F0E6DD padding_top_30_bottom_50 equipment_main_02">
                <figure class="wapper equipment_main_02_contents">
                    <picture>
                        <source class="" type="image/webp" media="(min-width: 768px)" srcset="img/equipment/contents_02_pc.png"><!--PC画像-->
                        <source class=""  media="(max-width: 768px)" srcset="img/equipment/contents_02_sp.png"><!--SP画像-->
                        <img class="" src="img/equipment/contents_02_pc.png" alt="" /><!--そのほか画像（PC）-->
                    </picture>
                </figure>
            </section>
        <?php elseif($val2 === 'ZEH-M'): ?>
            <section  class="margin_50 padding_top_50_bottom_50 equipment_main_zehm gb_equipment_main_zehm">
                <figure class="wapper equipment_main_02_contents">
                    <picture>
                        <source class="" type="image/webp" media="(min-width: 768px)" srcset="img/equipment/gb_equipment_main_zehm_pc.png"><!--PC画像-->
                        <source class=""  media="(max-width: 768px)" srcset="img/equipment/gb_equipment_main_zehm_sp.png"><!--SP画像-->
                        <img class="" src="img/equipment/gb_equipment_main_zehm_pc.png" alt="" /><!--そのほか画像（PC）-->
                    </picture>
                </figure>

            </section>
        <?php elseif($val2 === 'SMARTHEMS'): ?>
            <section  class="margin_50 padding_top_50_bottom_50 equipment_main_smarthems gb_equipment_main_smarthems">
                <figure class="wapper equipment_main_02_contents">
                    <picture>
                        <source class="" type="image/webp" media="(min-width: 768px)" srcset="img/equipment/equipment_main_smarthems_pc.png"><!--PC画像-->
                        <source class=""  media="(max-width: 768px)" srcset="img/equipment/equipment_main_smarthems_sp.png"><!--SP画像-->
                        <img class="" src="img/equipment/equipment_main_smarthems_pc.png" alt="" /><!--そのほか画像（PC）-->
                    </picture>
                </figure>
            </section>
        <?php elseif($val2 === 'EQUIPMENT'): ?>
            <section  class="margin_50 padding_top_50_bottom_50 equipment_main_equipment gb_equipment_main_equipment">
                <figure class="wapper equipment_main_02_contents">
                    <picture>
                        <source class="" type="image/webp" media="(min-width: 768px)" srcset="img/equipment/equipment_main_equipment_pc.png"><!--PC画像-->
                        <source class=""  media="(max-width: 768px)" srcset="img/equipment/equipment_main_equipment_sp.png"><!--SP画像-->
                        <img class="" src="img/equipment/equipment_main_equipment_pc.png" alt="" /><!--そのほか画像（PC）-->
                    </picture>
                </figure>
            </section>
        <?php elseif($val2 === 'ECOSMARTLIFE'): ?>
            <section  class="margin_50 padding_top_0_bottom_50 ecosmartlife_main gb_ecosmartlife_main">
                <figure class="wapper equipment_main_02_contents">
                    <picture>
                        <source class="" type="image/webp" media="(min-width: 768px)" srcset="img/equipment/ecosmartlife_main_pc.png"><!--PC画像-->
                        <source class=""  media="(max-width: 768px)" srcset="img/equipment/ecosmartlife_main_sp.png"><!--SP画像-->
                        <img class="" src="img/equipment/ecosmartlife_main_pc.png" alt="" /><!--そのほか画像（PC）-->
                    </picture>
                </figure>
            </section>
        <?php elseif($val2 === 'AMENITYSECURITY'): ?>
            <section  class="margin_50 padding_top_50_bottom_50 amenitysecurity_main gb_amenitysecurity_main">
                <figure class="wapper equipment_main_02_contents">
                    <picture>
                        <source class="" type="image/webp" media="(min-width: 768px)" srcset="img/equipment/amenitysecurity_main_pc.png"><!--PC画像-->
                        <source class=""  media="(max-width: 768px)" srcset="img/equipment/amenitysecurity_main_sp.png"><!--SP画像-->
                        <img class="" src="img/equipment/amenitysecurity_main_pc.png" alt="" /><!--そのほか画像（PC）-->
                    </picture>
                </figure>
            </section>
        <?php elseif($val2 === 'STRUCTURE'): ?>
            <section  class="margin_50 padding_top_50_bottom_50 structure_main gb_structure_main">
                <figure class="wapper equipment_main_02_contents">
                    <picture>
                        <source class="" type="image/webp" media="(min-width: 768px)" srcset="img/equipment/structure_main_pc.png"><!--PC画像-->
                        <source class=""  media="(max-width: 768px)" srcset="img/equipment/structure_main_sp.png"><!--SP画像-->
                        <img class="" src="img/equipment/structure_main_pc.png" alt="" /><!--そのほか画像（PC）-->
                    </picture>
                </figure>
            </section>
        <?php elseif($val2 === 'QUALITYOFTRUST'): ?>
            <section  class="margin_100 padding_top_50_bottom_50 qualityofturest_main gb_qualityofturest_main">
                <figure class="wapper equipment_main_02_contents">
                    <picture>
                        <source class="" type="image/webp" media="(min-width: 768px)" srcset="img/equipment/qualityofturest_main_pc.png"><!--PC画像-->
                        <source class=""  media="(max-width: 768px)" srcset="img/equipment/qualityofturest_main_sp.png"><!--SP画像-->
                        <img class="" src="img/equipment/qualityofturest_main_pc.png" alt="" /><!--そのほか画像（PC）-->
                    </picture>
                </figure>
            </section>
        <?php endif; ?>
    <?php $x++; endforeach; ?>
</main>
<nav class="margin_80 wapper index_top_nav">
    <ul class="display_flex_stretch display_row index_top_nav_ul">
        <li class="index_top_nav_ul_li">
            <a href="https://www.ex-ms.com/sendmail/sendmail01.php?no=2110" target="_blank">
                <img src="img/index/button_index_top_nav_ul_li_01.svg" alt="資料請求">
            </a>
        </li>
        <li class="index_top_nav_ul_li">
            <a href="https://airrsv.net/AKR5884668016/calendar" target="_blank">
                <img src="img/index/button_index_top_nav_ul_li_02.svg" alt="お電話でのお問合せは「エクセレントシティ拝島駅前」プロジェクト準備室：10：00～19：00火・水曜定休（祝日は除く）">
            </a>
        </li>
    </ul>
</nav>

<?php include 'include/footer.php'; ?>
