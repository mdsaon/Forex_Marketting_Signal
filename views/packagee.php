<?php
$name = "";
$description="";

$ename = "";

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$description=$_POST['description'];
	
	$er = 0;
	if(ms($name) == "")
	{
		$ename = "Required";
		$er++;
	}
	
	if($er == 0)
	{
		$sql = "update package set name = '".ms($name)."', description='".$description."' where id = ".$_GET['id'];
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
	$sql = "select * from package where id = ".$_GET['id'];
	$r = mysql_query($sql);
	while($s = mysql_fetch_row($r))
	{
		$name = $s[1];
		$description=$s[2];
	}
}

?>
<form name="form1" method="post" action="">
  <label>Name
  <input name="name" type="text" id="name" value="<?php print $name; ?>"><span class="er"><?php print $ename; ?></span>
  </label>
  <br />
    Description
    <br />
    <textarea name="description" id="description" cols="45" rows="5"><?php print $description; ?></textarea>
  </label>
  <label>
  <input name="submit" type="submit" id="submit" value="Submit">
  </label>
</form>