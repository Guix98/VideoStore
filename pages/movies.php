<?php
$head = include('../components/header.php');
?>

<body>
    <br><br>
    <h1 class="text-center">Video Store</h1>
    <ul class="nav nav-pills is-danger">
        <li class="nav-item">
            <a class="nav-link " href="../index.php">Rents</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Customers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="./pages/movies.php">Movies</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Log Out</a>
        </li>
    </ul>
    <h2 class="text-center">Rent</h2>
    <div class="card text-white bg-dark" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>

        </div>
    </div>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>

</html>