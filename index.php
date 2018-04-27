<?php
//// index.php here we work by modules 
/// 
$GLOBALS['domain'] = "http://localhost/blogtest/index.php";
session_start();
require("init.php");
require(HELPER.'config.php');
include(HELPER.'funcs.php');


include('page.php');
if($GLOBALS['current_page'] !== 'enter')
require(LAYOUT.'header.php');
include(PAGE.$GLOBALS['current_page'].".php");
if($GLOBALS['current_page'] !== 'enter')
include(LAYOUT."/footer.php");

?>
