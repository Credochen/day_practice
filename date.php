<?php
$t1 = '2013-03-14';
$t2 = '2012-12-12';
$d1 = new DateTime($t1);
$d2 = new DateTime($t2);
$tz = $d1->getTimezone();
echo '<h1>',$t1,',',$t2,'</h1>';
echo 'time_zone='.$tz->getName(),'<br/>';
echo 'date_diff='.$d1->diff($d2)->format('%R%a days'),'<br/>';
echo $d1->sub(new DateInterval('P1Y2M1DT10H'))->format('Y-m-d H:i:s');
echo '<br/>';
echo $d1->add(new DateInterval('P1Y2M1DT1H'))->format('Y-m-d H:i:s');
echo '<br/>';
//getLastError
try {
	$d3 = new DateTime('abce');
} catch (Exception $e) {
	print_r(DateTime::getLastErrors());
}
//set Date
$date = new DateTime();
$date->setDate(1990, 1,2);
$date->setTime(12,20);
$date->modify('+1 years');
echo '<h4>setDate:',$date->format('Y-m-d H:i:s'),'<h4>';