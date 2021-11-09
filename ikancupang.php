<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <header>
        <nav>
            <div class="user">
                <div class="dropdown">
                    <button class="dropbtn">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <?php echo $_SESSION['username']; ?>
                    </button>
                    <div class="dropdown-content">
                        <a href="#">Profil</a>
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <aside>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="ikancupang.php">Ikan Cupang</a></li>
                <li><a href="kontrol.php">Kontrol</a></li>
            </ul>

        </aside>
        <div class="content">
            <h1>Ikan Cupang</h1>
            <div class="container">
                <div class="box1">
                    <h2>pH Air</h2>
                    <p>5</p>
                    <p>Tanggal : 9-11-2021</p>
                </div>
                <div class="box2">
                    <h2>Suhu Air</h2>
                    <p>27.5 &#8451;</p>
                    <p>Tanggal : 9-11-2021</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>