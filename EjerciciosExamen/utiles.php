<<<<<<< HEAD
<?php 
	class Utiles
	{
		private $cadena;
		
		function __construct($cadenainsertada){
			$this->cadena=$cadenainsertada;
		}
		function aumentarguionesinvertir($nroguiones){
			$aux="";
			for ($i=strlen($this->cadena)-1; $i >0 ; $i--) { 
				$aux.=$this->cadena[$i];
				for ($j=1;$j<=$nroguiones;$j++)
					$aux.="-";
			}
			$aux.=$this->cadena[0];
			return $aux;
		}
		function aumentarguiones($nroguiones){
			$aux="";
			for ($i=0; $i <=strlen($this->cadena); $i++) { 
				$aux.=$this->cadena[$i];
				for ($j=1;$j<=$nroguiones;$j++)
					$aux.="-";
			}
			$aux.=$this->cadena[0];
			return $aux;
		}
	}
=======
<?php 
	class Utiles
	{
		private $cadena;
		
		function __construct($cadenainsertada){
			$this->cadena=$cadenainsertada;
		}
		function aumentarguionesinvertir($nroguiones){
			$aux="";
			for ($i=strlen($this->cadena)-1; $i >0 ; $i--) { 
				$aux.=$this->cadena[$i];
				for ($j=1;$j<=$nroguiones;$j++)
					$aux.="-";
			}
			$aux.=$this->cadena[0];
			return $aux;
		}
		function aumentarguiones($nroguiones){
			$aux="";
			for ($i=0; $i <=strlen($this->cadena); $i++) { 
				$aux.=$this->cadena[$i];
				for ($j=1;$j<=$nroguiones;$j++)
					$aux.="-";
			}
			$aux.=$this->cadena[0];
			return $aux;
		}
	}
>>>>>>> e379333900b81d9ac65419e8b2a42a598cb0f276
 ?>