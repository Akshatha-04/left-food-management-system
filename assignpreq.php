<?php
    include("session.php");

    $ins = mysqli_query($con, "SELECT * FROM inspector where status = 'active'");
    if(isset($_POST['add']))
    {
        $inspectorid = $_POST['inspectorid'];
        $id = $_GET['id'];
        if(mysqli_query($con,"UPDATE `pickuprequest` SET `inspectorId`='$inspectorid',`status`='Inspector Assigned' WHERE `id`='$id'"))
        {
            echo '<script>alert("Assigned successfully"); window.location.href = "opickupreq.php";</script>';
        }
        else
        {
            echo '<script>alert("Failed"); window.location.href = "npickupreq.php";</script>';
        }

    }
?>
<!DOCTYPE html>

<head>
    <title>Left Food Automation</title>
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
    <link rel="stylesheet" href="css/morris.css" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="css/monthly.css">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="js/jquery2.0.3.min.js"></script>
    <script src="js/raphael-min.js"></script>
    <script src="js/morris.js"></script>
</head>

<body>
    <section id="container">

        <?php
				include("nav.php");

			?>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <div class="form-w3layouts">
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    Assign Request
                                </header>
                                <div class="panel-body">
                                    <div class="position-center">
                                        <form role="form" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Select Inspector</label>
                                                        <select class="form-control" name="inspectorid">
                                                            <?php
                                                            while($r = mysqli_fetch_array($ins))
                                                            {
                                                                echo "<option value='$r[0]'>$r[1]</option>";
                                                            }
                                                        ?>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="col-lg-12" style="margin-top:20px"> <input type="submit"
                                                        name="add" class="btn btn-info" value="Assign"></div>
                                            </div>




                                        </form>
                                    </div>

                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </section>
            <?php
				include("footer.php");
		   ?>
        </section>
        <!--main content end-->
    </section>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="js/jquery.scrollTo.js"></script>
    <!-- morris JavaScript -->
    <!-- calendar -->
    <script type="text/javascript" src="js/monthly.js"></script>

    <!-- //calendar -->
</body>

</html>