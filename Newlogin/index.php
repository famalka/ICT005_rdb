
<?php


session_start();



?>
<script type="text/javascript">

function validate_un()
	{
		var un=document.getElementById('username');
		
		if(un.value=="")
		{
			document.getElementById('unvalidator').innerHTML= "Username is required";
		}
		else
		{
			//document.getElementById('unvalidator').innerHTML="correct";
				return true;
			}
			
	}
	
		function validate_pw()
	{
	
		var pw=document.getElementById('password');
			
		
		
		if(pw.value=="")
			{
				document.getElementById('pwvalidator').innerHTML="password is required";
				return false;
			}
			else
			{
				//document.getElementById('pwvalidator').innerHTML="correct";
				return true;
				}
			}


function validate()
{
		var un=document.form.username;
		
        var pw=document.form.password;
        
        
			if(un.value=="" || pw.value=="")
			{
			//document.getElementById('unvalidator').innerHTML= "Username is required";
			document.getElementById('pwvalidator').innerHTML= "username and password is required";
				return false;
			}
			else 
			{
			
			
			return true;
			}
            
			/*if(pw.value=="")
			{
			document.getElementById('pwvalidator').innerHTML= "password is required";
				return false;
			}
			else
			{
				return true;
			}
			*/
            
}
</script>


<body>
<form name="form" method="post" action="login.php" onSubmit="return validate()">
	       <table width="811">
		     <tr>
      <td width="117" height="28">User Name</td>
      <td width="682">
<label>
          <input type="text" name="username" id="username" onBlur="validate_un()" placeholder="eg: dilani001"/>
        </label>
        <span id="unvalidator"></span> 
    <tr>
      <td height="27">Password</td>
      <td>
        <label>
          <input type="password" name="password" id="password" onBlur="validate_pw()" placeholder="eg: X34hn7*"/>
        </label><span  id="pwvalidator"></span>      </td>
    </tr>
		   
		      <tr>
		        <td height="21"><div align="center">
		          <input type="reset" name="reset" id="reset" value="Reset">
	            </div></td>
		        <td>
		          <input type="submit" name="submit" id="submit" value="Login" >
	           </td>
	          </tr>
	        </table>
</form>	 

<form name="forgot" method="post" action="" onSubmit="">

<a href="contact.php">Forgot your password</a>
</form>   
</body>

