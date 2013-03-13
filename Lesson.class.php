<?php
// function __autoload($class) {
// 	include $class.'.class.php';
// }
include "CostStrategy.class.php";
abstract class Lesson {
	private  $duration;
	private $costStrategy;
	
	function __construct( $duration, CostStrategy $strategy  ) {
		$this->duration = $duration;
		$this->costStrategy = $strategy;
	}
	function cost() {
		return $this->costStrategy->cost($this);
	}
	
	function chargeType() {
		return $this->costStrategy->chargeType();
	}
	function getDuration() {
		return $this->duration;
	}
}

class Lecture extends Lesson {
	
}
class Semina extends Lesson{
	
}

$lessons[] = new Semina( 4, new TimedCostStrategy() );
$lessons[] = new Lecture( 4,new FixedCostStrategy() );
foreach($lessons as $lesson) {
	echo "lesson charge {$lesson->cost()}.";
	echo "charge type:{$lesson->chargeType()} \n";
}
// $lecture = new Lecture(5,Lesson::FIXED);
// echo $lecture->cost(),$lecture->chargeType(),"\n";

// $seminar = new Semina(3,Lesson::TIMED);
// echo $seminar->cost(),$seminar->chargeType(),"\n";
?>