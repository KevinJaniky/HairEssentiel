<?php

require "autoload.php";


$display = new Display('Connexion');
$user = new User();

if(isset($_SESSION['admin']) && $_SESSION['admin'] == true  ){
    header('location:Dashboard');
    die();
}

?>

<style>
    html,
    body {
        height: 100%;
    }
    html {
        display: table;
        margin: auto;
    }
    body {
        display: table-cell;
        vertical-align: middle;
    }
    #login-page>div {
        min-width: 395px;
    }
</style>

<body class=" green darken-2 loaded">


<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->



<div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
        <form class="login-form" method="post">
            <div class="row">
                <div class="input-field col s12 center">
                    <img src="/media/favicon.png" style="width: 200px;" alt="Logo icone hairessentiek" class=" responsive-img valign profile-image-login">
                    <p class="center login-form-text"></p>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <input id="identifiant" type="text" name="identifiant">
                    <label for="identifiant" class="center-align" >Identifiant</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <input id="password" type="password" name="mdp">
                    <label for="password">Mot de passe</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <button href="index.html" class="btn waves-effect waves-light col s12  green darken-2">Connexion</button>
                </div>
            </div>

            <?php

            if(isset($_POST['identifiant']) && isset($_POST['mdp']))
            {
                $id = $_POST['identifiant'];
                $mdp = $_POST['mdp'];

                $user->setId($id);
                $user->setMdp($mdp);
                $user->verifUser();
                $res = $user->createSession();


                if($res) {
                    header('location:Dashboard');
                    die();
                }else {
                    echo "Error ";
                }

            }


            ?>
        </form>
    </div>
</div>
</body>
