<?php

// მონაცემები ექიმთან ვიზიტის (book appointment) დაჯავშნის ფორმიდან
$patientName = $_POST['name'];          // პაციენტის სახელი
$doctorName = $_POST['DoctorName'];     // ექიმის სახელი
$departmentName = $_POST['DepartmentName']; // განყოფილების სახელი
$phone = $_POST['phone'];              // ტელეფონის ნომერი
$symptoms = $_POST['symptoms'];        // სიმპტომები
$appointmentDate = $_POST['appointment-date']; // ვიზიტის თარიღი 
$size = $_POST['shoe'];
$dad = $_POST['dad'];


$infoItems = [
'Department Name:',
'Patient Name:',
'Symptoms:',
'Doctor:',
'Date:',
'ტუფლის ზომა:',
'მამის სახელი:'
];

function info($departmentName, $patientName, $symptoms, $doctorName, $appointmentDate, $infoItems, $size, $dad) {
$data = [
    $departmentName,
    $patientName,
    $symptoms,
    $doctorName,
    $appointmentDate,
    $size,
    $dad
];

    $output = '<ul>';
    foreach ($infoItems as $i => $item) {
        $output .= '<li><h6><span class="mico">'.$item.'</span><span class="hospital"> '.$data[$i].'</span></h6></li>';
    }
    $output .= '</ul>';

    return $output; // ექოზე დაბრუნებას არ აკეთებს (თანმიმდევრობას ურევს)
}

?>   