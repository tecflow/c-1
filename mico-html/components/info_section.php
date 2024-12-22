<?php

$info_contact = [
    'span' => ['Location', 'Call +01 1234567890', 'demo@gmail.com'],
    'class' => ['fa fa-map-marker', 'fa fa-phone', 'fa fa-envelope']
];

function Contact($info_contact) {
    $i = 0;
    while ($i < 4) {
        echo '<a href="">
                <i class="' . $info_contact['class'][$i] . '" aria-hidden="true"></i>
                <span>
                  ' . $info_contact['span'][$i] . '
                </span>
              </a>';
        $i++;
    }
}

//-------------------------------

$social_box = ['fa fa-facebook', 'fa fa-twitter', 'fa fa-linkedin', 'fa fa-instagram'];

function social_box($social_box) {
    for ($i = 0; $i < 4; $i++) {
        echo '<a href="">
                <i class="' . $social_box[$i] . '" aria-hidden="true"></i>
              </a>';
    }
}

//-------------------------------

$info_links = [
  'links' => ['index.php', 'about.php', 'treatment.php', 'doctor.php', 'testimonial.php', 'contact.php'],
  'titles' => ['Home', 'About', 'Treatment', 'Doctors', 'Testimonial', 'Contact us']
];

function navigation_menu($info_links) {
  for ($i = 0; $i < 6; $i++) {
      echo '<a href="' . $info_links['links'][$i] . '">
                  ' . $info_links['titles'][$i] . '
              </a>';
  }
}

//--------------------------------

$pictures1 = [
  ['img_src' => 'images/post1.jpg', 'text' => 'Normal distribution'],
  ['img_src' => 'images/post2.jpg', 'text' => 'Normal distribution']
];

function render_pictures1($pictures1) {
  foreach ($pictures1 as $picture1) {
      echo '<div class="post_box">
              <div class="img-box">
                <img src="' . $picture1['img_src'] . '" alt="">
              </div>
              <p>
                ' . $picture1['text'] . '
              </p>
            </div>';
  }
}



$pictures2 = [
  ['img_src' => 'images/post3.jpg', 'text' => 'Normal distribution'],
  ['img_src' => 'images/post4.png', 'text' => 'Normal distribution']
];

function render_pictures2($pictures2) {
  foreach ($pictures2 as $picture2) {
    echo '<div class="post_box">
            <div class="img-box">
              <img src="' . $picture2['img_src'] . '" alt="">
            </div>
              <p>
                ' . $picture2['text'] . '
              </p>
            </div>';
  }
}
