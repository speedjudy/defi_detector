<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Defi detective</title>
    <!-- loader-->
    <link href="../assets/css/pace.min.css" rel="stylesheet" />
    <script src="../assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="../assets/images/logo-icon.png" type="image/x-icon">
    <!-- Bootstrap core CSS-->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="../assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Custom Style-->
    <link href="../assets/css/app-style.css" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme1">

    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->

    <!-- Start wrapper-->
    <div id="wrapper">

        <div class="loader-wrapper">
            <div class="lds-ring">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="card card-authentication1 mx-auto my-5">
            <div class="card-body">
                <div class="card-content p-2">
                    <div class="text-center">
                        <img src="../assets/images/logo-icon.png" alt="logo icon" style="width:40% !important;">
                    </div>
                    <div class="card-title text-uppercase text-center py-3">Sign In</div>
                    <form>
                        <div class="form-group">
                            <label for="username" class="sr-only">Username</label>
                            <div class="position-relative has-icon-right">
                                <input type="text" id="username" class="form-control input-shadow" placeholder="Enter Username">
                                <div class="form-control-position">
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pwd" class="sr-only">Password</label>
                            <div class="position-relative has-icon-right">
                                <input type="password" id="pwd" class="form-control input-shadow" placeholder="Enter Password">
                                <div class="form-control-position">
                                    <i class="icon-lock"></i>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-light btn-block signin_btn">Sign In</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- sidebar-menu js -->
    <script src="../assets/js/sidebar-menu.js"></script>

    <!-- Custom scripts -->
    <script src="../assets/js/app-script.js"></script>
    <script>
        $(".signin_btn").click(function() {
            signIn();
        });
        $("#pwd").keypress(function() {
            if (event.keyCode==13) {
                signIn();
            }
        });

        function signIn() {
            var name = $("#username").val();
            var pwd = $("#pwd").val();
            $.get(
                "adminDefi/checkuser", {
                    n: name, //name
                    p: pwd //pwd
                },
                function(res) {
                    if (res == "wrong user") {
                        alert("The user name is wrong.");
                        $("#username").focus();
                    } else if (res == "wrong pwd") {
                        alert("The password is wrong.");
                        $("#pwd").focus();
                    } else {
                        sessionStorage.setItem("x-t", res);
                        sessionStorage.setItem("user", name);
                        location.href = 'admin/dapps';
                    }
                }
            );
        }
    </script>
</body>

</html>