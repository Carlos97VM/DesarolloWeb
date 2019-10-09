<?php 

	class miClase{
		//mis atributos
		public $resultado=0;
		//mis metodos
		public function miMetodo($v1,$v2){
			$this->resultado=$v1 + $v2;
			return $this->resultado;
		}
	}

	//termina mi clase
	//instanciar o declarar un objeto

	$miObjeto= new miClase();

	echo $miObjeto->miMetodo(5,10);

 ?>