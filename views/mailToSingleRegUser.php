<h2>Mail To Single User</h2>
<?php
$from="";
$to="";
$subject="";
$message="";

if(isset($_POST['submit']))
{
$from=$_POST['from'];
$to=$_POST['to'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$headers='From: from';
mail($to,$subject,$message,$headers);

if(!mail)
{
	echo" error";
}
	
}

?>
<form name="form1" method="post" action="">
  <table width="1000" border="0" align="center" class="data">
  <tr>
      <td class="default">From</td>
      <td colspan="3">
        <label for="textarea"></label>
      <label for="textfield11">
        <textarea name="from" id="from" cols="100" rows="1"></textarea>
      </label></td>
    </tr>
  <tr>
      <td class="default">To</td>
      <td colspan="3">
        <label for="textarea"></label>
      <label for="textfield11">
        <textarea name="to" id="to" cols="100" rows="1"></textarea>
      </label></td>
    </tr>
    <tr>
      <td class="default">SUBJECT</td>
      <td colspan="3">
        <label for="textarea"></label>
      <label for="textfield11">
        <textarea name="subject" id="subject" cols="100" rows="2"></textarea>
      </label></td>
    </tr>
    <tr>
      <td class="default">MESSAGES</td>
      <td colspan="3">
      <label for="textfield11">
        <textarea name="message" id="message" cols="100" rows="10"></textarea>
        <br>
        <br>
        <br>
        <br>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="3"><input type="submit" name="submit" id="submit" value="Send Mail To All Registered User"></td>
    </tr>
  </table>
</form>
