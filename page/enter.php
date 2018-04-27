<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog Admin Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="page/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="page/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="page/assets/css/form-elements.css">
        <link rel="stylesheet" href="page/assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="page/assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="page/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="page/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="page/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="page/assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Blog</strong> Admin Login</h1>
                            <div class="description">
                            	<p>WELCOME</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to Cpanel</h3>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                              

                        		<div class="form-top-right">
                        			<i class="fa fa-lock fa-lg"></i>
                        		</div>
                                <?php   if(isset($_POST['form-email']) && !empty($_POST['form-email']) && isset($_POST['form-password']) && !empty($_POST['form-password']) )
    require("page/login.php");
?>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Email</label>
			                        	<input type="text" name="form-email" placeholder="email" class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="form-password" placeholder="Password" class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn"><i class="fa fa-sign-in fa-fw fa-lg"></i> Sign in!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>  


        <!-- Javascript -->
        <script src="page/assets/js/jquery-1.11.1.min.js"></script>
        <script src="page/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="page/assets/js/jquery.backstretch.min.js"></script>
        <script src="page/assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="module/login/assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>