<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.122.0" />
    <title>LogInn - Accedi</title>
    <link rel="icon" href="img/loginn-logo.png" type="image/png">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <meta name="theme-color" content="#712cf9" />

    <link rel="stylesheet" href="css/style.css" />
    <link href="https://getbootstrap.com/docs/5.3/examples/sign-in/sign-in.css" rel="stylesheet" />
</head>

<body class="d-flex align-items-center py-4 bg-black">
    <main class="form-signin w-100 m-auto pt-0" style="
            background-color: #fd7e1420;
            border: #fd7e14 solid 1px;">
        <form action="controller.php" method="post" class="text-center">
            <div class="d-flex flex-column align-items-center justify-content-center my-2"
                style="width: 100%; margin: auto;">
                <div class="pb-2 mt-1">
                    <img src="img/loginn-logo.png" alt="logo" style="width: 6.5rem; height: auto">
                </div>
                <div class="pt-2 mb-2" style="border-bottom: solid 1px #fd7e14; width: 100%;">
                </div>
            </div>


            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email"
                    value="" style="
                background-color: #FFFFFF;
                border-color: #fd7e14;
                color: #331904 !important;
                " />
                <label for="floatingInput" class="fw-light" style="color: #fd7e14;">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password"
                    value="" style="
                background-color: #FFFFFF;
                border-color: #fd7e14;
                color: #331904 !important;
                " />
                <label for="floatingPassword" class="fw-light" style="color: #fd7e14;">Password</label>
            </div>

            <button class="btn btn-outline-warning w-50 py-2" type="submit" style="margin: auto">
                Accedi
            </button>
            <?php
            if (isset($_SESSION['error'])) {
                echo '<div class="alert alert-danger my-3" role="alert">' . $_SESSION['error'] . '</div>';
            }
            ?>
            <p class="mt-5 pb-3 fw-light text-center text-light"
                style="font-size: 0.7rem; border-bottom: 1px solid #fd7e14">&copy; 2024 Company Name. Tutti i diritti
                riservati.</p>
            <p class="mt-1 mb-3 fw-light text-center text-light" style="font-size: 0.6rem">I dati personali forniti
                durante l'accesso a questa pagina saranno trattati con la massima riservatezza. Ci impegniamo a
                proteggere la tua privacy e ad utilizzare le informazioni solo per scopi legittimi relativi ai nostri
                servizi. Per ulteriori dettagli, consulta la nostra <a style="color: #fd7e14;" href="#">Informativa
                    sulla Privacy</p>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>