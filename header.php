<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php bloginfo('name');?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="ここにサイト説明を入れます" />
    <meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５" />

    <link rel="stylesheet" href="<?php echo get_theme_file_uri('css/style.css'); ?>">

    <!-- [if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif] -->

    <!--  これを入れることで正しくプラグインなどが動作するとのことで重要なんだとか-->
    <?php wp_head();?>
</head>

<body>
    <div id="container">
        <header>
            <h1 id="logo">
                <a href="<?php echo home_url();?>"><img src="<?php echo get_theme_file_uri( 'images/logo.png' ); ?>"
                        alt="SAMPLE SITE" /></a>
            </h1>

            <?php if (is_home() || is_front_page()) : ?>
            <!-- 条件を満たしている場合の処理 -->
            <aside id="mainimg"><img src=" <?php echo get_theme_file_uri('images/mainimg.jpg' ); ?>" alt="" />
            </aside>
            <?php endif?>
            <!-- ⇧これが閉じタグになるとのこと -->
        </header>


        <!-- グローバルナビ -->



        <nav id="menubar">
            <ul>
                <li><a href="<?php echo home_url();?>">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/link">Link</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>

        <div id="contents">