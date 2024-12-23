<?php include 'methods/home_method.php'?>
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


<div class="background">
    <div class="letter">
        <!-- ლოგოს სექცია -->
        <div>
            <a class="appointment-logo" href="index.php">
                <img src="images/logo.png" alt="">
            </a>
        </div>

        <!-- წერილის სათაური -->
        <div class="book-title">
            <h1>APPOINTMENT LETTER AT HOSPITAL</h1>
        </div>

        <!-- წერილის ტექსტი -->
        <div class="text-section">
            <div class="letter-title">
                <div class="letter-text">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && $patientName && $doctorName && $departmentName && $phone && $symptoms && $appointmentDate) {
                        echo '
                        <h5>Dear '.$patientName.',</h5>
                        <p>We are pleased to inform you that your appointment has been scheduled at <span class="mico">Mico</span> <span class="hospital">Hospital.</span> Below are the details of your appointment:</p>
                        
                        <div class="letter-details">
                            '.info($departmentName, $patientName, $symptoms, $doctorName, $appointmentDate, $infoItems).'
                        </div>
                        
                        <p>For additional information or any changes regarding your appointment, please feel free to contact us. If necessary, the on-duty doctor will also reach out to you at the phone number <span class="hospital">TEL:</span><span class="mico"> '.$phone.'.</span></p>
                        ';
                    }
                    ?>
                </div>
                    
            </div>
            <!-- უკან დაბრუნების ღილაკი -->
            <form action="index.php#book-appointment" method="get">
                <button type="submit" class="appointment-button">Back</button>
            </form>
        </div>
        
    </div>
</div>

</body>

</html>