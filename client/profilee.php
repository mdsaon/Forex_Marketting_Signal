<?php
$$name = "";
$email = "";
$password = "";
$country= "";
$Phone = "";


$ename = "";
$eemail = "";
$epassword = "";
$ecountry= "";
$ePhone = "";

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$Phone= $_POST['Phone'];
	$country = $_POST['country'];
	
	

	if(filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		
	}
	else
	{
		echo "This is not valid email address";
	}
	$err = 0;
	
	if($name == "")
	{
		$err++;
		$ename = "Required";
	}
	if($email == "")
	{
		$err++;
		$eemail = "Required";
	}
	
		if($Phone == "")
	{
		$err++;
		$ePhone = "Required";
	}

	if($err == 0)
	{
		$sql = "update user set name = '".ms($name)."', email= '".ms($email)."', phone='".ms($Phone)."',countryid='".ms($country)."' where id = ".$_GET['id'];
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
	$sql = "select * from user where id = ".$_GET['id'];
	$r = mysql_query($sql);
	while($s = mysql_fetch_row($r))
	{
		$name = $s[1];
		$email= $s[2];
		$country= $s[4];
		$Phone= $s[5];
		
	}
}

?>
<form action="" method="post"  name="form1">
  <p>
    </label>
  <table width="500" border="0" align="right">
    <tr class="default">
      <td class=""><label>Name</label></td>
      <td><input type="text" name="name" id="name" value="<?php print $name; ?>" >
      <span class="error"><?php print $ename; ?></span></td>
    </tr>
    <tr>
      <td><label>Email</label></td>
      <td><input type="text" name="email" id="email" value="<?php print $email; ?>">
      <span class="error"><?php print $eemail; ?></span></td>
    </tr>
    <tr>
      <td>Country</td>
      <td><select name="country" id="country">
        <option value="0">Select</option>
        <?php
     $sql = "select * from country";
	 $r = mysql_query($sql);
	 while($s = mysql_fetch_row($r))
	 {
		if($country == $s[0])
		{
			print '<option value="'.$s[0].'" selected=selected>'.$s[1].'</option>'; 	
		}
		else
		{
			print '<option value="'.$s[0].'">'.$s[1].'</option>'; 	
		}
	 }
	 ?>
      </select></td>
    </tr>
    <tr>
      <td><label>Phone Number</label></td>
      <td><input type="text" name="Phone" id="Phone" value="<?php print $Phone; ?>">
        <span class="error"><?php print $ePhone; ?></span>
      </p></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Submit">
      <input type="reset" name="reset" id="reset" value="Reset"></td>
    </tr>
  </table>
  </p>
   <p>&nbsp;</p>
    <p>

    <p>
  <p>&nbsp;</p>
  <br/>
  </label>
  </label>
</form>
