<?php
class Conectar{
    protected $dbh;
    protected function Conexion(){
        try{
$conectar = $this->dbh = new PDO ("mysql:local=localhost; dbname=crud2", "root", "");
return $conectar;
        }catch(Exception $e){
            print "Error al conectar con la Base de Datos"  . $e->getMessage() . "<br/>";
            die();

        }
    }
    //para que no haya problemas con tildes o ñ se agrega esta linea de codigo
public function set_names(){
    return $this->dbh->query("SET NAMES 'utf8'");
}
}

?>


