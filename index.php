<?php
include_once 'database.php';
error_reporting(0);
// Display data from database query
$sql = "SELECT * FROM information";
$query = mysqli_query($connection, $sql);

while ($data = mysqli_fetch_assoc($query)) {
  $file = $data['photo'];
  $code = $data['code'];
  $title = $data['title'];
  $description = $data['description'];
  $price = $data['price'];

  $tab_content .= '
            <div class="col">
            <div class="card h-100 custom-card">
              <div class="custom-card-imgage">
                <img width="250" height="250" src="data:image/jpg;base64,' . base64_encode($file) . '" class="card-img-top custom-main-image" alt="woman jacket">
              </div>
              <div class="card-body">
                <h3 class="card-title fw-bold">' . $title . '</h3>
                <p class="card-text">' . $description . '</p>
              </div>
              <div class="card-footer custom-card-footer d-flex justify-content-between  align-items-center">
                <h1 class="color-highlight">$' . $price . ' </h1>
                <button class="btn custom-btn"><img src="images/icon/shopping-cart 1.png" alt="card"> BUY NOW</button>
              </div>
            </div>
          </div>
  ';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Penguin Fashion eCommerce!</title>
  <script src="https://kit.fontawesome.com/f88312082e.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;1,100;1,300&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <main>

    <section class="hero-section">
      <header class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid custom-logo-image">
            <a class="navbar-brand" href="#">
              <img src="images/icon/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item custom-nav-item">
                  <a class="nav-link active fw-bold" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item custom-nav-item">
                  <a class="nav-link fw-bold" href="#">Product</a>
                </li>
                <li class="nav-item custom-nav-item">
                  <a class="nav-link fw-bold" href="admin.php">Admin</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h1 class="custom-hero-h1"><span class="color-highlight">Be the Penguins</span><br> of Winter</h1>
            <p>Lorem Ipsum is simply dummy text of the printing <br> and typesetting industry.</p>
            <button class="btn custom-btn"><img src="images/icon/shopping-cart 1.png" alt="card"> BUY NOW</button>
          </div>
          <div class="col-md-6 custom-hero-img">
            <img src="images/icon/banner.png" alt="profile">
          </div>
        </div>
      </div>

    </section>


    <section class="woman-jacket-section mt-5 pb-5">
      <div class="container">
        <h1 class="mb-5 custom-manjacket">Beautiful JACKET</h1>
        <div name="content" class="row row-cols-1 row-cols-md-3 g-4 custom-woman-image">

          <!-- src="data:image/jpg;base64,' . base64_encode($data['photo']) . '" -->
          <!-- <div name="content"> -->
          <?php
          if (isset($tab_content)) {
            echo $tab_content;
          }

          ?>
          <!-- </div> -->
        </div>
      </div>
    </section>


    <section class=" man-jacket-section mt-5 pb-5">
      <div class="container">
        <h1 class="mb-5 custom-manjacket">MAN JACKET</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 custom-woman-image">
          <div class="col">
            <div class="card h-100 custom-card">
              <div class="custom-card-imgage">
                <img src="images/photo/man1.jpg" class="card-img-top  custom-main-image" alt="man jacket">
              </div>
              <div class="card-body">
                <h3 class="card-title fw-bold">Yellow Coat Jacket</h3>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
              <div class="card-footer custom-card-footer d-flex justify-content-between  align-items-center">
                <h1 class="color-highlight">$299</h1>
                <button class="btn custom-btn"><img src="images/icon/shopping-cart 1.png" alt="card"> BUY NOW</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 custom-card">
              <div class="custom-card-imgage">
                <img src="images/photo/man2.jpg" class="card-img-top custom-main-image" alt="man jacket">
              </div>
              <div class="card-body">
                <h3 class="card-title fw-bold">Man Leather Jackets</h3>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
              <div class="card-footer custom-card-footer d-flex justify-content-between  align-items-center">
                <h1 class="color-highlight">$350</h1>
                <button class="btn custom-btn"><img src="images/icon/shopping-cart 1.png" alt="card"> BUY NOW</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 custom-card">
              <div class="custom-card-imgage">
                <img src="images/photo/man3.jpg" class="card-img-top  custom-main-image" alt="man jacket">
              </div>
              <div class="card-body">
                <h3 class="card-title fw-bold">Man Casual Jackets</h3>
                <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
              </div>
              <div class="card-footer custom-card-footer d-flex justify-content-between  align-items-center">
                <h1 class="color-highlight">$250</h1>
                <button class="btn custom-btn"><img src="images/icon/shopping-cart 1.png" alt="card"> BUY NOW</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="contact-section mt-5 pb-5">
      <div class="container">
        <div class="row custom-ads-image">
          <div class="col-md-5 d-flex">

            <div class="row">
              <div class="row custom-block mb-3 align-items-center">
                <div class="col-md-4 custom-icon custom-image-icon">
                  <img class="" src="images/icon/image 1.png" alt="">
                </div>
                <div class="col-md-8">
                  <h4 class="fw-bold">Find the Perfect Fit</h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, minus?</p>
                </div>
              </div>
              <div class="row custom-block mb-3 align-items-center">
                <div class="col-md-4 custom-icon custom-image-icon">
                  <img src="images/icon/image 2.png" alt="">
                </div>
                <div class="col-md-8">
                  <h4 class="fw-bold">Free Exchanges</h4>
                  <p>Everybody is different, which is why we offer styles for every body.</p>
                </div>
              </div>

              <div class="row custom-block mb-5 align-items-center">
                <div class="col-md-4 custom-icon custom-image-icon">
                  <img src="images/icon/image 3.png" alt="">
                </div>
                <div class="col-md-8">
                  <h4 class="fw-bold">Contact Our Seller</h4>
                  <p>Everybody is different, which is why we offer styles for every body.</p>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-7">
            <img src="images/icon/ads-banner.png" alt="">
          </div>
        </div>
      </div>
    </section>


    <section class="big-sell-section mt-5 pb-5">
      <div class="container">
        <h1 class="text-center mb-5">Big Sale!</h1>
        <div class="row">
          <div class="col-md-6 custom-big-sell-image mb-4">
            <img src="images/photo/blog_1.jpg" alt="">
          </div>
          <div class="col-md-6 justify-content-center custom-info">
            <h2>50% less in all items</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iste dolor accusantium facere corporis
              ipsum animi deleniti fugiat. Ex, veniam?</p>
            <button class="btn custom-btn"><img src="images/icon/shopping-cart 1.png" alt=""> BUY NOW</button>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="mt-5 text-center custom-footer pt-3">
    <p>© Penguin Fashion 2022, All Rights Reserved.</p>
  </footer>

  <!-- Javascript link added -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>