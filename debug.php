<?php
class a {
	function foo() {
		return 'abc';
	}
}
class b extends a{
	function foo() {
		return 'efg';
	}
}
$o = new b;
echo $o->foo();