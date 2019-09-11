<?php
	class Estante
	{
	    private $tope1;
		private $fila1=array();
		private $tope2;
		private $fila2=array();
		private $tope3;
		private $fila3=array();
		
		public function __construct()
  		{
			$this->tope1=0;
			$this->tope3=0;
			$this->tope3=0;
		}
	   	
		public function insertar($nfila,$Elemento)
		{
			switch ($nfila) {
				case '1':
					$this->tope1++;
					$this->fila1[$this->tope1]=$Elemento;
					echo "<h1>Libro Insertado en la fila 1</h1>";
					break;
				case '2':
					$this->tope2++;
					$this->fila2[$this->tope2]=$Elemento;
					echo "<h1>Libro Insertado en la fila 2</h1>";
					break;
				case '3':
					$this->tope3++;
					$this->fila3[$this->tope3]=$Elemento;
					echo "<h1>Libro Insertado en la fila 3</h1>";
					break;
				
				
				default:
					echo "<h1>No existe Fila</h1>";
					break;
			}
			
		}
		public function eliminar($nfila)
		{
			switch ($nfila) {
				case '1':
					if ($this->tope1==0)
		  		 	{ 
		  		 		echo "la Fila esta vacia";
		   			}
		   			else 
		   			{
		   				$this->tope1--;
						return $this->fila1[$this->tope1];
	       			}
	       			break;
				case '2':
					if ($this->tope2==0)
		  		 	{ 
		  		 		echo "la Fila esta vacia";
		   			}
		   			else 
		   			{
		   				$this->tope2--;
						return $this->fila2[$this->tope2];
	       			}
	       			break;
	       		case '3':
					if ($this->tope3==0)
		  		 	{ 
		  		 		echo "la Fila esta vacia";
		   			}
		   			else 
		   			{
		   				$this->tope3--;
						return $this->fila3[$this->tope3];
	       			}
	       			break;
				default:
					echo "<h1>Fila No existe</h1>";
					break;
			}
           
		}
		public function mostrarFila($nfila)
		{
			switch ($nfila) {
				case '1':
			?>
					<p align="center"><strong>Libros de La fila 1 </p>
        			<table width="118" border="1" >
        				<tr>
        					<td><strong>Libro</strong></td>
        				</tr>
  			<?php 
				   	for ($i=1;$i<=$this->tope1;$i++)
		   			{
			?> 
  						<tr>
    						<td><?php echo  $this->fila1[$i]?></td>
  						</tr>
			<?php   } ?>
					</table>
			<?php
					break;
				case '2':
			?>
					<p align="center"><strong>Libros de La fila 2 </p>
        			<table width="118" border="1" >
        				<tr>
        					<td><strong>Libro</strong></td>
        				</tr>
  			<?php 
				   	for ($i=1;$i<=$this->tope2;$i++)
		   			{
			?> 
  						<tr>
    						<td><?php echo  $this->fila2[$i]?></td>
  						</tr>
			<?php   } ?>
					</table>
			<?php
					break;
					case '3':
			?>
					<p align="center"><strong>Libros de La fila 2 </p>
        			<table width="118" border="1" >
        				<tr>
        					<td><strong>Libro</strong></td>
        				</tr>
  			<?php 
				   	for ($i=1;$i<=$this->tope3;$i++)
		   			{
			?> 
  						<tr>
    						<td><?php echo  $this->fila3[$i]?></td>
  						</tr>
			<?php   } ?>
					</table>
			<?php
					break;
				default:
					echo "<h1>Fila No existe</h1>";
					break;
			}

		}
		public function mostrar()
		{
		
			echo"<center><h1>Libros de Armario</h1></center>";
			echo"<br><b>Fila1</b><br>";
        	 	for ($i=1;$i<=$this->tope1;$i++) 
        	 	{ 
        	 		echo  $this->fila1[$i]."<br>";
        	 	}
        	echo"<br><b>Fila2</b><br>";
        	 	for ($i=1;$i<=$this->tope2;$i++) 
        	 	{ 
        	 		echo  $this->fila2[$i]."<br>";
        	 	}
        	echo"<br><b>Fila3</b><br>";
        	 	for ($i=1;$i<=$this->tope3;$i++) 
        	 	{ 
        	 		echo  $this->fila3[$i]."<br>";
        	 	} 	
		}
	} ?>
