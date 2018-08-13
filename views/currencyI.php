<?php
$name = "";


$ename = "";


if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	
	
	$er = 0;
	if(ms($name) == "")
	{
		$ename = "Required";
		$er++;
	}
	
	
	if($er == 0)
	{
		$sql = "insert into currency(name)
							values('".ms($name)."')";
		if(mysql_query($sql))
		{
			print '<span class="sc">Saved</span>';
			$name = "";
			
		}
		else
		{
			print '<span class="er">'.mysql_error().'</span>';
		}
	}
	else
	{
		print '<span class="er">Value Missing</span>';
	}
}

?>
<form name="form1" method="post" action="">
<table width="400" border="0" align="center">
  <tr>
    <td>Name</td>
    <td><input name="name" type="text" id="name" value="<?php print $name; ?>"><span class="er"><?php print $ename; ?></span></td>
    </tr>
  <tr>
  <td>
    <input name="submit" type="submit" id="submit" value="Submit">
    </td>
    </tr>
</table>

 </form>
