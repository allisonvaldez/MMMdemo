<?php

require_once "config.php";
require_once "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $fullname = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $confirm_password = trim($_POST["confirm_password"]);
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    if ($query = $db->prepare("SELECT * FROM users WHERE email = ?")) {
        $error = "";

        // Bind the parameters (s = string, i = int, b = blob, etc)
        $query->bind_param("s", $email);
        $query->execute();

        // store the results to check if the account already exists in the database
        $query->store_result();
        if ($query->num_rows > 0) {
            $error .= "<p class='error'>The email address is already registered!</p>";
        } else {
            // proceeed to a creating a new user and validate their password
            if (strlen($password) < 6) {
                $error .= "<p class='error'>Password must have atleast 6 characters.";
            }

            // validate confirm password
            if (empty($confirm_password)) {
                $error .= "<p class='error'>Please enter confirm password.</p>";
            } else {
                if (empty($error) && ($password != $confirm_password)) {
                    $error .= "<p class='error'>Password did not match.</p>";
                }
            }

            if (empty($error)) {

            } else {
                $error .= "<p class='error'>Something went wrong!</p>";
            }
        }
    }
}
$query->close();
$insertQuery->close();
// Close DB connection
mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registration</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link
        href="https://urldefense.proofpoint.com/v2/url?u=https-3A__cdn.jsdelivr.net_npm_bootstrap-2Dicons-401.5.0_font_bootstrap-2Dicons.css&d=DwIFAg&c=qgVugHHq3rzouXkEXdxBNQ&r=luG00nudVsROYkGFlrzv1wBwclTx3tjYar6JDPQLUDo&m=_NF54L6mvmzJX_Ro7O4Ljb1SvTNu58-m0GdKQ0odfm4xenjs8h3zlKzlnfOlQn4g&s=0mvxfy6gyz9q2G2-4zbNYmEPBGRtkOrk3AeZk9bWeoE&e= "
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="text-center">
    <div class="row">
        <!-- Section-->
        <section class="py-5 vh-100">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    <div class="py-5 h-100">
                        <main class="form-signin">
                            <img class="mb-3" src="./assets/icon.jpg" alt="" width="300" height="350">

                            <h1 class="h3 mb-3 fw-normal">Register For An Account</h1>
                            <p> Complete the form to register for an account:</p>

                            <form action="" method="post">

                                <div class="mb-3 form-floating form-group">
                                    <label>Full Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="John Doe" required>
                                </div>

                                <div class="mb-3 form-floating form-group">
                                    <label>Email Address</label>
                                    <input type="email" name="email" class="form-control" placeholder="email@name.com"
                                        required>
                                </div>

                                <div class="mb-3 form-floating form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="************" required>
                                </div>

                                <div class="mb-3 form-floating form-group">
                                    <input type="submit" name="submit"
                                        class="w-100 btn btn-lg btn-primary bg-dark text-white" value="submit">
                                </div>

                                <p>Already have an account?
                                    <a class="btn-danger link-dark" href="login.php">Log In</a>
                                </p>
                            </form>
                    </div>
                </div>
            </div>
            </form>

            </main>

    </div>
    </div>
    </div>
    </section>
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
    </div>
</body>

</html>