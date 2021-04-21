<?php
require 'dbconnect.php';
$data_edit = mysqli_query($koneksi, "SELECT * FROM city WHERE ID ='$_GET[ID]'");
$result = mysqli_fetch_array($data_edit);

    $ID = $_POST['ID'];
    $Name = $_POST['Name'];
    $CountryCode = $_POST['CountryCode'];
    $District = $_POST['District'];
    $Population = $_POST['Population'];
    $cara = "UPDATE city SET Name = '$Name', CountryCode ='$CountryCode', District = '$District', Population = '$Population'
    WHERE ID = '$ID'";

    if (isset($_POST['editt'])){
        mysqli_query($koneksi, $cara);
        if(mysqli_affected_rows($koneksi) >0){
            echo "
                <script>
                    alert('data berhasil ditambahkan');
                    document.location.href = 'index.php'
                </script>
                ";
        }else{
            echo "
                <script>
                    alert('data gagal ditambahkan');
                    document.location.href = 'index.php'
                </script>
                ";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="image/logo2.png">
    <link rel="stylesheet" href="css/createstyle.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <label class="form-group col-md-6" for="inputID">ID name</label>
            <input type="text" name="ID" readonly class="form-control" id="inlineFormInput" value="<?php echo $result['Name'] ?>"> <br>
            <label class="form-group col-md-6" for="inputCity">City Name</label>
            <input type="text" name="Name" class="form-control" id="inlineFormInput" value="<?php echo $result['Name'] ?>" required> <br>
            <label class="form-group col-md-6" for="inputCountry">Country Code</label>
            <input type="text" name="CountryCode" class="form-control" id="inlineFormInput"  value="<?php echo $result['CountryCode'] ?>" required> <br>
            <label class="form-group col-md-6" for="inputDistrict">District</label>
            <input type="text" name="District" class="form-control" id="inlineFormInput"  value="<?php echo $result['District'] ?>" required> <br>
            <label class="form-group col-md-6" for="inputPopulation">Population</label>
            <input type="text" name="Population" class="form-control" id="inlineFormInput"  value="<?php echo $result['Population'] ?>" required> <br>
            <button type = "submit" name = "editt" class ="btn btn-primary">Simpan</button>
        </form>
    </div>

</body>

</html>