<?php

$query = mysql_query("SELECT Month,EURUSD,USDJPY,GBPUSD FROM performance");

$category = array();
$category['name'] = 'Month';

$series1 = array();
$series1['name'] = 'EURUSD';

$series2 = array();
$series2['name'] = 'USDJPY';

$series3 = array();
$series3['name'] = 'GBPUSD';


while($r = mysql_fetch_array($query)) {
    $category['data'][] = $r['Month'];
    $series1['data'][] = $r['EURUSD'];
    $series2['data'][] = $r['USDJPY'];
    $series3['data'][] = $r['GBPUSD'];   
	
}

$result = array();
array_push($result,$category);
array_push($result,$series1);
array_push($result,$series2);
array_push($result,$series3);


print json_encode($result, JSON_NUMERIC_CHECK);

mysql_close($con);
?> 
