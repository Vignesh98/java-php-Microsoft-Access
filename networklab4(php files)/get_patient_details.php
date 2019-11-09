<?php
    $conn=odbc_connect('symptoms1','','');
    $name_val=$_GET['name'];
    $age_val=$_GET['age'];
    $contact_val=$_GET['contact'];
    $blood_val=$_GET['blood'];
    $gender_val=$_GET['gender'];
    $sql  = "INSERT INTO Table1(patient_name,age,contact,bloodgroup,gender) VALUES('$name_val',"
            . "'$age_val','$contact_val','$blood_val','$gender_val')";
    $rs=odbc_exec($conn,$sql);
   