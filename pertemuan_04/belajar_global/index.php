<?php 
require "tabungku.php";

//var_dump($_GET);
// if ($_SERVER['REQUEST_METHOD']==='POST'){
    // if (empty($_POST)){
    //     echo "kosong";
    // }

//if (isset($_POST['button_submit'])){
   //if (strlen($_POST['diameter'])>0{
   //     echo "Achmad";
    // } else {
    //    echo "Harap isi dulu !"
    //}

 //   echo "agik";
//}

// $luas = 0;

//if (isset($_POST['button_submit'])){
//    $diameter = $_POST['diameter'];
//    $tinggi = $_POST['tinggi'];
//    $r = $diameter /2 ;

//    $luas = 2 * 3.14 * $r * $tinggi;
//    $volume = 2 * 3.14 * $r **2 * $tinggi;

//    echo "Diameter $diameter <br/>";
//    echo "Tinggi $tinggi <br/>";
//}

    $tabung = new Tabung;  
    if (isset($_POST['submit_btn'])){
       
        $tabung->setDiameter ($_POST['diameter']);
        $tabung->setTinggi ($_POST['tinggi']);
        $tabung->hitungluas();
    //     $diameter = $_POST['diameter'];
    //     $tinggi = $_POST['tinggi'];
    //     $r = $diameter/2;
    //     $luas = 3.14*$diameter*$tinggi;
    //     $volume = 3.14*$r*$r*$tinggi;

    //     echo "Diameter $diameter <br>";
    //     echo "Tinggi $tinggi <br>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOI</title>
</head>
<body>
    <!-- <form action="" method="post">
        <input type="text" name='nuri'>
        <button name='submit_btn'>Submit</button>
    </form> -->
    <!-- <h1>Nama <?php echo isset($_GET['nama'])? $_GET['nama'] : ''; ?></h1> -->

    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <!--<input type="text" name="nim" value="1077"> <br> -->

        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name='submit_btn'>Hitung</button>

        <hr>

        <ul>
            <li>Luas Sisi : <?= $tabung->getLuasSelimut(); ?></li>
            <li>Volume : <?= $tabung->getVolume(); ?></li>
            
        </ul>
    </form>
</body>
</html>