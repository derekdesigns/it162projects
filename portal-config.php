<?php
/*
portal-config.php

Used to store all of our it162 configuration information

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

    case 'big/index.php';
        $title = "Derek's IT162 Title Page";
        $logo = 'fa-hourglass-half';
        $PageID = 'Big';
    break;

    case 'aia.php';
        $title = "Derek's IT162 Title Page";
        $logo = 'fa-hourglass-half';
        $PageID = 'AIA';
    break;

    case 'flowchart.php';
        $title = "Derek's IT162 Title Page";
        $logo = 'fa-hourglass-half';
        $PageID = 'Flowchart';
    break;

    case 'fp/index.php';
        $title = "Derek's IT162 Title Page";
        $logo = 'fa-hourglass-half';
        $PageID = 'Final Project';
    break;

    case 'contactme.php';
        $title = "Derek's IT162 Contact Page";
        $logo = 'fa-hourglass-half';
        $PageID = 'Contact Derek';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-hourglass-half';
        $PageID = 'Welcome';

}

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Derek";

/*
Here we're creating a function to generate
links and keep the highlight on the current page
*/

function makeLinks($nav1) {
    $myReturn = '';
    foreach($nav1 as $url => $text) {

        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        }else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }

    }

    return $myReturn;
}

?>