<?php
if(!isset($_SESSION['loggedIn']) && !$_SESSION['loggedIn'] ){
    $page = array('home','about','post','contact','enter');}
 else if ( $_SESSION['loggedIn'] ){
    $page = array('home','about','post','contact','newPost','adminAbout','logout');
 } //here you add the pages 

$current_page= $page[0];
if(isset($_GET['page'])) {
$arrlength= count($page);
for($x = 0; $x < $arrlength; $x++) {
   if($page[$x]==scr($_GET['page'])){
   	$current_page= scr($_GET['page']);
   	break ; 
   }
}
}
$GLOBALS['current_page'] = $current_page;?>
