<?php

require 'autoload.php';
$display = new Display('Dashboard');
if(isset($_SESSION['admin']) && $_SESSION['admin'] == true && isset($_GET['id'])) {
    $display->navTop();
    $display->sideBar();
    $data  = new Horaire();
    $id = $_GET['id'];
    $art = $data->selectId($id);
    ?>
    <body class="grey lighten-2">
    <script src="/ressources/ckeditor/ckeditor.js"></script>
    <script src="/ressources/sweetAlert/sweetalert.min.js"></script>
    <div id="basic-form" class="section">
        <div class="row">
            <div class="col s12 m12 l10 offset-l1">
                <div class="card-panel">
                    <h4 class="header2">Modification <?= $art['jour'] ?></h4>
                    <div class="row">
                        <form class="col s12" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="auteur" type="text" name="matin" value="<?= $art['matin'] ?>">
                                    <label for="auteur">Matin</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="content" type="text" name="midi" required value="<?= $art['midi'] ?>">
                                    <label for="content">Midi</label>
                                </div>
                            </div>
                            <div class="input-field col s12">                                &nbsp;
                                <button class="btn cyan waves-effect waves-light right" type="submit"
                                        name="action" value="submit">Submit
                                    <i class="material-icons">send</i>
                                </button>
                            </div>
                        </form>

                        <?php
                        if (isset($_POST['matin']) && isset($_POST['midi'])) {
                            $matin = $_POST['matin'];
                            $midi = $_POST['midi'];

                            $data = new Horaire();
                            $data->setMatin($matin);
                            $data->setMidi($midi);
                            $data->update($id);

                            ?>
                            <script>
                                window.location = '/admin/Horaire';
                            </script>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(".button-collapse").sideNav();
    </script>
    </body>
    <?php
}else {
    header('location:/admin/Connexion');
    die();
}