<?php
function vnget($getname,$getvalue= NULL){
if(isset($_GET[$getname])){
if(!empty($_GET[$getname])){
if(is_numeric($_GET[$getname])){
if($getvalue != NULL){
if($_GET[$getname]=== $getvalue)
return true ; 
else 
return false ; }
else 
return $_GET[$getname] ;} 
else 
return false ; }
else 
return false ; }
else 
return false ;}	
function vtget($getname,$getvalue=NULL){
if(isset($_GET[$getname])){
if(!empty($_GET[$getname]))  {
if(is_string($_GET[$getname])){
if($getvalue != NULL){
if($_GET[$getname]=== $getvalue)
return true ; 
else 
return false ;}
else 
return $_GET[$getname] ; } 
else
return false ; }
else 
return false ; }
else 
return false ; 	
}
function vnpost($postname){
if(isset($_POST[$postname]))
if(!empty($_POST[$postname]))
if(is_numeric($_POST[$postname]))
return 	$_POST[$postname];
else 
return false ;  
else 
return false ;
else 
return false ;
}
function vtpost($postname){
if(isset($_POST[$postname]))
if(!empty($_POST[$postname]))
if(is_string($_POST[$postname]))
return 	$_POST[$postname];
else 
return false ;  
else 
return false ;
else 
return false ;
}

function Myupload_image($name){
$url = random_character(50);
if (!empty($_FILES[$name]['name'])){ 
//	if (isset($_POST["name"])){
  $uploads_error= false;
$dir = "../img/";
$url = $dir.$url;
$targetFile= $dir . basename($_FILES[$name]['name']) ;
$imageFileType = pathinfo($targetFile,PATHINFO_EXTENSION);
$url = $url.".".$imageFileType;
while (file_exists($url)) {
  $url = $dir.random_character(50).$imageFileType ;
  }  

$uploadOk= 1 ; 
//$check = getimagesize($_FILES["upload_image"]["tmp_name"]) ;
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType !="PNG" && $imageFileType !== "JPG" && $imageFileType !== "JPEG" && $imageFileType !== "GIF"  ) {  
$uploads_error= true ;
  $uploadOk = 0 ; 
  return false ; 
    die('l moskla f l extension'); 
}else{
if(move_uploaded_file($_FILES[$name]["tmp_name"],$url)) {
chmod($url,771);
 $uploadOk= 1;
 return $url ; 
  }
else {
die("l moshkla f l move uploaded");
 $uploads_error= true ;
 return false ; 
 } 
$uploadOk= 0 ;
}

}
else{
return false ; 
die(var_dump($_FILES));
}
}
function random_character($length = 10){
	$array = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','1','0','2','3','4','5','6','7','8','9');
	$randTo = count($array) - 1;
	$randFrom = 0;
	$reta = '';
	for ($i=0; $i < $length; $i++) {
		$rand = rand($randFrom,$randTo);
		$reta .= $array[$rand];
	}
	return $reta;
}
function fkey($file_name)
{
	$new_file_name=md5(md5(sha1(md5($file_name))));
	return $new_file_name;
}
function create_username($username){
	$num = rand(1000,99999); 
	$username= $username.$num ; 
	return $username ; 

}
function find_text($string,$text){
	$return = FALSE;
	if(is_array($text)){
		foreach ($text as $key) {
			$strpos_val = strpos($string, $key);
			if(isset($strpos_val) && !empty($strpos_val)){
				$return = TRUE;
				goto EndAndReturn;
			}
		}
	}elseif(is_array($string)){
		foreach ($string as $strng_key) {
			if(strpos($strng_key, $text)){
				$return = TRUE;
				goto EndAndReturn;
			}
		}
	}else{
		// echo $string.'<br>';
		if(strpos($string, $text)){
			$return = TRUE;
			goto EndAndReturn;
		}
	}	

	EndAndReturn:						
	return $return;
}
function scr($get_post) {

	$magic_quotes_active = get_magic_quotes_gpc();
	$new_enough_php = function_exists("mysql_real_escape_string");
	if($new_enough_php) {
		// undo any magic qoutes cat WORK in DataBase
		if($magic_quotes_active) {$get_post = stripcslashes($get_post);}
		// $get_post = mysql_real_escape_string($get_post);
		// $get_post = mysql_escape_string($get_post);
	}else {// before PHP v4.3.0
		if(!$magic_quotes_active) {$get_post = addslashes($get_post);}
	}
	$remove_items = array("|",'`',"*","'",'"',"\\");//,'*','\\',''
	foreach ($remove_items as $remove_item) {
		if(find_text($get_post,$remove_item)){
			$get_post = str_replace($remove_item, '', $get_post);
		}
	}
	return $get_post;
}
function redir($url , $wait = 1){
		$waitSec = $wait * 1000; 
	    $code = '<meta http-equiv="refresh" content="'.$wait.';url='.$url.'" />';
        $code .= '<script type="text/javascript">setTimeout(function(){';
        $code .= 'location.replace("'.$url.'");';
        $code .= 'window.location.href="'.$url.'";';
        $code .= '}, '.$waitSec.');</script>';

        echo $code;
        return true ;
}
function hash_password($password,$salt =null ){
	if($salt== null)
		$salt=random_character(12);
	$fixed = "Wch@bbe/";
	$password .=$salt.$fixed; 
	for($i=0;$i<2195;$i++){
		if($i%2==1 || $i%9 || $i%133)
			$password = md5($password);
		else{
			sha1($password);
		}
	}
	$password.=$salt;
	return $password; 
}
function verify_password($password,$hashed_password){
	$salt = substr($hashed_password,-12);
	if($hashed_password== hash_password($password,$salt))
		return true ; 
	else 
		return false; 

}
function jsdebugger($message){
	echo "<script>console.log('".$message."');</script>"; 
} 
function checkFutureDate($checkedDate){
	 $date_time = strtotime($checkedDate);
	 $date_days = (int) ($date_time/(86400))+1;
	 $time_in_days = (int)( time()/(86400));
	  if($date_days <= $time_in_days)
            $dateErr= false ; 
        else 
            $dateErr= true  ;
    return $dateErr; 
}
function validateEmail($email){
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  return false ;
	}else {
	return true ;
	}
}
v
?>
