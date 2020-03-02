
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?php echo htmlspecialchars($_SESSION["email"]); ?></span>
                 
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Our Foods</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="foodcat.php">Food Category</a></li>
                  <li class="nav-item"> <a class="nav-link" href="foodlist.php">Food list</a></li>
                   <li class="nav-item"> <a class="nav-link" href="foodgall.php">Food Gallery</a></li>
                  <li class="nav-item"> <a class="nav-link" href="foodpage.php">Food Page Title</a></li>
                </ul>
              </div>
            </li>
            
               <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#food-order" aria-expanded="false" aria-controls="food-order">
                <span class="menu-title">Food Order</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="food-order">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="odlist.php">order list</a></li>
                  <li class="nav-item"> <a class="nav-link" href="odhist.php">order history 
                  </a></li>
                </ul>
              </div>
            </li>
            
             <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#reservation" aria-expanded="false" aria-controls="reservation">
                <span class="menu-title">Reservation</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="reservation">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="reso.php">Reservation Order</a></li>
                  <li class="nav-item"> <a class="nav-link" href="resl.php">Reservation Log                </a></li>
                  <li class="nav-item"> <a class="nav-link" href="resp.php">Reservation Page                </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#events" aria-expanded="false" aria-controls="events">
                <span class="menu-title">Events</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="events">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="eventlist.php">Events lists</a></li>
                  <li class="nav-item"> <a class="nav-link" href="newevent.php">New Event</a></li>
                
                </ul>
              </div>
            </li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#announcement" aria-expanded="false" aria-controls="announcement">
                <span class="menu-title">Announcement</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="announcement">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="categ.php">Category </a></li>
                  <li class="nav-item"> <a class="nav-link" href="announcement.php">Announcement               </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item sidebar-actions">
              <span class="nav-link">
              </span>
            </li>
          </ul>
        </nav>