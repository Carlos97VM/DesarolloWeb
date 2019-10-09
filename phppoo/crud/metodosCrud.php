<?php 

	class metodos{
		public function mostrarDatos($sql){
			$c= new conectar();
			$conexion=$c->conexion();

			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}
		public function insertarDatosNombre($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT into t_persona (nombre,apellido)
							values ('$datos[0]','$datos[1]')";

			return $result=mysqli_query($conexion,$sql);
		}

		public function actualizaDatosNombre($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE t_persona set nombre='$datos[0]',
										apellido='$datos[1]'
								where id='$datos[2]'";
			return $result=mysqli_query($conexion,$sql);

		}
		public function eliminarDatosNombre($id){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from t_persona where id='$id'";
			return $result=mysqli_query($conexion,$sql);
		}
	}
 ?>