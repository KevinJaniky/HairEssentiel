
<?php

require 'autoload.php';
$display = new Display('Dashboard');
if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
    $display->navTop();
    $display->sideBar();

    $offres = new Team();
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
                    <th>Photo</th>
                    <th>Identité</th>
                    <th>Content</th>
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
                        <td><img style="width: 100px" src="<?php echo $offre[$i]['photo'] ?>"></td>
                        <td><?= $offre[$i]['identite'] ?></td>
                        <td><?= strip_tags($offre[$i]['content']) ?></td>
                        <td><a href="/admin/Modify-Equipe/<?=$offre[$i]['id']?>"><i class="material-icons blue-text text-darken-4">edit</i></a></td>
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

                        $.post("delete_equipe.php",
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