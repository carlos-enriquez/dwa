

<script>


function autotab(original,destination){
if (original.getAttribute&&original.value.length==original.getAttribute("maxlength"))
destination.focus()
}

</script>

<div class='box2'>
    <h2 style="text-align:center">New User</h2>
    <h2 style="text-align:center">Please fill out the form</h2>

    <form method='POST' action='/users/p_signup' name="sampleform2">
        
            <p>First Name: <input type='text' name='first_name' size="15"></p>
            <p>Last Name:  <input type='text' name='last_name' size="15"></p>
            <p>Address: <input type ="text" name="address" size="40"></p>
            <p>City: <input name="city" type="radio" value="somerville" /> Somerville
        <input name="city" type="radio" value="Medford" /> Medford
        <input name="city" type="radio" value="Cambridge" /> Cambridge
        </p>   
        <p>State: <input type="text" name="state" value="Massachussetts" disabled="disabled" size="14">	 Zip Code: <input type='num' name='zipcode' size="5"></p>
        <p>Email: <input type="text" name="email" size="40"></p>
        <p>Phone: (<input type="tel" name="phone1" size=3 onKeyup="autotab(this, document.sampleform2.phone2)" maxlength=3>) -
        <input type="tel" name="phone2" size=3 onKeyup="autotab(this, document.sampleform2.phone3)" maxlength=3> - 
        <input type="tel" name="phone3" size=5 maxlength=4></p>
        <p>Password: <input type="password" name="password"></p>
        <p style="text-align:center"><input type='submit' value='Create'></p>
  </form>
</div><h2><br><br><br><br><br><br></h2>
