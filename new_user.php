<style>
  h1 {
      font-family:Times New Roman;
      font-style: italic;
      text-shadow: 1px 1px 2px purple, 0 0 25px purple, 0 0 5px pink ;
      text-align: center;
      text-decoration: underline;
   }
</style>

<h1 style="text-align: center">Registration Form</h1>
<p style = "font-weight:bold">Please feel free to register this form.</p>
<p style = "font-weight:bold">* indicates required field</p>

<form Name="registration form" action="simpan.php" method="post" onsubmit="return semak()">
    <table style="text-align: left;" align = "center" cellpadding = "10">
        <tr>
            <td>*Name</td><td>:</td>
            <td><input type="text" name="first_name" id="first_name" maxlength="50" required placeholder="Harry"/></td> 
        </tr>
        
        <tr>
            <td>*Surname</td><td>:</td>
            <td><input type="text" name="last_name" id="last_name" maxlength="50" required placeholder="Potter"/></td>
        </tr>
        
        <tr>
            <td>*NRIC</td><td>:</td>
            <td><input type="text" name="ic" id="ic" maxlength="12" required placeholder="950227027154"/></td>
        </tr>
        
        <tr>
            <td>*Email</td><td>:</td>
            <td><input type="text" name="email" id="email" maxlength="50"  required placeholder="nobody@nowhere.com"/></td>
        </tr>
        
        <tr>
            <td>*Gender</td><td>:</td>
            <td>
               <input type="radio" name="gender" id="gender" value="Male"  required/>Male 
               <input type="radio" name="gender" id="gender" value="Female"/>Female
            </td>
        </tr>
                
        <tr>
            <td>*Username</td><td>:</td>
            <td><input type="text" name="username" id="username" maxlength ="50"  placeholder="HPotter5174"/></td>
        </tr>
        
        <tr>
            <td>*Password</td><td>:</td>
            <td><input type="password" name="password" id="password"  required pattern="^\w{6,8}$" placeholder="6-8 characters" /></td>
        </tr>
        
        <tr>
            <td align="center">
            <input name="" type="reset" value=" Reset" />
            <input name="" type="submit" onclick="generationid()" value=" Submit"/>	
        </td>
        </tr>
    </table>
</form>

<script>  
  function generationid(){
    
    var id1=document.getElementById("first_name").value;
    var id2=document.getElementById("last_name").value;
    var id3=document.getElementById("ic").value;
    
    var urid=id1.toLowerCase().substr(0,1)+id2.toLowerCase()+id3.substr(5,11);
    document.getElementById("username").value = urid;
    console.log(urid);
  }
  
  function confirm(){
  	var msg = 'Are You Sure?';
  	return confirm(msg);
  }

</script>

