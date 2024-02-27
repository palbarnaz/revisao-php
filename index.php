<?php

$listaCarros = array();


function cadastrarCarro($marca,$modelo){
   
    global $listaCarros;
  array_push($listaCarros, array(
     'marca' => $marca,
     'modelo' => $modelo
  ));

  // echo '<pre>';
  // var_dump($listaCarros);
  // echo '</pre>';
}
 
function listarCarros(){
  global $listaCarros;

  foreach ($listaCarros as $key => $value) {

    echo "<h3> Marca:" .$value['marca']. "</h3>";
    echo "</br>";
    echo "<hr>";
    echo "<h3> Modelo:" .$value['modelo']. "</h3>";
    echo "</br>";
   
  }
}
  
function excluirCarro($modelo){
  global $listaCarros;

  foreach ($listaCarros as $key => $value) {
     if( $value['modelo']  ==  $modelo){
         unset($listaCarros[$key]);
         
     }
  }
}


cadastrarCarro("Ford", "Focus");
cadastrarCarro("VW", "Nivus");
cadastrarCarro("Fiat", "Uno");
cadastrarCarro("Honda", "Civic");



// listarCarros();


excluirCarro("Focus");

listarCarros();










?>