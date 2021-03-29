<?php
    $arr = [
        ["kota"=>"Chicago,IL", "populasi" => "2695598"],
        ["kota"=>"Dallas, TX", "populasi" => "1197816"],
        ["kota"=>"Houston, TX", "populasi" => "2100263"],
        ["kota"=>"Los Angeles, CA", "populasi" => "3792621"],
        ["kota"=>"New York, NY", "populasi" => "8175133"],
        ["kota"=>"Philadelphia,PA", "populasi" => "1526006"],
        ["kota"=>"Phoenix, AZ", "populasi" => "1445632"],
        ["kota"=>"San Antonio, TX", "populasi" => "1327407"],
        ["kota"=>"San Diego, CA", "populasi" => "1307402"],
        ["kota"=>"San Jose, CA", "populasi" => "945942"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kuis1</title>
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
        .text{
            text-align: center;
            margin: auto;
            width: 50%;
            color: #ffffff;
        }
        .text p{
            padding-top: 11%;
            font-size: 20px;
            position: relative;
        }
        .text h1{
            font-size: 30px;
            margin: 30px 0px 0px 0;
            line-height: 40px;
            letter-spacing: 1px;
            position: relative;
        }
        .warna1{
            background-color: #FF2A5D;
        }

        .warna2{
            background-color: #00ffff;
        }
        .warna3{
            background-color: #ff8c69;
        }
        h2{
            text-align: center;
            margin-top: 15%;
        }
        h2 p{
            margin-top: 5%;
        }
        table {
            border-radius: 15px;
            box-shadow: 35px 35px 25px #b9b9b9 ;
            background-color: #ffffff; 
        }
        tbody tr:nth-of-type(even){
             background-color: #f3f3f3;
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
    <div class="text">
        <p>KUIS SATU</p>
        <h1>Achmad Galeh Indra Kurniawan<br>
            192410101077<br>
            Pemrograman Website B 
            </h1>
        </div>        
<h2><p>Soal 1 : Data Populasi </p>
    <table border="5" cellpadding="15" cellspacing="10" align="center">
        <th class="warna1"> Nama Kota</th>
        <th class="warna1"> Jumlah Populasi Orang</th>
        <tbody>
            <?php foreach($arr as $mhs): ?>
                <tr>
                    <td><?= $mhs['kota'] ?></td>
                    <td><?= $mhs['populasi'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<br>
<p>Soal 2 : ASCENDING </p>
    <?php
        function sort_country_lists($arr,$subkey) { //memanggil array
            foreach($arr as $k=>$v) { //menngambil key lalu value dari array
                $b[$k] =($v[$subkey]); //membuat array baru 
            }
            asort($b); //sort
            foreach($b as $key=>$val) { //memasukkan value yang telah didapat kedalam array baru $c
                $c[] = $arr[$key];
            }
            return $c; //mengembalikan array c
        }
        $sort = sort_country_lists($arr,'populasi'); //sorting array memanggil key = populasi
        
    ?>
<table border="5" cellpadding="15" cellspacing="10" align="center">
    <th class="warna2"> Nama Kota</th>
    <th class="warna2"> Jumlah Populasi Orang</th>
        <tbody>
            <?php foreach($sort as $d) { ?>
                <tr>
                    <td><?php echo $d['kota'] ?></td>
                    <td><?php echo number_format($d['populasi']); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
<br>
<p>Soal 3 : Populasi > 1.500.000</p>

<table border="5" cellpadding="15" cellspacing="10" align="center">
        <th class="warna3"> Nama Kota</th>
        <th class="warna3"> Populasi</th>
   
    <?php 
        foreach ($sort as $d) { 
            if ($d["populasi"] >= 1500000):  
    ?>
        <tr>
        <td><?php echo $d["kota"]; ?> </td>
        <td><?php echo number_format($d["populasi"]); ?> </td>
        </tr>
    <?php 
        endif;
    }; 
        ?>
    </table>

</h2>