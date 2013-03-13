<?php
function __autoload($class) {
	include $class.'.class.php';
}
// include 'Lesson.class.php';
$lesson1 = new Semina( 4, new TimedCostStrategy() );
$lesson2 = new Lecture( 4,new FixedCostStrategy() );

$mgr = new RegstraionMrg();
$mgr->register($lesson1);
$mgr->register($lesson2);
// foreach($lessons as $lesson) {
// 	echo "lesson charge {$lesson->cost()}.";
// 	echo "charge type:{$lesson->chargeType()} \n";
// }