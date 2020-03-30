<?php
$url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
if(strpos($url,'plan') !== false) {
    $activeclass['plan'] = "active";
}
elseif(strpos($url,'location') !== false) {
    $activeclass['location'] = "active";
}
elseif(strpos($url,'equipment') !== false) {
    $activeclass['equipment'] = "active";
}
elseif(strpos($url,'access') !== false) {
    $activeclass['access'] = "active";
}
elseif(strpos($url,'modelroom') !== false) {
    $activeclass['modelroom'] = "active";
}
elseif(strpos($url,'equipment') !== false) {
    $activeclass['equipment'] = "active";
}
elseif(strpos($url,'design') !== false) {
    $activeclass['design'] = "active";
}
else {
    $activeclass['index'] = "active";
}
?>
<div class="sp_main_header_wapper">
    <header class="display_flex_center sp_main_header">
        <div class="display_flex_center  sp_main_header_logo_text">
            <a class="main_logo" href="index.php">
                <img src="img/logo.svg" alt="エクセレントシティ">
            </a>
            <h1 class="main_logo_txt">エクセレントシティ拝島駅前</h1>
        </div>
        <?php if(strpos($url,'plan_detail') !== false): else: ?>
        <div class="button_sp_manu_box off">
            <img class="off" src="img/header/button_sp_nomal_menu.svg" alt="メニューを開く">
            <img class="on" src="img/header/button_sp_close_menu.svg" alt="メニューを閉じる">
        </div>
        <?php endif; ?>
    </header>
    <?php if(strpos($url,'plan_detail') !== false): else: ?>
    <nav class=" sp_main_header_nav">
        <ul class=" sp_main_header_nav_ul">
            <li class="sp_main_header_nav_ul_li sp_li_arrow_link">
                <a href="index.php" class="display_flex_center sp_main_header_nav_ul_li_a <?php echo $activeclass['index']; ?>">
                    <h3 class="sp_main_header_nav_ul_li_h3">TOP</h3>
                </a>
            </li>
            <li class="sp_main_header_nav_ul_li sp_li_arrow_comming">
                <span class="display_flex_center <?php echo $activeclass['location']; ?>" href="location.php">
                    <h3 class="sp_main_header_nav_ul_li_h3">ロケーション</h3>
                    <span class=" bg_808080 color_fff">coming soon</span>
                </span>
            </li>
            <li class="sp_main_header_nav_ul_li sp_li_arrow_comming">
                <span class="display_flex_center <?php echo $activeclass['access']; ?>" href="access.php">
                    <h3 class="sp_main_header_nav_ul_li_h3">アクセス</h3>
                    <span class=" bg_808080 color_fff">coming soon</span>
                </span>
            </li>
            <li class="sp_main_header_nav_ul_li sp_li_arrow_comming">
                <span class="display_flex_center <?php echo $activeclass['design']; ?>" href="design.php">
                    <h3 class="sp_main_header_nav_ul_li_h3">デザイン</h3>
                    <span class=" bg_808080 color_fff">coming soon</span>
                </span>
            </li>
            <li class="sp_main_header_nav_ul_li sp_li_arrow_comming">
                <a class="<?php echo $activeclass['plan']; ?>" href="plan.php">
                    <h3 class="sp_main_header_nav_ul_li_h3">プラン</h3>
                </a>
            </li>
            <li class="sp_main_header_nav_ul_li sp_li_arrow_comming">
                <span class="display_flex_center <?php echo $activeclass['modelroom']; ?>" href="modelroom.php">
                    <h3 class="sp_main_header_nav_ul_li_h3">モデルルーム</h3>
                    <span class=" bg_808080 color_fff">coming soon</span>
                </span>
            </li>
            <li class="sp_main_header_nav_ul_li sp_li_arrow_comming">
                <span class="display_flex_center <?php echo $activeclass['equipment']; ?>" href="equipment.php">
                    <h3 class="sp_main_header_nav_ul_li_h3">設備仕様</h3>
                    <span class=" bg_808080 color_fff">coming soon</span>
                </span>
            </li>
            <li class="sp_main_header_nav_ul_li sp_li_arrow_comming">
                <a class="now_annai_outline_nav_ul_now_annai_link" href="javascript:;" onclick="window.open('map.php', '', 'width=1024,height=768,scrollbars=yes'); return false;">
                    <h3 class="sp_main_header_nav_ul_li_h3">現地案内図</h3>
                </a>
            </li>
        </ul>
        <ul class=" sp_main_header_nav_ul">
            <li class="sp_main_header_nav_ul_li sp_li_arrow_comming">
                <a href="https://www.ex-ms.com/outline/haijima.html" target="_blank" class="display_flex_center sp_main_header_nav_ul_li_a">
                    <h3 class="sp_main_header_nav_ul_li_h3">物件概要</h3>
                </a>
            </li>
        </ul>
    </nav>
    <?php endif; ?>
</div>
