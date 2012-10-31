<h2  style="text-align:center">Welcome</h2>
<div class='box1'>
<h2 style="text-align:center">Enter your account information</h2>

<form method='POST' action='/users/p_login'>

	<p style="text-align:center">Email</p>	    <p style="text-align:center"><input type='text' name='email'></p>
	<p style="text-align:center">Password</p>	<p style="text-align:center"><input type='password' name='password'></p>
	<p style="text-align:center"><input type='submit' value='Login'></p>

</form>

</div>

<div class='box2'>
<h2 style="text-align:center">New User account</h2>
<h2 style="text-align:center">Please fill out the form</h2>

<form method='POST' action='/users/p_signup'>

	<p style="text-align:center">First Name</p> <p style="text-align:center"><input type='text' name='first_name'></p>
	<p style="text-align:center">Last Name</p>  <p style="text-align:center"><input type='text' name='last_name'></p>
	<p style="text-align:center">Email</p>      <p style="text-align:center"><input type='text' name='email'></p>
	<p style="text-align:center">Password</p>   <p style="text-align:center"><input type='password' name='password'></p>
	<p style="text-align:center"><input type='submit' value='SingUp'></p>
</form></div><h2></h2>






<!--
<div class='box1'>
<form method='POST' action='/users/login'>

	<p>LOGIN <input type='submit'></p>

</form>
</div>

<div class='box2'>
<form method='POST' action='/users/signup'>

	<p>SING UP <input type='submit'></p>

</form></div>-->
<br><br><br><br><br><br><br><br>

<p  style="text-align:center">FORGOT <a href='/users/forgot'>PASSWORD</a></p>
<p  style="text-align:center">RESET <a href='/users/reset'>PASSWORD</a></p>
