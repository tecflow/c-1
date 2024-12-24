<?php

// book section დავითი

//ექიმების მონაცემები სახელები
$doctorName = ['Duty Doctor','Giorgi Asabashvili','Lado Giorgobiani','Natia Asatiani','Giorgi Alavidze','Sandro Giorgobiani','Giorgi Alavidze','Sandro Giorgobiani']; 


//სამედიცინო სპეციალობები
$departmentName = ['Reception','Pediatrics','Gynecology','Ophthalmology','Psychiatry','Dentistry','Psychiatry','Dentistry']; 

// ექიმების სექცია
function doctor($doctorName){
 for ($i = 0; $i < count($doctorName); $i++) {
        echo '<option value="'.$doctorName[$i].'">'.$doctorName[$i].'</option>';
    }
}


// დეპარტამენტების სექცია
function departament ($departmentName){
    for ($i = 0; $i < count($departmentName); $i++) {
        echo '<option value="'.$departmentName[$i].'">'.$departmentName[$i].'</option>';
    }
}
?>


<section class="book_section layout_padding" id="book-appointment">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="successful_appointment.php" method="POST">
                        <h4>
                            BOOK <span>APPOINTMENT</span>
                        </h4>
                        <div class="form-row">
                            <div class="form-group col-lg-4">
                                <label for="inputPatientName">Patient Name </label> 
                                <input type="text" class="form-control" id="inputPatientName" name="name" placeholder="Please enter only letters" 
                                    required pattern="^[A-Za-zა-ჰ\s]+$" title="Please enter only letters">
                            </div>
    
                            <div class="form-group col-lg-4">
                                <label for="inputDoctorName">Doctor's Name</label> 
                                <select name="DoctorName" class="form-control wide" id="inputDoctorName">
                                    <?php doctor($doctorName); ?>
                                </select>
                            </div>
    
                            <div class="form-group col-lg-4">
                                <label for="inputDepartmentName">Department's Name</label>
                                <select name="DepartmentName" class="form-control wide" id="inputDepartmentName">
                                    <?php departament ($departmentName);?>
                                </select>
                            </div>
                        </div>
    
                        <div class="form-row">
    
                            <div class="form-group col-lg-4">
                                <label for="inputPhone">Phone Number</label>
                                <input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="XXXXXXXXX (9 digits)" 
                                    required pattern="^\d{9}$" title="Phone number must be exactly 9 digits">
                            </div>
    
                            <div class="form-group col-lg-4">
                                <label for="inputSymptoms">Symptoms</label>
                                <input type="text" class="form-control" id="inputSymptoms" name="symptoms" placeholder="Symptoms" 
                                title="Please enter the expressed symptoms." required pattern="^[A-Za-zა-ჰ\s]+$">
                            </div>
    
                            <div class="form-group col-lg-4">
                                <label for="inputDate">Choose Date </label>
                                <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                                    <input type="text" class="form-control" id="inputDate" name="appointment-date" required>
                                    <span class="input-group-addon date_icon">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group col-lg-4">
                                <label for="inputPhone">ტუფლის ზომა</label>
                                <input type="tel" class="form-control" id="inputPhone" name="shoe" placeholder="XX (2 digits)" 
                                    required pattern="^\d{2}$" title="ტუფლის ზომა must be exactly 2 digits">
                            </div>

                            <div class="form-group col-lg-4">
                                <label for="inputPatientName">მამის სახელი </label> 
                                <input type="text" class="form-control" id="inputPatientName" name="dad" placeholder="-ევიჩი, -ევნა" 
                                    required pattern="^[A-Za-zა-ჰ\s]+$" title="Please enter only letters">
                            </div>
    
                        </div>
                        <div class="btn-box">
                            <button type="submit" class="btn">Submit Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    