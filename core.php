
<?php 

ini_set('display_errors', 'on');
error_reporting(E_ALL);
$file_name = "remotedb.json";
require_once './data/data_ctrl.php';

//file_put_contents("hi.txt", "hai");

//data_ctrl::savevalues();
//var_dump(data_items::$rem_data);

//data_items::get_items();

//fopen("./data/hi.txt", "w+");

$txt = "hai new file\n";

$arr = array(1,2,3);
$data = array('Math'=> 1, $arr, 'Science' => 2);
file_put_contents($file_name, json_encode($data));
$re = json_decode(file_get_contents($file_name));
var_dump($re);
//*/
?>
