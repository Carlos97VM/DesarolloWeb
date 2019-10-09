<?php 

	class calculadora{
		public function calcularDatos($val1,$val2,$opcion){
			switch ($opcion) {
				case 'suma':
					return $val1 + $val2;
					break;
				case 'resta':
					return $val1 - $val2;
					break;
				case 'division':
					return $val1 / $val2;
					break;
				case 'multiplicacion':
					return $val1 * $val2;
					break;
				
				default:
					# code...
					break;
			}
		}
	}

 ?>