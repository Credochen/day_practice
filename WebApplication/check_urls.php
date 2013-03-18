<?php
function check_url($url) {
  $url_pieces = parse_url($url);

  $path = (isset($url_pieces['path'])) ? $url_pieces['path'] : '/';
  $port  = (isset($url_pieces['port'])) ? $url_pieces['port'] : 80;

  if( $fp = fsockopen($url_pieces['host'], $port, $errno, $errstr, 30) ) {
    $send = "HEAD $path HTTP/1.1\r\n";
    $send .= "HOST:{$url_pieces['host']}\r\n";
    $send .= "CONNECTION:Close\r\n\r\n";
    fwrite($fp, $send);

    $data = fgets($fp, 128);

    fclose($fp);
    list($response, $code) = explode(' ',$data);
    if($code == 200) {
      return array($code, $response);
    } else {
      return array($code, $response);
    }

  } else {
    return array($errstr, 'bad');
  }
} #EOF check_url() function

$urls = array(
'http://www.baidu.com',
'http://www.douban.com/',
'http://home.cnblogs.com/',
'http://www.oschina.net/',
'http://www.dewen.org/'
  );
set_time_limit(0);
foreach($urls as $url) {
  list($code, $class) = check_url($url);
  echo "<p><a href='{$url}' target='_new'>{$url}</a><span>{$class}=>{$code}</span></p>";
}