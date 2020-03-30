<div class="page_top_link_box">
    <a href="#page_top">
        <img class="img_box" src="img/footer/button_page_top_link_box.svg">
    </a>
</div>
<footer class="margin_40 padding_top_30_bottom_30 footer">
    <nav class="wapper footer_nav">
        <ul class="display_flex_stretch footer_nav_ul">
            <li class="footer_nav_ul_li_01">
                <a class="footer_nav_ul_li_01_a" href="http://www.shinnihon-c.co.jp/" target="_blank">
                    <picture>
                        <source class="" media="(min-width: 768px)" srcset="img/footer/button_footer_nav_ul_li_01_a_pc.svg"><!--PC画像-->
                        <source class=""  media="(max-width: 768px)" srcset="img/footer/button_footer_nav_ul_li_01_a_sp.svg"><!--SP画像-->
                        <img class="" src="img/footer/button_footer_nav_ul_li_01_a_pc.svg" alt="" />
                    </picture>
                </a>
            </li>
            <li class="footer_nav_ul_li_03">
                    <picture>
                        <source class="" media="(min-width: 768px)" srcset="img/footer/button_footer_nav_ul_li_03_a.png"><!--PC画像-->
                        <source class=""  media="(max-width: 768px)" srcset="img/footer/button_footer_nav_ul_li_03_a_sp.png"><!--SP画像-->
                        <img class="" src="img/footer/button_footer_nav_ul_li_03_a.png" alt="" />
                    </picture>
            </li>
            <li class="footer_nav_ul_li_02">
                <a class="footer_nav_ul_li_02_a pc_link_none" href="tel:0120-313-306">
                    <picture>
                        <source class="" media="(min-width: 768px)" srcset="img/footer/button_footer_nav_ul_li_02_a.svg"><!--PC画像-->
                        <source class=""  media="(max-width: 768px)" srcset="img/footer/button_footer_nav_ul_li_02_a_sp.svg"><!--SP画像-->
                        <img class="" src="img/footer/button_footer_nav_ul_li_02_a.svg" alt="" />
                    </picture>
                </a>
            </li>
        </ul>
    </nav>
</footer>
<?php
$url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
if(strpos($url,'plan_detail') !== false):
else:
?>
<div id="slide_foot"></div>
<?php endif; ?>

<p class="padding_top_10_bottom_10 back_383838 color_fff t_center last_address">Copyright© SHINNIHON CORPORATION.ALL Rights Reserved.</p>