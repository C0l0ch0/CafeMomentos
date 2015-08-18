<?php
	//require_once('import.php');
	class Start_Page{

		var $url;
		var $body;
		var $dir;
		var $web_start;
		
		function __construct(){
			$this->getURL();
			$this->dir = CMSPATH.$this->url;
		}

		function getURL(){
			$this->url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		}

		function checkURL(){
			return $this->url;	
		}

		function isValid(){

			if($this->url == '/')
				return true;
		}

		function start(){
			$MainLogger = new Logger();
			$MainLogger->OpenLogger();

			$link = true;
			self::getURL();
			$options = $this->separate();
			
			$this->controler = $options[1];
			if(isset($options[2])){
				$this->method = $options[2];
			}else{
				$this->method = "start";
			}

			if(!import::loadModule("module",$this->controler)){
				$MainLogger->WriteLogger("Modulo -> ".$this->controler." no encontrado.");
				echo "error 404, no se encontro el controlador ".$this->controler."\n";
				$MainLogger->CloseLogger();
			}else{
				$class = $this->controler;
				if (method_exists($class,$this->method)){
					$getType = new ReflectionMethod($class,$this->method);
					if (!$getType->isPublic()){
						$MainLogger->WriteLogger("Acceso Denegado -> ".$this->method);
						echo "Error 505, acceso denegado.\n";
						$MainLogger->CloseLogger();
					}else{
						$MainLogger->WriteLogger("Cargando clase: ".$class.", Metodo: ".$this->method);
						$MainLogger->CloseLogger();
						$method = $this->method;
						$class 	= new $class();
						$class->$method('none');
					}
				}else{
					$MainLogger->WriteLogger("metodo -> ".$this->method." no encontrado.");
					echo "error 404, no se encontro el metodo ".$this->method."\n";	
					$MainLogger->CloseLogger();
				}
			}
		}

		function  separate(){
			$temp = explode($_SERVER['HTTP_HOST'].DS,$this->url);
			$temp = explode("/",$temp[1]);
			$lenght = 1;
			$return=array();
			$return[] = count($temp);
			for ($i=1;$i<count($temp);$i++){
				if ($temp[$i]!=""){
					$return[]=$temp[$i];
					$lenght++;
				}
			}
			$return[0] = $lenght;
			return $return;
		}

	}

?>
