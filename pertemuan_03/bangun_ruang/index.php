<?php 
    require 'bolaku.php';

    $bolaku = new bolaku;
    $bolaku->setPhi(3.14); 
    $bolaku->setJarijari(5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>192410101077</title>
    <style>
        body {
            width: 99%;
            height: 10%;
            background: #DBF0E5;
        }
        
        .background{
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 50%;
            z-index: -1;
        }
        h3, h1{
            text-align: center;
            margin: auto;
            width: 50%;
            color: #ffffff;
            padding-top: 6%;
            position: relative;
            font-size: 30px;
            letter-spacing: 1px;
            position: relative;
        }
        table {
            margin-top: 15%;
            border-radius: 15px;
            box-shadow: 25px 25px 50px #b5b5b5 ;
            background-color: #ffffff; 
        }
        .gambar4{
            right: 0%;
            top: 113%;
            width: 25%;
            position: absolute;
            z-index: -1;
        }  
    </style>
</head>
<body>
    <img class="background" src="Mask.png">
    <img class="gambar4" src="Vector 14.png">
    <h3>Achmad Galeh Indra Kurniawan</h3>
    <h1>Bangun Ruang : Bola</h1>
    <table border="5" cellpadding="15" cellspacing="10" align="center">
        <tbody>
            <tr>
                <td>Panjang Jari- jari : <?php echo $bolaku->getJarijari()?></td>
                <td>Panjang Diameter : <?php echo $bolaku->getDiameter()?></td>
                <td>Luas Bola : <?php echo $bolaku->getLuasbolaku()?></td>
                <td>Volume Bola : <?php echo $bolaku->getVolumebolaku()?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>