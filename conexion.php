<?php 
class Conexion{
  public static function Conectar(){
  $user="invitado";
  $bd="cetec";
  $pass='12345';
  try{
    $dsn="mysql:host=localhost;dbname=".$bd;
    $dbh=new PDO ($dsn,$user,$pass);
    return $dbh;
  }catch(Exception$e){
    die("Error en la conexion".$e->getMessage()); 
  }
  }
}
?>


