<?php

require 'autoload.php';
$display = new Display('Dashboard');
if(isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
    $display->navTop();
    $display->sideBar();
    $data  = new Proverbe();
    ?>
    <body class="grey lighten-2">
    <script src="/ressources/ckeditor/ckeditor.js"></script>
    <script src="/ressources/sweetAlert/sweetalert.min.js"></script>
    <div id="basic-form" class="section">
        <div class="row">
            <div class="col s12 m12 l10 offset-l1">
                <div class="card-panel">
                    <h4 class="header2">Ajout Proverbe</h4>
                    <div class="row">
                        <form class="col s12" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="auteur" type="text" name="auteur">
                                    <label for="auteur">Auteur</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="content" type="text" name="content" required>
                                    <label for="content">Contenu</label>
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
                        if (isset($_POST['content']) && isset($_POST['auteur'])) {
                            $content = $_POST['content'];
                            $auteur = $_POST['auteur'];

                            $data = new Proverbe();
                            $data->setAuthor($auteur);
                            $data->setContent($content);
                            $data->add();

                            ?>
                            <script>
                                window.location = '/admin/Proverbe';
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