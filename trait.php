<?php
class Base{
    public function sayHello() {
        echo 'Hello';
    }
}
trait SayWorld{
    public function sayHello() {
        parent::sayHello();
        echo ' World';
    }
}

class MyHello extends Base{
    use SayWorld;
}

$o = new MyHello();
$o->sayHello();