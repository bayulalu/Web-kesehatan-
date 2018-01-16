<?php 

session_start();

//autoload kelas
spl_autoload_register(function($class){
	require_once 'clases/'.$class. '.php';
});

$berita = new Berita();

 ?>
