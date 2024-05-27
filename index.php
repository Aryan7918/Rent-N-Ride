<?php include('includes/header.php'); ?>

<div class="container">
    <?= alertSuccess(); ?>
</div>

<div id="carouselExample" class="carousel slide" style="position: relative;  text-align: center; color: white;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/slider-1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/slider-1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/slider-1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <div class="centered" style="position: absolute;  top: 50%;  left: 50%;  transform: translate(-50%, -50%);"><h1>Self-Drive Car Rentals in Ahmedabad</h1></div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="main-heading">Welcome to <?= webSetting('title') ?? 'Car Rental Services'; ?></h4>
                <div class="underline mx-auto"></div>
                <p>
                We understand that every trip is unique, and we're here to ensure that your travel experience is nothing short of exceptional. Explore our extensive fleet of meticulously maintained vehicles, ranging from sleek sedans to spacious SUVs, all designed to suit your needs and preferences. Whether you're planning a weekend getaway, a family vacation, or a business trip, we have the perfect ride for you. Booking with us is effortless. Our user-friendly website and intuitive reservation system make securing your vehicle a breeze, leaving you more time to focus on the adventures ahead.</p>
            </div>
        </div>
    </div>
</div>


<div class="bg-car1">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-white">Rent a car in few steps</h2>
                <div class="underline"></div>
                <h4 class="text-white">Drive worry free with <?= webSetting('title') ?? 'Car Rental Services'; ?></h4>
                <h4 class="text-white">24X7 Roadside assistance whenever you need</h4>
            </div>
            <div class="col-md-4 my-auto">
                <a href="cars.php" class="btn btn-web text-white w-100 fw-bold">Book a car now !</a>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4 class="main-heading text-center">Our Testimonials</h4>
                <div class="underline mx-auto"></div>

                <div class="owl-carousel owl-theme car-testi">
                    <div class="item">
                        <div class="testi-card text-center">
                            <h4 class="title1 fs-16 mb-2">Ved Patel</h4>
                            <p class="testi-para">
                            Renting with this company was an absolute breeze. From the easy online booking process to the friendly staff at pickup, everything was seamless. The car was clean and well-maintained, making our road trip a joy. Highly recommend!</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi-card text-center">
                            <h4 class="title1 fs-16 mb-2">Rishi Shah</h4>
                            <p class="testi-para">
                            I've rented from many companies in the past, but none compare to the service I received from this company . The vehicle selection was fantastic, and the prices were unbeatable. Plus, the convenience of pickup and drop-off made my trip stress-free. Definitely my go-to rental company from now on!</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testi-card text-center">
                            <h4 class="title1 fs-16 mb-2">Jay chhashwala</h4>
                            <p class="testi-para">
                            I was initially hesitant about renting a car for my vacation, but This Company made it so easy and affordable. The customer service was top-notch, and the vehicle exceeded my expectations. I'll definitely be using them for all my future trips.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
