<form method="post" action="gmail.php">
 <tr>
      <td height="26">E-mail</td>
      <td>
        <label>
          <input type="text" name="email" id="email" readonly value="<?php
                include("db.php");
				$x=$_POST["username"];
		
				$qry=mysql_query("select * from login where username='$x'");
				while ($row= mysql_fetch_array($qry))
							{
								echo $row['email'];
							}
				?>"/>
        </label>      </td>
    </tr>
    
   <tr>
      <td height="27">Password</td>
      <td>
        <label>
          <input type="password" name="password" id="password" value="<?php
                include("db.php");
				$x=$_POST["username"];
				
				$qry=mysql_query("select * from login where username='$x'");
				while ($row= mysql_fetch_array($qry))
							{
								echo $row['password'];
							}
				?>"/>
        </label>      </td>
    </tr>
  <input type="submit" value="Submit" />
</form>
