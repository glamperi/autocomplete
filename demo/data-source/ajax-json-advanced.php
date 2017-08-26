<?php
    // This example show how to add some custom / context data in the post exchange
    $userData = $_POST["data1"] . " " . $_POST["data2"];

    $languages = explode(PHP_EOL, file_get_contents("languages.txt"));

$decode_data = json_decode('languages.txt');
foreach($decode_data as $key=>$value){

        print_r($value);




$result = array();


    $test = strtolower($_POST["name"]);
    $length = strlen($test);
    foreach($languages as $key => $language){
        if (strtolower(substr($language, 0, $length)) === $test){
            $result[] = array( "data" => $language, "preview" => $userData . " : " . $key );
        }
    }

    header("Content-Type: text/json; charset=UTF-8;");
    echo json_encode( $result );
?>
