<?php include 'include/header.php'; ?>
<?php include 'include/tuijuu_sp.php'; ?>
<div class="page_wap_box">
    <div class="movie_box">
        <video id="video" class="video" width="900" preload="none" poster="img/index_move_02.jpg" controls autoplay loop playsinline>
            <source src="movie/water.mp4" type="video/mp4">
        </video> 
    </div>

    <div class="movie_close_button_wap">
        <a href="#" onclick="window.close(); return false;">閉じる</a>
    </div>
</div>
<script>
    var video = document.getElementById('video');
    // 自動再生する
    video.autoplay = true;
    // 繰り返し再生する
    video.loop = true;
    // 無音で再生する
    video.muted = true;
    // 再生位置を指定する
    video.currentTime = 5;
</script>
<?php include 'include/footer.php'; ?>