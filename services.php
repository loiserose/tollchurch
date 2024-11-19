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
    <link rel="stylesheet" href="../css/services.css">
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
                
            <div class="col md-7">
              
           
        </div>
      
    </div>
  </section>


<!-- services section -->
<section class="services-section">
  <h2>Our Ministries</h2>
  <p>Join us in worship, fellowship, and community service.</p>
  
  <div class="services-container">
    <!-- Service 1 -->
    <div class="service-card">
      <div class="service-icon">🙏</div>
      <h3 class="service-title">Sabbath Worship</h3>
      <p class="service-description">Join us every Sabbath for uplifting worship and fellowship.</p>
    </div>

    <!-- Service 2 -->
    <div class="service-card">
      <div class="service-icon">👨‍👩‍👧‍👦</div>
      <h3 class="service-title">Youth Ministry</h3>
      <p class="service-description">Programs and activities for our young community members.</p>
    </div>

    <!-- Service 3 -->
    <div class="service-card">
      <div class="service-icon">❤️</div>
      <h3 class="service-title">Community Outreach</h3>
      <p class="service-description">Serving and supporting our community through outreach programs.</p>
    </div>

    <!-- Service 4 -->
    <div class="service-card">
      <div class="service-icon">📖</div>
      <h3 class="service-title">Bible Study</h3>
      <p class="service-description">Weekly study sessions to grow in understanding and faith.</p>
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