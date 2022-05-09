<?php
namespace MVC;

require('./vendor/autoload.php');

use JsonMachine\Items;
use JsonMachine\JsonDecoder\PassThruDecoder;
header('Content-type: text/plain');

echo "JSON DECODE \n";
$start_decode = microtime(true);
echo microtime(true)."\n";
$json_decode = json_decode(file_get_contents('./vendor/largeJSON/100mb.json'));

echo microtime(true)."\n";

$end_decode = microtime(true) - $start_decode;
echo "=====> Json decode done: " . round($end_decode * 1000, 5) . ' ms';

foreach ($json_decode as $name => $data) {
    // print_r($data);   
}



echo "\n\nJSON MACHINE \n";
$start_machine = microtime(true);
echo microtime(true)."\n";
$fruits = Items::fromFile('./vendor/largeJSON/100mb.json');
echo microtime(true)."\n";

$end_machine = microtime(true) - $start_machine;
echo "=====> Json decode done: " . round($end_machine * 1000, 5) . ' ms';

foreach ($fruits as $key => $value) {
    // print_r($value);
    // echo 'Progress: ' . intval($fruits->getPosition() / $fileSize * 100) . ' %'; 
}