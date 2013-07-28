<body>
<p><strong>Search Distribution By Branch</strong></p>
	  <p>&nbsp;</p>	
        <form name="form3" method="post" action="dis_search2.php">
	    <table width="276">
	      <tr>
	        <td width="136"><select name="select2" id="select2">
		        <?php
				include("db.php");
								
				$qry=mysql_query("select * from branch");
				while ($row= mysql_fetch_array($qry))
							{
								$y=$row["b_name"];	
								
								echo "<option value='$y'>".$row["b_name"]."</option>";
							}
							
				?>
	          </select></td>
            
	       
	        <td width="128"><input type="submit" name="button2" id="button2" value="Search "></td>
	        </tr>
	      </table>
      </form>	 
</body>