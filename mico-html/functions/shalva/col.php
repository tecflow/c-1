<?php

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

function treatment($data) {
    for ($i = 0; $i < 4; $i++) {
        echo '<div class="col-md-6 col-lg-3">
                <div class="box">
                    <div class="img-box">
                        <img src="' . $data['img_src'][$i] . '" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>
                            ' . $data['title'][$i] . '
                        </h4>
                        <p>
                            ' . $data['text'][$i] . '
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>';
    }
}

