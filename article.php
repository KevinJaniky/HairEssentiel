<?php

if (isset($_GET['id'])) {

    require_once 'autoload.php';
    $data = new Blog();
    $id = $_GET['id'];
    $article = $data->selectId($id);
    $display = new Display($article['titre']);

    if(empty($article)) {
        header('location:/Accueil');
        die();
    }
    ?>

    <body>
    <?php
    include 'analytics.php';
    $display->Header();
    $display->Navigation();
    ?>
    <div class="container">
        <div class="main">
            <article class="preview">
                <h1><?= $article['titre'] ?></h1>
                <span><?php echo date('d M Y',strtotime($article['date'])); ?></span>
                <img src="<?= $article['couverture'] ?>" alt="Keywords">
                <div class="content">
                    <?= $article['content'] ?>
                </div>

            </article>
            <?php $display->Aside() ?>
        </div>
        <?php $display->Footer() ?>
    </body>
    <?php
}
?>