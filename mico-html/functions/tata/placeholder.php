<?php

$info = [
    'type' => ['text', 'email', 'text'],
    'placeholder' => ['Full Name', 'Email', 'Phone Number']
];

function form($info){
    $i = 0;

    while ($i < 3) {
        echo '<div>
                <input type="' . $info['type'][$i] . '" placeholder="' . $info['placeholder'][$i] . '" />
              </div>';
        $i++;
    }
}