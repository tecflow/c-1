<?php

//პაპუნა

// სურათების სათაურების და აღწერების მასივი
$data = [
    'img_src' => ['images/t1.png', 'images/t2.png', 'images/t3.png', 'images/t4.png'],
    'title' => ['Nephrologist Care', 'Eye Care', 'Pediatrician Clinic', 'Parental Care'],
    'text' => [
        "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        "alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything"
    ]
];

// გადინამიურება for ციკლით და $i იტერატორით
function treatment($data) {
    for ($i = 0; $i < count($data['img_src']); $i++) {
        echo '<div class="col-md-6 col-lg-3">
                <div class="box">
                    <!-- Image for treatment -->
                    <div class="img-box">
                        <img src="' . $data['img_src'][$i] . '" alt="">
                    </div>
                    <!-- Title and description -->
                    <div class="detail-box">
                        <h4>
                            ' . $data['title'][$i] . '
                        </h4>
                        <p>
                            ' . $data['text'][$i] . '
                        </p>
                        <!-- Read more link -->
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>';
    }
}
?>

<section class="treatment_section layout_padding">
    <div class="side_img">
      <img src="images/treatment-side-img.jpg" alt="">
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Hospital <span>Treatment</span>
        </h2>
      </div>
      <div class="row">
        
        <?php treatment($data); ?>

      </div>
    </div>
  </section>