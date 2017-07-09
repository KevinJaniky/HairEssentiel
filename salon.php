<?php
require_once 'autoload.php';
$display = new Display('Salon');
?>

<body>
<?php
include 'analytics.php';
$display->Header();
$display->Navigation();
?>
<div class="container">

    <div class="main">
        <div class="salon">
            <div class="carouselsalon">
                <div><img src="/media/salon/1.jpg" alt="Salon Coiffure Louhans vegetale"></div>
                <div><img src="/media/salon/2.jpg" alt="Salon Coiffure Louhans vegetale"></div>
                <div><img src="/media/salon/3.jpg" alt="Salon Coiffure Louhans vegetale"></div>
            </div>
            <div class="description">
                <h2>Le Salon</h2>
                Prendre le temps, se détendre, apprécier le moment présent sont des valeurs que vous pourrez retrouver
                enfin chez un coiffeur.
                Dans une ambiance musicale douce et zen (cliquez sur le logo) , une odeur de végétal, venez vous faire
                cocooner à Louhans et obtenir des cheveux brillants grâce aux huiles essentielles.
                A votre disposition pour les temps d'attente, un coin bibliothèque aux thèmes hétéroclites : jardins,
                huiles essentielles, feng-shui, voyages, recettes de grand-mère, yoga, méditation...
                Un espace Vente et Conseils : Shampooings Naturels, Soins, Huiles végétales, Huiles essentielles,
                Coiffants, Maquillage Bio, .
                A partir de maintenant prenez rendez-vous avec vous-même !

            </div>
            <div class="eco-coiffeur">
                <img src="/media/eco/Label-DD.jpg" alt="eco coiffure label louhans " id="left">
                <h2>Eco-coiffeur</h2>
                <img src="/media/eco/Label-DD.jpg" alt="eco coiffure label louhans " id="right">
                <div>
                    Votre coiffeur a obtenu la marque « développement durable, mon coiffeur s’engage », label attribué
                    par la profession aux coiffeurs qui s’engagent à agir durablement et quotidiennement pour préserver
                    notre planète. Un engagement à la fois environnemental et sociétal, qui s’exprime de différentes
                    manières <br>
                    <ul>
                        <li>Réduire son empreinte environnementale en privilégiant des achats de matériels et des
                            produits
                            respectueux de la santé et de l’environnement
                        </li>
                        <li>Préserver les ressources en énergie</li>
                        <li>Adopter les pratiques qui préservent la santé, la sécurité et le confort de travail de leur
                            équipe
                        </li>
                        <li>Maintenir des principes d’hygiène irréprochables</li>
                    </ul>
                    <br>
                    Adoptez une éco-attitude ! Choisir un coiffeur qui détient cette marque, c’est agir vous-même pour
                    prendre soin de notre planète

                    <ul>
                        <li>En choisissant des professionnels sensibilisés et formés au développement durable</li>
                        <li>En privilégiant une consommation responsable qui tient compte de la nécessité de préserver
                            les
                            ressources de la planète
                        </li>
                        <li>En nous aidant à promouvoir cette démarche auprès d’autres salons de coiffure pour
                            généraliser les
                            bonnes pratiques écologiques
                        </li>
                        <li>En respectant les valeurs humaines et la santé des professionnels</li>
                    </ul>
                </div>

                <img src="/media/eco/performance.png" alt="performance coiffure label eco coiffure louhans" id="perf">
            </div>
            <div id="equipe_title">
                <h2>L'équipe</h2>
                <h5>Un lieu de détente juste pour vous, prendre un temps pour soi et sortir la tête légère</h5>
            </div>
            <div class="equipe">
                <p>
                    Carole, met tout en œuvre pour mettre vos cheveux en valeur, vous conseiller et vous apporter du
                    bien-être. La création de son concept « être coiffeuse pour faire du bien au gens » est toute sa
                    vie.
                </p>
                <div style="background-image: url(/media/equipe/carole.png)" class="photo_equipe"></div>
            </div>
            <div class="equipe">
                <div  style="background-image: url(/media/equipe/Marjorie.jpg)" class="photo_equipe"></div>
                <p>
                    Marjorie, discrète et attentive, s’occupera de vous avec douceur, ses massages du cuir chevelu sont sensationnels. Le végétal est sa vraie passion après la coiffure.
                </p>
            </div>
        </div>
        <?php $display->Aside() ?>
    </div>
</div>
<?php $display->Footer() ?>

</body>