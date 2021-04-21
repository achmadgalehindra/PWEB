<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agik</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/popup.js"></script>
    <link rel="shortcut icon" href="image/logo2.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <img class="background" src="image/Mask.png">
    <div class="container">
        <h1>UTS PEMROGRAMAN WEBSITE B</h2>
        <br>
        <h2>Data kota di seluruh dunia</h2>
        <br>
        <?php
            include 'dbconnect.php';
            $query = "SELECT ID FROM city ORDER BY ID";  
            $query_run = mysqli_query($koneksi, $query);
            $row = mysqli_num_rows($query_run);
            echo '<h4> Jumlah Data : '.$row.'</h4>';
        ?>
        <br>
        <div class="b1"> 
            <a href="create.php"><button type="submit" class="btn btn-outline-dark"> Add Data <br></button></a>
            <a href=""><button type="button" class="btn btn-outline-dark"> Search Data</button></a>
        </div>
        <br>
        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>City name</th>
                <th>Distric</th>
                <th>Country Code</th>
                <th>Population</th>
                <th>Setting</th>
            </tr>
        </thead>
        <?php
        include 'dbconnect.php';
        $page = (isset($_GET['page']))? (int) $_GET['page'] : 1;
        $limit = 25;
  
        $limitStart = ($page - 1) * $limit;
                  
        $database = mysqli_query($koneksi, "SELECT * FROM city LIMIT ".$limitStart.",".$limit);
        
        $no = $limitStart + 1;
        
        while($hasil = mysqli_fetch_array($database)){ 
        ?>
        <tbody class="tbody">
            <tr>
                <td><?php echo $hasil['ID']?></td>
                <td><?php echo $hasil['Name'] ?></td>
                <td><?php echo $hasil['District'] ?></td>
                <td><?php echo $hasil['CountryCode'] ?></td>
                <td><?php echo $hasil['Population'] ?></td>
                <td>
                    <div class = "btn btn-outline-dark" ><a href="edit.php?ID=<?= $hasil["ID"]; ?>" style="text-decoration : none, color:black;">Edit</a> </div>
                    <button type="button" class="btn btn-outline-dark" name="button" id="button" value="Daftar" onclick="togglePopup()">Delete</button>
                </td>
            </tr>
        </tbody>
        <div class="popup" id="popup-1">
        <div class="overlay"></div>
            <div class="content">
                <a href="delete.php?Name=<?php echo $hasil['Name'] ?>"><button type="button" class="close-btn" onclick="togglePopup()">&times;</button></a>
                <h1>Data telah berhasil dihapus</h1>
                <p>Apabila terjadi kekeliruan menghapus data, anda bisa menambahkan data kembali. Terimakasih</p>
            </div>
        </div>
        <?php } ?>
        </table>
        <nav aria-label="Page navigation example">
        <ul class="pagination">
        <?php
        if($page == 1){ 
        ?>   
            <li class="disabled">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
            </li>     
        <?php
        }
        else{ 
            $LinkPrev = ($page > 1)? $page - 1 : 1;
        ?>
            <li class="page-item">
            <a class="page-link" href="index.php?page=<?= $LinkPrev; ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
            </li>
        <?php
            }
        ?>

        <?php
        $database = mysqli_query($koneksi, "SELECT * FROM city");        
        $JumlahData = mysqli_num_rows($database);
        $jumlahPage = ceil($JumlahData / $limit);
        $jumlahNumber = 1; 
        $startNumber = ($page > $jumlahNumber)? $page - $jumlahNumber : 1; 
        $endNumber = ($page < ($jumlahPage - $jumlahNumber))? $page + $jumlahNumber : $jumlahPage; 
        
        for($i = $startNumber; $i <= $endNumber; $i++){
            $linkActive = ($page == $i)? ' class="active"' : '';
        ?>
            <li class="page-item" <?php echo $linkActive; ?>><a class="page-link" href="index.php?page=<?= $i; ?>" style ="font=weight: bold; color:black;"><?= $i; ?></a></li>
        <?php
            }
        ?>
        
        
        <?php       
        if($page == $jumlahPage){ 
        ?>
            <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
            </a>
            </li>
        <?php
        }
        else{
            $linkNext = ($page < $jumlahPage)? $page + 1 : $jumlahPage;
        ?>  
            <a class="page-link" href="index.php?page=<?= $linkNext; ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
            </a>
            </li>
        <?php
        }
        ?>
        </ul>
        </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>

</html>