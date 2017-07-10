<?php

require 'autoload.php';
$display = new Display('Dashboard');
if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
    $display->navTop();
    $display->sideBar();

    $articles = new Blog();
    $article = $articles->selectAll();
    $count = count($article);
    ?>
    <body class="grey lighten-2">
    <script src="/ressources/ckeditor/ckeditor.js"></script>
    <script src="/ressources/sweetAlert/sweetalert.min.js"></script>
    <div class="container">
        <div class="wrapper">
            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Content</th>
                    <th>Couverture</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                for ($i = 0; $i < $count; $i++) {
                    ?>
                    <tr>
                        <td><?= $article[$i]['id'] ?></td>
                        <td><img style="width: 100px" src="<?php echo $article[$i]['couverture'] ?>"></td>
                        <td><?= $article[$i]['titre'] ?></td>
                        <td><?php echo strip_tags(substr($article[$i]['content'],0,120)) ?></td>
                        <td><a href="/admin/Article/<?=$article[$i]['id']?>"><i class="material-icons blue-text text-darken-4">edit</i></a></td>
                        <td><a href="#" data-id="<?=$article[$i]['id']?>" class="delete"><i class="material-icons red-text text-darken-2">delete</i></a></td>
                    </tr>
                    <?php
                }
                ?>



                </tbody>

            </table>
        </div>
    </div>
    </body>


    <script>
        $(".button-collapse").sideNav();
        $('.delete').click(function () {
            var id = $(this).data('id');
            var element = ($(this).parent().parent());
            swal({
                    title: "Etes vous sur ?",
                    text: "La suppression sera definitive",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#dd5044",
                    confirmButtonText: "Oui, je confirme",
                    cancelButtonText: "Non, surtout pas ",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function (isConfirm) {
                    if (isConfirm) {

                        $.post("delete_article.php",
                            {id: id},
                            function (data) {
                                element.remove();
                            });


                        swal("Supprimé!", "Suppression reussie", "success");
                    } else {
                        swal("Annuler", "Aucune suppression n'a été éffectué", "error");
                    }
                });
        })
    </script>

    <?php
} else {
    header('location:/admin/Connexion');
    die();
}