<?php
if (isset($_GET['page'])){
    switch (htmlspecialchars($_GET['page'])){

    case 'home':
        include "templates/".active_template."/pages/main.page.php";
    break;

    case 'visi':
        include "templates/".active_template."/pages/all_films.page.php";
    break;

    case 'zanrai':
        include "templates/".active_template."/pages/search_genres.page.php";
    break;

    case 'prideti':
        include "templates/".active_template."/pages/add_movie.page.php";
    break;


    case 'paieska':
        include "templates/".active_template."/pages/search.page.php";
    break;

    default:
        include "templates/".active_template."/pages/error.page.php";
}}
else {
    include ('templates/'.active_template.'/pages/main.page.php');
}