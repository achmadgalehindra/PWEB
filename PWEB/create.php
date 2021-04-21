<?php
include 'dbconnect.php';
        
        $Name = $_POST['Name'];
        $CountryCode = $_POST['CountryCode'];
        $District = $_POST['District'];
        $Population = $_POST['Population'];


    if(isset($_POST['submit'])){
        $tess = mysqli_query($koneksi, "INSERT INTO city (Name,CountryCode,District,Population) VALUES ('$Name', '$CountryCode', '$District', '$Population')");
        var_dump($tess);
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
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="image/logo2.png">
    <link rel="stylesheet" href="css/createstyle.css">
</head>
<body>
    <div class="container">
        <form action="create.php" method="POST">
            <label class="form-group col-md-6" for="">Nama</label>
            <input type="text" name="Name" class="form-control" placeholder="Input City Name" required><br>
            <label class="form-group col-md-6" for="">CountryCode</label>
            <input type="text" name="CountryCode" class="form-control" placeholder="Input Country Code" required><br>
            <label class="form-group col-md-6" for="">District</label>
            <input type="text" name="District" class="form-control" placeholder="Input District" required><br>
            <label class="form-group col-md-6" for="">Population</label>
            <input type="number" name="Population" class="form-control" placeholder="Input Population" required><br>
            <button class="btn btn-primary" type="submit" name="submit" class="simpan">Simpan</button>
        </form>
    </div>

</body>

</html>