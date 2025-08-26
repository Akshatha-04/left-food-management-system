<!DOCTYPE html>

<head>
    <title>Left Food Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/style-responsive.css" rel="stylesheet" />
    <!-- font CSS -->
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font.css" type="text/css" />
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="js/jquery2.0.3.min.js"></script>
    <style>
    body {
        margin: 0;
        padding: 0;
        min-height: 100vh;
        /* Set the minimum height of the viewport */
        display: flex;
        flex-direction: column;
    }

    .log-w3 {
        flex: 1;
    }

    footer {
        background-color: #8b5c7e !important;
        padding: 20px;
        color: #fff !important;
    }

    a {
        color: #fff !important;
    }

    a:hover {
        color: #FFB6C1 !important;
        /* Red color for the text */
        text-decoration: underline;
        /* Underline the link on hover */
        font-weight: bold;
    }

    h3 {
        display: flex;
        justify-content: space-evenly
    }
    </style>
</head>

<body>
    <div class="log-w3">
        <div class="w3layouts-main">
            <h2>User Sign In </h2>
            <form method="post">
                <input type="email" class="ggg" name="email" placeholder="Email" required="">
                <input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-lg-6">
                        <input type="submit" value="Sign In" name="login">
                    </div>
                    <div class="col-lg-6">
                        <input type="button" class="leftcustombtn" onclick="window.location.href = 'signup.php';"
                            value="Sign Up">
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <a href="../">Go back Main Menu</a>
                    </div>
                    <div class="col-lg-4"></div>
                </div>


            </form>
        </div>
    </div>
    <footer style="float:bottom">
        <h3>
            <a href="../organization/">Organization</a>
            <a href="../inspector/">Inspector</a>
            <a href="../">Admin</a>
        </h3>
    </footer>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="js/jquery.scrollTo.js"></script>
</body>

</html>

<?php
include("config.php");
if(isset($_POST['login']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM user WHERE email = '$email' AND pass = '$password'";
	$result = mysqli_query($con, $sql);
    $r = mysqli_fetch_array($result);

	session_start();
	$_SESSION['uid']  = $r[0];
	$_SESSION['uname']  = $r[1];
	if (mysqli_num_rows($result) == 1) {
		// Valid credentials, redirect to main.php
		echo '<script> window.location.href = "main.php";</script>';
	} else {
		// Invalid credentials, redirect back to login page or show an error message
		echo '<script>alert("Invalid email or password"); window.location.href = "index.php";</script>';
	}

}

?>