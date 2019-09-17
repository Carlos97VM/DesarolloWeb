<?php 

	class OperacionesLab2
	{
		private $n;
		private $cadena;
		private $a;
		private $b;
		private $c;

		public function __construct($n,$cadena,$a,$b,$c)
		{
			$this->n=$n;
			$this->cadena=$cadena;
			$this->a=$a;
			$this->b=$b;
			$this->c=$c;
		}

		public function CalcularFibonaci()
		{
			$x = 0;    
			$y = 1; 
			echo '<center>Cadena Fibonacci de: '."$this->n".'</center>';
			for($i=0;$i<=$this->n-1;$i++)    
			{    
    			$z = $x + $y;    
   				echo '<center>'.$z."<br/>".'</center>';         
    			$x=$y;       
    			$y=$z;     
			}
		}
		public function CalcularMenor()
		{		
			if(($this->a < $this->b) and ($this->a < $this->c)) 
			{ 
				echo "$this->a es menor que $this->b y $this->c";
			}
			else 
			{
				if(($this->b < $this->a) and ($this->b < $this->c))
	 				{ 
	 					echo "$this->b es menor que $this->a y $this->c";
	 				}
				else 
				{
					echo "$this->c es menor que $this->a y $this->b";
				}
	 		}	
		}
		public function Piramide()
		{
 			$caden=strlen("$this->cadena");
			$k=($caden/2)-1;
			echo '<center> <i>Piramide de la Cadena:</i> </center>'."<br>";
 			for($j = 1 ; $j <= $caden+1 ; $j++)
 			{ 
				echo '<center>'.substr("$this->cadena",$k,$j),"<br><br>".'</center>';
				if($k == -$k)
				{
					$k = 0;
				}
				else
				{
					$k = $k - 1;
				}
				$j = $j + 1;
			}
		}
	}

 ?>