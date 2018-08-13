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
<link rel="shortcut icon" href="images/global.png" />
<title>FOREX PROFIT SIGNAL</title>

<link href="style/signupform.css" rel="stylesheet" type="text/css" />
<link href="style/CStyle.css" rel="stylesheet" type="text/css" />
<link href="style/stylesheetC.css" rel="stylesheet" type="text/css" />
<link href="style/loginform.css" rel="stylesheet" type="text/css" />
<link href="style/mymenu.css" rel="stylesheet" type="text/css" />
<link href="style/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
	<script type="text/javascript" src="js/jquery-easing-1.3.pack.js"></script>
	<script type="text/javascript" src="js/jquery-easing-compatibility.1.2.pack.js"></script>
	<script type="text/javascript" src="js/coda-slider.1.1.1.pack.js"></script>
	
	<script type="text/javascript">
	
		var theInt = null;
		var $crosslink, $navthumb;
		var curclicked = 0;
		
		theInterval = function(cur){
			clearInterval(theInt);
			
			if( typeof cur != 'undefined' )
				curclicked = cur;
			
			$crosslink.removeClass("active-thumb");
			$navthumb.eq(curclicked).parent().addClass("active-thumb");
				$(".stripNav ul li a").eq(curclicked).trigger('click');
			
			theInt = setInterval(function(){
				$crosslink.removeClass("active-thumb");
				$navthumb.eq(curclicked).parent().addClass("active-thumb");
				$(".stripNav ul li a").eq(curclicked).trigger('click');
				curclicked++;
				if( 6 == curclicked )
					curclicked = 0;
				
			}, 3000);
		};
		
		$(function(){
			
			$("#main-photo-slider").codaSlider();
			
			$navthumb = $(".nav-thumb");
			$crosslink = $(".cross-link");
			
			$navthumb
			.click(function() {
				var $this = $(this);
				theInterval($this.parent().attr('href').slice(1) - 1);
				return false;
			});
			
			theInterval();
		});
	</script>


<!--<script type="text/javascript" src="js/jsapi.js"></script>-->
<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Month', 'EUR/USD', 'USD/JPY', 'GBP/USD', 'USD/CHF'],
           <?php
$sql="select Month,Year,SUM(EURUSD),SUM(USDJPY),SUM(GBPUSD),SUM(USDCHF) from performance where Month='01' group by Month,Year order by Year desc limit 1";
$r=mysql_query($sql);
while($s=mysql_fetch_row($r))
{
 //$date = explode("", $s[1]);
//$month = $date[count($date)-2];
//print $month;
$array = str_split( $s[1]);
 print "['Jan".$array[2].$array[3]."',".$s[2].",".$s[3].",".$s[4].",".$s[5];
}
?>],
  <?php
$sql="select Month,Year,SUM(EURUSD),SUM(USDJPY),SUM(GBPUSD),SUM(USDCHF) from performance where Month='02' group by Month,Year order by Year desc limit 1";
$r=mysql_query($sql);
while($s=mysql_fetch_row($r))
{
 //$date = explode("", $s[1]);
//$month = $date[count($date)-2];
//print $month;
$array = str_split( $s[1]);
 print "['Feb".$array[2].$array[3]."',".$s[2].",".$s[3].",".$s[4].",".$s[5];
}
?>],
    <?php
$sql="select Month,Year,SUM(EURUSD),SUM(USDJPY),SUM(GBPUSD),SUM(USDCHF) from performance where Month='03' group by Month,Year order by Year desc limit 1";
$r=mysql_query($sql);
while($s=mysql_fetch_row($r))
{
 //$date = explode("", $s[1]);
//$month = $date[count($date)-2];
//print $month;
$array = str_split( $s[1]);
 print "['Mar".$array[2].$array[3]."',".$s[2].",".$s[3].",".$s[4].",".$s[5];
}
?>],
    <?php
$sql="select Month,Year,SUM(EURUSD),SUM(USDJPY),SUM(GBPUSD),SUM(USDCHF) from performance where Month='04' group by Month,Year order by Year desc limit 1";
$r=mysql_query($sql);
while($s=mysql_fetch_row($r))
{
 //$date = explode("", $s[1]);
//$month = $date[count($date)-2];
//print $month;
$array = str_split( $s[1]);
 print "['Apr".$array[2].$array[3]."',".$s[2].",".$s[3].",".$s[4].",".$s[5];
}
?>],
    <?php
$sql="select Month,Year,SUM(EURUSD),SUM(USDJPY),SUM(GBPUSD),SUM(USDCHF) from performance where Month='05' group by Month,Year order by Year desc limit 1";
$r=mysql_query($sql);
while($s=mysql_fetch_row($r))
{
 //$date = explode("", $s[1]);
//$month = $date[count($date)-2];
//print $month;
$array = str_split( $s[1]);
 print "['May".$array[2].$array[3]."',".$s[2].",".$s[3].",".$s[4].",".$s[5];
}
?>],
    <?php
$sql="select Month,Year,SUM(EURUSD),SUM(USDJPY),SUM(GBPUSD),SUM(USDCHF) from performance where Month='06' group by Month,Year order by Year desc limit 1";
$r=mysql_query($sql);
while($s=mysql_fetch_row($r))
{
 //$date = explode("", $s[1]);
//$month = $date[count($date)-2];
//print $month;
$array = str_split( $s[1]);
 print "['Jun".$array[2].$array[3]."',".$s[2].",".$s[3].",".$s[4].",".$s[5];
}
?>],
    <?php
$sql="select Month,Year,SUM(EURUSD),SUM(USDJPY),SUM(GBPUSD),SUM(USDCHF) from performance where Month='07' group by Month,Year order by Year desc limit 1";
$r=mysql_query($sql);
while($s=mysql_fetch_row($r))
{
 //$date = explode("", $s[1]);
//$month = $date[count($date)-2];
//print $month;
$array = str_split( $s[1]);
 print "['Jul".$array[2].$array[3]."',".$s[2].",".$s[3].",".$s[4].",".$s[5];
}
?>],
   <?php
$sql="select Month,Year,SUM(EURUSD),SUM(USDJPY),SUM(GBPUSD),SUM(USDCHF) from performance where Month='08' group by Month,Year order by Year desc limit 1";
$r=mysql_query($sql);
while($s=mysql_fetch_row($r))
{
 //$date = explode("", $s[1]);
//$month = $date[count($date)-2];
//print $month;
$array = str_split( $s[1]);
 print "['Aug".$array[2].$array[3]."',".$s[2].",".$s[3].",".$s[4].",".$s[5];
}
?>],
         <?php
$sql="select Month,Year,SUM(EURUSD),SUM(USDJPY),SUM(GBPUSD),SUM(USDCHF) from performance where Month='09' group by Month,Year order by Year desc limit 1";
$r=mysql_query($sql);
while($s=mysql_fetch_row($r))
{
 //$date = explode("", $s[1]);
//$month = $date[count($date)-2];
//print $month;
$array = str_split( $s[1]);
 print "['Sep".$array[2].$array[3]."',".$s[2].",".$s[3].",".$s[4].",".$s[5];
}
?>],
    <?php
$sql="select Month,Year,SUM(EURUSD),SUM(USDJPY),SUM(GBPUSD),SUM(USDCHF) from performance where Month='10' group by Month,Year order by Year desc limit 1";
$r=mysql_query($sql);
while($s=mysql_fetch_row($r))
{
 //$date = explode("", $s[1]);
//$month = $date[count($date)-2];
//print $month;
$array = str_split( $s[1]);
 print "['Oct".$array[2].$array[3]."',".$s[2].",".$s[3].",".$s[4].",".$s[5];
}
?>],
     <?php
$sql="select Month,Year,SUM(EURUSD),SUM(USDJPY),SUM(GBPUSD),SUM(USDCHF) from performance where Month='11' group by Month,Year order by Year desc limit 1";
$r=mysql_query($sql);
while($s=mysql_fetch_row($r))
{
 //$date = explode("", $s[1]);
//$month = $date[count($date)-2];
//print $month;
$array = str_split( $s[1]);
 print "['Nov".$array[2].$array[3]."',".$s[2].",".$s[3].",".$s[4].",".$s[5];
}
?>],
      <?php
$sql="select Month,Year,SUM(EURUSD),SUM(USDJPY),SUM(GBPUSD),SUM(USDCHF) from performance where Month='12' group by Month,Year order by Year desc limit 1";
$r=mysql_query($sql);
while($s=mysql_fetch_row($r))
{
 //$date = explode("", $s[1]);
//$month = $date[count($date)-2];
//print $month;
$array = str_split( $s[1]);
 print "['Dec".$array[2].$array[3]."',".$s[2].",".$s[3].",".$s[4].",".$s[5];
}
?>],
        ]);

        var options = {
          title: 'Company Performance',
          //hAxis: {title: 'Month', titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
<script type="text/javascript" src="js/Chart.js"/></script>




</head>

<body>
<div class="center_layout">
<div class="header"> 
  <?php include_once("client/header.php");?>
</div>
<div class="menu"> 
  <?php include_once("client/menu.php");?>
</div>
<div class="marqueText">
<?php include_once("client/marqueText.php");?>
</div>
<div class="content"> 
  <?php include_once("client/content.php");?>
</div>
<div class="footer"> 
  <?php include_once("client/footer.php");?>
</div>
<?php ob_flush();?>
</body>
</html>