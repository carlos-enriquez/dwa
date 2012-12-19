<!DOCTYPE html>
<html>
<head>
	<title><?=@$title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	 <link href="css/style.css" rel="stylesheet" type="text/css" />

	<!-- JS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>

	<!-- Controller Specific JS/CSS -->
	<?php echo @$client_files; ?>
	
</head>

<body>
    <header>
  
        <h1 style="text-align:center">Carlos Enriquez</h1>
        <h2 style="text-align:center"><a href="/">FOOD SERVICE ONLINE</a></h2>
     
    </header>
<div id='wrapper'>	

		<!-- Menu for users who are logged in -->
		<? if($user): ?>
			
			<p><a href='/users/logout'>Logout</a></p>
		<!-- Menu options for users who are not logged in	-->
		<? else: ?>
		
			<p><a href='/users/signup'>Sign up</a></p>
			<p><a href='/users/login'>Log in</a></p>
		
		<? endif; ?>
	

			<!-- Menu for users who are logged in -->

	
	<?=$content;?> 
    
</div>
 <footer>
     
        	<p  style="text-align:center">Carlos A Enriquez Guevara</p>
            <p  style="text-align:center">(617)-800-3243</p>
            <p  style="text-align:center">carlitoselbuho@hotmail.com</p>
     	
        </footer>
</body>
</html>