<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Gamer's Paradise
</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://kit.fontawesome.com/5991d9918f.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<style>
  .nav-link{
    font-size: 1.2rem;
}
#games-label {
    display: block;
    margin: 0 auto;
    text-align: center;
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
  }
  
  #games {
    display: block;
    margin: 0 auto;
    text-align: center;
    font-size: 16px;
    padding: 5px 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    width: 250px;
    max-width: 100%;
  }
  #games_div{
    background-color:  #ff4c68;
    padding: 20px;
    position: relative;
    text-align: center;

}

#pricing{
  background-color: #ef8172;
    text-align: center;
}
  
</style>  
</head>

<body>

    <section id="title">
        <div class="padd">
          <div class="container-fluid top">
            <nav class="navbar navbar-expand-lg navbar-dark" style="padding-bottom: 4.5rem;">
              <a class="navbar-brand" id="navbar" href="">Gamer's Paradise</a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Cloud</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cta">Download</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cta">Games</a>
                    </li>
                </ul>
             </div>
            </nav>
      
            <div class="row">
              <div class="col-lg-6">
                <h1>Discover the latest games and conquer new worlds.</h1>
                <button type="button" class="btn btn-dark btn-lg downloaded-button"><i class="fa-brands fa-apple"></i>&nbsp Download</button>
                <button type="button" class="btn btn-light btn-lg  downloaded-button"><i class="fa-brands fa-google-play"></i>&nbsp Download</button>
              </div>
              <div class="col-lg-6">
                <img class="img-fluid phone-image" src="images/iphone6.png" alt="iphone-mockup">
              </div>
            </div>
          </div>
        </div>
      </section>
      


  <!-- Features -->

  <section id="features">
    <div class="row features">
      <div class="col-lg-4">
        <i class="icon fa-solid fa-gamepad fa-4x"></i>
        <h3>Easy Gaming Management.</h3>
        <p>Manage your gaming store with ease, even if you're not a gamer.</p>
      </div>
      <div class="col-lg-4">
        <i class="icon fa-solid fa-user-shield fa-4x"></i>
        <h3>Secure Transactions</h3>
        <p>Your transactions are safe with us, we ensure top-notch security.</p>
      </div>
        <div class="col-lg-4">
          <i class="icon fa-solid fa-money-bill-alt fa-4x"></i>
          <h3>Best Price Guarantee</h3>
        <p>Find the best deals on games or we'll match the price.</p>
        </div>
    </div>
    </section>
    


  <!-- Testimonials -->

  <section id="testimonials">
    <div id="testimonial-slide" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h2>Our customers love us!</h2>
          <img class="testimonials-img" src="images/customer1.jpg" alt="customer-profile">
          <em>John Smith, Gaming Enthusiast</em>
        </div>
        <div class="carousel-item">
          <h2>Great customer support!</h2>
          <img class="testimonials-img" src="images/customer2.jpg" alt="customer-profile">
          <em>Jane Doe, Gamer</em>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">I never thought my gaming skills could attract so many friends. Thanks to the Gaming Shop Management, my social life is thriving!</h2>
          <img class="testimonials-img" src="images/gamer-img.jpg" alt="gamer-profile">
          <em>Max, California</em>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">The Gaming Shop Management is a lifesaver! It has helped me manage my game collection with ease and saved me so much time.</h2>
          <img class="testimonials-img" src="images/lady-img.jpg" alt="customer-profile">
          <em>Emily, New York</em>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-slide" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#testimonial-slide" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>

<section id="cloud">
<div id="games_div">
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Games
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Minecraft</a></li>
            <li><a class="dropdown-item" href="#">Fortnite</a></li>
            <li><a class="dropdown-item" href="#">Call of Duty</a></li>
            <li><a class="dropdown-item" href="#">Overwatch</a></li>
            <li><a class="dropdown-item" href="#">League of Legends</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

  </div>
</select>


</section>
  
  <!-- Pricing -->
<section id="pricing">
    <div class="row">
    <div class="col-lg-4 col-md-6 pricing-column" >
      <div class="card text-center">
        <div class="card-header">
          <h3>Beginner</h3>
        </div>
        <div class="card-body">
          <h2>Free</h2>
          <p>Access to 100 games</p>
          <p>No multiplayer access</p>
          <p>Ads between games</p>
          <button type="button" class="btn btn-outline-primary btn-block">Sign Up</button>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 pricing-column">
      <div class="card text-center">
        <div class="card-header">
          <h3>Pro</h3>
        </div>
        <div class="card-body">
          <h2>$29 / mo</h2>
          <p>Access to 500 games</p>
          <p>Multiplayer access</p>
          <p>No ads between games</p>
          <button type="button" class="btn btn-outline-primary btn-block">Sign Up</button>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card text-center pricing-column">
        <div class="card-header">
          <h3>Expert</h3>
        </div>
        <div class="card-body">      
            <h2>$59 / mo</h2>
            <p>Access to 1000+ games</p>
            <p>Multiplayer access</p>
            <p>No ads between games</p>
            <button type="button" class="btn btn-outline-primary btn-block ">Sign Up</button>
        </div>
        </div>
    </div>
  </div>
</section>
  
  


  <!-- Call to Action -->

  <section id="cta">

    <h3>To Download Our App Click Here</h3>
    <button type="button"  class="btn btn-dark btn-lg downloaded-button" ><i class="fa-brands fa-apple"></i>&nbsp Download</button>
      <button type="button" class="btn btn-Light btn-lg btn-outline-light downloaded-button"><i class="fa-brands fa-google-play"></i>&nbsp Download</button>

  </section>


  <!-- Footer -->

  <footer id="footer">
    <a href="" ><i class="fa-brands fa-whatsapp fa-bounce fa-2xl"></i></a>
    <a href=""><i class="fa-brands fa-facebook fa-bounce fa-2xl"></i></a>
    <a href=""><i class="fa-brands fa-instagram fa-bounce fa-2xl"></i></a>
    <a href=""><i class="fa-brands fa-twitter fa-bounce fa-2xl"></i></a>
    <a href=""><i class="fa-brands fa-snapchat fa-bounce fa-2xl"></i></a>
    <p>© Copyright Gamer's Paradise</p>

  </footer>


</body>

</html>
