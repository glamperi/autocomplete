<?php
    // This example show how to add some custom / context data in the post exchange
    $userData = $_POST["data1"] . " " . $_POST["data2"];

    $languages = explode(PHP_EOL, file_get_contents("languages.txt"));





//$result = array();


    $name = strtolower($_POST["name"]);
    $sku = strtolower($_POST["sku"]);  
    $length = strlen($test);
    foreach($languages as $key => $language){
        if (strtolower(substr($language, 0, $length)) === $name){
            $result[] = array( "data" => $name, "preview" => $sku );
        }
    }

    header("Content-Type: text/json; charset=UTF-8;");
    echo json_encode( $result );
?>
