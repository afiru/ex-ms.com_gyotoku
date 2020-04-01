<?php
$base_title ="【公式】エクセレントシティ行徳駅前｜東京メトロ東西線「行徳」駅より徒歩5 分の新築分譲マンション";
$base_description = "新日本建設の新築分譲マンション『エクセレントシティ行徳駅前』の公式ホームページです。 東京メトロ東西線「行徳」駅より徒歩5 分";
$url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
if(strpos($url,'plan') !== false) {
    $title = "ルームプラン｜".$base_title;
    $description = "エクセレントシティ拝島駅前 レシェンテのプランページです。".$base_description;
}
elseif(strpos($url,'map') !== false) {
    $title = "現地案内図｜".$base_title;
    $description = "エクセレントシティ拝島駅前 レシェンテの現地案内図のページです。".$base_description;
}
elseif(strpos($url,'movie') !== false) {
    $title = "エクセレントウォーター動画について｜".$base_title;
    $description = "エクセレントウォーター動画についてのページです。".$base_description;
}
elseif(strpos($url,'location') !== false) {
    $title = "ロケーション・周辺環境について｜".$base_title;
    $description = "エクセレントシティ拝島駅前 レシェンテのロケーション・周辺環境についてのページです。".$base_description;
}
elseif(strpos($url,'design') !== false) {
    $title = "デザインについて｜".$base_title;
    $description = "エクセレントシティ拝島駅前 レシェンテのデザインについてのページです。".$base_description;
}
elseif(strpos($url,'access') !== false) {
    $title = "アクセス｜".$base_title;
    $description = "エクセレントシティ拝島駅前 レシェンテのアクセスについてのページです。".$base_description;
}
elseif(strpos($url,'modelroom') !== false) {
    $title = "モデルルーム｜".$base_title;
    $description = "エクセレントシティ拝島駅前 レシェンテのモデルルーム紹介についてのページです。".$base_description;
}
elseif(strpos($url,'equipment') !== false) {
    $title = "仕様・設備｜".$base_title;
    $description = "エクセレントシティ拝島駅前 レシェンテの仕様設備のページです".$base_description;
}
else {
    $title = "".$base_title;
    $description = "".$base_description;
}
?>

<title><?php echo $title; ?></title>
<meta name="keywords" content="エクセレントシティ行徳駅前, 千葉県, 市川市, 行徳駅前, マンション, 東京メトロ,東西線, 新築, 分譲, エクセレントシティ, 不動産, 住まい, 新日本建設" />
<meta name="description" content="<?php echo $description; ?>" />
