<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Multiedge Solution</title>

  <link rel="stylesheet" href="assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="assets/css/maicons.css">

  <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="assets/css/theme.css">

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <?php
    include 'header-page.php';
  ?>

  <header>
    <div class="container mt-5">
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Contact</li>
              </ul>
            </nav>
            <h1 class="text-center">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>
    <div class="page-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3">
            <h2 class="title-section">Get in Touch</h2>
            <div class="divider"></div>
            <p>At Multiedge Solutions, we focus on fostering long-term partnerships and providing customized IT solutions that align with your business goals. Whether you need cutting-edge Website Development, results-driven Digital Marketing, creative Graphic Design, or professional Video Editing, our expert team is here to help you thrive in the digital world. Reach out to us today, and let's discuss how we can contribute to your business success.</p>
  
            <ul class="contact-list">
              <li>
                <div class="icon"><span class="mai-map"></span></div>
                <div class="content">123 Fake Street, New York, USA</div>
              </li>
              <li>
                <div class="icon"><span class="mai-mail"></span></div>
                <div class="content"><a href="#">info@example.com</a></div>
              </li>
              <li>
                <div class="icon"><span class="mai-phone-portrait"></span></div>
                <div class="content"><a href="#">+91 1122 3344 55</a></div>
              </li>
            </ul>
          </div>

          <?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form inputs
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Define recipient and subject
    $to = "prashantkumar2005pkk@gmail.com"; // Recipient's email address
    $subject = "Message from: " . $name; // Email subject

    // Construct the email message
    $email_message = "<html><body>";
    $email_message .= "<h2>New message from Contact Form</h2>";
    $email_message .= "<p><strong>Name:</strong> " . $name . "</p>";
    $email_message .= "<p><strong>Email:</strong> " . $email . "</p>";
    $email_message .= "<p><strong>Message:</strong><br>" . nl2br($message) . "</p>";
    $email_message .= "</body></html>";

    // Set headers
    $headers = "From: " . $email . "\r\n"; // Sender's email address
    $headers .= "Reply-To: " . $email . "\r\n"; // Reply-to address
    $headers .= "Content-type: text/html; charset=UTF-8\r\n"; // Set content type to HTML

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        $status_message = "Email sent successfully!";
    } else {
        $status_message = "Failed to send email.";
    }
}
?>

<div class="col-lg-6 py-3 wow fadeInUp">
    <div class="subhead">Contact Us</div>
    <h2 class="title-section">Drop Us a Line</h2>
    <div class="divider"></div>

    <!-- Contact Form -->
    <form action="" method="POST">
        <div class="py-2">
            <input type="text" class="form-control" name="name" placeholder="Full name" required>
        </div>
        <div class="py-2">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="py-2">
            <textarea rows="6" class="form-control" name="message" placeholder="Enter message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary rounded-pill mt-4">Send Message</button>
    </form>

    <?php if (isset($status_message)) : ?>
        <div class="alert alert-info mt-4">
            <?php echo $status_message; ?>
        </div>
    <?php endif; ?>
</div>

        
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  </main>

<?php
  include 'footer.php';
?>


  <script src="assets/js/jquery-3.5.1.min.js"></script>

  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <script src="assets/vendor/wow/wow.min.js"></script>

  <script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>

  <script src="assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>

  <script src="assets/js/google-maps.js"></script>

  <script src="assets/js/theme.js"></script>


</body>
</html>