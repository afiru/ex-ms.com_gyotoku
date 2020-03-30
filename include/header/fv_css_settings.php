<?php
$url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
if(strpos($url,'plan') !== false) {
    echo file_get_contents('css/main_include/page/plan_fv.css');
}else {
    echo file_get_contents('css/main_include/index/index_fv.css');
}
?>