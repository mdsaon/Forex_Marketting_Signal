<?php

$email = "";
$package= 0;
$packagetype=0;
$payment= 0;



$eemail = "";




if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$package=$_POST['package'];
	$packagetype=$_POST['packagetype'];
	$payment=$_POST['payment'];
	
	
	if(filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		//echo "This is valid email address";
	}
	else
	{
		echo "This is not valid email address";
	}
	$err = 0;
	
	if($email == "")
	{
		$err++;
		$eemail = "Please Give Your Email Address Here";
	}
	
	if($package==0)
	{
		$err++;
		$epackage="Package Select is Missing";
	}
	if(!isset($_SESSION['id']))
	{
		$err++;
		print'<script language="javascript">
		alert("Please Log in or Create an Account To Continue")
		</script>';
	}
	if($err == 0)
	{
		$sql="select *from orderdetails where email='".$email."' and packagetypeid='".$packagetype."'";
		$r=mysql_query($sql);
		if(mysql_num_rows($r)>0)
		{
			echo "Email Already Used in this package";
		}
		else
		{
	$sql = "insert into orderdetails(email,packageid,packagetypeid,paymentid,orderdate) values('".$email."','".$package."',
			'".$packagetype."','".$payment."','".date('Y-m-d H:i:s')."')";
			if(mysql_query($sql))
			{
		      print "Your Order Is Sent";
		
				$email = "";
$package= 0;
$packagetype=0;
$payment= 0;

                
			}
			else
			{
				print mysql_error();	
			}
		}
	}
	
}

?>
<div class="client_content">
<center>
<form id="paymentform" name="form1" method="post" action="">
  <br /><br />
  <h1 align="center">Make Your Order Here</h1><br/><br/>
  <table width="500" border="0" align="center" bgcolor="#CCCCFF">
    <tr>
      <td style="font-size:14px">Payment Email</td>
      <td>
        <label for="textfield2"></label>
      <input type="text" name="email" id="email" value="<?php print $email; ?>"><span class="error"><?php print $eemail; ?></span>
    </tr>
    <tr>
      <td style="font-size:14px">Select Package</td>
      <td><select name="package" id="package">
      <option value="0">Select</option>
     <?php
     $sql = "select * from package limit 1";
	 $r = mysql_query($sql);
	 while($s = mysql_fetch_row($r))
	 {
		if($package == $s[0])
		{
			print '<option value="'.$s[0].'" selected=selected>'.$s[1].'</option>'; 	
		}
		else
		{
			print '<option value="'.$s[0].'">'.$s[1].'</option>'; 	
		}
	 }
	 ?>
    </select><span class="error"><?php print $epackage; ?></span></td>
    </tr>
    <tr>
      <td style="font-size:14px">Select Package Type</td>
      <td><select name="packagetype" id="packagetype" ">
      <option value="0">Select</option>
     <?php
     $sql = "select * from packagetype where id = ".$_GET['id'];
	$r = mysql_query($sql);
	while($s = mysql_fetch_row($r))
	 {
		if(!$packagetype == $s[0])
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
      <td style="font-size:14px">Select Payment Method</td>
      <td><select name="payment" id="payment">
      <option value="0">Select</option>
     <?php
     $sql = "select * from payment";
	 $r = mysql_query($sql);
	 while($s = mysql_fetch_row($r))
	 {
		if($payment == $s[0])
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
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="" value="Submit" />
      <input type="reset" name="reset" value="Reset" /></td>
    </tr>
  </table>
</form>
</center>
<br/><br/>
</div>