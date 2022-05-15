<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    @import 'https://fonts.googleapis.com/css?family=Kanit|Noto Serif Thai|Pridi|Taviraj|Maitree|Noto Serif Thai';

    p.chart1 {
      color: white;
      font-weight: 50px;
      font-size: 25px;
      font-family: 'Kanit', sans-serif;
    }

    p.chart {
      color: lightgrey;
      font-size: 15px;
      font-family: 'Kanit', sans-serif;
    }
  </style>

  <?php

  if (!$_SESSION["UserID"]) {
  } else { ?>
    <title>MENU_ADMIN</title>
    <style>

    </style>
</head>

<body>
  <nav class="navbar fixed-top navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <a class="navbar-brand" href="#">Chart Preview</a>  reques_chart_a.php -->
    <p class="chart1">Chart Preview</p>
    <p class="chart"><?php echo $_SESSION['HR_USERNAME']; ?>
      <a href="reques_chart_a.php" class="fa fa-bell" aria-hidden="true" id="noti_number"></a>
    </p>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">

      </ul>
      <!-- <span class="navbar-text">
      Navbar text with an inline element
    </span> -->
    </div>

    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item">
          <a class="nav-link" href="home_admin.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reques_chart_a.php">Reques Chart <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="S_Chart_admin_DS.php">System Chart</a>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link" href="logout.php">Logout</a> -->
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        </li>
      </ul>
      <!-- <span class="navbar-text">
      Navbar text with an inline element
    </span> -->
    </div>
  </nav>
  </div>

</body>

</html>
<?php } ?>