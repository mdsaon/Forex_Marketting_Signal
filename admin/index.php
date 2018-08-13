<?php
ob_start();
session_start();
mysql_connect('localhost', 'root', '');
mysql_select_db('dbforex');

function ms($v)
{
	return mysql_real_escape_string(strip_tags($v));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FOREX PROFIT SIGNAL</title>

<link href="../style/stylesheet.css" rel="stylesheet" type="text/css" />
<link href="../style/loginforma.css" rel="stylesheet" type="text/css" />
<link href="../style/stylesheetA.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function calculate()
{
	var x1=document.getElementById("eurbuy");
	var z1=document.getElementById("euroutput");
    z1.value='Entry Point Buy-'+' '+(x1.value)+' '+'TP-'+' '+(parseFloat(x1.value)+.30)+' '+'SL-'+' '+(parseFloat(x1.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(x1.value)-0.40)+0.10)+' '+'to'+' '+(((parseFloat(x1.value)-0.40)+0.80));
	
	var x2=document.getElementById("usdjbuy");
	var z2=document.getElementById("usdjoutput");
    z2.value='Entry Point Buy-'+' '+(x2.value)+' '+'TP-'+' '+(parseFloat(x2.value)+.30)+' '+'SL-'+' '+(parseFloat(x2.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(x2.value)-0.40)+0.10)+' '+'to'+' '+(((parseFloat(x2.value)-0.40)+0.80));

	
	var x3=document.getElementById("gbpbuy");
	var z3=document.getElementById("gbpoutput");
    z3.value='Entry Point Buy-'+' '+(x3.value)+' '+'TP-'+' '+(parseFloat(x3.value)+.30)+' '+'SL-'+' '+(parseFloat(x3.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(x3.value)-0.40)+0.10)+' '+'to'+' '+(((parseFloat(x3.value)-0.40)+0.80));

	
	var x4=document.getElementById("usdbuy");
	var z4=document.getElementById("usdoutput");
    z4.value='Entry Point Buy-'+' '+(x4.value)+' '+'TP-'+' '+(parseFloat(x4.value)+.30)+' '+'SL-'+' '+(parseFloat(x4.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(x4.value)-0.40)+0.10)+' '+'to'+' '+(((parseFloat(x4.value)-0.40)+0.80));

	
	var x5=document.getElementById("erobuy");
	var z5=document.getElementById("erooutput");
    z5.value='Entry Point Buy-'+' '+(x5.value)+' '+'TP-'+' '+(parseFloat(x5.value)+.30)+' '+'SL-'+' '+(parseFloat(x5.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(x5.value)-0.40)+0.10)+' '+'to'+' '+(((parseFloat(x5.value)-0.40)+0.80));
	
	var x6=document.getElementById("audbuy");
	var z6=document.getElementById("audoutput");
    z6.value='Entry Point Buy-'+' '+(x6.value)+' '+'TP-'+' '+(parseFloat(x6.value)+.30)+' '+'SL-'+' '+(parseFloat(x6.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(x6.value)-0.40)+0.10)+' '+'to'+' '+(((parseFloat(x6.value)-0.40)+0.80));
	
	var x7=document.getElementById("eurjbuy");
	var z7=document.getElementById("eurjoutput");
    z7.value='Entry Point Buy-'+' '+(x7.value)+' '+'TP-'+' '+(parseFloat(x7.value)+.30)+' '+'SL-'+' '+(parseFloat(x7.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(x7.value)-0.40)+0.10)+' '+'to'+' '+(((parseFloat(x7.value)-0.40)+0.80));
	
	var x8=document.getElementById("chfbuy");
	var z8=document.getElementById("chfoutput");
    z8.value='Entry Point Buy-'+' '+(x8.value)+' '+'TP-'+' '+(parseFloat(x8.value)+.30)+' '+'SL-'+' '+(parseFloat(x8.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(x8.value)-0.40)+0.10)+' '+'to'+' '+(((parseFloat(x8.value)-0.40)+0.80));
	
	var x9=document.getElementById("gbpjbuy");
	var z9=document.getElementById("gbpjoutput");
    z9.value='Entry Point Buy-'+' '+(x9.value)+' '+'TP-'+' '+(parseFloat(x9.value)+.30)+' '+'SL-'+' '+(parseFloat(x9.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(x9.value)-0.40)+0.10)+' '+'to'+' '+(((parseFloat(x9.value)-0.40)+0.80));
	
	var x10=document.getElementById("cadbuy");
	var z10=document.getElementById("cadoutput");
    z10.value='Entry Point Buy-'+' '+(x10.value)+' '+'TP-'+' '+(parseFloat(x10.value)+.30)+' '+'SL-'+' '+(parseFloat(x10.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(x10.value)-0.40)+0.10)+' '+'to'+' '+(((parseFloat(x10.value)-0.40)+0.80));
	
	var x11=document.getElementById("eurgbuy");
	var z11=document.getElementById("eurgoutput");
    z11.value='Entry Point Buy-'+' '+(x11.value)+' '+'TP-'+' '+(parseFloat(x11.value)+.30)+' '+'SL-'+' '+(parseFloat(x11.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(x11.value)-0.40)+0.10)+' '+'to'+' '+(((parseFloat(x11.value)-0.40)+0.80));
	
	var x12=document.getElementById("usdcbuy");
	var z12=document.getElementById("usdcoutput");
    z12.value='Entry Point Buy-'+' '+(x12.value)+' '+'TP-'+' '+(parseFloat(x12.value)+.30)+' '+'SL-'+' '+(parseFloat(x12.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(x12.value)-0.40)+0.10)+' '+'to'+' '+(((parseFloat(x12.value)-0.40)+0.80));
	
	var x13=document.getElementById("audubuy");
	var z13=document.getElementById("auduoutput");
    z13.value='Entry Point Buy-'+' '+(x13.value)+' '+'TP-'+' '+(parseFloat(x13.value)+.30)+' '+'SL-'+' '+(parseFloat(x13.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(x13.value)-0.40)+0.10)+' '+'to'+' '+(((parseFloat(x13.value)-0.40)+0.80));
	

	
	var x14=document.getElementById("nuzbuy");
	var z14=document.getElementById("nuzoutput");
    z14.value='Entry Point Buy-'+' '+(x14.value)+' '+'TP-'+' '+(parseFloat(x14.value)+.30)+' '+'SL-'+' '+(parseFloat(x14.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(x14.value)-0.40)+0.10)+' '+'to'+' '+(((parseFloat(x14.value)-0.40)+0.80));

    var x15=document.getElementById("audjbuy");
	var z15=document.getElementById("audjoutput");
    z15.value='Entry Point Buy-'+' '+(x15.value)+' '+'TP-'+' '+(parseFloat(x15.value)+.30)+' '+'SL-'+' '+(parseFloat(x15.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(x15.value)-0.40)+0.10)+' '+'to'+' '+(((parseFloat(x15.value)-0.40)+0.80));
	
	
	var x16=document.getElementById("goldbuy");
	var z16=document.getElementById("goldoutput");
    z16.value='Entry Point Buy-'+' '+(x16.value)+' '+'TP-'+' '+(parseFloat(x16.value)+.30)+' '+'SL-'+' '+(parseFloat(x16.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(x16.value)-0.40)+0.10)+' '+'to'+' '+(((parseFloat(x16.value)-0.40)+0.80));

	
	var x17=document.getElementById("oilbuy");
	var z17=document.getElementById("oiloutput");
    z17.value='Entry Point Buy-'+' '+(x17.value)+' '+'TP-'+' '+(parseFloat(x17.value)+.30)+' '+'SL-'+' '+(parseFloat(x17.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(x17.value)-0.40)+0.10)+' '+'to'+' '+(((parseFloat(x17.value)-0.40)+0.80));

	
	var x18=document.getElementById("silverbuy");
	var z18=document.getElementById("silveroutput");
    z18.value='Entry Point Buy-'+' '+(x18.value)+' '+'TP-'+' '+(parseFloat(x18.value)+.30)+' '+'SL-'+' '+(parseFloat(x18.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(x18.value)-0.40)+0.10)+' '+'to'+' '+(((parseFloat(x18.value)-0.40)+0.80));

}
function calculatey()
{
	var y1=document.getElementById("eursell");
	var z1=document.getElementById("euroutput");
    z1.value='Entry Point Sell-'+' '+(y1.value)+' '+'TP-'+' '+(parseFloat(y1.value)+.30)+' '+'SL-'+' '+(parseFloat(y1.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(y1.value)-0.40)-0.10)+' '+'to'+' '+(((parseFloat(y1.value)-0.40)-0.80));
	
	var y2=document.getElementById("usdjsell");
	var z2=document.getElementById("usdjoutput");
    z2.value='Entry Point Sell-'+' '+(y2.value)+' '+'TP-'+' '+(parseFloat(y2.value)+.30)+' '+'SL-'+' '+(parseFloat(y2.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(y2.value)-0.40)-0.10)+' '+'to'+' '+(((parseFloat(y2.value)-0.40)-0.80));
	
	var y3=document.getElementById("gbpsell");
	var z3=document.getElementById("gbpoutput");
    z3.value='Entry Point Sell-'+' '+(y3.value)+' '+'TP-'+' '+(parseFloat(y3.value)+.30)+' '+'SL-'+' '+(parseFloat(y3.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(y3.value)-0.40)-0.10)+' '+'to'+' '+(((parseFloat(y3.value)-0.40)-0.80));
	
	var y4=document.getElementById("usdsell");
	var z4=document.getElementById("usdoutput");
    z4.value='Entry Point Sell-'+' '+(y4.value)+' '+'TP-'+' '+(parseFloat(y4.value)+.30)+' '+'SL-'+' '+(parseFloat(y4.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(y4.value)-0.40)-0.10)+' '+'to'+' '+(((parseFloat(y4.value)-0.40)-0.80));
	
	var y5=document.getElementById("erosell");
	var z5=document.getElementById("erooutput");
    z5.value='Entry Point Sell-'+' '+(y5.value)+' '+'TP-'+' '+(parseFloat(y5.value)+.30)+' '+'SL-'+' '+(parseFloat(y5.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(y5.value)-0.40)-0.10)+' '+'to'+' '+(((parseFloat(y5.value)-0.40)-0.80));
	
	var y6=document.getElementById("audsell");
	var z6=document.getElementById("audoutput");
    z6.value='Entry Point Sell-'+' '+(y6.value)+' '+'TP-'+' '+(parseFloat(y6.value)+.30)+' '+'SL-'+' '+(parseFloat(y6.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(y6.value)-0.40)-0.10)+' '+'to'+' '+(((parseFloat(y6.value)-0.40)-0.80));
	
	var y7=document.getElementById("eurjsell");
	var z7=document.getElementById("eurjoutput");
    z7.value='Entry Point Sell-'+' '+(y7.value)+' '+'TP-'+' '+(parseFloat(y7.value)+.30)+' '+'SL-'+' '+(parseFloat(y7.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(y7.value)-0.40)-0.10)+' '+'to'+' '+(((parseFloat(y7.value)-0.40)-0.80));
	
	var y8=document.getElementById("chfsell");
	var z8=document.getElementById("chfoutput");
    z8.value='Entry Point Sell-'+' '+(y8.value)+' '+'TP-'+' '+(parseFloat(y8.value)+.30)+' '+'SL-'+' '+(parseFloat(y8.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(y8.value)-0.40)-0.10)+' '+'to'+' '+(((parseFloat(y8.value)-0.40)-0.80));
	
	
	var y9=document.getElementById("gbpjsell");
	var z9=document.getElementById("gbpjoutput");
    z9.value='Entry Point Sell-'+' '+(y9.value)+' '+'TP-'+' '+(parseFloat(y9.value)+.30)+' '+'SL-'+' '+(parseFloat(y9.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(y9.value)-0.40)-0.10)+' '+'to'+' '+(((parseFloat(y9.value)-0.40)-0.80));
	
	var y10=document.getElementById("cadsell");
	var z10=document.getElementById("cadoutput");
    z10.value='Entry Point Sell-'+' '+(y10.value)+' '+'TP-'+' '+(parseFloat(y10.value)+.30)+' '+'SL-'+' '+(parseFloat(y10.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(y10.value)-0.40)-0.10)+' '+'to'+' '+(((parseFloat(y10.value)-0.40)-0.80));
	
	var y11=document.getElementById("eurgsell");
	var z11=document.getElementById("eurgoutput");
    z11.value='Entry Point Sell-'+' '+(y11.value)+' '+'TP-'+' '+(parseFloat(y11.value)+.30)+' '+'SL-'+' '+(parseFloat(y11.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(y11.value)-0.40)-0.10)+' '+'to'+' '+(((parseFloat(y11.value)-0.40)-0.80));
	
	var y12=document.getElementById("usdcsell");
	var z12=document.getElementById("usdcoutput");
    z12.value='Entry Point Sell-'+' '+(y12.value)+' '+'TP-'+' '+(parseFloat(y12.value)+.30)+' '+'SL-'+' '+(parseFloat(y12.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(y12.value)-0.40)-0.10)+' '+'to'+' '+(((parseFloat(y12.value)-0.40)-0.80));
	
	var y13=document.getElementById("audusell");
	var z13=document.getElementById("auduoutput");
    z13.value='Entry Point Sell-'+' '+(y13.value)+' '+'TP-'+' '+(parseFloat(y13.value)+.30)+' '+'SL-'+' '+(parseFloat(y13.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(y13.value)-0.40)-0.10)+' '+'to'+' '+(((parseFloat(y13.value)-0.40)-0.80));
	
	var y14=document.getElementById("nuzsell");
	var z14=document.getElementById("nuzoutput");
    z14.value='Entry Point Sell-'+' '+(y14.value)+' '+'TP-'+' '+(parseFloat(y14.value)+.30)+' '+'SL-'+' '+(parseFloat(y14.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(y14.value)-0.40)-0.10)+' '+'to'+' '+(((parseFloat(y14.value)-0.40)-0.80));
	
	var y15=document.getElementById("audjsell");
	var z15=document.getElementById("audjoutput");
    z15.value='Entry Point Sell-'+' '+(y15.value)+' '+'TP-'+' '+(parseFloat(y15.value)+.30)+' '+'SL-'+' '+(parseFloat(y15.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(y15.value)-0.40)-0.10)+' '+'to'+' '+(((parseFloat(y15.value)-0.40)-0.80));
	
	var y16=document.getElementById("goldsell");
	var z16=document.getElementById("goldoutput");
    z16.value='Entry Point Sell-'+' '+(y16.value)+' '+'TP-'+' '+(parseFloat(y16.value)+.30)+' '+'SL-'+' '+(parseFloat(y16.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(y16.value)-0.40)-0.10)+' '+'to'+' '+(((parseFloat(y16.value)-0.40)-0.80));
	
	var y17=document.getElementById("oilsell");
	var z17=document.getElementById("oiloutput");
    z17.value='Entry Point Sell-'+' '+(y17.value)+' '+'TP-'+' '+(parseFloat(y17.value)+.30)+' '+'SL-'+' '+(parseFloat(y17.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(y17.value)-0.40)-0.10)+' '+'to'+' '+(((parseFloat(y17.value)-0.40)-0.80));
	
	var y18=document.getElementById("silversell");
	var z18=document.getElementById("silveroutput");
    z18.value='Entry Point Sell-'+' '+(y18.value)+' '+'TP-'+' '+(parseFloat(y18.value)+.30)+' '+'SL-'+' '+(parseFloat(y18.value)-0.40)+' '+'Trading Range-'+
	' '+((parseFloat(y18.value)-0.40)-0.10)+' '+'to'+' '+(((parseFloat(y18.value)-0.40)-0.80));
}
</script>
</head>

<body>
<?php
if(($_SESSION['type']=="A"))
{
print'<div class="center_layout">';

print'<div class="header">'; 
  include_once("../views/header.php");
print'</div>';

print'<div class="menu">';
 include_once("../views/menu.php");
print'</div>';

print'<div class="content">';
 include_once("../views/content.php");
print'</div>';

print'<div class="footer">';
 include_once("../views/footer.php");
print'</div>';

print'</div>';
}
else
{
	include_once("../views/login.php");
}
ob_flush();
?>
</body>
</html>