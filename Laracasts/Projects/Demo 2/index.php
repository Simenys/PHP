<?php 

require ("views/partials/fn.php");

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// dd($uri);


if ($uri === '/') {
    require ('controllers/index.php');
} elseif ($uri === '/about.php') {
    require ('controllers/about.php');
} elseif ($uri === '/contact.php') {
    require ('controllers/contact.php');
}