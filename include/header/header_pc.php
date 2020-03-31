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
<header class="padding_top_0_bottom_0 base_pc_header_set">
    <div class="display_flex_center display_row pc_header_main_set">
        <div class="display_flex_center  logo_txt">
            <a class="main_logo" href="index.php">
                <img src="img/logo.svg" alt="【公式】エクセレントシティ拝島駅前マンション">
            </a>
            <h1 class="main_logo_txt">エクセレントシティ行徳駅前</h1>
        </div>
        <div class="header_new_settings display_flex_center">
            <nav class=" now_annai_outline_nav">
                <ul class="display_flex_center now_annai_outline_nav_ul">
                    <?php if(strpos($url,'map') !== false):else: ?>
                    <li class="now_annai_outline_nav_ul_now_annai">
                        <a class="now_annai_outline_nav_ul_now_annai_link" href="javascript:;" onclick="window.open('map.php', '', 'width=1024,height=768,scrollbars=yes'); return false;">
                            <h2 class="t_center color_000 now_annai_outline_h2"> <span class="arrow">現地案内図</span></h2>
                        </a>
                    </li>
                    <?php endif; ?>
                    <li class="t_center now_annai_outline_nav_ul_outline">
                        <a href="https://www.ex-ms.com/gs55/" target="_blnak" class="">
                            <span class="arrow">物件概要</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <nav class="contact_tel ">
                <ul class="display_flex_center contact_tel_ul">
                    <li class="header_button_contact_li">
                        <a class="button_EE9B19" href="https://www.ex-ms.com/sendmail/sendmail01.php?no=2110" target="_blank">
                           資料請求
                        </a>
                    </li>
                    <li class="header_button_contact_li">
                        <span class="button_B40732">
                            <img src="img/header/header_contact_tel.png">
                        </span>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
    <?php if(strpos($url,'plan_detail') !== false or strpos($url,'map') !== false): else: ?>
    <nav class=" margin_0  header_main_nav_contents">
        <ul class="display_flex_stretch display_row header_main_nav_contents_ul">
            <li class="header_main_nav_contents_ul_kenmigawa_li header_main_nav_contents_ul_li_after_right">
                <a class="<?php echo $activeclass['index']; ?>" href="index.php">
                    <h3 class="t_center  header_main_nav_contents_ul_li_after_right_title_h3">トップ</h3>
                    <ruby class="t_center  header_main_nav_contents_ul_li_after_right_title_ruby">TOP</ruby>
                </a>
            </li>
            <li class="header_main_nav_contents_ul_kenmigawa_li header_main_nav_contents_ul_li_after_right">
                <span class="<?php echo $activeclass['location']; ?>" href="location.php">
                    <h3 class="t_center  header_main_nav_contents_ul_li_after_right_title_h3">ロケーション</h3>
                    <ruby class="t_center  header_main_nav_contents_ul_li_after_right_title_ruby">coming soon</ruby>
                </span>
            </li>
            <li class="header_main_nav_contents_ul_kenmigawa_li header_main_nav_contents_ul_li_after_right">
                <span class="<?php echo $activeclass['access']; ?>" href="access.php">
                    <h3 class="t_center  header_main_nav_contents_ul_li_after_right_title_h3">アクセス</h3>
                    <ruby class="t_center  header_main_nav_contents_ul_li_after_right_title_ruby">coming soon</ruby>
                </span>
            </li>

            <li class="header_main_nav_contents_ul_kenmigawa_li header_main_nav_contents_ul_li_after_right">
                <span class="<?php echo $activeclass['design']; ?>" href="design.php">
                    <h3 class="t_center  header_main_nav_contents_ul_li_after_right_title_h3">デザイン</h3>
                    <ruby class="t_center  header_main_nav_contents_ul_li_after_right_title_ruby">coming soon</ruby>
                </span>
            </li>
            <li class="header_main_nav_contents_ul_kenmigawa_li header_main_nav_contents_ul_li_after_right">
                <a class="<?php echo $activeclass['plan']; ?>" href="plan.php" class="header_nav_comming_soon">
                    <h3 class="t_center  header_main_nav_contents_ul_li_after_right_title_h3">ルームプラン</h3>
                    <ruby class="t_center  header_main_nav_contents_ul_li_after_right_title_ruby">PLAN</ruby>
                </a>
            </li>
            <li class="header_main_nav_contents_ul_kenmigawa_li header_main_nav_contents_ul_li_after_right">
                <span class="<?php echo $activeclass['modelroom']; ?>" href="modelroom.php">
                    <h3 class="t_center  header_main_nav_contents_ul_li_after_right_title_h3">モデルルーム</h3>
                    <ruby class="t_center  header_main_nav_contents_ul_li_after_right_title_ruby">coming soon</ruby>
                </span>
            </li>
            <li class="header_main_nav_contents_ul_kenmigawa_li">
                <span class="<?php echo $activeclass['equipment']; ?>" href="equipment.php">
                    <h3 class="t_center  header_main_nav_contents_ul_li_after_right_title_h3">設備仕様・構造</h3>
                    <ruby class="t_center  header_main_nav_contents_ul_li_after_right_title_ruby">coming soon</ruby>
                </span>
            </li>
        </ul>
    </nav>
    <?php endif; ?>
</header>
