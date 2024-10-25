<?php
$hostname     = "junction.proxy.rlwy.net:27759" ;
$bancodedados = "railway" ;
$usuario      = "root" ;
$senha        = "NeswhSVeVYzuVqlvrrFPCOGYdSWKARgJ" ;
$mysqli  = new mysqli($hostname, $usuario, $senha, $bancodedados) ;
if (mysqli->connect_errno){
   echo "Falha ao conectar: (".$mysqli->connecr_errno.") ".$mysqli->connecr_error ;
}
