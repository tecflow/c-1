<?php

//შალვა


// დასაკონტაქტებელი ინფორმაცია
$info_contact = [
    'span' => ['Location', 'Call +01 1234567890', 'demo@gmail.com'],
    'class' => ['fa fa-map-marker', 'fa fa-phone', 'fa fa-envelope']
];

// საკონტაქტო და აიქონების ინფორმაცია
function Contact($info_contact) {
    $i = 0;
    while ($i < sizeof($info_contact['span'])) {
        echo '<a href="">
                <i class="' . $info_contact['class'][$i] . '" aria-hidden="true"></i>
                <span>
                  ' . $info_contact['span'][$i] . '
                </span>
              </a>';
        $i++;
    }
}

// სოციალური მედიის აიქონები
$social_box = ['fa fa-facebook', 'fa fa-twitter', 'fa fa-linkedin', 'fa fa-instagram'];

// აიქონების ლინკის თეგებში შეტანა
function social_box($social_box) {
    for ($i = 0; $i < count($social_box); $i++) {
        echo '<a href="">
                <i class="' . $social_box[$i] . '" aria-hidden="true"></i>
              </a>';
    }
}

// ნავიგაციის ქვედა მენიუ და სათაურები
$info_links = [
    'links' => ['index.php', 'about.php', 'treatment.php', 'doctor.php', 'testimonial.php', 'contact.php'],
    'titles' => ['Home', 'About', 'Treatment', 'Doctors', 'Testimonial', 'Contact us']
];

// ქვედა ნავიგაციის მენიუში ლინკებისა და სათაურების შეტანა
function navigation_menu($info_links) {
    for ($i = 0; $i < count($info_links['links']); $i++) {
        echo '<a href="' . $info_links['links'][$i] . '">
                  ' . $info_links['titles'][$i] . '
              </a>';
    }
}

// სურათებისა და სათაურების პირველი ნაწილი
$pictures1 = [
    ['img_src' => 'images/post1.jpg', 'text' => 'Normal distribution'],
    ['img_src' => 'images/post2.jpg', 'text' => 'Normal distribution']
];

// სურათებისა და სათაურების დისპლეი პირველი
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

// სურათებისა და სათაურების მეორე ნაწილი
$pictures2 = [
    ['img_src' => 'images/post3.jpg', 'text' => 'Normal distribution'],
    ['img_src' => 'images/post4.png', 'text' => 'Normal distribution']
];

// სურათებისა და სათაურების დისპლეი მეორე, ამ შემთხვევაში ჩაშენებული ფუნქცია implede-ით ერთ-ერთი კრიტერიუმის დასაკმაყოფილებლად
function render_pictures2($pictures2) {
    $htmlParts = [];

    foreach ($pictures2 as $picture2) {
        $htmlParts[] = '<div class="post_box">
                          <div class="img-box">
                            <img src="' . $picture2['img_src'] . '" alt="">
                          </div>
                          <p>
                            ' . $picture2['text'] . '
                          </p>
                        </div>';
    }

    echo implode("\n", $htmlParts);
  }

//მასივი გასადინამიურებელი ელემენტებისა და უნქციების
  $sections = [
    [
        'title' => 'LATEST POSTS',
        'function' => 'render_pictures1', 
        'pictures' => $pictures1 
    ],
    [
        'title' => 'NEWS',
        'function' => 'render_pictures2', 
        'pictures' => $pictures2 
    ]
  ];

//ვადინამიურებ სექციას, ვაფლექსავებ ჩემი ლუპების სქილებს და ვიყენებთ მეოთხე ჩაშენებულ ფუნქციას call_user_func(), რომელიც საშუალებას გვაძლევს გამოვიძახოთ ფუნქცია მისი სტრინგ სახელით
  function render_section_posts($sections) {
    foreach ($sections as $section) {
        echo '<div class="col-md-6 col-lg-3">
                <div class="info_post">
                  <h5>' . $section['title'] . '</h5>';

        call_user_func($section['function'], $section['pictures']);
        
        echo '  </div>
              </div>';
    }
}?>




<section class="info_section ">
    <div class="container">
      <div class="info_top">
        <div class="info_logo">
          <a href="">
            <img src="images/logo.png" alt="">
          </a>
        </div>
        <div class="info_form">
          <form action="subscribe.php" method="post">
            <input type="email" name="subscribe" placeholder="Your email" required>
            <button>
              Subscribe
            </button>
          </form>
        </div>
      </div>
      <div class="info_bottom layout_padding2">
        <div class="row info_main_row">
          <div class="col-md-6 col-lg-3">
            <h5>
              Address
            </h5>
            <div class="info_contact">

              <?php Contact ($info_contact)?>  

            </div>
            <div class="social_box">

              <?php social_box($social_box)?>

            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_links">
              <h5>
                Useful link
              </h5>
              <div class="info_links_menu">

                <?php navigation_menu($info_links)?>

              </div>
            </div>
          </div>
          <?php render_section_posts($sections)?>
        </div>
      </div>
    </div>
  </section>