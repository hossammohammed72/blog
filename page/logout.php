<?php
$_SESSION['name'] = null;unset($_SESSION['name']);
$_SESSION['id'] = null;unset($_SESSION['id']);
$_SESSION['email'] = null;unset($_SESSION['email']);
$_SESSION['loggedIn'] = null;unset($_SESSION['loggedIn']);

session_destroy();
redir(URL,0);
?>