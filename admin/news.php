<?php

require 'autoload.php';
$display = new Display('Dashboard');
if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
    $display->navTop();
    $display->sideBar();

    $proverbes = new Newsletter();
    $proverbe = $proverbes->select();
    $count = count($proverbe);

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
                    <th>Content</th>
                    <th>Auteur</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                for ($i = 0; $i < $count; $i++) {
                    ?>
                    <tr>
                        <td><?= $proverbe[$i]['id'] ?></td>
                        <td><?= $proverbe[$i]['mail'] ?></td>
                        <td><a href="#" data-id="<?=$proverbe[$i]['id']?>" class="delete"><i class="material-icons red-text text-darken-2">delete</i></a></td>
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

                        $.post("delete_news.php",
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