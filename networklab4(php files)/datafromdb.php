<?php
function data_from_db($name){
    //echo $name;
    $conn=odbc_connect('symptoms1','','');
    $sql  = "SELECT * FROM Table1 where patient_name='".$name."'";
    $rs=odbc_exec($conn,$sql);
    while (odbc_fetch_row($rs)){
      $db_data=odbc_result($rs,"patient_name");
      $db_age=odbc_result($rs,"age");
      $db_contact=odbc_result($rs,"contact");
      $db_bloodgroup=odbc_result($rs,"bloodgroup");
      $db_gender=odbc_result($rs,"gender");
      echo "name: ".$db_data."\n";
      echo "age: ".$db_age."\n";
      echo "contactno.:".$db_contact."\n";
      echo "bloodgroup:".$db_bloodgroup."\n";
      echo "gender:".$db_gender."\n";
      echo "\n";
    }
}
if (isset($_GET['name'])) {
        $name=$_GET['name'];
        data_from_db($name);
    }
   

