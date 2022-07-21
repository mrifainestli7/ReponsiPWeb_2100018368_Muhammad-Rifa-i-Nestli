<head>
    <title>Data Customer</title>
    <style>
        .x{
            padding: 10px;
        }
        body {
            margin:0;
            padding:0;
            font-family: sans-serif;
            background: linear-gradient(#F78812, #925611);
        }
    </style>
</head>
<body>
    <div>
        <a href="login.html"><img class="x" src="panah.png"></a>
    </div>
</body>
<?php
$user = $_POST['user'];
$pass = $_POST['pw'];
if($user=="Admin" && $pass=="Admin"){
    $fp = fopen("file.txt","r");
    $tanggal=date("l, j F Y");
    echo "<center><br><h1>Data Customer</h1><br>";
    echo "|<b>Tanggal :</b> $tanggal|<br><br>";
    echo "<hr color=#3c2800>";
    echo "<table border=1 width=85% bgcolor=#FAEEE0>";
    echo "<tr bgcolor=#e7fae0><td> Tanggal </td>";
    echo "<td> Jam </td>";
    echo "<td> Nama </td>";
    echo "<td> Layanan </td>";
    echo "<td> Total </td>";
    echo "<td> Email </td>";
    echo "<td> No HP </td></tr>";
    while ($isi = fgets($fp, 900))
    {
        $pisah = explode("|", $isi);
        echo "<tr><td>" .$pisah[0]. "</td>"; 
        echo "<td>" .$pisah[1]. "</td>";
        echo "<td>" .$pisah[2]. "</td>";
        echo "<td>" .$pisah[3]. "</td>";
        echo "<td>" .$pisah[4]. "</td>";
        echo "<td>" .$pisah[5]. "</td>";
        echo "<td>" .$pisah[6]. "</td></tr>";
    }
    echo "</table>";
    echo "</body></center>";
}
?>
