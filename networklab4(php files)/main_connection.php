<?php

function get_from_db($symp){
    $conn=odbc_connect('symptoms1','','');
    $sql  = "SELECT * FROM symptom where disease='".$symp."'";
    $rs=odbc_exec($conn,$sql);
    while (odbc_fetch_row($rs)){
      $med_name=odbc_result($rs,"medicine");
      echo $med_name;
      echo "\n";
    }
}
if (isset($_GET['cold'])) {
    if($_GET['cold']=="cold"){
        $symp="cold";
        get_from_db($symp);
    }
   }
    if (isset($_GET['fever'])) {
    if($_GET['fever']=="fever"){
        $symp="fever";
        get_from_db($symp);
        
    }
}
if (isset($_GET['headache'])) {
    if($_GET['headache']=="headache"){
        $symp="headache";
        get_from_db($symp);
        
    }
}
if (isset($_GET['bodypain'])) {
    if($_GET['bodypain']=="bodypain"){
        $symp="body pain";
        get_from_db($symp);
        
    }
}
if (isset($_GET['stomachupset'])) {
    if($_GET['stomachupset']=="stomachupset"){
        $symp="stomachupset";
        get_from_db($symp);
        
    }
}


