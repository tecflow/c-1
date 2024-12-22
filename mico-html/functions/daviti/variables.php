
<?php
   
   // მონაცემები ექიმთან ვიზიტის (book appointment) დაჯავშნის ფორმიდან
   $patientName = $_POST['name'];          // პაციენტის სახელი
   $doctorName = $_POST['DoctorName'];     // ექიმის სახელი
   $departmentName = $_POST['DepartmentName']; // განყოფილების სახელი
   $phone = $_POST['phone'];              // ტელეფონის ნომერი
   $symptoms = $_POST['symptoms'];        // სიმპტომები
   $appointmentDate = $_POST['appointment-date']; // ვიზიტის თარიღი 

   