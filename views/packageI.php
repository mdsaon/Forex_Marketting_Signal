<?php
$name = "";
$description = "";

$ename = "";
$edescription ="";

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$description = $_POST['description'];
	
	$er = 0;
	if(ms($name) == "")
	{
		$er++;
		$ename = "Required";		
	}
	
	if(ms($description) == "0")
	{
		$er++;
		$edescription = "Required";		
		}
	
	
	if($er == 0)
	{
		$sql = "insert into package(name, description) values('".ms($name)."', '".ms($description)."')";
		if(mysql_query($sql))
		{
			print '<div class="sc">Saved</div>';
			$name = "";
			$description = "";
		}
		else
		{
			print '<div class="er">'.mysql_error().'</div>';
		}
	}
	else
	{
		print '<div class="er">Value Missing</div>';
	}
}

?>
<div class="insertitem">
<form name="form1" method="post" action=""><div class="er"><?php print $ename; ?></div>
 <br />
 <br /><br /></br>
    <table width="1200" border="0">
      <tr>
        <td width="86">Name </td>
        <td width="498"><input name="name" type="text" id="name" value="<?php print $name; ?>" /></td>
      </tr>
      <tr>
        <td>Description </td>
        <td><textarea name="description" id="description" cols="45" rows="5"><?php print $description; ?></textarea></td>
      </tr>
    </table>
<input name="submit" type="submit" id="submit" value="Save">
   <input type="reset" name="reset" id="reset" value="Reset">
  
</form>
</div>