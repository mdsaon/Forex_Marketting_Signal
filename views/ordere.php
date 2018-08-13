<?php
$email="";
$user="";
$package="";
$packagetype="";
$payment="";
$orderdate="";
$approvedate="";
$expiredate="";
$status="";

if(isset($_POST['submit']))
{
	$email="";
	$user="";
	$package="";
	$packagetype="";
	$payment="";
	$orderdate="";
	$approvedate= $_POST['approvedate'];
	$expiredate=$_POST['expiredate'];
	$status=$_POST['status'];
	
	$expiredate=date('Y-m-d H:i:s', strtotime("+30 days"));
	//$expiredate=date('Y-m-d',$approvedate);
	$err = 0;
	
	
	if($err == 0)
	{
	$sql = "update orderdetails set approvedate='".date('Y-m-d H:i:s')."',expiredate='".$expiredate."',status='".$status."' where id=".$_GET['id'];
			if(mysql_query($sql))
			{
		      print "Data Updated Successfully";
		
				$approvedate="";
                $expiredate="";
                $status="";
                
			}
	else
			{
				print mysql_error();	
			}
		}
	
	else
	{
		print "Misiing";	
	}
}
else
{
	$sql = "select o.id,o.email,u.name as user,p.name as packageid,pk.name as packagetypeid,pt.name as paymentid,o.orderdate,o.approvedate,o.expiredate,o.status 
from orderdetails as o,user as u,package as p,packagetype as pk,payment as pt 
where o.userid=u.id and o.packageid=p.id and o.packagetypeid=pk.id and o.paymentid=pt.id and o.id = ".$_GET['id'];
	$r=mysql_query($sql);
	while($s=mysql_fetch_row($r))
	{
		$email=$s[1];
		$user=$s[2];
		$package=$s[3];
		$packagetype=$s[4];
		$payment=$s[5];
		$orderdate=$s[6];
		$approvedate=$s[7];
		$expiredate=$s[8];
		$status=$s[9];
	}
}

?>
<form id="" name="form1" method="post" action="">
<h1 align="center">Approve The Order Of This User Here</h1>
  <table width="600" border="0" align="right" class="data">
  <tr class="default">
    <td>Email</td>
    <td><input type="text" name="email" value="<?php print $email;?>"</td>
    </tr>
    <tr class="alternate">
    <td>User</td>
    <td><input type="text" name="user" value="<?php print $user;?>"</td>
    </tr>
    <tr class="default">
    <td>Package</td>
    <td><input type="text" name="package" value="<?php print $package;?>"</td>
    </tr>
    <tr class="alternate">
    <td>Package Type</td>
    <td><input type="text" name="packagetype" value="<?php print $packagetype;?>"</td>
    </tr>
    <tr class="default">
    <td>Payment</td>
    <td><input type="text" name="payment" value="<?php print $payment;?>"</td>
    </tr>
    <tr class="alternate">
    <td>Order Date</td>
    <td><input type="text" name="orderdate" value="<?php print $orderdate;?>"</td>
    </tr>
    
    
    <tr class="default">
      <td>Status</td>
      <td><select name="status" id="status">
      <option>pending</option>
      <option>active</option>
      <option>expire</option>
     </select>
     </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Submit" />
      <input type="reset" name="reset" id="reset" value="Reset" /></td>
    </tr>
  </table>
</form>
