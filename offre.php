<?php
require_once 'autoload.php';
$display = new Display('Accueil');
?>

<body>
<?php
include 'analytics.php';
$display->Header();
$display->Navigation();
$prices = new Price();
$price = $prices->select();
$count = count($price);
?>
<div class="container">
    <div class="main">
        <div class="offre">
            <h2>Nos offres</h2>
            <?php
            for ($i = 0; $i < $count; $i++) {
                ?>
                <div class="price_content">
                    <div class="price">
                        <?php
                            if($price[$i]['to'] == 1)
                                echo '<span>à partir de</span>';

                            echo $price[$i]['prix'] . ' €';
                        ?>
                    </div>
                    <div class="description">
                       <?= $price[$i]['content'] ?>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <?php $display->Aside() ?>
    </div>
</div>
<?php $display->Footer() ?>

</body>