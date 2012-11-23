<h1>This is the profile of <?=$user->first_name?> <?=$user->last_name?></h1>

<h1><?=$user->first_name?></h1>

<form method='POST' action='/posts/p_add'>

	<strong>New Post:</strong><br>
	<textarea name='content'></textarea>

	<br><br>
	<input type='submit'>

</form>