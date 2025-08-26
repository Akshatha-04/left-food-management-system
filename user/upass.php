<?php
    if(isset($_POST['add']))
    {
   
	$opass=$_POST['opass'];
	
	$npass=$_POST['npass'];
	
	$acheck=mysqli_query($con,"select * from user where pass='$opass' and id='$sid'");

	
	if(mysqli_num_rows($acheck)!=0)
	{
				if(mysqli_query($con,"UPDATE `user` SET `pass`='$npass' WHERE `pass`='$opass' and id='$sid'"))
					{
						
						echo "<script language='JavaScript' type='text/javascript'>
						alert('Updated Successfully');
						</script>";
					echo "<script> window.location.assign('upass.php'); </script>";
					}
					else
					{
						echo "<script language='JavaScript' type='text/javascript'>
						alert('Failed ');
						</script>";
						echo "<script> window.location.assign('upass.php'); </script>";
					
					
					}
		
	
	}
	
	else
	{
		echo "<script language='JavaScript' type='text/javascript'>
alert('Password Wrong');
</script>";
echo "<script> window.location.assign('upass.php'); </script>";
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
                                    Update Password
                                </header>
                                <div class="panel-body">
                                    <div class="position-center">
                                        <form role="form" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Old Password</label>
                                                        <input type="password" name="opass" class="form-control"
                                                            id="exampleInputPassword1" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">New Password</label>
                                                        <input type="password" name="npass" class="form-control"
                                                            id="exampleInputPassword1" placeholder="Email">
                                                    </div>
                                                </div>



                                                <div class="col-lg-12" style="margin-top:20px"> <input type="submit"
                                                        name="add" class="btn btn-info"></div>
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