<?php

/*WRITTEN BY ME: I ADDED THIS BELOW CODE FIRST*/

/*
   portal-config.php


   Used to store all PHP configuration information
*/


//prevents data from being sent early
ob_start();

//place site wide functions in a separate file
include 'functions.php';


//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//creates a constant that stores the file name of the current page - cannot be changed
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


//$title is a default variable we can change based on circumstances
$title = THIS_PAGE;





/*WRITTEN BY ME. I ADDED THIS CODE HERE SECONDLY*/
switch(THIS_PAGE){


    case 'index.php':
        $title = 'My Portal';
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
   
    case 'contact.php':
        $title = 'Contact Me';
        $logo = 'fa-paper-plane-o';
        $PageID = 'Contact Me';
    break;
 
 
    case 'template.php':
        $title = 'Template';
        $logo = 'fa-pencil-square-o';
        $PageID = 'Copy me to make more pages';
    break;

    case 'case-study.php':
        $title = 'Case Study';
        $logo = 'fa-pencil-square-o';
        $PageID = 'Case Study';
    break;
 
 
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'No PageID created';
   }


   
 /*WRITTEN BY ME. I ADDED THIS CODE HERE THIRD*/
 //place URL & labels in the array here for navigation:
    $nav1['index.php'] = "Home";
    $nav1['case-study.php'] = "Case Study";
    $nav1['contact.php'] = "Contact";
?>
