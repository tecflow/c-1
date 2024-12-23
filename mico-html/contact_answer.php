<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
    

  <title>Mico</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/form.css">

</head>

<body>

<div class="contact-background">
<div class="contact-letter">
    
    <div>
        <a class="contact-logo" href="index.php">
            <img src="./images/logo.png" alt="photo">
        </a>
    </div>
    <div class="contact-title">
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['CustomerName']) && isset($_POST['CustomerMail'])) {
            $CustomerName = $_POST['CustomerName'];
            $CustomerMail = $_POST['CustomerMail'];
            echo'
            <h1>Reply letter from a hospital</h1>
            <h5>Dear '.$CustomerName.',</h5>
            <h4>Thank you for your inquiry. Your message has been received, and our team will contact you shortly at the provided email address. Email:'.$CustomerMail.'</h4>
    ';
                    }
                    ?>
            </div>
    <!-- უკან დაბრუნების ღილაკი -->
    <form action="contact.php#contact-back" method="get">
        <button type="submit" class="contact-button">Back</button>
    </form>
</div>

</body>

</html>