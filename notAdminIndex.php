<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LogInn - Home</title>
    <link rel="icon" href="img/loginn-logo.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-black text-light">
    <nav class="navbar mt-0"
        style="background-color: #fd7e1480; backdrop-filter: blur(10px); border-bottom: solid 1px #fd7e14;">
        <div class="container-fluid justify-content-between align-items-center px-5">
            <a class="navbar-brand">
                <img src="img/loginn-logo.png" alt="logo" style="width: 3rem; height: auto">
            </a>
            <form class="d-flex" role="search">
                <a href="logout.php" class="btn btn-outline-warning" type="submit">Logout</a>
            </form>
        </div>
    </nav>
    <h1 class="text-center text-warning my-4 pb-3" style="border-bottom: 1px solid #fd7e14; width: 50%; margin: 0 auto">
        Home</h1>
    <div class="text-center p-5 container text-center text-light my-4" style="width: 70%; margin: 0 auto">
        <h5 class="h1 fw-normal">Bentornato<span class="fw-bolder" style="color: #fd7e14">
                <?php echo $_SESSION['userLogin']['firstname'] ?>
            </span>!
        </h5>
        <p class="mt-0 h2 fw-light">Purtroppo non sei ancora <span class="text-warning">amministratore</span>!</p>
    </div>

    <div class="container mt-3 py-3 text-center d-flex flex-column align-items-center fw-light"
        style="width: 30%; margin: 0 auto; border-bottom: 1px solid #fd7e14; border-top: 1px solid #fd7e14;">
        <span>Solo gli <span class="text-warning">amministratori</span> possono accedere e gestire gli utenti nel
            pannello di amministrazione.</span>
        <span>Per informazioni, contatta un <span class="text-warning">amministratore.</span></span>
        <span>Ci scusiamo per l'inconveniente.</span>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>