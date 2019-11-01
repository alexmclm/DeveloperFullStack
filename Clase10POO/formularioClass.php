<?php  

class Formulario{
	private $id;
	public $usuario;
	public $pass;
	public $email;
	public $nombreCompleto;

//EXISTE UN PROGRMA CHETO PARA EVITAR ESTO!
	//POSTMAN.exe


	//esto era para validar
	public function validar($post){
		// if(empty($usuario)){
		// 	echo "campo usuario vacio";
		// }
		// if(empty($pass)){
		// 	echo "campo pass vacio";
		// }
		// if(empty($email)){
		// 	echo "campo mail vacio";
		// }
		// if(empty($nombreCompleto)){
		// 	echo "campo nombre completo vacio";
		// }

		/*
			username,password,email
		*/
		// 1ra FORMA DE VALIDAR LOS DATOS:
			if($post["username"] ==""){
				return false;
			}	
		// 2da forma de validar los datos
			if (empty($post["password"])){
				return false;
			}
			if (empty($post["email"])){
				return false;
			}	
			return true;

	}
}


 $unUsuario =  new Formulario();
// $unUsuario->setUsuario("Albertito");
// $unUsuario->setPass("ahJa");
// $unUsuario->setEmail("alberitoPresidente@gmail.com");
// $unUsuario->setNombreCompleto("Albertito Fernandez K");
// el $_POST va a ser todo el contenido de la variable
// osea que el parametro $post es $_POST
if($unUsuario->validar($_POST)){
	echo "todo ok";
}
else{
	echo "hubo un error a la hora ingresar los datos, por favor revise";
}
// echo "<pre>";
// var_dump($unUsuario);
// echo "</pre>";









?>