<?php

//ხატია

// გუნდის წევრების ინფორმაციები მასივში
$social = [
    'src' => ['team1.jpg', 'team2.jpg', 'team3.jpg'], // Images of team members
    'names' => ['Henry', 'Jeny', 'Marco'],           // Names of team members
    'icons' => ['fa fa-facebook', 'fa fa-twitter', 'fa fa-linkedin', 'fa fa-instagram'] // Social media icons
];

// გუნდის 3 წევრის გამოტანა ქარდებში 
function cards($social) {
    // იტერაცია თითოეული გინდის წევრისთვის
    for ($i = 0; $i < count($social['src']); $i++) {
        echo '<div class="item">
                <div class="box">
                    <!-- Image for the team member -->
                    <div class="img-box">
                        <img src="images/' . $social['src'][$i] . '" alt="" />
                    </div>
                    <div class="detail-box">
                        <!-- Name and title -->
                        <h5>' . $social['names'][$i] . '</h5>
                        <h6>MBBS</h6>
                        <div class="social_box">';
        
        // სოციალური მედიის აიქონების გამოტანა, დამატებითი ციკლი 4 სხვადასხვა აიქონის გამოსატანად თითოეული წევრისთვის
        for ($j = 0; $j < sizeof($social['icons']); $j++) {
            echo '<a href="">
                    <i class="' . $social['icons'][$j] . '" aria-hidden="true"></i>
                  </a>';
        }

        echo '      </div>
                    </div>
                </div>
            </div>';
    }
}
?>

<section class="team_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our <span>Doctors</span>
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel team_carousel">
          
          <?php cards($social);?>
          
        </div>
      </div>
    </div>
  </section>