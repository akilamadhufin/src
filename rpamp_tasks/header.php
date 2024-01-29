<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo $title; ?>
    </title>
    <link rel="icon" href="images/hotpot.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="styles.css">
</head>
  <body>
    <nav class="navbar navbar-expand-lg bg-white shadow py-0 sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="images/logonew2.png" alt="" width="100" height="60">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">

              <li class="nav-item">
                <a class="nav-link active"  href="ex1.php">EX1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="ex2.php">EX2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="#menu">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="#alumni">Alumni</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="#reviews">Reviews</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="#footer">Contact us</a>
              </li>
             
            </ul>
            <div class="d-flex" style="justify-content: flex-end;">
            <a href="#" class="btn btn-brand position-relative me-3">Login<span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
              <span class="visually-hidden"> New Alerts</span>
            </span></a>
            <a href="#reservation" class="btn btn-brand ms-auto">Book Table</a>
          </div>
          </div>
        </div>
      </nav>
      <div id="heroslider" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item text-center  bg-cover vh-100 active slide-1">
            <div class="container h-100 d-flex align-items-center justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h6 class="text-white">Welcome to HOT POT</h6>
                        <h1 class="display-1 fw-bold text-white">Grilled & Spicy Flavored</h1>
                        <a href="#menu" class="btn btn-brand">Check Menu</a>
                    </div>
                </div>
            </div>

           
          </div>
          <div class="carousel-item text-center  bg-cover vh-100 slide-2">
            <div class="container h-100 d-flex align-items-center justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h6 class="text-white">Welcome to HOT POT</h6>
                        <h1 class="display-1 fw-bold text-white">Fresh & Tasty Food</h1>
                        <a href="#menu" class="btn btn-brand">Check Menu</a>
                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item text-center  bg-cover vh-100 slide-3">
            <div class="container h-100 d-flex align-items-center justify-content-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h6 class="text-white" >Welcome to HOT POT</h6>
                        <h1 class="display-1 fw-bold text-white">Healthy & Tasty</h1>
                        <a href="#menu" class="btn btn-brand">Check Menu</a>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroslider" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroslider" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>