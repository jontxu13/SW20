<?php
//incluimos la clase nusoap.php
require_once('../lib/nusoap.php');
require_once('../lib/class.wsdlcache.php');
//creamos el objeto de tipo soapclient.
//http://www.mydomain.com/server.php se refiere a la url
//donde se encuentra el servicio SOAP que vamos a utilizar.
$soapclient = new nusoap_client('../php/VerifyPassWS');
//Llamamos la función que habíamos implementado en el Web Service
//e imprimimos lo que nos devuelve
if (isset($_POST['Pass'])) {
  echo $soapclient->call('verifyPass', array('x' => $_POST['Pass'], 'y' => 1010));
  echo '<h2>Request</h2><pre>' . htmlspecialchars($soapclient->request, ENT_QUOTES) . '</pre>';
  echo '<h2>Response</h2><pre>' . htmlspecialchars($soapclient->response, ENT_QUOTES) . '</pre>';
  echo '<h2>Debug</h2>';
echo '<pre>' . htmlspecialchars($soapclient->debug_str, ENT_QUOTES) . '</pre>';
}
?>