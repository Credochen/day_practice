<?php
class MailNotifer extends Notifer {
	function inform( $message ) {
		print "Mail notification: {$message}\n";
	}
}