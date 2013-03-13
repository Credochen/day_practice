<?php
abstract class Notifer {
	static function getNotifer() {
		//根据配置or其他逻辑获得具体类
		if(rand(1,2) == 1) {
			return new MailNotifer();
		} 
		else {
			return new TextNotifer();
		}
	}
	
	abstract function inform( $message );
}