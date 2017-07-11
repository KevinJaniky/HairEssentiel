<?php

class Display
{
    public function __construct($titre)
    {

        echo "<head>
    <title>$titre | Hair Essentiel</title>

    <meta charset=\"utf-8\">
    <link rel='icon' href='/media/favicon.png'>
    <link rel=\"stylesheet\" href=\"/admin/ressources/materialize/css/materialize.min.css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"/admin/ressources/css/style.css\">
    <link rel=\"stylesheet\" href=\"/ressources/sweetAlert/sweetalert.css\">

    <script src=\"/admin/ressources/materialize/js/jquery.js\"></script>
    <script src=\"/admin/ressources/materialize/js/materialize.min.js\"></script>
</head>";
    }

    public function navTop()
    {
        echo "
       <nav class='green darken-2'>
    <div class=\"nav-wrapper\">
    <a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse left \" style='display: block;'><i class=\"material-icons\">menu</i></a>
      <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
        <li><a href=\"/admin/deconnexion.php\">Déconnexion</a></li>
      </ul>
    </div>
  </nav>";
    }

    public function sideBar()
    {
        echo "
        <ul id=\"slide-out\" class=\"side-nav \">
    <li><div class=\"user-view\">
      <div class=\"background\">
        <img src=\"/media/header.jpg\" id='sidebarimg'>
      </div>
    </div></li>
        <ul class=\"collapsible collapsible-accordion\">
          <li>
            <a class=\"collapsible-header\"  href=\"/Accueil\" target='_blank'>Mon site<i class=\"material-icons\">loyalty</i></a>
          </li>
          <li>
            <a class=\"collapsible-header\"  href=\"/admin/Dashboard\">Accueil<i class=\"material-icons\">home</i></a>
          </li>
          <li>
            <a class=\"collapsible-header\"  href=\"/admin/Add\">Ajouter un Article<i class=\"material-icons\">art_track</i></a>
          </li>
        </ul>
        
         <ul class=\"collapsible collapsible-accordion\">
          <li>
            <a class=\"collapsible-header\">Equipe<i class=\"material-icons\">work</i></a>
            <div class=\"collapsible-body\">
              <ul>
                <li><a href=\"/admin/Equipe\">Général</a></li>
                <li><a href=\"/admin/Add-Equipe\">Ajouter</a></li>
              </ul>
            </div>
          </li>
        </ul>
         <ul class=\"collapsible collapsible-accordion\">
          <li>
            <a class=\"collapsible-header\">Proverbe<i class=\"material-icons\">library_books</i></a>
            <div class=\"collapsible-body\">
              <ul>
                <li><a href=\"/admin/Proverbe\">Général</a></li>
                <li><a href=\"/admin/Add-Proverbe\">Ajouter</a></li>
              </ul>
            </div>
          </li>
        </ul>
         <ul class=\"collapsible collapsible-accordion\">
          <li>
            <a class=\"collapsible-header\">Offres<i class=\"material-icons\">euro_symbol</i></a>
            <div class=\"collapsible-body\">
              <ul>
                <li><a href=\"/admin/Offre\">Général</a></li>
                <li><a href=\"/admin/Add-Offre\">Ajouter</a></li>
              </ul>
            </div>
          </li>
        </ul>
         <ul class=\"collapsible collapsible-accordion\">
          <li>
            <a class=\"collapsible-header\" href='/admin/Horaire'>Horaire<i class=\"material-icons\">access_time</i></a>
          </li>
        </ul>
  </ul>
        ";
    }

    public function resume($text)
    {
        return strip_tags($text);
    }
}