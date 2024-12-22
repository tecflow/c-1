<?php

$slider_section = [
    [
        'play_button' => 'aria-hidden="true"',  //დამკვრელი ღილაკი
        'name' => 'Mico',                       // კონკრეტული სახელი
        'name_span' => 'Hospital',              // ზოგადი სახელი
        'paragraph' => 'when looking at its layout. The point of using Lorem Ipsum 
                        is that it has a more-or-less normal distribution of letters, as opposed to', //აღწერა
        'link' => 'contact.php',                 // ღილაკის ლინკი
        'button' => 'Contact Us',                // ღილაკის წარწერა
        'image' => 'images/slider-img.jpg'       // სლაიდერში ჩასასმელი სურათი
    ],
    [
        'play_button' => 'aria-hidden="true"',
        'name' => 'დავითის',
        'name_span' => 'ჰოსპიტალი',
        'paragraph' => 'დავითი when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
        'link' => 'contact.php',
        'button' => 'Contact Us',
        'image' => 'images/slider-img.jpg'
    ],
    [
        'play_button' => 'aria-hidden="true"',
        'name' => 'სერიოზული',
        'name_span' => 'ჰოსპიტალი',
        'paragraph' => ' ლევანი when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
        'link' => 'contact.php',
        'button' => 'Contact Us',
        'image' => 'images/slider-img.jpg'
    ],
    [
        'play_button' => 'aria-hidden="true"',
        'name' => 'Mico',
        'name_span' => 'Hospital',
        'paragraph' => 'hello world',
        'link' => 'contact.php',
        'button' => 'Contact Us',
        'image' => 'images/slider-img.jpg'
    ],
];

    
function sliderItems($slider_section) {
    $active = 'active'; // პირველი ელემენტია აქტიური
    

    foreach ($slider_section as $slide) {
        echo '<div class="carousel-item ' . $active . '">
                      <div class="container ">
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
                   $active = ''; // მხოლოდ პირველი ელემენტი აქტიური იქნება
    }

};
?>



