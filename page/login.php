<?php
$email = scr($_POST['form-email']);
$password = scr($_POST['form-password']);
$query = $pdo->prepare('SELECT * FROM `user` WHERE email=? ');
$query->bindParam(1,$email);
if($query->execute()){

	if($cred = $query->fetch()){
		$hashed_password = $cred['password'];
		if(verify_password($password,$hashed_password)){
			$_SESSION['loggedIn'] = true; 
			$_SESSION['name'] = $cred['name'];
			$_SESSION['email'] = $cred['email'];
			$_SESSION['id'] = $cred['id']; 
			redir(URL,1);

		}else{
			goto NotUser;	
		}

	}else{ 
		echo "انا تحت اهوههه"	;	goto NotUser;}
}else{
	NotUser:
	echo '<span class="alert alert-danger"> wrong username or password </span>';
}
?>

 