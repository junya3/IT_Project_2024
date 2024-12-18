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
            <section id="tag">
                <div class="box-wrapper">
                    <h2 class="box-title">人気のタグから探す</h2>
                    <!-- ここをタグの人気順やトレンドにするかカテゴリーにする -->
                    <ul id="tag-items">
                        <?php for ($i = 0; $i < 10; $i++) { ?>
                            <li class="item">
                                <a href="#"><?php echo ($i + 1) ?>タグ</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </section>
            <section id="topic">
                <h2 class="sec-title">
                    おすすめの記事
                </h2>
                <ul id="topics">
                    <li>
                        <a href="#">
                            <img src="" alt="画像">
                            <div class="topic-text">
                                <h3>記事タイトル</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam asperiores doloribus natus quisquam, veniam odit aspernatur ut suscipit facere numquam! Harum reprehenderit nihil fugit, eveniet omnis temporibus molestiae rem aut!</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </section>
        </main>
        <aside>
            <p>まるまるさんおかえりなさい</p>
        </aside>
    </div>
</body>

</html>