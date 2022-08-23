<?php 

require __DIR__ . '../../../vendor/autoload.php';
use App\Cliente;


// PRUEBAS DE ALGORITMOS PARA ENCRIPTACION DE DATOS CON PHP
$passwdO = "qwerty";
echo "contraseña sin encriptacion: " .$passwdO;
echo "</br>";


//ENCRIPTACION CON MD5
$psswdMD5 = md5($passwdO);
echo "contraseña encriptada con MD5: ".$psswdMD5;
echo "</br>";

//ENCRIPTACION CON SHA1
$psswdSHA1 = sha1($passwdO);
echo "contraseña encriptada con SHA1: ".$psswdSHA1;
echo "</br>";

//ENCRIPTACION CON CRC32
$psswdcrc32 = crc32($passwdO);
echo "contraseña encriptada con crc32: ".$psswdcrc32;
echo "</br>";
echo "</br>";

//USO DE  password_hash
$hash = password_hash($passwdO, PASSWORD_DEFAULT);
echo "contraseña encriptada con passwod_hash: ".$hash;
echo "</br>";
echo "</br>";
 
  
  /**  EL USO DE LA FUNCION PASSWORD VERIFY EN PHP
   *  esta funcion de PHP permite la vaildacion
   *  de los datos encriptados
   */
    if (password_verify($passwdO, $hash))
    {
      echo "password conrrecta";
    }
    echo "</br>";
    echo strlen($hash);
    echo "</br>";
  /**
   * LISTA DE ALGORITMOS DISPONIBLES PARA ENCRIPTAR INFORMACION EN PHP
   *   !nos recomendados por no variar su contenido,
   *    haciendolos un poco mas vulnerables¡
   */
  
    foreach (hash_algos() as $algoritmo)
    echo $algoritmo. ": ".hash($algoritmo, $passwdO)."</br>";




