<?php
session_start();


?>
 <?php

$logUser = NULL;
if(isset($_SESSION['uname']))
{
	$logUser = $_SESSION['uname'];
	//echo $logUser;
}
if($logUser == NULL)
{
	header("Location: " . "index.php" );
}
echo "You are logged :  ";
echo $_SESSION['uname'];
//print_r($_SESSION);
?>






<script type="text/javascript" src="adduserjs.js"></script>
<body>
<form action="adduser2.php" name="form_signup" id="form_signup" method="post" onSubmit="return validate()">
  <table width="545" height="373" border="0">
    <tr>
      <td width="181" height="27">Full Name</td>
      <td width="348">
        <label>
          <input type="text" name="fullname" id="fullname" onBlur="validate_fn()" placeholder="eg: Dilani Famalka Dehipe"/>
        </label><span  id="fnvalidator"></span>      </td>
    </tr>
     <tr>
      <td width="181" height="27">Employ Number</td>
      <td width="348">
        <label>
          <input type="text" name="employnum" id="employnum" onBlur="validate_empno()" placeholder="eg: ITOF001"/>
        </label><span  id="empnovalidator"></span>      </td>
    </tr>
    
    <tr>
      <td height="25">Phone</td>
      <td>
        <label>
          <input type="text" name="phone" id="phone" onBlur="validate_pn()" placeholder="eg: 0711234567"/>
        </label> <span id="pnvalidator"></span>      </td>
    </tr>
    <tr>
      <td height="26">E-mail</td>
      <td>
        <label>
          <input type="text" name="email" id="email" onBlur="validate_em()"  placeholder="eg: mymail@mail.com"/>
        </label><span  id="emvalidator"></span>      </td>
    </tr>
   
    <tr>
      <td height="28">User Name</td>
      <td>
        <label>
          <input type="text" name="username" id="username" onBlur="validate_un()" placeholder="eg: dilani001"/>
        </label><span id="unvalidator"></span>      </td>
    </tr>
    <tr>
      <td height="27">Password</td>
      <td>
        <label>
          <input type="password" name="password" id="password" onBlur="validate_pw()" placeholder="eg: X34hn7*"/>
        </label><span  id="pwvalidator"></span>      </td>
    </tr>
    <tr>
      <td height="27">Confirm Password</td>
      <td>
        <label>
          <input type="password" name="conpassword" id="conpassword" onBlur="validate_conpw()" placeholder="eg: X34hn7*"/>
        </label><span  id="conpwvalidator"></span>      </td>
    </tr>
   <tr>
      <td height="27">Level</td>
		      
		      <td><label for="select"></label>
		        <select name="select" id="select">
		          <option value="admin">admin</option>
		          <option value="manager">manager</option>
		        
              </select><span  id="levelvalidator"></span> </td>
	        </tr>
             </table> 
  <td>
    <label>
    <input type="submit" name="submit" id="submit" value="Submit" onSubmit="validate()"/>
    </label>
    <label>&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="reset" name="reset" id="reset" value="Clear"/></td>
  
  
</form>
  </body>   