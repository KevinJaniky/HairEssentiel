<?php
class Display {
    public function __construct($titre)
    {

        echo "<head>
                <title>$titre | Yuna Création</title>
            
                <meta charset=\"utf-8\">
                <meta name=\"description\" content=\"\">
                <meta property=\"og:title\" content=\"$titre\"/>
                <meta http-equiv=\"pragma\" content=\"no-cache\" />
                <meta property=\"og:description\" content=\"Description\"/>
                <meta property=\"og:image\" content=\"URL_image\"/>
                <meta property=\"og:url\" content=\"\">
                <link rel='icon' href='/media/favicon.png'>
                <link rel=\"stylesheet\" href=\"/ressources/bootstrap/css/bootstrap.min.css\">
                <link rel=\"stylesheet\" href=\"/ressources/owl-carousel/assets/owl.carousel.min.css\">
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
                <link rel=\"stylesheet\" href=\"/ressources/css/app.css\">
            
                <script src=\"/ressources/bootstrap/js/jquery.js\"></script>
                <script src=\"/ressources/bootstrap/js/bootstrap.min.js\"></script>
                <script src=\"/ressources/owl-carousel/owl.carousel.min.js\"></script>
                <script src=\"/ressources/js/script.js\"></script>
            </head>";
    }
    public function Header() {
        echo '
        <header>
            <img src="/media/favicon.png" alt="Logo Hair Essentiel">
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
                <li><a href="/Accueil">Accueil</a></li>
                <li><a href="/Salon">Salon</a></li>
                <li><a href="/Offres">Offres</a></li>
                <li><a href="/Blog">Blog</a></li>
                <li><a href="/Contact" rel="nofollow">Contact</a></li>

            </ul>
        </div>
    </div>
</nav>
        ';
    }

    public function Carousel(){
        echo '
        <div class="MyCarousel">
    <div><img src="/media/testcarousel.jpg" alt="Carousel item Image Louhans Coiffeur"></div>
    <div><img src="/media/test_carousel2.jpg" alt="Carousel item Image Louhans Coiffeur"></div>
    <div><img src="/media/testcarousel.jpg" alt="Carousel item Image Louhans Coiffeur"></div>
    <div><img src="/media/test_carousel2.jpg" alt="Carousel item Image Louhans Coiffeur"></div>
    <div><img src="/media/testcarousel.jpg" alt="Carousel item Image Louhans Coiffeur"></div>

</div>
        ';
    }

    public function Aside() {
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
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquam ac sapien ac faucibus amet.
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
    <img src="/media/favicon.png" alt="Logo Hait Essentiel">
    <div class="footer-link">
        <div class="links">
            <ul>
                <li>Liens Utiles</li>
                <li><a href="/Salon">A propos de moi</a></li>
                <li><a href="/Offres">Nos Offres</a></li>
                <li><a href="/Blog">Mon Blog</a></li>
                <li><a href="/Blog">Mentions Légales</a></li>
                <li><a href="/Blog">Contact</a></li>
            </ul>
        </div>
        <div class="follow">
            <ul>
                <li>Me suivre</li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Youtube</a></li>
            </ul>
        </div>
        <div class="newsletter">
            <form action="">
                <div class="form-group">
                    <label for="mail">NewsLetter</label>
                    <input type="email" id="mail" placeholder="Votre mail" class="form-control">
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