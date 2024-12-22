<?php

$social = [
    'src' => ['team1.jpg', 'team2.jpg', 'team3.jpg'],
    'names' => ['Henry', 'Jeny', 'Marco'],
    'icons' => ['fa fa-facebook','fa fa-twitter','fa fa-linkedin','fa fa-instagram']
    ];

    function cards($social){
        for($i = 0; $i < 3; $i++){
            echo '<div class="item">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/'.$social['src'][$i].'" alt="" />
                        </div>
                        <div class="detail-box">
                            <h5>'.$social['names'][$i].'</h5>
                            <h6>MBBS</h6>
                            <div class="social_box">';
    

            for($j = 0; $j < 4; $j++){
                echo    '<a href="">
                            <i class="'.$social['icons'][$j].'" aria-hidden="true"></i>
                        </a>';
            }
    
            echo '      </div>
                        </div>
                    </div>
                </div>';
        }
    }