<?php

//ლევანი

// სულ ზემოთა ჰედერის ნაწილების ინფორმაცია
$head_contact = [
    'Call : +01 123455678990',
    'Email : demo@gmail.com',
    'Location'
];

// ზედა ჰედერის ნაწილის გადინამიურეება
function header_part_1($head_contact) {
    $i = 0;
    do {
        echo '<a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                ' . $head_contact[$i] . '
              </span>
            </a>';
        $i++;
    } while ($i < count($head_contact)); 
}

//------------------------------------------------------------

// ნავიგაცია, ლინკები და სექციები
$navigation = [
    'links' => ['index.php', 'about.php', 'treatment.php', 'doctor.php', 'testimonial.php', 'contact.php'],
    'sections' => ['Home', 'About', 'Treatment', 'Doctors', 'Testimonial', 'Contact Us']
];

// ფუნქცია ნავიგაციის მენუს ინფორმაციის დასამუშავებლად
function header_part_2($navigation) {
    $i = 0;
    while ($i < sizeof($navigation['links'])) {
        echo '<li class="nav-item">
                <a class="nav-link" href="' . $navigation['links'][$i] . '">' . $navigation['sections'][$i] . '</a>
              </li>';
        $i++;
    }
}

//------------------------------------------------------------

// Login-ის და Sign Up-ის ღილაკები
$quote = ['Login', 'Sign Up'];

// ორი ღულაკის გამოტანა დინამიურად
function header_part_3($quote){
    foreach($quote as $quotas){
        echo '<a href="">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    '.$quotas.'
                  </span>
                </a>';
    }
}
?>


<header class="header_section">
      <div class="header_top">
        <div class="container">
          <div class="contact_nav">
            
            <?php header_part_1($head_contact);?>

          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <img src="images/logo.png" alt="">
            </a>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  
                  <?php header_part_2($navigation);?>

                </ul>
              </div>
              <div class="quote_btn-container">

                <?php header_part_3($quote);?>

                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>