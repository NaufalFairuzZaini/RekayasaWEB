<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
//alamat localhost untuk dile get Wisata.php, ambil hasil export JSON
$send = curl("http://localhost/REKAYASAWEB/Praktikum2/getWisata.php");

// mengubah JSON menjadi array
$data = json_decode($send, TRUE);

// membuat tabel
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>KOTA</th>
        <th>LANDMARK</th>
        <th>TARIF</th>
      </tr>";

// looping isi data
foreach($data as $row){
    echo "<tr>";
    echo "<td>".$row["kota"]."</td>";
    echo "<td>".$row["landmark"]."</td>";
    echo "<td>".$row["tarif"]."</td>";
    echo "</tr>";
}

echo "</table>";
?>