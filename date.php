<?php
$d1 = new DateTime('2013-03-14');
$d2 = new DateTime('2012-12-12');
echo 'date_diff='.$d1->diff($d2)->format('%R%a days'),'<br/>';
echo $d1->sub(new DateInterval('P1Y2M1DT10H'))->format('Y-m-d H:i:s');
echo '<br/>';
echo $d1->add(new DateInterval('P1Y2M1DT1H'))->format('Y-m-d H:i:s');