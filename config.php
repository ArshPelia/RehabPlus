<?php
if ( session_status() === PHP_SESSION_NONE ) session_start();
header('Cache-control: private'); // IE 6 FIX
if(isSet($_GET['lang']))
{
    $lang = $_GET['lang'];
    // register the session and set the cookie
    $_SESSION['lang'] = $lang;
    setcookie("lang", $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
    $lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
    $lang = $_COOKIE['lang'];
}
else
{
    $lang = 'en';
}
switch ($lang) {
    case 'en':
        //English
        $lang_file = 'en.php';
        break;

    case 'fr':
        //Franch
        $lang_file = 'fr.php';
        break;
    // Default English
    default:
        $lang_file = 'en.php';
}
include_once 'text/'.$lang_file;



//	session_start();
//	if (!isset($_SESSION['lang']))
//		$_SESSION['lang'] = "en";
//	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
//		if ($_GET['lang'] == "en")
//			$_SESSION['lang'] = "en";
//		else if ($_GET['lang'] == "fr")
//			$_SESSION['lang'] = "fr";
//	}
//
//	require_once "text/" . $_SESSION['lang'] . ".php";
?>