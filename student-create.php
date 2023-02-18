<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Buat Data Diri</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <div class="container mt-5">

        <?php include('massage.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Siswa Add
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body"></div>
                    <form action="code.php" method="POST">
                        <div class="mb-4">
                            <label>Nama Siswa</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label>Siswa Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label>Nomer</label>
                            <input type="text" name="nomer" class="form-control">
                        </div>
                        <div class="mb-4">
                            <label>Course</label>
                            <input type="text" name="course" class="form-control">
                        </div>
                        <div class="mb-4">
                            <button type="submit" name="save" class="btn btn-primary">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>