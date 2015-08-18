<?php 
	class Logger{

		var $logFile;
		var $loggerObject;

		function __construct(){
			$this->logFile = LOCAL.date('Y_m_d').".txt";
		}
		function OpenLogger(){
			try {
				$this->loggerObject = fopen(CMSPATH.DS.LOGS.DS.$this->logFile, "a");
			} catch (Exception $e) {
				echo $e;
			}
		}
		function WriteLogger($message){
			fputs($this->loggerObject, "[".date('Y-m-d H:i:s')."] ".$message."\n");
		}
		function CloseLogger(){
			fclose($this->loggerObject);
		}
	}
?>