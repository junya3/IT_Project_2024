<!DOCTYPE html>
<html lang="ja">
<?php
$pageTitle = 'トップページ';
include "../component/head.php";
?>

<body>
    <div id="container">
        <main>
            <section id="recommend">
                <h2 class="sec-title">あなたへのおすすめ</h2>
                <ul id="recommend-items">
                    <!-- ここをmap関数で管理 -->
                    <?php for ($i = 0; $i < 6; $i++) { ?>
                        <li class="item">
                            <a href="#" class="item-inner">
                                <img src="" alt="<?php echo ($i + 1) ?>個目" width="100" height="100">
                                <p>レシピタイトル<?php echo ($i + 1) ?></p>
                                <p>10分</p>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </section>
            <section id="tags">
                <div class="box-wrapper">
                    <h2 class="box-title">人気のタグから探す</h2>
                    <!--  -->
                    <ul id="tag-items">
                        <?php for ($i = 0; $i < 10; $i++) { ?>
                            <li class="item">
                                <a href="#"><?php echo ($i + 1) ?>タグ</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </section>
        </main>
        <aside>
            <p>まるまるさんおかえりなさい</p>
        </aside>
    </div>
</body>

</html>