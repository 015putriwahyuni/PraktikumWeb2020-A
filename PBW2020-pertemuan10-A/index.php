<?php
    session_start();
    if (!isset($_SESSION["bdata"])) {
        $_SESSION["bdata"] = 0; //dimana data nilai awal 0
    }

?>


<?php

    if (isset($_POST["submit"])) { //masukkam data dalam session, data akan disimpan pada session
        $index = $_SESSION["bdata"];
        $_SESSION["nim"][$index] = $_POST["nim"];
        $_SESSION["nama"][$index] = $_POST["nama"];
        $_SESSION["nilai1"][$index]= intval($_POST["nilai1"]); //fungsi intval memberikan nilai bertipe integer
        $_SESSION["nilai2"][$index] = intval($_POST["nilai2"]);
        $_SESSION["bdata"] += 1;
           
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="assets/bootstrap.min.css">
     <link rel='icon' type='image/x-icon' href='assets/a.png' />
    <title>Pertemuan 10 </title>
</head>

<body>
   <div class="container">
        <div class="row main">
            <div class="panel-heading">
                <div class="panel-title text-center">
                    <h1 class="title fa fa-users">Form Data Nilai Mahasiswa</h1>
                    <hr />
                </div>
            </div>
                <div class="main-login main-center">
                <form class="form-horizontal" method="post" action="index.php">
                    <div class="form-group">
                    <label for="nama" class="cols-sm-2 control-label">Nama Lengkap</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="nama" id="nama"  placeholder="Masukkan Nama Lengkap"/>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="nim" class="cols-sm-2 control-label">NIM</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-file" aria-hidden="true"></i></span>
                                <input type="number" class="form-control" name="nim" id="nim"  placeholder="Masukkan NIM"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nilai1" class="cols-sm-2 control-label">Nilai 1</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i></span>
                                <input type="number" class="form-control" name="nilai1" id="nilai1"  placeholder="Masukkan Nilai 1"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nilai2" class="cols-sm-2 control-label">Nilai 2</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i></span>
                                <input type="number" class="form-control" name="nilai2" id="nilai2"  placeholder="Masukkan Nilai 2"/>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="submit">Submit</button>
              </form>
              <br><br>

                <div class="panel-heading">
                    <div class="panel-title text-center">
                        <h1 class="title fa fa-users">Data Yang Sudah Terinput</h1>
                        <hr />
                    </div>
                </div>

                <?php if ($_SESSION["bdata"] > 0) : ?>  <!-- jika data yg ada pada session lebih dari 0 -->
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Nilai 1</th>
                                <th>Nilai 2</th>
                                <th>Jumlah Nilai</th>
                                <th>Rata-Rata</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php for ($i = 0; $i < $_SESSION["bdata"]; $i++) : ?>  <!-- menampilkan data yang telah disimpan pd session-->
                                <tr>
                                    <th> <?= $_SESSION["nim"][$i]; ?></th>
                                    <th> <?= $_SESSION["nama"][$i]; ?></th>
                                    <th> <?= $_SESSION["nilai1"][$i]; ?></th>
                                    <th> <?= $_SESSION["nilai2"][$i]; ?></th>
                                    <th> <?= $_SESSION["nilai1"][$i] + $_SESSION["nilai2"][$i] ; ?></th>
                                    <th> <?= ($_SESSION["nilai1"][$i] + $_SESSION["nilai2"][$i])/2; ?></th>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                <?php endif; ?>

            
    </div>
</div>
   <script type="text/javascript" src="assets/jquery.js"></script>
</body>
</html>