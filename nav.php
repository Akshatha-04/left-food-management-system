               <!--header start-->
               <header class="header fixed-top clearfix">
                   <!--logo start-->
                   <div class="brand">
                       <a href="main.php" class="logo">
                           Left Food
                       </a>
                       <div class="sidebar-toggle-box">
                           <div class="fa fa-bars"></div>
                       </div>
                   </div>
                   <!--logo end-->
                   <div class="nav notify-row" id="top_menu">
                       <?php
					include("notification.php");
				?>
                   </div>
                   <div class="top-nav clearfix">
                       <?php
                include("usersection.php");
				?>
                   </div>
               </header>
               <!--header end-->

               <!--sidebar start-->
               <aside>
                   <div id="sidebar" class="nav-collapse">
                       <!-- sidebar menu start-->
                       <div class="leftside-navigation">
                           <ul class="sidebar-menu" id="nav-accordion">
                               <li>
                                   <a href="main.php">
                                       <i class="fa fa-dashboard"></i>
                                       <span>Dashboard</span>
                                   </a>
                               </li>

                               <li class="sub-menu">
                                   <a href="javascript:;">
                                       <i class="fa fa-book"></i>
                                       <span>Organization</span>
                                   </a>
                                   <ul class="sub">
                                       <li><a href="addorg.php">Add</a></li>
                                       <li><a href="vieworg.php">View</a></li>
                                   </ul>
                               </li>

                               <li class="sub-menu">
                                   <a href="javascript:;">
                                       <i class="fa fa-th"></i>
                                       <span>Food Checker</span>
                                   </a>
                                   <ul class="sub">
                                       <li><a href="addfcheck.php">Add</a></li>
                                       <li><a href="viewfcheck.php">View</a></li>
                                   </ul>
                               </li>

                               <li class="sub-menu">
                                   <a href="javascript:;">
                                       <i class="fa fa-envelope"></i>
                                       <span>Pickup Request </span>
                                   </a>
                                   <ul class="sub">
                                       <li><a href="npickupreq.php">New</a></li>
                                       <li><a href="opickupreq.php">Others</a></li>
                                       <li><a href="cpickupreq.php">Closed</a></li>
                                       <li><a href="rpickupreq.php">Rejected</a></li>
                                   </ul>
                               </li>

                               <li class="sub-menu">
                                   <a href="javascript:;">
                                       <i class="fa fa-envelope"></i>
                                       <span>Food Request </span>
                                   </a>
                                   <ul class="sub">
                                       <li><a href="nfoodreq.php">New</a></li>
                                       <li><a href="cfoodreq.php">Closed</a></li>
                                   </ul>
                               </li>

                               <li class="sub-menu">
                                   <a href="javascript:;">
                                       <i class="fa fa-envelope"></i>
                                       <span>Notification </span>
                                   </a>
                                   <ul class="sub">
                                       <li><a href="anot.php">Add</a></li>
                                       <li><a href="vnot.php">View</a></li>
                                   </ul>
                               </li>

                               <li>
                                   <a href="userlist.php">
                                       <i class="fa fa-bullhorn"></i>
                                       <span>Users List </span>
                                   </a>
                               </li>

                               <li>
                                   <a href="feedback.php">
                                       <i class="fa fa-bullhorn"></i>
                                       <span>Feedback List </span>
                                   </a>
                               </li>

                               <li>
                                   <a href="upass.php">
                                       <i class="fa fa-user"></i>
                                       <span>Update Password</span>
                                   </a>
                               </li>
                           </ul>
                       </div>
                       <!-- sidebar menu end-->
                   </div>
               </aside>