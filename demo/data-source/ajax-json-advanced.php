<?php
    // This example show how to add some custom / context data in the post exchange
    $userData = $_POST["data1"] . " " . $_POST["data2"];

    $languages = explode(PHP_EOL, file_get_contents("languages.txt"));



$string = file_get_contents("languages.txt");

$json = json_decode($string, true);

foreach ($json as $key => $value) {
    if (!is_array($value)) {
        echo $key . '=>' . $value . '<br />';
    } else {
        foreach ($value as $key => $val) {
            echo $key . '=>' . $val . '<br />';
        }
    }
}


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
