<!DOCTYPE html>
<html>
<?php include 'components/head.php'?>
<head>
  

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <?php include 'components/header.php';?>
    <!-- end header section -->
     
     <!-- slider section (დავითი) -->
     <?php include 'pages/slider.php'?>
    <!-- end slider section -->
  </div>

  <!-- book section -->
<?php
  include 'pages/book.php'
?>

  <!-- end book section -->
   
  <!-- about section -->

  <?php include 'pages/about_out.php'?>

  <!-- end about section -->


  <!-- treatment section -->

  <?php include 'pages/treatment_out.php'?>

  <!-- end treatment section -->

  <!-- team section -->
  <?php include 'pages/doctor_out.php';?>
  
  <!-- end team section -->


  <!-- client section -->
  <?php include 'pages/testemonial_out.php'?>
  <!-- end client section -->

  <!-- contact section -->
  <?php include 'pages/contact_out.php';?>
  <!-- end contact section -->

  <!-- info section -->
  <?php include 'components/info_section.php';?>
  <!-- end info_section -->



  <!-- footer section -->
  <?php include 'components/footer.php';?>


</body>

</html>