<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <div class="col" style="display: flex;">
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
                
            <div class="col md-7">
              
           
        </div>
      
    </div>
  </section>


<!-- about us section -->
<section>
    <div class="row">
        <div class="col md-6" style="text-align: right;"><h6> <i>about our story </i></h6></div>
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

  <footer>
<?php
   include('../includes/footer.php');

    ?>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>