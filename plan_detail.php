<?php include 'include/header.php'; ?>
<?php include 'include/tuijuu_sp.php'; ?>
<?php $plan = $_GET['plan'];  ?>
<?php       
    //メインフォト
    $main_photo['plank_a']['pc'] ='pc_main_photo_plank_a';
    $main_photo['plank_b']['pc'] ='pc_main_photo_plank_b';
    $main_photo['plank_bg']['pc'] ='pc_main_photo_plank_bg';
    
    $main_photo['plank_c']['pc'] ='pc_main_photo_plank_c';
    $main_photo['plank_d']['pc'] ='pc_main_photo_plank_d';
    $main_photo['plank_dg']['pc'] ='pc_main_photo_plank_dg';
    
    $main_photo['plank_e']['pc'] ='pc_main_photo_plank_e';
    $main_photo['plank_f']['pc'] ='pc_main_photo_plank_f';
    $main_photo['plank_g']['pc'] ='pc_main_photo_plank_g';
    
    $main_photo['plank_h']['pc'] ='pc_main_photo_plank_h';
    $main_photo['plank_i']['pc'] ='pc_main_photo_plank_i';
    $main_photo['plank_j']['pc'] ='pc_main_photo_plank_j';
    
    $main_photo['plank_k']['pc'] ='pc_main_photo_plank_k';
    $main_photo['plank_l']['pc'] ='pc_main_photo_plank_l';
    $main_photo['plank_m']['pc'] ='pc_main_photo_plank_m';
    
    //メインフォト
    $main_photo['plank_a']['sp'] ='sp_main_photo_plank_a';
    $main_photo['plank_b']['sp'] ='sp_main_photo_plank_b';
    $main_photo['plank_bg']['sp'] ='sp_main_photo_plank_bg';
    
    $main_photo['plank_c']['sp'] ='sp_main_photo_plank_c';
    $main_photo['plank_d']['sp'] ='sp_main_photo_plank_d';
    $main_photo['plank_dg']['sp'] ='sp_main_photo_plank_dg';
    
    $main_photo['plank_e']['sp'] ='sp_main_photo_plank_e';
    $main_photo['plank_f']['sp'] ='sp_main_photo_plank_f';
    $main_photo['plank_g']['sp'] ='sp_main_photo_plank_g';
    
    $main_photo['plank_h']['sp'] ='sp_main_photo_plank_h';
    $main_photo['plank_i']['sp'] ='sp_main_photo_plank_i';
    $main_photo['plank_j']['sp'] ='sp_main_photo_plank_j';
    
    $main_photo['plank_k']['sp'] ='sp_main_photo_plank_k';
    $main_photo['plank_l']['sp'] ='sp_main_photo_plank_l';
    $main_photo['plank_m']['sp'] ='sp_main_photo_plank_m';
?>
<main class="padding_top_50_bottom_50 plan_main">
    <div class="wapper display_flex_center display_row plan_detail_contener">
        <figure class="plan_detail_contener">
        <picture>
            <source class="lazy" media="(min-width: 768px)" data-srcset="img/plan/plan_detail/<?php echo $main_photo[$plan]['pc']; ?>.png"><!--PC画像-->
            <source class="lazy"  media="(max-width: 768px)" data-srcset="img/plan/plan_detail/<?php echo $main_photo[$plan]['sp']; ?>.png"><!--SP画像-->
            <img class="lazy" data-src="img/plan/plan_detail/<?php echo $main_photo[$plan]['pc']; ?>.png" alt="" />
        </picture>
        </figure>

        
        <section class="margin_wapper_80 plan_contents_setumei">
            <p class="plan_contents_setumei_pref">
                凡例：
                <span class="plan_contents_setumei_tuuhuu">通　風</span>
                <span class="plan_contents_setumei_gyakkou">採　光</span>
                <span class="plan_contents_setumei_yukadanbou">床暖房</span>
            </p>
            <p class="margin_wapper_20 plan_contents_setumei_second_pref">
                MC＝マルチクローゼット　SIC＝シューズインクローク　WIC＝ウォークインクローゼット　S＝サービスルーム
                ※方位記号は若干誤差があります。正確な方位については設計図書でご確認ください。
                ※掲載写真は当社施工例またはメーカー参考写真、イメージです。実際とは異なります。
                ※掲載の間取図は計画段階の図面を基に描いたもので実際とは一部異なる場合があります。また今後施工上の都合などにより変更となる場合がございます。
            </p>
        </section>
    </div>

    
    <ul class="page_plan_detail_print_close">
      <li><a href="javascript:void(0);" class="Mapprint" onclick="window.print();" /><img class="" src="img/plan/plan_detail/btn_print.svg" alt="印刷する" /></a></li>
      <li><a href="#" onClick="window.close(); return false;"><img class="" src="img/plan/plan_detail/btn_close.svg" alt="閉じる" /></a></li>
    </ul>
</main>


<?php include 'include/footer.php'; ?>