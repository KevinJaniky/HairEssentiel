
<?php

require 'autoload.php';
$display = new Display('Dashboard');
if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
    $display->navTop();
    $display->sideBar();

    $offres = new Offre();
    $offre = $offres->select();
    $count = count($offre);

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
                    <th>Prix</th>
                    <th>Content</th>
                    <th>A partir de </th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                for ($i = 0; $i < $count; $i++) {
                    ?>
                    <tr>
                        <td><?= $offre[$i]['id'] ?></td>
                        <td><?= $offre[$i]['prix'] ?></td>
                        <td><?= $offre[$i]['content'] ?></td>
                        <td><?= $offre[$i]['partir'] ?></td>
                        <td><a href="/admin/Modify-Offre/<?=$offre[$i]['id']?>"><i class="material-icons blue-text text-darken-4">edit</i></a></td>
                        <td><a href="#" data-id="<?=$offre[$i]['id']?>" class="delete"><i class="material-icons red-text text-darken-2">delete</i></a></td>
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

                        $.post("delete_offre.php",
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