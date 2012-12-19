
<script>


function autotab(original,destination){
if (original.getAttribute&&original.value.length==original.getAttribute("maxlength"))
destination.focus()
}

</script>
<div class='box3'>
<form method='POST' action='/users/p_reset'  name="sampleform3">
	
    <h2>Restauring your password</h2>
    <p>Phone: (<input type="tel" name="phone1" size=3 onKeyup="autotab(this, document.sampleform3.phone2)" maxlength=3>) -
        <input type="tel" name="phone2" size=3 onKeyup="autotab(this, document.sampleform3.phone3)" maxlength=3> - 
        <input type="tel" name="phone3" size=5 maxlength=4></p>
	<p>Email: <input type='text' name='email'></p>
	
	
	
	<p>Enter current Password: <input type='password' name='password'></p>
   	<p>Enter New Password: <input type='password' name='newpassword'></p>
	<p>Re Enter New Password: <input type='password' name='renewpassword'></p>
	
	
	<p style="text-align:center"><input type='submit' Value="UPDATE">

</form></div></p><h2><br><br><br></h2>


