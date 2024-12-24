<?php

//შალვა

// input-ის ტიპებისსა და placeholder-ების ინფორმაცია მასივში
$info = [
    'type' => ['text', 'email', 'text'],
    'placeholder' => ['Full Name', 'Email', 'Phone Number'],
    'name' => ['CustomerName', 'CustomerMail', 'CustomerPhone'],
    'required_pattern' => ['^[A-Za-zა-ჰ\s]+$', '[a-zA-Z0-9._%+-]+@gmail\.com', '^\d{9}$'],
    'required' => ['required', 'required', 'required']
];

// ფუნქცია 3 ფორმის თეგის დასაგენერირებლად თავისი დინამიურად ცვალებადი ინფორმაციით
function form($info) {
    $i = 0; //მთვლელი
    while ($i < count($info['type'])) {
        echo '<div>
                <!-- Input field with dynamic type and placeholder -->
                <input 
                  type="' . $info['type'][$i] . '" 
                  placeholder="' . $info['placeholder'][$i] . '" 
                  name="' . $info['name'][$i] . '" 
                  pattern="' . $info['required_pattern'][$i] . '" 
                  ' . $info['required'][$i] . ' 
                />
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
            <form action="contact_answer.php" method="POST">
              
                <?php form($info);?>
                
              <div>
                <input type="text" class="message-box" placeholder="Message" required/>
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


