<?php
set_time_limit(0);
// print_r( stream_get_transports() );
if(1) {
    $string = '';
    $fp = stream_socket_client("tcp://www.php.net:80",$errno,$errstr);
    if(!$fp) {
      echo $errstr,$errno,"\n";
    } else {
      fwrite($fp, "GET / HTTP/1.0\r\nHost: www.php.net\r\nAccept: */*\r\n\r\n");
      while (!feof($fp)) {
        $string .= fgets($fp,1024);
      }
      fclose($fp);
      $handler = fopen('index.txt', 'a+');
      fwrite($handler, $string);
      fclose($handler);
    }
}
if(0) {
$http=array("method"=>"HEAD");
readfile("http://php.net",false,stream_context_create(compact("http")));
print_r($http_response_header);
// Array
// (
// 		[0] => HTTP/1.1 200 OK
// 		[1] => Date: Mon, 18 Mar 2013 14:39:14 GMT
// 		[2] => Server: Apache/2.2.21 (FreeBSD) mod_ssl/2.2.21 OpenSSL/0.9.8q PHP/5.4
// 		.14-dev
// 		[3] => X-Powered-By: PHP/5.4.14-dev
// 		[4] => Content-language: en
// 		[5] => Set-Cookie: COUNTRY=CHN%2C27.151.107.97; expires=Mon, 25-Mar-2013 14:
// 		39:14 GMT; path=/; domain=.php.net
// 		[6] => Last-Modified: Mon, 18 Mar 2013 14:40:09 GMT
// 		[7] => Vary: User-Agent,Accept-Encoding
// 		[8] => Connection: close
// 		[9] => Content-Type: text/html;charset=utf-8
// )
}