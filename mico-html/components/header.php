<?php

$head_contact = [
    'Call : +01 123455678990',
    'Email : demo@gmail.com',
    'Location'
];

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
    } while ($i < 3); 
}

//------------------------------------------------------------

$navigation = [
    'links' => ['index.php', 'about.php', 'treatment.php', 'doctor.php', 'testimonial.php', 'contact.php'],
    'sections' => ['Home', 'About', 'Treatment', 'Doctors', 'Testimonial', 'Contact Us']
];

function header_part_2($navigation) {
    $i = 0;
    while ($i < 6) {
        echo '<li class="nav-item">
                <a class="nav-link" href="' . $navigation['links'][$i] . '">' . $navigation['sections'][$i] . '</a>
              </li>';
        $i++;
    }
}

//------------------------------------------------------------

$quote = ['Login', 'Sign Up'];

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
