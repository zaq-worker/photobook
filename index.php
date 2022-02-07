<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>PHOTO BOOK</title>
    </head>

    <body>
        <div class="container">
            <header id="header">
                <h1 class="site-title">
                    <a href="index.html"><img src="img/logo.svg" alt="PHOTO BOOK"></a>
                </h1>
            </header>

            <main>
                <!-- メインビジュアル -->
                <div id="mainvisual">
                    <img src="img/mainvisual.jpg" alt="mainvisual">
                </div>

                <!-- Indexセクション -->
                <section id="index">
                    <div class="inner">
                        <h2 class="section-title">INDEX</h2>
                        <ol class="index-list">
                            <li>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</li>
                            <li>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</li>
                            <li>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</li>
                            <li>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</li>
                            <li>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</li>
                        </ol>
                    </div>
                </section>

                <!-- Detailセクション -->
                <section id="detail">
                    <div class="inner">
                        <h2 class="section-title">DETAIL</h2>
                        <div class="content">
                            <img class="img" src="img/detail.jpg" alt="">
                            <div class="text">
                                <p class="title">タイトルタイトルタイトル</p>
                                <dl>
                                    <dt>著者</dt>
                                    <dd>タイトルタイトルタイトル</dd>
                                    <dt>出版社</dt>
                                    <dd>タイトルタイトルタイトル</dd>
                                    <dt>発行年</dt>
                                    <dd>タイトルタイトルタイトル</dd>
                                </dl>
                                <p>
                                    テキストテキストテキストテキストテキストテキスト
                                    テキストテキストテキストテキストテキストテキスト
                                </p>
                                <a class="link" href="#" target="_blank" rel="noopener noreferrer">オンラインストアで見る</a>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <footer id="footer">
                <p class="inner">&copy;  <?php echo date('Y') ?> PHOTO BOOK</p>
            </footer>
        </div>
    </body>
</html>