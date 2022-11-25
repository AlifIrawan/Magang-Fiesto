<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <title>my All project</title>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="form-signin" action="Dashboard.php" method="POST">
                    <h2 class="form-signin-heading pt-4 pb-2">Silahkan Masuk</h2>
                    <label for="email" class="sr-only">Alamat email</label>
                    <input type="email" name="email" id="email" class="form-control mb-3" placeholder="Alamat Email"
                        required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control mb-3"
                        placeholder="Password" required>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="mb-2" value="remember-me"> Ingat saya
                        </label>
                    </div>
                    <button onclick="login()" id="submit" class="btn btn-lg btn-primary btn-block" type="submit"><i
                            class="fa fa-sign-in">&nbsp;</i>Sign in</button>
                </form>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src=" js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function login() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            if (email == "haikal@gmail.com" && password == "admin") {
                alert("Selamat anda bisa masuk!!");
            } else {
                alert("Anda bukan admin");
            }
        }
    </script>
</body>

</html>