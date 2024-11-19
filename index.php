<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tool sda church</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/banner.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/pastor.css">
    <link rel="stylesheet" href="../css/comm.css">
    <link rel="stylesheet" href="../css/sermon.css">
</head>
<body>
    <nav>
        <?php
   include('../includes/header.php');

    ?>
</nav>


  <!-- Banner Section -->
  <section class="banner">
    <div class="container">
        <div class="row">
            <div class="col">
    <?php
             function displayCurrentTime($timezone = 'UTC') 
             {
                // Set the timezone (default is UTC)
                date_default_timezone_set($timezone);
                
                // Get the current date and time
                $currentTime = date("Y-m-d H:i:s"); // Format: 2024-11-12 14:35:00
                
                return ": " . $currentTime;
            }

            // Example usage
            echo displayCurrentTime('Africa/Nairobi'); // Specify the timezone as needed
    ?>
</div>
            <div class="col">  <h3 style="color: #FFB732; "></h3></div>
        </div>
        <div class="row">
            <div class="col md-5">
                <h1 class="display-4" style="color: #FFB732; ">Live With  <br>Peace</h1>
                <br>
                 <p class="lead">We are excited to announce a lineup of upcoming events designed to inspire, connect, and serve our community. Join us for our Family Worship Weekend, where we'll come together for special services, fellowship meals, and activities for all ages. Our Youth Rally is just around the corner, offering engaging sessions, worship, and fun for young people to deepen their faith and build friendships. Additionally, don’t miss our annual Community Service Day, where we’ll reach out to those in need through volunteer work and donations. These events are wonderful opportunities to grow spiritually, meet new people, and make a meaningful impact together. We hope to see you there!</p>
      <br> <br> <br>
                <a href="#learn-more" class="btn btn-custom">Learn More</a></div>
      <!-- 2nd col -->
            <div class="col md-7">
              
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                     <div class="carousel-inner">
                     <div class="carousel-item active">
                    <img src="../images/p1.avif" class="d-block w-100" alt="...">
                     </div>
                <div class="carousel-item">
                 <img src="../images/p2.avif" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="../images/p3.avif" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>

            </div>
        </div>
      
    </div>
  </section>


<!-- about us section -->
<section>
    <div class="row">
        <div class="col md-6" style="text-align: center;"><h6> <i>about our story </i></h6></div>
        <div class="col md-6"></div>
    </div>
  
  <div class="container">
    <div class="row">
      <!-- 1st col -->
      <div class="col-md-6 fade-in">
        <div class="col-md-12">
          <h4>Welcome To Toll
            <br> Sda Church</h4>
        </div>
        <div class="col-md-12 d-flex justify-content-end fade-in">
          <img src="../images/welcome.jpg"alt="Person Image" class="img-fluid">
        </div>
      </div>

      <!-- 2nd col -->
      <div class="col-md-6 fade-in">
        <!-- Bootstrap Card with a "Learn More" button at the bottom -->
        <div class="card" style="width: 35rem; height:33rem;">
          <div class="card-body">
            <h5 class="card-text">Welcome to our Seventh-day Adventist Church, a vibrant and welcoming community where faith, fellowship, and service come together.From children’s Sabbath School and youth programs to Bible study groups and community outreach initiatives, there’s something for everyone.</h5>

            <p class="card-text">Rooted in the teachings of the Bible and committed to following Christ’s example, we gather each week to worship, grow spiritually, and support one another in our journey of faith.In addition to our weekly worship services, we offer a variety of ministries and programs designed to meet the needs of all ages and walks of life.</p>

            <p class="card-text">Our church is dedicated to fostering a compassionate, inclusive environment where everyone is valued and encouraged to connect, serve, and strengthen their relationship with God.</p>

            <p class="card-text">We believe in the power of community and the importance of sharing God’s love through acts of kindness and service.Join us as we work together to make a positive impact in our lives and in the community around us.
                        </p>
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- our pastor section -->
<section id="our-pastors" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" style="color:#FFB732;">Meet Our Pastors</h2>
        <div class="row">
            <!-- Left side with a single image -->
            <div class="col-md-3 mb-4 fade-in">
           
                        <div class="card shadow-lg h-100">
                            <img src="../images/priest1.avif" class="card-img-top" alt="Pastor 1 Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Pastor John</h5>
                                <p class="card-text">Pastor John is our lead pastor, known for his inspiring sermons and dedication to serving the community.</p>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class=" btn btn-warning mx-1">075645654</a>
                                </div>
                            </div>
                        </div>
                    </div>
            

            <!-- Right side with pastor cards -->
          
             
                    <!-- Pastor 1 Card -->
                    <div class="col-md-3 mb-4 fade-in">
                        <div class="card shadow-lg h-100">
                            <img src="../images/priest2.avif" class="card-img-top" alt="Pastor 1 Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Pastor Joe</h5>
                                <p class="card-text">Pastor John is our lead pastor, known for his inspiring sermons and dedication to serving the community.</p>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-warning mx-1">075645654</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pastor 2 Card -->
                    <div class="col-md-3 mb-4 fade-in">
                        <div class="card shadow-lg h-100">
                            <img src="../images/priest5.avif" class="card-img-top" alt="Pastor 2 Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Pastor Smith</h5>
                                <p class="card-text">Pastor Jane brings compassion and wisdom, focusing on youth outreach and family support programs.</p>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-warning mx-1">075645654</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pastor 3 Card -->
                    <div class="col-md-3 mb-4 fade-in">
                        <div class="card shadow-lg h-100">
                            <img src="../images/priest4.avif" class="card-img-top" alt="Pastor 3 Image">
                            <div class="card-body text-center">
                                <h5 class="card-title">Pastor Michael </h5>
                                <p class="card-text">Pastor Michael is passionate about music ministry and leads our church's worship services and groups.</p>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-warning mx-1">075645654</a>
                                </div>
                            </div>
                        </div>
                   </div>
                </div> <!-- End of inner row for cards -->
            </div> <!-- End of col-md-8 for cards -->
        </div> <!-- End of main row -->
    </div> <!-- End of container -->
</section>




<!-- JavaScript for Scroll Animation -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const elements = document.querySelectorAll('.fade-in');
    const windowHeight = window.innerHeight;

    function checkPosition() {
        elements.forEach(element => {
            const positionFromTop = element.getBoundingClientRect().top;
            if (positionFromTop - windowHeight <= -100) {
                element.classList.add('visible');
            }
        });
    }

    window.addEventListener('scroll', checkPosition);
    checkPosition(); // Initial check
});
</script>
<!-- section fot the latest sermon -->

<!-- Latest Sermon Section with Sidebar Bible Navigation -->
<section id="latest-sermon" class="py-5" style="background-image: url(../images/bible1.avif); 
    background-size:cover"> 
    <div class="container">
        <h2 class="text-center mb-5" style="color: #FFB732;">Latest Sermon</h2>
        <div class="row">
            <!-- Sermon text and image -->
            <div class="col-md-6 sermon-text">
                <h3 class="mb-3">The Power of Faith</h3>
                <p>
                    In this powerful sermon, we explore the importance of faith and how it can transform lives. Pastor John Doe delves deep into how faith can help us overcome obstacles, embrace change, and find hope even in challenging times.
                </p>
                <p>
                    Join us in reflecting on the journey of faith and how it brings us closer to the divine. Let this message be a source of strength and inspiration.
                </p>
                <a href="#" class="btn btn-theme mt-3">Watch Now</a>
            </div>

            <!-- Sermon image -->
            <div class="col-md-6 text-center sermon-image">
                <img src="../images/prayer.avif" alt="Pastor giving a sermon" class="img-fluid shadow-lg">
            </div>
        </div>
    </div>
</section>



<!-- join our community section  -->
<!-- Join a Community Section -->
<section id="join-community" class="py-5">
  <div class="container">
    <h2 class="text-center mb-5 text-white">Join Our Community</h2>
    <div class="row align-items-center">
      <!-- Image on the Left with fade-in and rotating effect -->
      <div class="col-md-6 text-center fade-in">
        <img src="../images/comm.avif" alt="Community Gathering" class="img-fluid  shadow-lg rotating-img" style="border-radius: 50%; width:400px; height:400px;">
      </div>

      <!-- Description and Call-to-Action on the Right with fade-in effect -->
      <div class="col-md-6 fade-in">
        <h3 class="mb-3 text-white">Become a Part of Our Family</h3>
        <p class="text-white">
          Discover a welcoming community where we come together in faith, fellowship, and friendship. Our gatherings are a place of encouragement, support, and growth where everyone is valued and celebrated.
        </p>
        <p class="text-white">
          Whether you’re looking to connect, serve, or grow in your spiritual journey, there’s a place for you here. Join us and be part of something bigger!
        </p>
        <a href="#" class="btn btn-light mt-3">Join Us</a>
      </div>
    </div>
  </div>
</section>


<!-- JavaScript for Scroll Animation -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const fadeElements = document.querySelectorAll('.fade-in');
    const windowHeight = window.innerHeight;

    function checkPosition() {
        fadeElements.forEach(element => {
            const positionFromTop = element.getBoundingClientRect().top;
            if (positionFromTop - windowHeight <= -100) {
                element.classList.add('visible');
            }
        });
    }

    window.addEventListener('scroll', checkPosition);
    checkPosition(); // Initial check on load
});
</script>

<!-- get in touch section -->
 <!-- Get in Touch Section -->
<section id="get-in-touch" class="py-5" style="background-image: url(../images/bg1.avif);   background-size: cover;">
    <div class="container">
        <h2 class="text-center mb-5">Get in Touch</h2>
        <div class="row">
          <!-- Contact Information on the left -->
            <div class="col-md-6">
                <img src="../images/church2.jpg" alt="">
            </div>
            <!--  -->
               <!-- Contact Form on the right -->
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Type your message here"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

           
           
        </div>
    </div>
</section>
<footer>
<?php
   include('../includes/footer.php');

    ?>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>