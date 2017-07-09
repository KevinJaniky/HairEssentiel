<?php
class Display {
    public function __construct($titre)
    {

        echo "*
    <head>
                <title>$titre | Yuna Création</title>
            
                <meta charset=\"utf-8\">
                <meta name=\"description\" content=\"Site de coiffure à Louhans - Hair essentiel salon du végétal \">
                <meta property=\"og:title\" content=\"$titre\"/>
                <meta property=\"og:description\" content=\"Site de coiffure à Louhans - Hair essentiel salon du végétal \"/>
                <meta property=\"og:image\" content=\"/hair/media/favicon.png\"/>
                <meta property=\"og:url\" content=\"www.hair-essentiel.fr\">
                <link rel='icon' href='/hair/media/favicon.png'>
                <link rel=\"stylesheet\" href=\"/hair/ressources/bootstrap/css/bootstrap.min.css\">
                <link rel=\"stylesheet\" href=\"/hair/ressources/owl-carousel/assets/owl.carousel.min.css\">
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
                <link href=\"https://fonts.googleapis.com/css?family=Capriola|Pacifico\" rel=\"stylesheet\">
                <link rel=\"stylesheet\" href=\"/hair/ressources/css/app.css\">
            
                <script src=\"/hair/ressources/bootstrap/js/jquery.js\"></script>
                <script src=\"/hair/ressources/bootstrap/js/bootstrap.min.js\"></script>
                <script src=\"/hair/ressources/owl-carousel/owl.carousel.min.js\"></script>
                <script src=\"//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js\"></script>
                <script src=\"/hair/ressources/js/script.js\"></script>
            </head>";
    }
    public function Header() {
        echo '
        <header>
            <img src="/hair/media/favicon.png" alt="Logo Hair Essentiel">
        </header>
        ';
    }
    public function Navigation() {
        echo '
        <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav rs">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>

            <ul class="nav navbar-nav " id="nav-princ">
                <li><a href="/hair/Accueil">Accueil</a></li>
                <li><a href="/hair/Salon">Salon</a></li>
                <li><a href="/hair/Offres">Offres</a></li>
                <li><a href="/hair/Blog">Blog</a></li>
                <li><a href="/hair/Contact" rel="nofollow">Contact</a></li>

            </ul>
        </div>
    </div>
</nav>
        ';
    }

    public function Carousel(){
        echo '
        <div class="MyCarousel">
    <div><img src="/hair/media/testcarousel.jpg" alt="Carousel item Image Louhans Coiffeur"></div>
    <div><img src="/hair/media/test_carousel2.jpg" alt="Carousel item Image Louhans Coiffeur"></div>
    <div><img src="/hair/media/testcarousel.jpg" alt="Carousel item Image Louhans Coiffeur"></div>
    <div><img src="/hair/media/test_carousel2.jpg" alt="Carousel item Image Louhans Coiffeur"></div>
    <div><img src="/hair/media/testcarousel.jpg" alt="Carousel item Image Louhans Coiffeur"></div>

</div>
        ';
    }

    public function Aside() {

        $proverbe = new Proverbe();
        $data = $proverbe->contentProverbe();

        echo '
        
<aside>
    <div class="description">
        <div class="img-d"></div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam accumsan elementum dolor quis iaculis. Suspendisse laoreet ligula et ipsum imperdiet.
        </p>
    </div>
    <ul class="reseaux_sociaux">
       <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
       <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
       <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
    </ul>
    <p class="proverbe">
        '.$data['content'].'
        <span>- '.$data['auteur'].'</span>
    </p>
    <!--<div>
        <div class="activité"> Bloc 1</div>
        <div class="activité"> Bloc 2</div>
    </div>-->
</aside>
        ';
    }
    public function Footer() {
        echo '
        
<footer>
    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In non dignissim ligula. Proin tempus amet.</h2>
    <img src="/hair/media/favicon.png" alt="Logo Hait Essentiel">
    <div class="footer-link">
        <div class="links">
            <ul>
                <li>Liens Utiles</li>
                <li><a href="/hair/Salon">A propos de moi</a></li>
                <li><a href="/hair/Offres">Nos Offres</a></li>
                <li><a href="/hair/Blog">Mon Blog</a></li>
                <li><a href="/hair/Mentions-Legales">Mentions Légales</a></li>
                <li><a href="/hair/Contact">Contact</a></li>
            </ul>
        </div>
        <div class="follow">
            <ul>
                <li>Me suivre</li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Youtube</a></li>
                <li><a href="http://hairessentiel.com/" target="_blank">Chalon-sur-saone</a></li>
            </ul>
        </div>
        <div class="newsletter">
            <form action="traitement_mail.php" method="POST">
                <div class="form-group">
                    <label for="mail">NewsLetter</label>
                    <input name="mail" type="email" id="mail" placeholder="Votre mail" class="form-control">
                </div>
                <input type="submit" class="btn btn-hair" value="S\'abonner">
            </form>
        </div>
    </div>
    <div class="copyright_element">
        Copyright &copy; 2017 . Developed by Yuna Création
    </div>
</footer>
        ';

    }
}