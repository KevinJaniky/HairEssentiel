<?php
require_once 'autoload.php';
$display = new Display('Accueil');
?>

<body>
<?php
include 'analytics.php';
$display->Header();
$display->Navigation();
?>
<div class="container">
    <?php $display->Carousel() ?>
    <div class="main">
        <div class="homepage">
            <article class="article_remonter">
                <a href="#" class="image" style="background: url(/media/testcarousel.jpg)"></a>
                <div class="content_art">
                    <h2><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing volutpat.</a></h2>
                    <div class="info">
                        Le 15 janvier 2018
                    </div>
                    <div class="resume">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean risus tellus, consequat ac
                        congue in, pharetra sit amet metus. In eget volutpat felis cras amet.
                    </div>
                </div>
            </article>
            <article class="article_remonter">
                <a href="#" class="image" style="background: url(/media/testcarousel.jpg)"></a>
                <div class="content_art">
                    <h2><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing volutpat.</a></h2>
                    <div class="info">
                        Le 15 janvier 2018
                    </div>
                    <div class="resume">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean risus tellus, consequat ac
                        congue in, pharetra sit amet metus. In eget volutpat felis cras amet.
                    </div>
                </div>
            </article>
            <article class="article_remonter">
                <a href="#" class="image" style="background: url(/media/testcarousel.jpg)"></a>
                <div class="content_art">
                    <h2><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing volutpat.</a></h2>
                    <div class="info">
                        Le 15 janvier 2018
                    </div>
                    <div class="resume">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean risus tellus, consequat ac
                        congue in, pharetra sit amet metus. In eget volutpat felis cras amet.
                    </div>
                </div>
            </article>
            <article class="article_remonter">
                <a href="#" class="image" style="background: url(/media/testcarousel.jpg)"></a>
                <div class="content_art">
                    <h2><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing volutpat.</a></h2>
                    <div class="info">
                        Le 15 janvier 2018
                    </div>
                    <div class="resume">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean risus tellus, consequat ac
                        congue in, pharetra sit amet metus. In eget volutpat felis cras amet.
                    </div>
                </div>
            </article>

        </div>
        <?php $display->Aside() ?>
    </div>


</div>

<?php $display->Footer() ?>

</body>