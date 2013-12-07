<?php
require 'vendor/autoload.php';
include( 'controller.php' );

$loader = new Twig_Loader_String();
$twig = new Twig_Environment($loader);

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'cache',
));

$page = ( class_exists('Page') ) ? new Page() : array() ;
echo $twig->render('index.twig', array('page' => $page ));


?>
