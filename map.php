<?php include 'include/header.php'; ?>
<?php include 'include/tuijuu_sp.php'; ?>
<main class="wapper padding_top_50_bottom_50 map_box">
    <figure class=" display_flex_center display_row map_box_contenr">
        <picture>
           <img class="lazy" data-src="img/map/map_pc.png" alt="" />
        </picture>
    </figure>
    <ul class="page_plan_detail_print_close">
        <li class="pc_only"><a href="javascript:void(0);" class="Mapprint" onclick="window.print();" /><img class="" src="img/map/btn_print.svg" alt="印刷する" /></a></li>
      <li><a href="#" onClick="window.close(); return false;"><img class="" src="img/map/btn_close.svg" alt="閉じる" /></a></li>
    </ul>
</main>
<?php include 'include/footer.php'; ?>