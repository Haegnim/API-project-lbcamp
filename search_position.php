<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
  <title>Go Campimg</title>
  <!-- Favicon Link -->
  <link rel="shortcut icon" href="/lbcamp/img/favicon.ico" type="image/x-icon" />
  <link rel="icon" href="/lbcamp/img/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="/lbcamp/img/favicon.ico" />
  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- owl.carousel style link -->
  <link rel="stylesheet" href="/lbcamp/css/owl.carousel.css">
  <!-- animation style link -->
  <link rel="stylesheet" href="/lbcamp/css/animation.css">
  <!-- main style link -->
  <link rel="stylesheet" href="/lbcamp/css/style.css">
</head>

<body>
  <div class="wrap">
    <!-- header -->
    <?php include $_SERVER["DOCUMENT_ROOT"].'/lbcamp/include/header.php';?>

    <!-- Map Box -->
    <div class="map_img" id="map">
      <!-- <img src="img/gocamp_map.jpg" alt=""> -->
    </div>

    <!-- search Bar -->
    <div class="contents_bar search_position">
      <div class="center">
        <div class="drop_bar">
          <div class="dropdown">
            <div class="select">
              <span id="query_val">내 주변 캠핑장 검색</span>
              <i class="fa fa-chevron-down"></i>
            </div>
            <ul class="dropdown_menu">
              <li><a href="/lbcamp/search_position.php?radi=10000">반경 10KM 검색</a></li>
              <li><a href="/lbcamp/search_position.php?radi=20000">반경 20KM 검색</a></li>
              <li><a href="/lbcamp/search_position.php?radi=30000">반경 30KM 검색</a></li>
              <li><a href="/lbcamp/search_position.php?radi=40000">반경 40KM 검색</a></li>
              <li><a href="/lbcamp/search_position.php?radi=50000">반경 50KM 검색</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end of contents_bar -->
    <div class="bt_box">
      <span>
        <i class="fa fa-chevron-up"></i>
      </span>
      <div class="bt_sl carousel_section">
        <div class="carousel_container">
          <div class="owl-carousel owl-theme" id="contents_box">

          </div>
          <!-- end of owl-carousel --wrap all items -->
        </div>
        <!-- end of carousel_containter -->
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkodlbpvMkU8GwdEbr3RI9CWKmVpca3kc&region=kr">
    </script>
    <script src="/lbcamp/js/current_position.js"></script>
    <script src="/lbcamp/js/owl.carousel.js"></script>
    <script src="/lbcamp/js/main.js"></script>
</body>

</html>