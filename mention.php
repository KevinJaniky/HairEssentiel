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
    <div class="mention">
        <h2>Mentions légales</h2>
        <h3>Mentions légales Hair Essentiel</h3>

        <p>Merci de lire attentivement les présentes modalités d'utilisation du présent site avant de le parcourir. En
            vous connectant sur ce site, vous acceptez sans réserve les présentes modalités.</p>

        <h3>Éditeur du site Internet :</h3>

        <div class="flex">
            <div class="coord">
                <h4>Développeur / Webmaster</h4>
                <p><a href="#" target="_blank">Yuna Création</a></p>
            </div>

            <div class="coord">
                <h4>Entreprise</h4>
                <p>Hair Essentiel</p>
                <p>9 rue Lucien Guillemaut</p>
                <p>71500 LOUHANS</p>
                <p>France</p>
                <p><i class="fa fa-phone"></i> 03 85 74 72 27</p>
            </div>

            <div class="coord">
                <h4>Herbergeur du site</h4>
                <p><a href="http://www.ovh.com" target="_blank">SAS OVH</a></p>
                <p>2 rue Kellermann</p>
                <p>BP 80157</p>
                <p>59000 ROUBAIX</p>
                <p>France</p>
                <p><i class="fa fa-phone"></i> 03 85 74 72 27</p>
            </div>
        </div>

        <h3>Conditions d'utilisation</h3>
        <p>
            Le site accessible par les url suivants : www.hair-essentiel.fr est exploité dans le respect de la
            législation française. L'utilisation de ce site est régie par les présentes conditions générales. En
            utilisant le site, vous reconnaissez avoir pris connaissance de ces conditions et les avoir acceptées.
            Celles-ci pourront êtres modifiées à tout moment et sans préavis par Hair Essentiel. Hair Essentiel ne
            saurait être tenu pour responsable en aucune manière d’une mauvaise utilisation du service.
        </p>
        <h3>Limitation de responsabilité</h3>
        <p>
            Les informations contenues sur ce site sont aussi précises que possibles et le site est périodiquement remis
            à jour, mais peut toutefois contenir des inexactitudes, des omissions ou des lacunes. Si vous constatez une
            lacune, erreur ou ce qui parait être un dysfonctionnement, merci de bien vouloir le signaler par en
            décrivant le problème de la manière la plus précise possible (page posant problème, action déclenchante,
            type d’ordinateur et de navigateur utilisé, …). Tout contenu téléchargé se fait aux risques et périls de
            l'utilisateur et sous sa seule responsabilité. En conséquence, Hair Essentiel ne saurait être tenu
            responsable d'un quelconque dommage subi par l'ordinateur de l'utilisateur ou d'une quelconque perte de
            données consécutives au téléchargement. Les photos sont non contractuelles.

            Les liens hypertextes mis en place dans le cadre du présent site internet en direction d'autres ressources
            présentes sur le réseau Internet ne sauraient engager la responsabilité de Hair Essentiel. Hair Essentiel
            n'est en aucun cas responsable du contenu des sites vers lesquelles pointent les urls de son site.
        </p>

        <h3>Litiges</h3>
        <p>
            Les présentes conditions sont régies par les lois françaises et toute contestation ou litiges qui pourraient
            naître de l'interprétation ou de l'exécution de celles-ci seront de la compétence exclusive des tribunaux
            dont dépend le siège social de l'entreprise individuelle. La langue de référence, pour le règlement de
            contentieux éventuels, est le français.
        </p>

        <h3>Cookies</h3>
        <p>
            Pour des besoins de statistiques et d'affichage, le présent site utilise des cookies. Il s'agit de petits
            fichiers textes stockés sur votre disque dur afin d'enregistrer des données techniques sur votre navigation.
            Certaines parties de ce site ne peuvent être fonctionnelles sans l’acceptation de cookies.
        </p>

        <h3>Liens hypertextes</h3>
        <p>
            Le site internet www.hair-essentiel.fr peut offrir des liens vers d’autres sites internet ou d’autres
            ressources disponibles sur Internet. Hair Essentiel ne dispose d'aucun moyen pour contrôler les sites en
            connexion avec le sien . Hair Essentiel ne répond pas de la disponibilité de tels sites et sources externes,
            ni ne la garantit. Elle ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit,
            résultant du contenu de ces sites ou sources externes, et notamment des informations, produits ou services
            qu’ils proposent, ou de tout usage qui peut être fait de ces éléments. Les risques liés à cette utilisation
            incombent pleinement à l'internaute, qui doit se conformer à leurs conditions d'utilisation. . Les
            utilisateurs et visiteurs du site internet peuvent mettre en place un hyperlien en direction de ce site,
            accessible à l’URL suivante : www.hair-essentiel.fr, à condition que ce lien s’ouvre dans une nouvelle
            fenêtre.
        </p>

        <p>
            Pour toute demande d'autorisation ou d'information, veuillez nous contacter par email<br>
            <a href="#">Nous contacter</a><br>
            Des conditions spécifiques sont prévues pour la presse.
        </p>

    </div>
</div>
<?php $display->Footer() ?>

</body>