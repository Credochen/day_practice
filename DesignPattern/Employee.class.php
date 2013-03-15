<?php
abstract class Employee {
	protected $name;
	private static $type = array('minion','cluedup','wellconnected');
	
	static function recruit( $name ) {
		$num = rand(1,count( self::$type ) ) - 1;
		$class = self::$type[$num];
		return new $class( $name );
	}
	function __construct( $name ) {
		$this->name = $name;
	}
	abstract function fire();
}

class Minion extends Employee {
	function fire() {
		echo "{$this->name}:I'll clear my desk\n";
	}
}

class NastBoss {
	private $employees = array();
	
// 	function addEmployee( $employeeName ) {
// 		$this->employees[] = new Minion( $employeeName );
// 	}
	
	function addEmployee(Employee $employee) {
		$this->employees[] = $employee;
	}
	
	function projectFails() {
		if( count( $this->employees ) > 0 ) {
			$emp = array_shift( $this->employees );
			$emp->fire();
		}
	}
}

class CluedUp extends Employee {
	function  fire() {
		echo "{$this->name}:I'll call my layer\n";
	}
}

class WellConnected extends Employee {
	function fire( ) {
		echo "{$this->name}:I'll call my dad\n";
	}
}
// test
$boss = new NastBoss();
$boss->addEmployee( Employee::recruit( "Harry" ) );
$boss->addEmployee( Employee::recruit( "Bob" ) );
$boss->addEmployee(  Employee::recruit( "Mary" ) );
$boss->projectFails();
$boss->projectFails();
$boss->projectFails();
?>