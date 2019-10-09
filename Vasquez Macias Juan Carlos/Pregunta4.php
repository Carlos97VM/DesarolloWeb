<?php 
class cuadrado{
	private $cadena;
	public function __construct($valor){
		$this->cadena=$valor;
	}
	public function dibujar(){
		echo $this->cadena;
		$l=strlen($this->cadena);
		for ($i=1;$i<l-1;$i++){
			echo substr($this->cadena, i, 1);
			for ($j=0; $j < $l ; $j++) { 
				# cod  e...  
				echo "&npbsp;";
			}
			echo substr($this->cadena, i-1, 1)."<br>";
			
		}
		$invertida="";
		for ($i=0; $i < $l; $i++) { 
			# code...
			$invertida= $this->cadena[$i].$invertida;
		}
		echo $invertida."<br>";
	}
		

}
$obj1 = new cuadrado("tecno");
$obj1->dibujar();
$obj2 = new cuadrado("ciencias");
$obj2->dibujar();
?>