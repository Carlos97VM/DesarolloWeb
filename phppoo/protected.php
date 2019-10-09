<?php 

	//los metodos protegidos solo pueden ser accedidos
	//desde herencia de clases o solo desde clases hijas
	//y debe ser utilizado por un metodo hijo

	class clasePadre{
		protected function metodo1(){
			return "metodo protegido";
		}
	}

	class claseHija extends clasePadre{
		public function muestra(){
			return parent::metodo1();
		}
	}

	$obj= new claseHija();
	echo $obj->muestra();

 ?>