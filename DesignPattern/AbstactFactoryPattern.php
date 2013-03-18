<?php

/** 
 * @author cgp
 * 
 */
abstract class ApptEncoder {
	abstract  function encode();
}
abstract class TtdEncoder {
	abstract function encode();
}
abstract class ContactEncoder {
	abstract function encode();
}
class BloggsApptEncoder extends ApptEncoder {
	function encode() {
		return "Appointment data encode in Bloggs format\n";
	}
}
class BloggsTtdEncoder extends TtdEncoder {
	function encode() {
		return "Ttd data encode in Bloggs format\n";
	}
}
class BloggsContactEncoder extends ContactEncoder{
	function encode(){
		return "Contact data in Bloggs format\n";
	}
}
abstract class CommsManager {
	abstract function getHeaderText();
	abstract function getApptEncoder();
	abstract function getTtdEncoder();
	abstract function getContactEncoder();
	abstract function getFootText();
}

class BloggsCommsManager extends CommsManager {
	function getHeaderText() {
		return "Bloggs header\n";
	}
	function getApptEncoder() {
		return new BloggsApptEncoder();
	}
	function getTtdEncoder() {
		return new BloggsTtdEncoder();
	}
	function getContactEncoder() {
		return  new BloggsContactEncoder();
	}
	function getFootText() {
		return "Bloggs foot\n";
	}
}

$obj = new BloggsCommsManager();
echo $obj->getHeaderText();
echo $obj->getApptEncoder()->encode();
echo $obj->getTtdEncoder()->encode();
echo $obj->getContactEncoder()->encode();
echo $obj->getFootText();