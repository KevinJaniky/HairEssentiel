<?php
require_once 'autoload.php';
$display = new Display('Accueil');
?>

<body>
<?php
include 'analytics.php';
$display->Header();
$display->Navigation();
$articles = new Blog();

$data = $articles->selectHome();
$count = count($data);
?>
<div class="container">
    <?php $display->Carousel() ?>
    <div class="main">
        <div class="homepage">
            <?php
            for ($i = 0; $i < $count; $i++) {

                $url  = str_replace(' ','-', $data[$i]['titre']);
                ?>
                <article class="article_remonter">
                    <a href="/Article/<?= $data[$i]['id'] ?>/<?= $url ?>" class="image" style="background: url(<?= $data[$i]['couverture'] ?>)"></a>
                    <div class="content_art">
                        <h2><a href="#"><?= $data[$i]['titre'] ?></a></h2>
                        <div class="info">
                            <?= $data[$i]['date'] ?>
                        </div>
                        <div class="resume">
                            <?= strip_tags(substr($data[$i]['content'],0,200)); ?>
                        </div>
                    </div>
                </article>
                <?php
            }
            ?>
        </div>
        <?php $display->Aside() ?>
    </div>


</div>

<?php $display->Footer() ?>

</body>