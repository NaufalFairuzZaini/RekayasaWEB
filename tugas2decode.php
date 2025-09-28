<?php
// JSON string
$jsonnilai = '{"Bimo":80, "Yudi":64, "Amat":88, "Yohanes":51, "Azul":40, "Rey":30, "Jikri":43}';

// Decode ke PHP Object (default)
$obj = json_decode($jsonnilai);

// Akses nilai dari Object
echo "=== Akses dari Object ===<br>";
echo "Bimo: "    . $obj->Bimo    . "<br>";
echo "Yudi: "    . $obj->Yudi    . "<br>";
echo "Amat: "    . $obj->Amat    . "<br>";
echo "Yohanes: " . $obj->Yohanes . "<br>";
echo "Azul: "    . $obj->Azul    . "<br>";
echo "Rey: "     . $obj->Rey     . "<br>";
echo "Jikri: "   . $obj->Jikri   . "<br><br>";

// Decode ke PHP Array
$arr = json_decode($jsonnilai, true);

// Akses nilai dari Array
echo "=== Akses dari Array ===<br>";
echo "Bimo: "    . $arr["Bimo"]    . "<br>";
echo "Yudi: "    . $arr["Yudi"]    . "<br>";
echo "Amat: "    . $arr["Amat"]    . "<br>";
echo "Yohanes: " . $arr["Yohanes"] . "<br>";
echo "Azul: "    . $arr["Azul"]    . "<br>";
echo "Rey: "     . $arr["Rey"]     . "<br>";
echo "Jikri: "   . $arr["Jikri"]   . "<br>";
?>
