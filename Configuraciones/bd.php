<?php
class Bd{
public static $instancia=null;
public static function crearInstancia()
{
if (Iisset(self::$instancia))
{
  $opciones[PDO::ATTR_ERRMODE] =PDO::ATTR_ERRMODE_EXCEPTION;
   echo"conectado";
}
return self::$instancia;
}

}