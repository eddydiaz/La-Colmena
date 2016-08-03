<?php
defined('BASEPATH') OR exit('no encuentra la ruta al script');
class Administrador_model extends CI_Model{

   function __construct(){

   	parent::__construct();

   }

   //Trabajando con las areas metodos necesarios --------------------------------------------------------------

     function registrarArea($datos){//este metodo es para insertar una nueva ciudad en la db
     
       $result = $this->db->insert('area',$datos);

       if($result){//si todo bien 
             return true;
       }else{//si algo salio mal
              return false;
       }

     }//fin de la function registrarArea

     function getAreas(){
       $areas = $this->db->get('area'); //esto me devuelve todas las areas regsitradas

       if($areas){//si hay areas retornala como un array 
                 return $areas->result();
       }else{//sino hay areas retorna false
                 return false;
       }
      
     }//fin de la function getAreas

/*  Ojo en codeingniter no se puede sobrescribir, bueno, hasta ahora no se sabe como se hace.
     function actualizarArea($datos){
       $result = $this->db->query("UPDATE area SET NOMBRE = '".$datos['NOMBRE']."' WHERE ID_AREA = '".$datos['ID_AREA']."'");
       
       if($result){//si todo bien
                 return true;
       }else{//sino retorna false
                 return false;
       }
     }
*/
     function actualizarArea($ID_AREA, $NOMBRE){
     $result = $this->db->query("UPDATE area SET NOMBRE = '".$NOMBRE."' WHERE ID_AREA = '".$ID_AREA."'");
       
       if($result){//si todo bien
                 return true;
       }else{//sino retorna false
                 return false;
       }

     }//fin de la function actualizarArea

   //Trabajando con las ciudades metodos necesarios

   function getPais(){//esta function es para obtener todos los paise y cargar el select del formulario de agregarCiudad con ellos.
    $Paises = $this->db->get('pais');

    if($Paises){//si todo bien y hay datos 
          return $Paises->result();
    }else{//si nohay datos o algo va mal
        return false;
    }

   }//fin de la function getPaises

  function registrarCiudad($datos){//esta function es para registrar las ciudades en la base de datos
  	$result = $this->db->insert('ciudad',$datos);

  	if($result){
           return true;
  	}else{
            return false;
  	}
  }//fin de la function regsitrarCiudad


   //Trabajando con los administradores metodos necesarios --------------------------------------------

  function registrarAdministrador($datos){
   $result = $this->db->insert('administrador',$datos);
   
	   if($result){
	           return true;
	  	}else{
	            return false;
	  	}
  }//fin del metodo registrarAdministrador


 //Trabajando con control de usuario metodos necesarios --------------------------------------------

 function getCandidato(){
 	$condidatos = $this->db->get('candidato');// obtener todos los candidatos

 	if($condidatos){
          return $condidatos->result();//como un array
 	}else{
 		return false;
 	}

 }//fin de la function getCandidato


 function getEmpresa(){
 	$empresas = $this->db->get('empresa');// obtener todos los candidatos

 	if($empresas){
          return $empresas->result();//como un array
 	}else{
 		return false;
 	}

 }//fin de la function getEmpresa




}



?>