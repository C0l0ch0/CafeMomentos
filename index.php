<?php

	define('CMSPATH',str_replace("\\","/",dirname(__FILE__)));
	define('DS',"/");
	define('COREPATH',CMSPATH.DS.'core');

	require_once COREPATH.DS."loader.php";
	$access = Import::load("lib","Start_Page");
	$access = $access and import::load('lib', 'view');

	$MainLogger = new Logger();
	$MainLogger->OpenLogger();	

	$MainLogger->WriteLogger("--------------------------------------Main Page Start---------------------------------------");

	$LestStart = new Start_Page();
	if ($access){
		$MainLogger->WriteLogger($LestStart->checkURL() ." validando " . URL.DS);
		if ($LestStart->checkURL() == URL.DS){
			$MainLogger->WriteLogger("Redireccionando -> Location: http://".URL.DS.'home');
			$MainLogger->WriteLogger("--------------------------------------Main Page End-----------------------------------------");
			$MainLogger->CloseLogger();
			header( 'Location: http://'.URL.DS.'home');
		}else{
			$MainLogger->WriteLogger("Cargando Start_Page()");
			$MainLogger->WriteLogger("--------------------------------------Main Page End-----------------------------------------");
			$MainLogger->CloseLogger();
			$LestStart->start();
		}
	}else{
		$MainLogger->WriteLogger("No se logro realizar la carga de los archivos.");
		$MainLogger->CloseLogger();
	}
?>
