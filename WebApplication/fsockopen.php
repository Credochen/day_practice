<?php
$url = 'http://username:password@hostname/path?arg=value#anchor';

$url_pieces = parse_url($url);
print_r($url_pieces);
exit;
$fp = fsockopen($ur,$port,$errno,$errstr,$timeout);