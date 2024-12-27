<?php
// ここでユーザー名を変数で管理できればいいな…。
$userName = 'user';
$userId = 'user-id-sample';
$userIcon = '';
?>
<aside>
    <div class="user-container">
        <img src=<?php echo $userIcon; ?> alt=<?php echo $userName . 'の画像'; ?> class="user-icon" />
        <div class="user-status">
            <h3 class="user-name"><?php echo $userName; ?></h3>
            <p class="user-id"><?php echo $userId; ?></p>
        </div>
        <!-- もし必要ならアカウント設定、必要なければログアウト等でいいかと -->
        <a href="#">
            <span class="material-symbols-rounded">
                account_circle
            </span>
        </a>
    </div>
</aside>