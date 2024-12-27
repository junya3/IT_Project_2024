<?php
// ここでユーザー名を変数で管理できればいいな…。
$userName = 'user';
$userId = 'user-id-sample';
// ユーザーアイコンの設定があればアイコンを表示（時間があれば実装したいね）
$userIcon = '';
?>
<aside>
    <div class="user-container">
        <?php
        if (empty($userIcon)) {
            echo '<img src="./assets/images/dummyIcon.png" alt="アイコンがありません" class="user-icon"/>';
        } else {
            echo '<img src="' . htmlspecialchars($userIcon, ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($userName, ENT_QUOTES, 'UTF-8') . 'の画像" class="user-icon" />';
        }
        ?>

        <div class="user-status">
            <h3 class="user-name"><?php echo $userName; ?></h3>
            <p class="user-id"><?php echo $userId; ?></p>
        </div>
        <!-- もし必要ならアカウント設定、必要なければログアウト等でいいかと -->
        <a href="#">
            <span class="material-symbols-rounded">
                settings
            </span>
        </a>
    </div>
</aside>