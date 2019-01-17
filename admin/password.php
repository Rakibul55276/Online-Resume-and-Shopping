<style>
    h1 {
        font-family:Times New Roman;
        font-style: italic;
        text-shadow: 1px 1px 2px purple, 0 0 25px purple, 0 0 5px pink ;
        text-align: center;
        text-decoration: underline 
    }
</style>

<h1>Change Password</h1>
<form method="post" action="password2.php" onsubmit="return semak()">
  <label for="currentPassword">  Current Password   :<br></label><br>
  <input type="password" id="currentPassword" name="currentPassword" title="Current password" required />
  <br><br/>
  <label for="newPassword">  New Password   :<br></label><br>
  <input type="password" id="newPassword" name="newPassword" title="New password" maxlength="8" required  />
  <br><br/>
  <label for="confirmPassword">  Confirm Password   :<br></label><br>
  <input type="password" id="confirmPassword" name="confirmPassword" title="Confirm New Password maxlength="8" required />
  <br/>
  <p class="form-actions">
    <input type="submit" value="Change Password" title="Change password" />
  </p>
</form>
<script>
  function semak(){
      if($('#currentPassword').val()==''){
          alert('PLEASE TYPE YOUR CURRENT PASSWORD')
          $('#currentpassword').focus()
          return false
      }else if($('#newPassword').val()==''){
          alert('PLEASE TYPE YOUR NEW PASSWORD')
          $('#newPassword').focus()
          return false
      }else if($('#confirmPassword').val()==''){
          alert('PLEASE CONFIRM YOUR PASSWORD')
          $('#confirmPassword').focus()
          return false
      }else if($('#confirmPassword').val()!=$('#newPassword').val()){
          alert('SORRY YOUR NEW PASSWORD DOES NOT MATCH WITH CONFIRM PASSWORD')
          $('confirmPassword').focus()
          return false
      }else{
          return true
      }
  }
</script>