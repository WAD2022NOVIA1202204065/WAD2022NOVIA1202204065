<!DOCTYPE html>
<html lang="en">
<head>
    <title>MODUL 2 NOPI</title>
    <meta charset="UTF-8">
    <meta name="description" contents="EADRENT">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav id="navigation">
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=booking">Booking</a></li>
                <li><a href="index.php?page=mybooking">My Booking</a></li>
            </ul>
            <h1 class="title">Welcome to EAD Rent</h1>
            <h3 class="desc">find your best deal, here!</h3>
        </nav>
    </header>
    <div id="contents">
        <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];

            switch ($page) {
                case 'home':
                include "home.php";
                break;
                case 'booking':
                include "booking.php";
                break;
                case 'mybooking':
                include "mybooking.php";
                break;          
            }
        }
else{
            include "home.php";
        }
        ?>

    </div>
    <footer>
        Nopi_1202204065
    </footer>
</body>
</html>