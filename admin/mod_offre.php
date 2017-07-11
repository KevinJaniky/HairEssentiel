<?php

require 'autoload.php';
$display = new Display('Dashboard');
if(isset($_SESSION['admin']) && $_SESSION['admin'] == true && isset($_GET['id'])) {
    $display->navTop();
    $display->sideBar();
    $data  = new Offre();
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
                    <h4 class="header2">Modification Proverbe</h4>
                    <div class="row">
                        <form class="col s12" method="post">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="prix" type="number" name="prix" value="<?= $art['prix'] ?>">
                                    <label for="prix">Prix</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="content" type="text" name="content" required value="<?= $art['content'] ?>">
                                    <label for="content">Contenu</label>
                                </div>
                            </div>
                            <div class="switch">
                                <label>
                                    Prix fixe
                                    <input type="checkbox" name="to" <?php echo ($art['partir'] == 1)?'checked':'' ?>>
                                    <span class="lever"></span>
                                    A partir de
                                </label>
                            </div>
                            <div class="input-field col s12">                                &nbsp;
                                <button class="btn cyan waves-effect waves-light right" type="submit"
                                        name="action" value="submit">Submit
                                    <i class="material-icons">send</i>
                                </button>
                            </div>
                        </form>

                        <?php
                        if (isset($_POST['content']) && isset($_POST['prix'])) {
                            echo 'test';
                            $content = $_POST['content'];
                            $prix = $_POST['prix'];
                            $to = $_POST['to'];
                            $data = new Offre();
                            $data->setPrix($prix);
                            $data->setContent($content);
                            $data->setTo($to);
                            $data->update($id);

                            ?>
                            <script>
                                window.location = '/admin/Offre';
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