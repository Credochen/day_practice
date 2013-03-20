<?php
$data = array(
    'title'=>'hello world',
    'post'=>
     array(
        'title'=>'introduction to iterator',
        'email'=>'aaa@ab.com',
    ),
    array(
        'title'=>'extending iterators',
        'email'=>'aabbcc@cc.com',
    )
);
// foreach(new RecursiveIteratorIterator( new RecursiveArrayIterator($data)) as $field => $val) {
//   echo $field . ':'.$val.PHP_EOL;
// }

$myArr = array(
    'HomePage',
    'Register',
    'About' => array(
        'The Team',
        'Our Stroy'
        ),
    'Contact' => array(
        'Locations',
        'Support'
        )
    );

class HookRecursiveIterator extends RecursiveIteratorIterator {
    public function beginChildren()
    {
        echo "<ul>\n";
    }
    public function endChildren()
    {
        echo "</ul></li>\n";
    }
}

if(0) {
    $it = new HookRecursiveIterator(new RecursiveArrayIterator($myArr),RecursiveIteratorIterator::SELF_FIRST);

    echo "<ul>\n";
    foreach($it as $k=>$v) {
        if($it->callHasChildren()) {
            echo "<li>{$k}\n";
            continue;
        }
        echo "<li>{$v}</li>\n";
    }
    echo "</ul>\n";
}
$path = 'D:\www\test\day_practice';
//directoryIterator
if(1) {
    // $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));
    $it = new RecursiveTreeIterator(new RecursiveDirectoryIterator($path));
    // $it = new DirectoryIterator($path);
    foreach($it as $file) {
        // if (!$it->isDot()) {
        //     echo 'SubPathName: ' . $it->getSubPathName() . "\n";
        //     echo 'SubPath:     ' . $it->getSubPath() . "\n";
        //     echo 'Key:         ' . $it->key() . "\n\n";
        // }
        echo $file."\n";
    }
}
if(0) {
    $it = new FileSystemIterator($path);
    foreach($it as $path=>$file) {
        echo $path.'=>'.$file->getFilename()."\n";
    }
}
