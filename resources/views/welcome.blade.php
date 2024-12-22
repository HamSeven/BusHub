<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .hero-section {
        background-color: #f8ebd7; /* Light blue background */
        padding: 50px 0;
      }
      .hero-content h1 {
        font-weight: bold;
        color: #FB9907; /* Blue text */
      }
      .hero-content p {
        color: #6c757d; /* Grey text */
      }
      .get-started-btn {
        background-color: #FB9907; /* Red button */
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
      }
      .illustration img {
        max-width: 100%;
      }
      .testimonials-section {
        background-color: #f8f9fa; /* Light grey background */
        padding: 50px 0;
        text-align: center;
      }
      .testimonial-rating {
        font-size: 1.5rem;
        font-weight: bold;
        color: #ff9900; /* Orange for ratings */
      }
      .testimonial-img {
        width: 80px;
        height: 110px;

        margin-bottom: 10px;
      }
      .testimonial-img-container {
        text-align: center;
        margin-bottom: 10px;
      }
     


.footerBottom{
    background-color: #f8ebd7;
    padding: 20px;
    text-align: center;
}
.footerBottom p{
    color: rgb(0, 0, 0);
}
.designer{
    opacity: 0.7;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 400;
    margin: 0px 5px;
}
@media (max-width: 700px){
    .footerNav ul{
        flex-direction: column;
    } 
    .footerNav ul li{
        width:100%;
        text-align: center;
        margin: 10px;
    }
    .socialIcons a{
        padding: 8px;
        margin: 4px;
    }
  }

    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">
          <img src="/images/Bus-hub.png" alt="Logo" width="80" height="30" class="me-2">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Route</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/reportroad')}}">Report</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/about')}}">About Us</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/register')}}">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
      <div class="container">
        <div class="row align-items-center">
          <!-- Left Content -->
          <div class="col-md-6 hero-content">
            <h1>Connecting You to Destinations, Comfortably and On Time.</h1>
            <p>At Bus Hub, we believe that every journey should be as memorable as the destination. With a focus on comfort, reliability, and affordability, our modern fleet and experienced team ensure give you a perfect experience on time. Whether you're commuting to work, visiting family, or exploring new destinations, we're here to make your experience smooth and stress-free.</p>
            <button class="get-started-btn">Get Started</button>
          </div>
          <!-- Right Illustration -->
          <div class="col-md-6 illustration">
            <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
              <!-- Indicators -->
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
          
              <!-- Carousel Items -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/images/8ac292568b888b81018bf0d2324b0270.jpg" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item">
                  <img src="/images/GNC2.jpg" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item">
                  <img src="/images/sy_img15.webp" class="d-block w-100" alt="Image 3">
                </div>
              </div>
          
              <!-- Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="testimonials-section">
      <div class="container">
        <h2>What Our Customers Say</h2>
        <p class="testimonial-rating">Rated 4.8/5 by over 10,000 happy travelers!</p>
        <div class="row mt-4">
          <div class="col-md-4">
            <div class="card p-3">
              <div class="testimonial-img-container">
              <img src="/images/david.png" alt="David Chong" class="testimonial-img">
              <p>"This platform makes traveling so easy! Highly recommended!"</p>
              <p class="text-muted">- David Chong</p>
            </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card p-3">
              <div class="testimonial-img-container">
              <img src="/images/dixon.png" alt="Anthony Pang" class="testimonial-img">
              <p>"Fantastic service and seamless user experience!"</p>
              <p class="text-muted">- Anthony Pang</p>
            </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card p-3">
              <div class="testimonial-img-container">
              <img src="/images/wenjun.png" alt="Marcus Wong" class="testimonial-img">
              <p>"Best platform for route planning. My trips are stress-free now."</p>
              <p class="text-muted">- Marcus Wong</p>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="footerBottom">
          <p>Copyright &copy;2024; Designed by <span class="designer">Dixon/JianJin/WenJun</span></p>
      </div>
  </footer>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
