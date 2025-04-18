<?php
// Begin the session
session_start();

// Verify that the user is not already logged otherwise redirect them to login
if (!isset($_SESSION["userid"]) || $_SESSION["userid"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Allison Valdez" />
    <title>Welcome Landing Page <?php echo $_SESSION["name"]; ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link
        href="https://urldefense.proofpoint.com/v2/url?u=https-3A__cdn.jsdelivr.net_npm_bootstrap-2Dicons-401.5.0_font_bootstrap-2Dicons.css&d=DwIFAg&c=qgVugHHq3rzouXkEXdxBNQ&r=luG00nudVsROYkGFlrzv1wBwclTx3tjYar6JDPQLUDo&m=_NF54L6mvmzJX_Ro7O4Ljb1SvTNu58-m0GdKQ0odfm4xenjs8h3zlKzlnfOlQn4g&s=0mvxfy6gyz9q2G2-4zbNYmEPBGRtkOrk3AeZk9bWeoE&e= "
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

</head>

<body>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.html">
                <img src="./assets/icon.jpg" alt="MMM Logo" width="150" height="125" class="rounded-circle">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">

                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Home</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="sales.html">Sale & Clearance Items</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="promos.html">Promotions</a></li>
                            <li><a class="dropdown-item" href="events.html">Events</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                </ul>

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">

                    <li class="nav-item">
                        <form class="d-flex">
                            <button type="button" class="btn btn-dark me-2 ms-auto">
                                <a class="btn-dark link-light" href="signin.html">Log In</a>
                            </button>
                        </form>
                    </li>

                    <li class="nav-item">
                        <form class="d-flex">
                            <button class="btn btn-outline-dark me-2 ms-auto" type="submit">
                                <i class="bi-cart-fill me-1"></i>
                                Cart
                                <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Mayar's Meat Market</h1>
                <p class="lead fw-normal text-white-50 mb-0">Hand Picked Cuts & Unmatched Free Range Quality</p>
                <p class="lead fw-normal text-white-50 mb-0">100% Hand Slaughtered Halal</p>
                <p class="lead fw-normal text-white-50 mb-0">Open 7 Days a Week (10am-6pm)</p>
                <p class="lead fw-normal text-white-50 mb-0">510-963-5412</p>
                <div class="row">
                    <a class="nav-link col-sm-3" aria-current="page"
                        href="https://urldefense.proofpoint.com/v2/url?u=https-3A__www.yelp.com_biz_mayars-2Dmeat-2Dmarket-2Dhayward&d=DwIFAg&c=qgVugHHq3rzouXkEXdxBNQ&r=luG00nudVsROYkGFlrzv1wBwclTx3tjYar6JDPQLUDo&m=_NF54L6mvmzJX_Ro7O4Ljb1SvTNu58-m0GdKQ0odfm4xenjs8h3zlKzlnfOlQn4g&s=iRSIk064CL_n4TPOetiZ4ILpX4k-AM6ihXxE9gXhubg&e= ">
                        <img src="./assets/yelp.jpg" alt="Yelp" width="30" height="30"
                            class="rounded-circle img-thumbnail">
                    </a>

                    <a class="nav-link col-sm-3" aria-current="page"
                        href="https://urldefense.proofpoint.com/v2/url?u=https-3A__www.facebook.com_p_Mayars-2DMeat-2DMarket-2D61567780493964_&d=DwIFAg&c=qgVugHHq3rzouXkEXdxBNQ&r=luG00nudVsROYkGFlrzv1wBwclTx3tjYar6JDPQLUDo&m=_NF54L6mvmzJX_Ro7O4Ljb1SvTNu58-m0GdKQ0odfm4xenjs8h3zlKzlnfOlQn4g&s=J6FBY0gMmjgw0VOb8G63pUposJXuTGnw92D6P44d0Tk&e= ">
                        <img src="./assets/facebook.jpg" alt="Yelp" width="30" height="30"
                            class="rounded-circle img-thumbnail">
                    </a>

                    <a class="nav-link col-sm-3" aria-current="page"
                        href="https://urldefense.proofpoint.com/v2/url?u=https-3A__www.instagram.com_mayarsmeatmarket_-3Fhl-3Den&d=DwIFAg&c=qgVugHHq3rzouXkEXdxBNQ&r=luG00nudVsROYkGFlrzv1wBwclTx3tjYar6JDPQLUDo&m=_NF54L6mvmzJX_Ro7O4Ljb1SvTNu58-m0GdKQ0odfm4xenjs8h3zlKzlnfOlQn4g&s=DSd7gFHgsV7wVScsnqabVyXIo_LflL0JkehJWcxBzqs&e= ">
                        <img src="./assets/instagram.jpg" alt="Yelp" width="30" height="30"
                            class="rounded-circle img-thumbnail">
                    </a>

                    <a class="nav-link col-sm-3" aria-current="page" href="mailto:mayarsmarket@gmail.com">
                        <img src="./assets/email.jpg" alt="Yelp" width="30" height="30"
                            class="rounded-circle img-thumbnail">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <h1>Hello, <strong><?php echo $_SESSION["name"]; ?></strong>. Welcome!</h1>
            </div>
            <p>
                <a href="logout.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Log
                    Out</a>
            </p>

        </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Mayar's Meat Market &copy; 2025</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script
        src="https://urldefense.proofpoint.com/v2/url?u=https-3A__cdn.jsdelivr.net_npm_bootstrap-405.2.3_dist_js_bootstrap.bundle.min.js&d=DwIFAg&c=qgVugHHq3rzouXkEXdxBNQ&r=luG00nudVsROYkGFlrzv1wBwclTx3tjYar6JDPQLUDo&m=_NF54L6mvmzJX_Ro7O4Ljb1SvTNu58-m0GdKQ0odfm4xenjs8h3zlKzlnfOlQn4g&s=SASoPfqBWSzPUFDHDxfJHFAOVRjalvnt6v6qS5WNKuE&e= "></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>