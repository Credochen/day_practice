<?php
class RegstraionMrg {
	function register( Lesson $lesson) {
		//handle this lesson
		//通知某人
		$notifier = Notifer::getNotifer();
		$notifier->inform("new lesson:cost({$lesson->cost()})");
	}
}