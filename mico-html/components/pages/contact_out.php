<?php

//თათა

// input-ის ტიპებისსა და placeholder-ების ინფორმაცია მასივში
$info = [
    'type' => ['text', 'email', 'text'],
    'placeholder' => ['Full Name', 'Email', 'Phone Number'] 
];

// ფუნქცია 3 ფორმის თეგის დასაგენერირებლად თავისი დინამიურად ცვალებადი ინფორმაციით
function form($info) {
    $i = 0; //მთვლელი
    while ($i < count($info['type'])) {
        echo '<div>
                <!-- Input field with dynamic type and placeholder -->
                <input type="' . $info['type'][$i] . '" placeholder="' . $info['placeholder'][$i] . '" />
              </div>';
        $i++; // ყოველი იტერაციის ბოლოს მთვლელის 1-ით გაზრდა
    }
}
?>

<section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Get In Touch
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form action="">
              
                <?php form($info);?>
                
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>