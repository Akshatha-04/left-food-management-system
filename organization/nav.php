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
                                       <span>Food Request</span>
                                   </a>
                                   <ul class="sub">
                                       <li><a href="nfrequest.php">Add</a></li>
                                       <li><a href="ofrequest.php">Open </a></li>
                                       <li><a href="cfrequest.php">Closed</a></li>
                                   </ul>
                               </li>

                               <li>
                                   <a href="notification.php">
                                       <i class="fa fa-bullhorn"></i>
                                       <span>Notification </span>
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