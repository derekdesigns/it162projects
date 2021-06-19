<?php
/*
fp-config.php

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;


switch(THIS_PAGE){

    case 'index.php';
        $title = "Wendy's Welcome Page";
        $logo = '';
        $PageID = "Wendy Clark's Fine Art";
    break;

    case 'gallery.php';
        $title = "Gallery";
        $logo = '';
        $PageID = 'Gallery';
    break;

    case 'commissions.php';
        $title = "Commissions";
        $logo = '';
        $PageID = 'Commissions';
    break;

    case 'about.php';
        $title = "About";
        $logo = '';
        $PageID = "My Story";
    break;

    case 'contactme.php';
        $title = "Contact Wendy";
        $logo = '';
        $PageID = "I'll Be Proud As A Peackock If You Reach Out...";
    break;

    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = "Wendy Clark's Fine Art";

}

$nav1['index.php'] = "Welcome";
$nav1['gallery.php'] = "Gallery";
$nav1['commissions.php'] = "Commissions";
$nav1['about.php'] = "About";
$nav1['contactme.php'] = "Contact Wendy";

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