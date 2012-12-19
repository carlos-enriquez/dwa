<script>


function autotab(original,destination){
if (original.getAttribute&&original.value.length==original.getAttribute("maxlength"))
destination.focus()
}

</script>

<div class='box1'>
        <h2 style="text-align:center">Enter your phone number</h2>
        
        <form method='POST' action='/users/p_login' name="sampleform">
                Phone: (<input type="tel" name="phone1" size=3 onKeyup="autotab(this, document.sampleform.phone2)" maxlength=3>) -
                <input type="tel" name="phone2" size=3 onKeyup="autotab(this, document.sampleform.phone3)" maxlength=3> - 
                <input type="tel" name="phone3" size=5 maxlength=4>
                Password: <input type="password" name="password">
                <p style="text-align:center"><input type='submit' value='Enter'></p>
        </form>

</div></h2><h2></h2>



