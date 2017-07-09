<?php
require_once 'autoload.php';
$display = new Display('Contact');
$horaire = new Horaire();
$hor = $horaire->select();
$count = count($hor);
?>

<body>
<?php
include 'analytics.php';
$display->Header();
$display->Navigation();
?>
<div class="container">
    <div class="contact">
        <div class="adresse">
            <h2>Adresse</h2>

            <div>
                <p><i class="fa fa-map-marker"></i>9 rue Lucien Guillemaut</p>
                <p><i class="fa fa-globe"></i>71500 Louhans</p>
                <p><i class="fa fa-phone"></i>03 85 74 72 27</p>
                <p>Horaires</p>
                <table class="table">
                    <tbody>

                    <?php
                    for ($i = 0; $i < $count; $i++) {
                        ?>
                        <tr>
                            <td><?= $hor[$i]['jour'] ?></td>
                            <td><?= $hor[$i]['matin'] ?></td>
                            <td><?= $hor[$i]['midi'] ?></td>
                        </tr>
                        <?php
                    }

                    ?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="form_contact">
            <h2>Contact</h2>
            <?php
            if (isset($_SESSION['flash_email_error'])) {
                echo '<div class="alert alert-danger" role="alert">' . $_SESSION['flash_email_error'] . '</div>';
                unset($_SESSION['flash_email_error']);
            }
            if (isset($_SESSION['flash_email_success'])) {
                echo '<div class="alert alert-info" role="alert">' . $_SESSION['flash_email_success'] . '</div>';
                unset($_SESSION['flash_email_success']);
            }
            ?>
            <form action="traitement_contact.php" method="post">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" name="nom" class="form-control" placeholder="Votre nom" id="name">
                </div>
                <div class="form-group">
                    <label for="mail">Mail *</label>
                    <input type="email" name="mail" class="form-control" placeholder="Votre E-mail" id="mail">
                </div>
                <div class="form-group">
                    <label for="objet">Objet</label>
                    <input type="text" name="obj" class="form-control" placeholder="Votre Objet" id="objet">
                </div>
                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea name="msg" id="message" class="form-control" cols="30" rows="9">Bonjour , </textarea>
                </div>
                <input type="submit" class="btn btn-hair" value="Envoyer">
            </form>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2739.892073132173!2d5.218379215596816!3d46.62889427913189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f32f4acabe38bd%3A0x42412646b8a78424!2s9+Rue+Lucien+Guillemaut%2C+71500+Louhans!5e0!3m2!1sfr!2sfr!4v1499531083328"
                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>

<?php $display->Footer() ?>

</body>