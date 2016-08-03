<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrador extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		 $this->load->model('Administrador_model');// aqui cargamos el modelo requerido para las funciones del Administrador
	}

	public function index()
	{

		$this->load->view('Administrador/index');
		
	}

public	function Agregar_Administrador(){

$this->load->view('Administrador/Agregar_administrador');


	}

//Trabajando con las areas metodos necesarios---------------------------------------------------------------
public	function Agregar_Area(){

$this->load->view('Administrador/Agregar_area');
}

public function registarArea(){
   $datosDelPost = $this->input->post();

   $NombreDelArea = $datosDelPost['NOMBRE'];

   if(!empty($NombreDelArea)){// si el input tiene valor, es decir, si no esta vacio

		   $datos = array('ID_AREA' => null, 'NOMBRE'=>$NombreDelArea);

		   $result = $this->Administrador_model->registrarArea($datos);

		   if($result){
		        echo "<script> 
		                alert('Area registrada sucessfull...!!!'); 
		                window.location='./Agregar_Area'
		             </script>";
		              // header("Location:".base_url()); // si ponemos esto obviaria el alert() de javaScript. por eso redirecionamos en el mismo script con window.location

		   }else{
		   	  echo "<script> 
		   	           alert('Error al registrar area. Intentelo mas tarde.'); 
		               window.location='./Agregar_Area'
		            </script>";
		   }

   }else{//si esta vacio

    		 echo "<script> 
		   	          alert('Introduzca el Nombre del area a registrar.'); 
		               window.location='./Agregar_Area'
		           </script>";
   }
}//fin de la function registrarArea



//Trabajando con las ciudades metodos necesarios-------------------------------------------------

	public	function Agregar_Ciudad(){
     $datos['PAISES'] = $this->Administrador_model->getPais();
    $this->load->view('Administrador/Agregar_ciudad',$datos);
	}

	public function registrarCiudad(){
       if(isset($_POST['NOMBRE']) && !empty($_POST['NOMBRE'])){//si existe un post con la posicion 'NOMBRE' y no esta vacio
       
       $datos = array('ID_CIUDAD'=>null,'NOMBRE'=>$_POST['NOMBRE'],'ID_PAIS'=>$_POST['ID_PAIS']);

       $result = $this->Administrador_model->registrarCiudad($datos);

       if($result){
		        echo "<script> 
		                alert('Ciudad registrada sucessfull...!!!'); 
		                window.location='./Agregar_ciudad'
		             </script>";
		              // header("Location:".base_url()); // si ponemos esto obviaria el alert() de javaScript. por eso redirecionamos en el mismo script con window.location

		   }else{
		   	  echo "<script> 
		   	           alert('Error al registrar ciudad. Intentelo mas tarde.'); 
		               window.location='./Agregar_ciudad'
		            </script>";
		   }
      
       }else{//si no existe
         echo "<script> 
		   	          alert('Nombre del la ciudad a registrar requerido.'); 
		               window.location='./Agregar_Ciudad'
		        </script>";

       }


	}// fin del metodo registrarCiudad

	public function registrarAdministrador(){

      $datos = array(
      	'ID_ADMINISTRADOR'=>NULL,
      	'NOMBRE'=>$_POST['NOMBRE'],
      	'APELLIDO'=>$_POST['APELLIDO'],
      	'EMAIL'=>$_POST['EMAIL'],
      	'USERNAME'=>$_POST['USERNAME'],
      	'PASS'=>$_POST['PASS'],
      	'DESCRIPCION'=>$_POST['DESCRIPCION'],
      	'PORTAFOLIO'=>$_POST['PORTAFOLIO'],
      	'TELEFONO'=>$_POST['TELEFONO'],
      	'DIRECCION'=>$_POST['DIRECCION'],
      	'ID_ROL'=>$_POST['ID_ROL']
       	);//fin del array con los datos del administrador

      $result = $this->Administrador_model->registrarAdministrador($datos);

       if($result){
		        echo "<script> 
		                alert('Administrador registrado sucessfull...!!!'); 
		                window.location='./Agregar_Administrador'
		             </script>";
		              // header("Location:".base_url()); // si ponemos esto obviaria el alert() de javaScript. por eso redirecionamos en el mismo script con window.location

		   }else{
		   	  echo "<script> 
		   	           alert('Error al registrar Administrador. Intentelo mas tarde.'); 
		               window.location='./Agregar_Administrador'
		            </script>";
		   }
      
       }// fin del metodo registrarAdministrador

//Trabajando con el control de usuario metodos necesarios

	public function Control_Usuario(){

		$this->load->view('Administrador/Control_usuario');
			}

   }

/* End of file Administrador.php */
/* Location: ./application/controllers/Administrador.php */