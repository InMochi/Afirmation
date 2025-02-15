<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Afirmation Page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Grid.html">Grid</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Flex.html">Flex</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="kelompok1.html">kelompok1</a></li>
                            <li><a class="dropdown-item" href="kelompok2.html">kelompok2</a></li>
                            <li><a class="dropdown-item" href="kelompok3.html">kelompok3</a></li>
                            <li><a class="dropdown-item" href="kelompok4.html">kelompok4</a></li>
                            <li><a class="dropdown-item" href="kelompok5.html">kelompok5</a></li>
                            <li><a class="dropdown-item" href="kelompok6.html">kelompok6</a></li>
                            <li><a class="dropdown-item" href="kelompok7.html">kelompok7</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            PHP
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="1_index.php">Index</a></li>
                            <li><a class="dropdown-item" href="2_percabanganif.php">percabanganif</a></li>
                            <li><a class="dropdown-item" href="3_percabanganswitch.php">percabanganswitch</a></li>
                            <li><a class="dropdown-item" href="4_perulanganfor.php">perulanganfor</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- content -->


    <div class="container mt-5 mb-5">
        <?php
        
        $nama = 'nama saya tony felicio farrel ';
        $umur = '17';
        
        if ($umur < 19) {
            echo $nama . 'saya belum kuliah ';
        } elseif ($umur >= 19) {
            echo $nama . 'saya sudah kuliah ';
        } else {
            echo 'saya pengangguran ';
        }
        
        ?>
    </div>



    <!-- footer -->
    <div class="card">
        <div class="card-header">
            Quote
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>Hidup tidak selalu mudah tetapi kesulitan adalah <strong>peluang</strong></p>
                <footer class="blockquote-footer">Tony Felicio Farrel<cite title="Source Title">Himitsu</cite></footer>
            </blockquote>
        </div>
    </div>
</body>

</html>
