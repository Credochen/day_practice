<?php
class FixedCostStrategy extends CostStrategy {
	function cost(Lesson $lesson) {
		return 30;
	}
	function  chargeType() {
		return 'fixed rate';
	}
}