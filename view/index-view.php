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
                <a href="#" class="more-btn">おすすめをもっと探す</a>
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
                <ul id="topic-items">
                    <?php for ($i = 0; $i < 2; $i++) { ?>
                        <li class="topic-item">
                            <a href="#">
                                <img src="" alt="画像">
                                <div class="topic-text">
                                    <h3>記事タイトル</h3>
                                    <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                </div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
                <a href="#" class="more-btn">おすすめの記事をもっと見る</a>
            </section>
            <section id="news">
                <h2 class="sec-title">お知らせ</h2>
                <ul class="news-items">
                    <?php for ($i = 0; $i < 4; $i++) { ?>
                        <li>
                            <a href="#">
                                <p class="day">2024.12.12</p>
                                <p class="news-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ex et autem unde voluptas, maiores repellat ipsum iusto aliquam, quas porro, veniam incidunt! Molestias possimus beatae, soluta doloremque laudantium nulla?</p>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
                <a href="#" class="more-btn">お知らせ一覧ページへ</a>
            </section>
        </main>
        <aside>
            <p>asideは後で作ります。user情報などをいれるのがベストかと</p>
        </aside>
    </div>
</body>

</html>