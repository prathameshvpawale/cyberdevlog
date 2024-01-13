<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Boxicons CSS -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <title>cyberdexlog</title>
  <link rel="stylesheet" href="sstyle.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/stylewin.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body >
<nav class="navbar">
    <div class="logo_item">
      <i class="bx bx-menu" id="sidebarOpen"></i>
      </i><i class='bx bx-world' ></i>Cyberdevlog
    </div>



    <div class="navbar_content">
      <i class="bi bi-grid"></i>
      <i class='bx bx-sun' id="darkLight"></i>
    </div>
  </nav><body>
  <nav class="sidebar">
    <div class="menu_content">

      <ul class="menu_items">
        
        
        <li class="item">
          <a href="iindex.php" class="nav_link">
            <span class="navlink_icon">
            <i class='bx bx-home'></i>
            </span>
            <span class="navlink">home</span>
          </a>
        </li>
        
        <li class="item">
          <a class="nav_link" id="about">
            <span class="navlink_icon">
            <i class='bx bx-info-circle' ></i>
            </span>
            <span class="navlink">about</span>
          </a>
        </li>
        
        <li class="item">
          <a class="nav_link" id="contact">
            <span class="navlink_icon">
            <i class='bx bxs-contact' ></i>
            </span>
            <span class="navlink">contact</span>
          </a>
        </li>
      <?php if(!empty($_SESSION['username'])){ ?>
        <li class="item">
          <a href="add.php" class="nav_link">
            <span class="navlink_icon">
            <i class='bx bx-folder-plus' ></i>
            </span>
            <span class="navlink">Add post</span>
          </a>
        </li>
        <li class="item">
          <a href="result.php" class="nav_link">
            <span class="navlink_icon">
            <i class='bx bxs-dashboard' ></i>
            </span>
            <span class="navlink">Dashboard</span>
          </a>
        </li>
        
        <li class="item">
          <a href="logout.php" class="nav_link">
            <span class="navlink_icon">
            <i class='bx bx-log-out' ></i>
            </span>
            <span class="navlink">logout</span>
          </a>
        </li>
    <?php }else{  ?>
      <li class="item">
          <a href="login.php" class="nav_link">
            <span class="navlink_icon">
            <i class='bx bx-log-in' ></i>
            </span>
            <span class="navlink">login</span>
          </a>
        </li>
<?php  } ?>

<div class="bottom_content">
          <div class="bottom expand_sidebar">
            <span> Expand</span>
            <i class='bx bx-log-in'></i>
          </div>
          <div class="bottom collapse_sidebar">
            <span> Collapse</span>
            <i class='bx bx-log-out'></i>
          </div>
        </div>
    </div>
  </nav>



<div class="hidden">
        <div id="about-content">
            <h2>about@cyberdevlog:~$<span class="cursor">|</span></h2>
            <p>Welcome to [.................], your cybersecurity hub. Founded in [2023]</p>
            <p>
                we're dedicated to simplifying cybersecurity for all. Our experts craft informative articles, tutorials,
                and share up-to-date news, ensuring you stay safe online. We're committed to accuracy and your safety.
                Join our growing community and empower yourself in the digital world.
            </p>
        </div>

        <div id="contact-content">
            <h2>contact-cyberdevlog:~$<span class="cursor">|</span></h2>
            <p>Connect with us at [cyberdevlog]. Have questions or feedback? Reach out via email
                at[....................] or through phone at [.............]. Engage with us on social media for
                real-time updates.
                Alternatively, use our contact form for a quick message. Our address is [.....................]. We aim
                to respond promptly during our business hours: Mon-Fri, [8 AM] - [5 PM]. Your security
                matters to us, and we're here to assist you.</p>
            <ul>
                <li>Phone: ..................</li>
                <li>Email: ........................</li>
            </ul>
        </div>
    </div>

    <script src="js/winbox.bundle.js"></script>
    <script src="js/main.js"></script>
    <script src="sscript.js"></script>

</body>
</html>
