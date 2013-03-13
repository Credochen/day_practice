<?php
class TextNotifer extends Notifer {
	function inform( $message ) {
		print "Text notifaction:{$message}\n";
	}
}