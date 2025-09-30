
<?php
//Membuat array kemudian diencode ke JSON
$ikan = array("Tongkol","Teri","Hiu","Arwana","Kerapu");

echo "Hasil JSON Encode:<br>";
echo json_encode($ikan);
echo "<br><br>";

//Membuat variabel JSON string
$json_string = '{"laut":"Tongkol","tawar":"Bawal","payau":"Bandeng"}';

//Decode ke bentuk PHP object
$obj = json_decode($json_string);

echo "Decode ke PHP Object:<br>";
echo "Ikan laut: " . $obj->laut . "<br>";
echo "Ikan air tawar: " . $obj->tawar ."<br>";
echo "Ikan air payau: " . $obj->payau ."<br><br>";

// Decode ke bentuk PHP Array
$arr = json_decode($json_string, true);
echo "Decode ke PHP Array:<br>";
echo "Ikan laut: " . $arr["laut"] . "<br>";
echo "Ikan air tawar: " . $arr["tawar"] ."<br>";
echo "Ikan air payau: " . $arr["payau"]."<br>";
?>