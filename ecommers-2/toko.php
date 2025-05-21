<?php
session_start();
if(!isset ($_SESSION['saldo'])){
    $_SESSION['saldo'] = 500000;
}

echo "saldo anda :" . $saldo = $_SESSION['saldo']
?>

<html>
<a href="reset.php">reset</a>

</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstarp-5/css/bootstrap.min.css" rel="stylesheet"></link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <bu ton class="btn btn-primar"></button>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati iste asperiores vero perferendis adipisci dolores amet dolor maxime omnis ipsum doloremque numquam ab porro pariatur iure nisi nam, eaque dolore!</p>
    <div class="container">
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Bedak Ruqiyah</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.
            </p>
            <form action="proses.php" method="post">
                <input type="hidden" name="nigga" value="bedak">
                <input type="hidden" name="harga" value="5000">
            <button  class="btn btn-primary">Go somewhere</button>
            </form>
        </div>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
<script src="bootstap/js/bootstrap.bundle.min.js"></script>
</html>