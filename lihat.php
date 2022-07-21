<?php
$user = $_POST['user'];
$pass = $_POST['pw'];
if($user=="Admin" && $pass=="Admin"){
    echo "<head><title>Data Customer</title> </head>"; 
    $fp = fopen("file.txt","r");
    $tanggal=date("l, j F Y");
    echo "<body bgcolor=#c4a27c><center>";
    echo "<br><h1>Data Customer</h1><br>";
    echo "|<b>Tanggal :</b> $tanggal|";
    echo "<br><br><a href=index.html>::Beranda::</a>";
    echo "<hr color=#3c2800>";
    echo "<table border=1 width=85% bgcolor=#FAEEE0>";
    echo "<tr bgcolor=#e7fae0><td> Tanggal </td>";
    echo "<td> Jam </td>";
    echo "<td> Nama </td>";
    echo "<td> Layanan </td>";
    echo "<td> Email </td></tr>";
    while ($isi = fgets($fp, 900))
    {
        $pisah = explode("|", $isi);
        echo "<tr><td>" .$pisah[0]. "</td>"; 
        echo "<td>" .$pisah[1]. "</td>";
        echo "<td>" .$pisah[2]. "</td>";
        echo "<td>" .$pisah[3]. "</td>";
        echo "<td>" .$pisah[4]. "</td></tr>";
    }
    echo "</table>";
    echo "</body></center>";
}
?>