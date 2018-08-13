<h2>Mail To All Registered User</h2>
<?php
$eurbuy="";
$usdjbuy="";
$gbpbuy="";
$usdbuy="";
$erobuy="";
$audbuy="";
$eurjbuy="";
$chfbuy="";
$gbpjbuy="";
$cadbuy="";
$eurgbuy="";
$usdcbuy="";
$audubuy="";
$nuzbuy="";
$audjbuy="";
$goldbuy="";
$oilbuy="";
$silverbuy="";


$eursell="";
$usdjsell="";
$gbpsell="";
$usdsell="";
$erosell="";
$audsell="";
$eurjsell="";
$chfsell="";
$gbpjsell="";
$cadsell="";
$eurgsell="";
$usdcsell="";
$audusell="";
$nuzsell="";
$audjsell="";
$goldsell="";
$oilsell="";
$silversell="";

$euroutput="";
$usdjoutput="";
$gbpoutput="";
$usdoutput="";
$erooutput="";
$audoutput="";
$eurjoutput="";
$chfoutput="";
$gbpjoutput="";
$cadoutput="";
$eurgoutput="";
$usdcoutput="";
$auduoutput="";
$nuzoutput="";
$audjoutput="";
$goldoutput="";
$oiloutput="";
$silveroutput="";


$subject="";
$message="";

if(isset($_POST['submit']))
{
	$to='someone@example.com';
	$email='saon11@yahho.com';

$eurbuy=$_POST['eurbuy'];;
$usdjbuy=$_POST['usdjbuy'];
$gbpbuy=$_POST['gbpbuy'];
$usdbuy=$_POST['usdbuy'];
$erobuy=$_POST['erobuy'];
$audbuy=$_POST['audbuy'];
$eurjbuy=$_POST['eurjbuy'];
$chfbuy=$_POST['chfbuy'];
$gbpjbuy=$_POST['gbpjbuy'];
$cadbuy=$_POST['cadbuy'];
$eurgbuy=$_POST['eurgbuy'];
$usdcbuy=$_POST['usdcbuy'];
$audubuy=$_POST['audubuy'];
$nuzbuy=$_POST['nuzbuy'];
$audjbuy=$_POST['audjbuy'];
$goldbuy=$_POST['goldbuy'];
$oilbuy=$_POST['oilbuy'];
$silverbuy=$_POST['silverbuy'];

$eursell=$_POST['eursell'];
$usdjsell=$_POST['usdjsell'];
$gbpsell=$_POST['gbpsell'];
$usdsell=$_POST['usdsell'];
$erosell=$_POST['erosell'];
$audsell=$_POST['audsell'];
$eurjsell=$_POST['eurjsell'];
$chfsell=$_POST['chfsell'];
$gbpjsell=$_POST['gbpjsell'];
$cadsell=$_POST['cadsell'];
$eurgsell=$_POST['eurgsell'];
$usdcsell=$_POST['usdcsell'];
$audusell=$_POST['audusell'];
$nuzsell=$_POST['nuzsell'];
$audjsell=$_POST['audjsell'];
$goldsell=$_POST['goldsell'];
$oilsell=$_POST['oilsell'];
$silversell=$_POST['silversell'];

$euroutput=$_POST['euroutput'];
$usdoutput=$_POST['usdoutput'];
$gbpoutput=$_POST['gbpoutput'];
$usdoutput=$_POST['usdoutput'];
$erooutput=$_POST['erooutput'];
$audoutput=$_POST['audoutput'];
$eurjoutput=$_POST['eurjoutput'];
$chfoutput=$_POST['chfoutput'];
$gbpjoutput=$_POST['gbpjoutput'];
$cadoutput=$_POST['cadoutput'];
$eurgoutput=$_POST['eurgoutput'];
$usdcoutput=$_POST['usdcoutput'];
$auduoutput=$_POST['auduoutput'];
$nuzoutput=$_POST['nuzoutput'];
$audjoutput=$_POST['audjoutput'];
$goldoutput=$_POST['goldoutput'];
$oiloutput=$_POST['oiloutput'];
$silveroutput=$_POST['silveroutput'];


$subject=$_POST['subject'];
$message=$_POST['message'].$euroutput.$usdoutput.$gbpoutput.$usdoutput.$erooutput.$audoutput.$eurjoutput.$chfoutput.$gbpjoutput.$cadoutput.$eurgoutput.$usdcoutput.$auduoutput.$nuzoutput.$audjoutput.$goldoutput.$oiloutput.$silveroutput;
$headers='From: saon11@yahoo.com';
mail($to,$subject,$message,$headers);

if(!mail)
{
	echo" error";
}
	
}

?>
<form name="form1" method="post" action="">
  <table width="1000" border="0" align="center" class="data">
    <tr class="tablehead">
      <td width="172">TYPE</td>
      <td width="242">BUY</td>
      <td width="279">SELL</td>
      <td width="279">OUTPUT</td>
    </tr>
    <tr>
      <td class="default">EUR/USD</td>
      <td><label for="textfield"></label>
      <input type="text" name="eurbuy" id="eurbuy" onchange="calculate()"></td>
      <td><label for="textfield2"></label>
      <input type="text" name="eursell" id="eursell" onchange="calculatey()"></td>
      <td><label for="textfield3"></label>
      <input type="text" name="euroutput" id="euroutput" class="mailoutput">     </td>
    </tr>
    <tr>
      <td class="default">USD/JPY</td>
      <td><label for="textfield4"></label>
      <input type="text" name="usdjbuy" id="usdjbuy" onchange="calculate()"></td>
      <td><label for="textfield5"></label>
      <input type="text" name="usdjsell" id="usdjsell" onchange="calculatey()"></td>
      <td><label for="textfield6"></label>
      <input type="text" name="usdjoutput" id="usdjoutput" class="mailoutput"></td>
    </tr>
    <tr>
      <td class="default">GBP/USD</td>
      <td><label for="textfield7"></label>
      <input type="text" name="gbpbuy" id="gbpbuy" onchange="calculate()"></td>
      <td><label for="textfield8"></label>
      <input type="text" name="gbpsell" id="gbpsell" onchange="calculatey()"></td>
      <td><label for="textfield9"></label>
      <input type="text" name="gbpoutput" id="gbpoutput" class="mailoutput"></td>
    </tr>
    <tr>
      <td class="default">USD/CHF</td>
      <td><label for="textfield10"></label>
      <input type="text" name="usdbuy" id="usdbuy" onchange="calculate()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="usdsell" id="usdsell" onchange="calculatey()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="usdoutput" id="usdoutput" class="mailoutput"></td>
    </tr>
    <tr>
      <td class="default">ERO/JPY</td>
      <td><label for="textfield11"></label>
      <input type="text" name="erobuy" id="erobuy" onchange="calculate()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="erosell" id="erosell" onchange="calculatey()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="erooutput" id="erooutput" class="mailoutput"></td>
    </tr>
    <tr>
      <td class="default">AUD/JPY</td>
      <td><label for="textfield11"></label>
      <input type="text" name="audbuy" id="audbuy" onchange="calculate()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="audsell" id="audsell" onchange="calculatey()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="audoutput" id="audoutput" class="mailoutput"></td>
    </tr>
    <tr>
      <td class="default">EUR/JPY</td>
      <td><label for="textfield11"></label>
      <input type="text" name="eurjbuy" id="eurjbuy" onchange="calculate()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="eurjsell" id="eurjsell" onchange="calculatey()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="eurjoutput" id="eurjoutput" class="mailoutput"></td>
    </tr>
    <tr>
      <td class="default">CHF/JPY</td>
      <td><label for="textfield11"></label>
      <input type="text" name="chfbuy" id="chfbuy" onchange="calculate()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="chfsell" id="chfsell" onchange="calculatey()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="chfoutput" id="chfoutput" class="mailoutput"></td>
    </tr>
    <tr>
      <td class="default">GBP/JPY</td>
      <td><label for="textfield11"></label>
      <input type="text" name="gbpjbuy" id="gbpjbuy" onchange="calculate()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="gbpjsell" id="gbpjsell" onchange="calculatey()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="gbpjoutput" id="gbpjoutput" class="mailoutput"></td>
    </tr>
    <tr>
      <td class="default">CAD/JPY</td>
      <td><label for="textfield11"></label>
      <input type="text" name="cadbuy" id="cadbuy" onchange="calculate()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="cadsell" id="cadsell" onchange="calculatey()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="cadoutput" id="cadoutput" class="mailoutput"></td>
    </tr>
    <tr>
      <td class="default">EUR/GBD</td>
      <td><label for="textfield11"></label>
      <input type="text" name="eurgbuy" id="eurgbuy" onchange="calculate()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="eurgsell" id="eurgsell" onchange="calculatey()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="eurgoutput" id="eurgoutput" class="mailoutput"></td>
    </tr>
    <tr>
      <td class="default">USD/CAD</td>
      <td><label for="textfield11"></label>
      <input type="text" name="usdcbuy" id="usdcbuy" onchange="calculate()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="usdcsell" id="usdcsell" onchange="calculatey()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="usdcoutput" id="usdcoutput" class="mailoutput"></td>
    </tr>
    <tr>
      <td class="default">AUD/USD</td>
      <td><label for="textfield11"></label>
      <input type="text" name="audubuy" id="audubuy" onchange="calculate()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="audusell" id="audusell" onchange="calculatey()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="auduoutput" id="auduoutput" class="mailoutput"></td>
    </tr>
    <tr>
      <td class="default">NUZ/USD</td>
      <td><label for="textfield11"></label>
      <input type="text" name="nuzbuy" id="nuzbuy" onchange="calculate()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="nuzsell" id="nuzsell" onchange="calculatey()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="nuzoutput" id="nuzoutput" class="mailoutput"></td>
    </tr>
    <tr>
      <td class="default">AUD/CAD</td>
      <td><label for="textfield11"></label>
      <input type="text" name="audjbuy" id="audjbuy" onchange="calculate()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="audjsell" id="audjsell" onchange="calculatey()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="audjoutput" id="audjoutput" class="mailoutput"></td>
    </tr>
    <tr>
      <td class="default">GOLD</td>
      <td><label for="textfield11"></label>
      <input type="text" name="goldbuy" id="goldbuy" onchange="calculate()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="goldsell" id="goldsell" onchange="calculatey()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="goldoutput" id="goldoutput" class="mailoutput"></td>
    </tr>
    <tr>
      <td class="default">OIL</td>
      <td><label for="textfield11"></label>
      <input type="text" name="oilbuy" id="oilbuy" onchange="calculate()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="oilsell" id="oilsell" onchange="calculatey()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="oiloutput" id="oiloutput" class="mailoutput"></td>
    </tr>
    <tr>
      <td class="default">SILVER</td>
      <td><label for="textfield11"></label>
      <input type="text" name="silverbuy" id="silverbuy" onchange="calculate()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="silversell" id="silversell" onchange="calculatey()"></td>
      <td><label for="textfield11"></label>
      <input type="text" name="silveroutput" id="silveroutput" class="mailoutput"></td>
    </tr>
    <tr>
      <td class="default">SUBJECT</td>
      <td colspan="3">
        <label for="textarea"></label>
      <label for="textfield11">
        <textarea name="subject" id="subject" cols="100" rows="3"></textarea>
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
