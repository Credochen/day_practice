<?php
abstract class ApptEncoder {
	abstract  function encode();
}

class BloggsApptEncoder extends ApptEncoder {
	function encode() {
		return "Appointment data encode in Bloggs Fromat\n";
	}
}

class MegaApptEncode extends ApptEncoder{
	function encode() {
		return "Appointment data encode in MegaCal Fromat\n";
	}
}

abstract class CommsManager {
	abstract function getHeaderText();
	abstract function getApptEncoder();
	abstract function getFootText();
}

class BloggsCommsManager extends CommsManager {
	function getHeaderText() {
		return "BloggsCal header\n";
	}
	function getApptEncoder() {
		return new BloggsApptEncoder();
	}
	function getFootText() {
		return "BloggsCal footer\n";
	}
}

class MegaCommsManager extends CommsManager {
	function getHeaderText() {
		return "MegaCal header\n";
	}
	function getApptEncoder() {
		return new MegaApptEncoder();
	}
	function getFootText() {
		return "MegaCal footer\n";
	}
}

$bloggs = new BloggsCommsManager();
echo $bloggs->getHeaderText();
$app = $bloggs->getApptEncoder();
echo $app->encode();
echo $bloggs->getFootText();
?>