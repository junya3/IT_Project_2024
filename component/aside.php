<?php
// ここでユーザー名を変数で管理できればいいな…。
$userName = 'user';
?>
<aside>
    <p>asideは後で作ります。user情報などをいれるのがベストかと</p>
    <div class="user-container">
        <img src="" alt=<?php echo $userName . 'の画像'; ?> class="user-icon" />
        <h3 class="user-name"><?php echo $userName; ?></h3>
    </div>
</aside>