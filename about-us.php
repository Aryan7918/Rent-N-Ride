<?php 
$pageTitle = "About Us";
include('includes/header.php'); 
?>


<div class="banner">
    <div class="container text-center">
        <h4 class="banner-heading">About Us</h4>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>About <?= webSetting('title') ?? 'Us'; ?></h4>
                <div class="underline"></div>
                <p>
                At Rent & Ride, we're passionate about making your journey on the road a smooth and enjoyable one. We are your one-stop shop for all things car rental, providing a diverse fleet of vehicles to suit any need and budget.
                </p>
                
                <h5>
                We Offer:
                </h5>
                <p>
                    Convenience: Book your car online in minutes and pick it up at a convenient location.
                </p> 
                <p>Choice: Explore our extensive fleet, ranging from fuel-efficient compacts to spacious SUVs and luxurious sedans.
                </p>
                <p>Flexibility: Rent a car for a day, a weekend, or an extended adventure. We offer flexible rental options to fit your travel plans.
                </p>
                <p>Peace of mind: Rent with confidence knowing our vehicles are meticulously maintained and backed by 24/7 roadside assistance.
                </p>
                <h5>Our Mission</h5>
                <p>Our mission is to empower you to explore freely by providing reliable, affordable, and high-quality car rentals. Whether you're on a business trip, a family vacation, or a weekend getaway, we want to be your trusted partner on the road.
                </p>
                <h5>Join the Ride</h5>
                <p>We invite you to experience the Rent & Ride difference. Visit our website or contact us today to book your next car rental and get ready to hit the open road!</p>
                </p>
            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>
