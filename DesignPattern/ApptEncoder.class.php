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

class CommsManager {
	const BLOGGS = 1;
	const MEGA = 2;
	private $mode = 1;
	
	function __construct( $mode ) {
		$this->mode = $mode;
	}
	function getApptEncoder() {
		switch ( $this->mode ) {
			case self::MEGA: 
				return new MegaApptEncode();
				break;
			default:
				return new BloggsApptEncoder();
				break;
		}
	}
}

$comms = new CommsManager( CommsManager::MEGA );
$apptEncoder = $comms->getApptEncoder();
echo $apptEncoder->encode();
?>