<?php
session_start();


?>
 <?php

/*$logUser = NULL;
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
//print_r($_SESSION);*/
?>






<script type="text/javascript" src="adduserjs.js"></script>
<body>
<form action="distribte2.php" name="form_dis" id="form_dis" method="post" onSubmit="return validate()">
  <table width="545" height="373" border="0">
    <tr>
      <td width="181" height="27">Branch code</td>
      <td width="348">
        <label>
          <input type="text" name="b_code" id="b_code" onBlur="validate_fn()" placeholder="eg: B001"/>
        </label><span  id="fnvalidator"></span>      </td>
    </tr>
   <tr>
      <td height="27">Branch Name</td>
      <td><select name="b_name" id="b_name">
		        <?php
				include("db.php");
								
				$qry=mysql_query("select * from branch");
				while ($row= mysql_fetch_array($qry))
							{
								$y=$row["b_name"];	
								
								echo "<option value='$y'>".$row["b_name"]."</option>";
							}
							
				?>
	          </select>
		      
		     </td>
	        </tr>
     <tr>
      <td width="181" height="27">Item code</td>
      <td width="348">
        <label>
          <input type="text" name="i_code" id="i_code" onBlur="validate_empno()" placeholder="eg: ITOF001"/>
        </label><span  id="empnovalidator"></span>      </td>
    </tr>
    
     <tr>
      <td height="27">Item_category</td>
		      
		      <td><label for="i_cat"></label>
		        <select name="i_cat" id="i_cat">
		          <option value="CPU">CPU</option>
		          <option value="Monitor">Monitor</option>
              </select><span  id="levelvalidator"></span> </td>
	        </tr>
    <tr>
      <td height="26">Distribute date</td>
      <td>
        <label>
          <input type="text" name="d_date" id="d_date" onBlur="validate_em()"  placeholder="yyyy.mm.dd"/>
        </label><span  id="emvalidator"></span>      </td>
    </tr>
   
    <tr>
      <td height="28">Distributed By (EmployID)</td>
      <td>
        <label>
          <input type="text" name="d_b_id" id="d_b_id" onBlur="validate_un()" placeholder="eg: ITOF001"/>
        </label><span id="unvalidator"></span>      </td>
    </tr>
    <tr>
      <td height="28"><label>
        <input type="submit" name="reset" id="reset" value="Reset">
      </label></td>
      <td><input type="submit" name="distibute" id="distibute" value="Distribute"></td>
    </tr>
             </table> 
 
  
</form>
  </body>   