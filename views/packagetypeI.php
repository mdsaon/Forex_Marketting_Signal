<?php
$name = "";


$ename = "";


if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	
	$er = 0;
	if(ms($name) == "")
	{
		$er++;
		$ename = "Required";		
	}
	
	
	if($er == 0)
	{
		$sql = "insert into packagetype(name) values('".ms($name)."')";
		if(mysql_query($sql))
		{
			print '<div class="sc">Saved</div>';
			$name = "";
			
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
<form name="form1" method="post" action="">
  <label>Name
  <input name="name" type="text" id="name" value="<?php print $name; ?>"><div class="er"><?php print $ename; ?></div>
 
 <br />
 <input name="submit" type="submit" id="submit" value="Submit">
  
</form>
