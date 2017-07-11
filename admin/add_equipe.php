<?php

require 'autoload.php';
$display = new Display('Dashboard');
if(isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
    $display->navTop();
    $display->sideBar();
    $data  = new Team();
    ?>
    <body class="grey lighten-2">
    <script src="/ressources/ckeditor/ckeditor.js"></script>
    <script src="/ressources/sweetAlert/sweetalert.min.js"></script>
    <div id="basic-form" class="section">
        <div class="row">
            <div class="col s12 m12 l10 offset-l1">
                <div class="card-panel">
                    <h4 class="header2">Ajouter</h4>
                    <div class="row">
                        <form class="col s12" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="titre" type="text" name="titre" required >
                                    <label for="titre">Identité</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="file-field input-field">
                                    <div class="btn cyan lighten-1">
                                        <span>File</span>
                                        <input type="file" name="couverture">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="content">Content</label>
                                <textarea name="content" id="content editor" cols="30" rows="10"
                                          class="ckeditor"></textarea>
                            </div>
                            <div class="input-field col s12">                                &nbsp;
                                <button class="btn cyan waves-effect waves-light right" type="submit"
                                        name="action" value="submit">Submit
                                    <i class="material-icons">send</i>
                                </button>
                            </div>
                        </form>

                        <?php
                        if (isset($_POST['titre']) && isset($_POST['content'])) {
                            $titre = $_POST['titre'];
                            $content = $_POST['content'];
                            $image = $_FILES['couverture'];


                            $data->setCouverture($image);
                            $data->setIdentite($titre);
                            $data->setContent($content);
                            $data->add();
                            ?>
                            <script>
                                window.location = '/admin/Equipe';
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