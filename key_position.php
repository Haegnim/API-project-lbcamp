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
        <div class="search_bar">
          <input type="text" placeholder="검색할 키워드를 입력해 주세요.">
          <button><img src="/lbcamp/img/gocamp_icon.png" alt=""></button>
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
    <script src="/lbcamp/js/key_position.js"></script>
    <script src="/lbcamp/js/owl.carousel.js"></script>
    <script src="/lbcamp/js/main.js"></script>
    <script>
    const key_btn = document.querySelector('.search_bar button');
    key_btn.addEventListener('click', function() {
      const key_val = document.querySelector('.search_bar input').value;
      location.href = `/lbcamp/key_position.php?key_val=${key_val}`;
    })
    </script>
</body>

</html>