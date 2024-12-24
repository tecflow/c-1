
<?php

//client section - დავითი -->

// კომენტარების მონაცემები
$clients = [
    ['status' => 'active',
    'client' => 'Morijorch',
    'small_description' => 'Default model text',
    'quote_mark' => 'aria-hidden="true"',
    'client_comment' => "editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various"
    ],
    ['status' => '',
    'client' => 'Rochak',
    'small_description' => 'Default model text',
    'quote_mark' => 'aria-hidden="true"',
    'client_comment' => "Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy."
    ],
    ['status' => '',
    'client' => 'Brad Johns',
    'small_description' => 'Default model text',
    'quote_mark' => 'aria-hidden="true"',
    'client_comment' => "Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy, editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various"
    ]

];

//კომენტარების სექციის ღილაკის მონაცემები



 
  // კომენტარების მონაცემების სექცია

function clientItems($clients) {

    foreach ($clients as $client) {
        echo '<div class="carousel-item ' . $client['status']. '">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    '.$client['client'].'
                  </h5>
                  <h6>
                    '.$client['small_description'].'
                  </h6>
                </div>
                <i class="fa fa-quote-left" '.$client['quote_mark'].'></i>
              </div>
              <p>
                '.$client['client_comment' ].'
              </p>
            </div>
          </div>';
    }

};




//კომენტარების სექციის ღილაკი


$buttons = [
  'class' => ['carousel-control-prev', 'carousel-control-next'],
  'icon' => ['fa-angle-left', 'fa-angle-right'],
  'aria' => ['Previous', 'Next'],
  'data-slide' => ['prev', 'next']
];

function buttonsItems($buttons) {
  $i = 0;

  while ($i < count($buttons['class'])) {
      echo '<a class="' . $buttons['class'][$i] . '" href="#customCarousel2" role="button" data-slide="' . $buttons['data-slide'][$i] . '">
              <i class="fa ' . $buttons['icon'][$i] . '" aria-hidden="true"></i>
              <span class="sr-only">' . $buttons['aria'][$i] . '</span>
            </a>';
      $i++;
  }
}
?>



<section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>Testimonial</span>
        </h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
        <?php clientItems($clients); ?>
        </div>
        <div class="carousel_btn-box">
        <?php buttonsItems($buttons);?>
        </div>
      </div>
    </div>
  </section>