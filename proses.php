<html>
    <head>
        <style>
            body{
                margin: 0;
                padding:250px 300px;
                font-family: 'Times New Roman', Times, serif;
                background-color: #c4a27c;
                color:#1a1510;
            }
            hr{
                margin: 30px;
            }
            a{
                text-decoration: none;
                background-color: #1a1510;
                color:#c4a27c;
                padding: 10px 20px;
            }
        </style>
        <script language="Javascript">
            alert("Silahkan datang ke toko sesuai tanggal dan waktu");
        </script>
    </head>
    <body>
        <hr color="black" width="100%">
        <center>
            <h1>Terimakasih Telah Memilih Kami</h1>
        </center>
        <hr color="black" width="100%">
        <center>
            <a href="index.html">Kembali</a>
        </center>
        <?php
            $nama = $_POST['nama'];
            $tanggal = $_POST['tanggal'];
            $jam = $_POST['jam'];
            $email = $_POST['email'];
            $nomor = $_POST['nohp'];
            $total=0;
            $pesan=" ";
            if(isset($_POST['pil1'])){
                $pesan.="Cukur Rambut ,";
                $total+=100000;
            }
            if(isset($_POST['pil2'])){
                $pesan.="Tata Jenggot/Kumis ,";
                $total+=80000;
            }
            if(isset($_POST['pil3'])){
                $pesan.="Creambath ,";
                $total+=60000;
            }
            if(isset($_POST['pil4'])){
                $pesan.="Pijat Reflexi ,";
                $total+=50000;
            }
            if(isset($_POST['pil5'])){
                $pesan.="Pewarnaan Rambut ,";
                $total+=110000;
            }
            if(isset($_POST['pil6'])){
                $pesan.="Smoothing ,";
                $total+=80000;
            }
            $fp = fopen("file.txt", "a+"); 
            fputs($fp, "$tanggal | $jam | $nama | $pesan | $total | $email | $nomor\n"); 
            fclose($fp);
        ?>
    </body>
</html>
