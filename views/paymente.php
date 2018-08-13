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
		$sql = "update payment set name = '".ms($name)."' where id = ".$_GET['id'];
		if(mysql_query($sql))
		{
			print '<div class="sc">Update Saved !!!</div>';
		}
		else
		{
			print '<span class="er">'.mysql_error().'</span>';
		}
	}
	else
	{
		print '<div class="er">Value Missing</div>';
	}
}
else
{
	$sql = "select * from payment where id = ".$_GET['id'];
	$r = mysql_query($sql);
	while($s = mysql_fetch_row($r))
	{
		$name = $s[1];
	}
}

?>
<form name="form1" method="post" action="">
  <label>Name
  <input name="name" type="text" id="name" value="<?php print $name; ?>"><span class="er"><?php print $ename; ?></span>
  </label>
  <br />
  <label>
  <input name="submit" type="submit" id="submit" value="Submit">
  </label>
</form>