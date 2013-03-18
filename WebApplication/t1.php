<?php
$filename = "F:\\FileZilla.xml";
$fp = fopen($filename, 'a+');
// $size = filesize($filename);
// $contents1 = fread($fp, $size);
// echo $contents1;
$string ="hello world222\r\n";
if( is_writeable($filename) ) {
  if( fwrite($fp, $string) !== false ) {
    echo 'write ok<br/>';
  }
}
fclose($fp);
echo '<br/>'.str_repeat('-', 20).'<br/>';
$size = filesize($filename);
$fp2 = fopen($filename, 'r');
$contents = fread($fp2, filesize($filename));
echo $contents;
fclose($fp2);
//如果在写入数据读取数据，再在写入数据到文件后重新读取，读取到的数据还是未写入前的旧数据