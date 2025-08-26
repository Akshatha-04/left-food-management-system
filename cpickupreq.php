<?php
    include("session.php");
    $sql = mysqli_query($con, "SELECT pickuprequest.*,user.name AS user_name, inspector.name AS inspector_name FROM pickuprequest JOIN user ON pickuprequest.uid = user.id  LEFT JOIN inspector ON pickuprequest.inspectorId = inspector.id  WHERE pickuprequest.status = 'closed'");
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

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
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
                                    Closed Pickup Request Details
                                </header>
                                <div class="panel-body">
                                    <div>
                                        <table class="table" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Location</th>
                                                    <th>Date</th>
                                                    <th>User</th>
                                                    <th>Inspector</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    while ($row = mysqli_fetch_array($sql)){
                                                        echo "<tr>";
                                                        echo "<td><img src='data:image/jpeg;base64," . base64_encode($row[3]) . "' alt='Image' height='100' weight='100'></td>";
                                                        echo "<td>".$row[1]."</td>";
                                                        echo "<td>".$row[2]."</td>";
                                                        echo "<td>".$row[4]."</td>";
                                                        echo "<td>".$row[5]."</td>";
                                                        echo "<td>".$row[9]."</td>";
                                                        echo "<td>".$row[10]."</td>";
                                                        echo "</tr>";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
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
    <script>
    $(document).ready(function() {
        let table = new DataTable('#myTable');
    });
    </script>
    <!-- //calendar -->
</body>

</html>