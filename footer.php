<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Footer with One Row and Four Columns</title>
<style>
  /* Footer styling */
  footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    text-align: center;
    font-style: oblique;
    font-family: Georgia, 'Times New Roman', Times, serif;
    background-image: url(../images/footer4.avif);
    background-size:cover;
  }
 h4{
    color: #FFB732;
}
  .footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    max-width: 1200px;
    margin: auto;
  }

  .footer-column {
    flex: 1;
    min-width: 200px; /* Adjust this for smaller screens */
    padding: 15px;
  }

  /* Responsive styling */
  @media (max-width: 768px) {
    .footer-column {
      min-width: 100%;
    }
  }
</style>
</head>
<body>

<!-- Footer Section -->
<footer>
  <div class="footer-container">
    <!-- Column 1 -->
    <div class="footer-column">
      <h4>About Us</h4>
      <p>Learn more about our mission and values.</p>
    </div>

    <!-- Column 2 -->
    <div class="footer-column">
      <h4>Services</h4>
      <p>Discover the services we offer to help you.</p>
    </div>

    <!-- Column 3 -->
    <div class="footer-column">
    <h4>Contact Information</h4>
                
                <ul class="list-unstyled">
                    <li><strong>Address:</strong> 123 Faith Street, Cityville, Country</li>
                    <li><strong>Email:</strong> <a href="mailto:contact@tollchurch.com">contact@tollchurch.com</a></li>
                    <li><strong>Phone:</strong> +123-456-7890</li>
                    <li><strong>Social Media:</strong> 
                        <a href="#" class="text-primary ms-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-info ms-2"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-danger ms-2"><i class="bi bi-instagram"></i></a>
                    </li>
                </ul>
    </div>

    <!-- Column 4 -->
    <div class="footer-column">
      <h4>Follow Us</h4>
      <p>Connect on social media platforms.</p>
    </div>
  </div>
</footer>

</body>
</html>