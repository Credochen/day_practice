<?php
$postdata = array('name'=>'foo','age'=>22);
$opts = array(
    'http'=>array(
    'method' =>'POST',
    'header' => 'Content-type: application/x-www-form-urlencoded',
    'content' => http_build_query($postdata, '&'),
    //'timeout' => 5,
  )
);
$context = stream_context_create($opts);

echo file_get_contents("http://localhost/test/stream.php",0,$context);
// $fp =  fopen("http://localhost/test/stream.php", "rb");
// echo stream_get_contents($fp);
// print_r(stream_get_meta_data($fp));