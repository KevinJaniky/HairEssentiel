<?php
require_once 'autoload.php';
$display = new Display('Accueil');
$blogs = new Blog();
?>

<body>
<?php
include 'analytics.php';
$display->Header();
$display->Navigation();
$blog = $blogs->selectAll();
$count = count($blog);

?>
<div class="container">
    <div class="main">
        <div id="blog" class="blog">
            <div class="search_box">
                <label for="rechercher"><i class="fa fa-search"></i></label>
                <input type="text" class="search" id="rechercher">
            </div>
            <ul class="list">

                <?php
                    for($i=0;$i<$count;$i++) {
                        ?>
                        <li>
                            <a href="#" class="image" style="background: url(<?= $blog[$i]['couverture'] ?>)"></a>
                            <h2 class="name"><a href="#"><?= $blog[$i]['titre'] ?></a></h2>
                            <span><?php echo date('d M Y',strtotime($blog[$i]['date'])); ?></span>
                            <p><?= strip_tags(substr($blog[$i]['content'],0,255)) ?></p>
                        </li>
                    <?php
                    }
                ?>
            </ul>
            <div class="page">
                <ul class="pagination"></ul>
            </div>
        </div>

        <script>
            new List('blog', {
                valueNames: ['name'],
                page: 4,
                pagination: true
            });
        </script>
        <?php $display->Aside() ?>
    </div>

</div>
<?php $display->Footer() ?>

</body>