<h1>Login</h1>

<form action="login2.php" method="post" onsubmit="return semak()">
    <table style="margin: auto;">
        <tr>
            <td>USER ID</td>
            <td><input type="text" name="idp" id="idp" /></td>
        </tr>
        
        <tr>
            <td>PASSWORD</td>
            <td><input type="password" name="kata" id="kata" /></td>
        </tr>
        
        <tr>
            <td colspan="2" style="text-align: center;">
            <input type="Submit" value="Enter" /></td>
        </tr>
    </table>
</form>



<script>
    function semak(){
        if($('#idp').val()==''){
            alert('Please type your user ID')
            $('#idp').focus()
            return false
        }else if($('#kata').val()==''){
            alert('Please type your password ')
            $('kata').focus()
            return false
        }else{
            return true
        }
    }
</script>