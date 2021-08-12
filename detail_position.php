<!DOCTYPE html>
<html lang="en" id="detail_html">

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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/v4-shims.css">
  <!-- animation style link -->
  <link rel="stylesheet" href="/lbcamp/css/animation.css">
  <!-- main style link -->
  <link rel="stylesheet" href="/lbcamp/css/style.css">
</head>

<body id="detail_page">
  <div class="wrap">
    <!-- header -->
    <?php include $_SERVER["DOCUMENT_ROOT"].'/lbcamp/include/header.php';?>
    <div class="details">
      <div class="detail_bg">
        <!-- <img src="img/ex.jpg" alt=""> -->
        <!-- <span class="radi_bar"></span> -->
      </div>
      <div class="detail_contents">
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/lbcamp/js/detail_position.js"></script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkodlbpvMkU8GwdEbr3RI9CWKmVpca3kc&region=kr">
  </script>
  <script src="/lbcamp/js/main.js"></script>
  <script>
  window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    if (window.pageYOffset > 0) {
      header.classList.add('sticky');
    } else {
      header.classList.remove('sticky');
    }
  })
  </script>
</body>

</html>