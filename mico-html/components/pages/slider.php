
<?php

$slider_section = [
    [   
        'status' => 'active',
        'play_button' => 'aria-hidden="true"', 
        'name' => 'Mico',
        'name_span' => 'Hospital',
        'paragraph' => 'when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
        'link' => 'contact.php',
        'button' => 'Contact Us',
        'image' => 'images/slider-img.jpg'
    ],
    [   
        'status' => '',
        'play_button' => 'aria-hidden="true"',
        'name' => 'დავითის',
        'name_span' => 'ჰოსპიტალი',
        'paragraph' => 'დავითი when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
        'link' => 'contact.php',
        'button' => 'Contact Us',
        'image' => 'images/slider-img.jpg'
    ],
    [   
        'status' => '',
        'play_button' => 'aria-hidden="true"',
        'name' => 'Mico',
        'name_span' => 'Hospital',
        'paragraph' => 'hello world',
        'link' => 'contact.php',
        'button' => 'Contact Us',
        'image' => 'images/slider-img.jpg'
    ],
];

function slider_items($slider_section) {
    foreach ($slider_section as $slide) {
        echo '<div class="carousel-item ' . $slide['status'] . '">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="detail-box">
                          <div class="play_btn">
                              <button>
                                <i class="fa fa-play" ' . $slide['play_button'] . '></i>
                              </button>
                          </div>
                          <h1>
                            ' . $slide['name'] . '<br>
                            <span>
                            ' . $slide['name_span'] . '
                            </span>
                          </h1>
                          <p>
                            ' . $slide['paragraph'] . '
                          </p>
                          <a href="' . $slide['link'] . '">
                            ' . $slide['button'] . '
                          </a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="img-box">
                          <img src="' . $slide['image'] . '" alt="slider image">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>';
    }
};

$buttons = [
    'class' => ['carousel-control-prev', 'carousel-control-next'],
    'link' => ['#customCarousel1', '#customCarousel1'],
    'data-slide' => ['prev', 'next'],
    'img' => ['images/prev.png', 'images/next.png'],
    'aria-label' => ['Previous Slide', 'Next Slide'],
    'title' => ['Previous', 'Next']
];

function sliderButton($buttons) {
    $i = 0;

    while ($i < count($buttons['class'])) {
        echo '<a class="' . $buttons['class'][$i] . '" href="' . $buttons['link'][$i] . '" role="button" data-slide="' . $buttons['data-slide'][$i] . '">
                <img src="' . $buttons['img'][$i] . '" alt="' . $buttons['aria-label'][$i] . '">
                <span class="sr-only">' . $buttons['title'][$i] . '</span>
              </a>';
        $i++;
    }
}
?>

<section class="slider_section">
      <div class="dot_design">
        <img src="images/dots.png" alt="">
      </div>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <?php         
         slider_items($slider_section);
          ?>
        </div>
        <div class="carousel_btn-box">
          <?php 
          sliderButton($buttons);
          ?>
        </div>
      </div>
    </section>