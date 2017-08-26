<?php
    // This example show how to add some custom / context data in the post exchange
    $userData = $_POST["data1"] . " " . $_POST["data2"];

    $languages = explode(PHP_EOL, file_get_contents("languages.txt"));

$json_a = json_decode("language.txt");
     var_dump($json_a);
echo "\n";
     foreach($json_a as $row){
         echo $row->status;
         echo "\n";
     }

    $result = array();
    $test = strtolower($_POST["value"]);
    $length = strlen($test);
    foreach($languages as $key => $language){
        if (strtolower(substr($language, 0, $length)) === $test){
            $result[] = array( "data" => $language, "preview" => $userData . " : " . $key );
        }
    }

    header("Content-Type: text/json; charset=UTF-8;");
    echo json_encode( $result );
?>
