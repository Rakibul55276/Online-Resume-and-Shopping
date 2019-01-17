<style>
  h1 {
      font-family:Times New Roman;
      font-style: italic;
      text-shadow: 1px 1px 2px purple, 0 0 25px purple, 0 0 5px pink ;
      text-align: center;
      text-decoration: underline;
   }
</style>

<h1 style="text-align: center">Create You Resume Here</h1>
<p>*Please  save your infomation before you click next button</p>

<form Name="resume1_form" action="save_resume.php" method="post" onsubmit="return semak()">
    <table style="text-align: left;" align = "center" cellpadding = "10">
        
        <tr>
            <td>Career Objective</td><td>:</td>
            <td><textarea name="objective" id="objective" required placeholder="work in challenging.."></textarea></td>
        </tr>
      
        <tr>
            <td>Name</td><td>:</td>
            <td><input type="text" name="name" id="name" maxlength="50" required placeholder="Harry Potter"/></td> 
        </tr>
        
        <tr>
            <td>Address</td><td>:</td>
            <td><textarea name="address" id="address" required placeholder="Taman Bersatu"></textarea></td>
        </tr>
        
        <tr>
            <td>Contact Details</td><td>:</td>
            <td><textarea name="contact" id="contact"  required placeholder="Facebook : Harry Potter..."></textarea></td>
        </tr>
        
        <tr>
            <td>Email</td><td>:</td>
            <td><input type="text" name="email" id="email" required placeholder="harryPotter@gmail.com"/></td>
        </tr>
        
        <tr>
            <td>Education</td><td>:</td>
            <td><textarea name="education" id="education"  required placeholder="Degree holder in UNIMAS..." ></textarea></td>
        </tr>
            
        <tr>
            <td>Skills</td><td>:</td>
            <td><textarea name="skill" id="skill"  required="required" placeholder="master in php..."></textarea></td>
        </tr>
        
        <tr>
            <td>Works</td><td>:</td>
            <td><textarea name="work" id="work"  required placeholder="Software Engineer.." ></textarea></td>
        </tr>
        
        <tr>
            <td>Language</td><td>:</td>
            <td><textarea name="language" id="language" required placeholder="Good in english.." ></textarea></td>
        </tr>
        
        <tr>
            <td>Interest</td><td>:</td>
            <td><textarea name="interest" id="interest" required  placeholder="cooking, travelling.."></textarea></td>
        </tr>
        
        <tr>
            <td>Reference</td><td>:</td>
            <td><textarea name="reference" id="reference" required placeholder="Dr.Noor Alamshah.."></textarea></td>
        </tr>
        
        <tr>
            <td align="center">
            <input name="" type="reset" value=" Reset" />
            <input name="" type="submit" value=" Submit" />
        </td>
        </tr>
    </table>
  </form>

<script>
  function confirm(){
  	var msg = 'Are You Sure?'
  	return confirm(msg)
  }
</script>