<?php

	class home{

		function __construct(){
			$this->titulo = 'Billing Vas Pass';
			$this->mensaje = '';
		}

		function start($mensaje){
			$data = array("Titulo" => "Café Momentos", "mensaje" => $mensaje);
			self::LoadTemplate("home/index.php",$data);
		}
		function GetHomeDiv(){
			include(MINMODULES.DS.'home/home.php');
		}
		function GetAboutDiv(){
			include(MINMODULES.DS.'about/about.php');
		}
		function GetEventsDiv(){
			include(MINMODULES.DS.'events/events.php');
		}
		function GetGaleryDiv(){
			include(MINMODULES.DS.'galery/galery.php');
		}
		function GetVideosDiv(){
			include(MINMODULES.DS.'videos/videos.php');
		}
		function GetRecipesDiv(){
			include(MINMODULES.DS.'recipes/recipes.php');
		}
		function GetContactDiv(){
			include(MINMODULES.DS.'contact/contact.php');
		}
		private function LoadTemplate($template, $dataArr){
			$MainLogger = new Logger();
			$MainLogger->OpenLogger();
			$MainLogger->WriteLogger('Cargando template -> '.$template);
			if (file_exists(TEMPLATE.DS.$template)){
					$view = new view($template);
				if (!empty($dataArr)){
					$view->render($dataArr);
				}else{
					$tempArr = array('NO' => 'DATA');
					$view->render($tempArr);
				}
				$MainLogger->CloseLogger();
			}else{
				$MainLogger->WriteLogger("Error!!! Template solicitado no existe. $template");
				$MainLogger->WriteLogger("Redireccionando a -> Error 505");
				$MainLogger->CloseLogger();
			}
		}


	}

?>