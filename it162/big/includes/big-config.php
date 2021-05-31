<?php
/*
big-config.php

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;


switch(THIS_PAGE){

    case 'index.php';
        $title = "Derek's IT162 Title Page";
        $logo = 'fa-hourglass-half';
        $PageID = 'Welcome';
    break;

    case 'flexbox.php';
        $title = "Derek's Flexbox Research";
        $logo = 'fa-hourglass-half';
        $PageID = 'Flexbox Research';
    break;

    case 'sliders.php';
        $title = "Derek's Sliders Research";
        $logo = 'fa-hourglass-half';
        $PageID = 'Sliders Research';
    break;

    case 'google.php';
        $title = "Derek's Google Links";
        $logo = 'fa-hourglass-half';
        $PageID = 'Google Links';
    break;

    case 'map.php';
        $title = "Google Map";
        $logo = 'fa-hourglass-half';
        $PageID = 'Google Map';
    break;

    case 'calendar.php';
        $title = "Google Calendar";
        $logo = 'fa-hourglass-half';
        $PageID = 'Google Calendar';
    break;

    case 'youtube.php';
        $title = "Derek's YouTube Link";
        $logo = 'fa-hourglass-half';
        $PageID = 'YouTube Link';
    break;

    case 'shoppingcarts.php';
        $title = "Derek's Shopping Cart Research";
        $logo = 'fa-hourglass-half';
        $PageID = 'Shopping Cart Research';
    break;

    case 'siteapp.php';
        $title = "Derek's Website vs App Research";
        $logo = 'fa-hourglass-half';
        $PageID = 'Website vs App Research';
    break;

    case 'webcam.php';
        $title = "Derek's Two Webcam Links";
        $logo = 'fa-hourglass-half';
        $PageID = 'Webcam Links';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-hourglass-half';
        $PageID = 'Welcome';
}

?>