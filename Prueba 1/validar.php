<?php
function DescargarJSON(){
    $data = json_decode (file_get_contents("https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items/3"),true);
   print_r($data);
   

   $json = json_encode($data);
   
   $bytes = file_put_contents("Respuesta1.json",$json); 

   echo $json;
   
}

// DescargarJSON();
//    $json = fopen("miarchivo.txt","w+"); 
//  if($json == false) { 
//    die("No se ha podido crear el archivo."); 
// }



// if (isset($_POST["btnPHP"])){
//     $salida = "ArchivoPrueba.json";
//     header("Content-Type: application/json; charset=UTF-8");
//     header('Content-Disposition: attachment;filename= '.$salida);
//     header('Cache-Control: no-cache, no-store, must-revalidate');
//     header('Pragma: no-cache');
//     header('Expires: 0');

//     $output = fopen('php://output','w');
//     file_put_contents("ArchivoPrueba1.json",$json);
// }

// $fp = fopen("miarchivopruebafinal.json","w+"); 
// if($fp == false) { 
//    die("No se ha podido crear el archivo."); 
// }





?>