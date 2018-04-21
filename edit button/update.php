<?php  
// define variables and set to empty values
$CID = $NAME = $DESCRIPTION = $OBJECTIVE = $INSTRUCTOR = $LANGUAGE = $CATEGORY ="";
$id_exist = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["Course_ID"])) {
    $CIDErr = "Course ID is required";
   } else {
    $CID = $_POST["Course_ID"];
    echo 'pid: '.$CID;
    echo '<br>';
    // if (!preg_match("/^[pP0-9]*$/",$PID)) {
    //   $PIDErr = "P-Number format allowed only."; 
    // }
  }  
  
  if (empty($_POST["name"])) {
    //    = "name is required";
    } else {
      $NAME = $_POST["name"];
      echo 'NAME: '.$NAME;
      echo '<br>';
    //   if (!preg_match("/^[0-9]*$/",$PULSE)) {
    //     $PULSEErr = "Number format allowed only."; 
    //   }
    }
      
  if (empty($_POST["description"])) {
      $DESCRIPTION= "";
    } else {
      $DESCRIPTION = $_POST["description"];
      echo 'DESCRIPTION: '.$DESCRIPTION;
      echo '<br>';
    //   if (!preg_match("/^[0-9]*$/",$SPO2)) {
    //     $DOB = "Number format allowed only."; 
    //   }
  }
  
  
  if (empty($_POST["objective"])) {
      $OBJECTIVE= "";
    } else {
      $OBJECTIVE = $_POST["objective"];
      echo 'OBJECTIVE: '.$OBJECTIVE;
      echo '<br>';
    //   if (!preg_match("/^[0-9]*$/",$AIRFLOW)) {
    //     $AIRFLOWErr = "Number format allowed only."; 
    //   }
  }

  if (empty($_POST["instructor"])) {
    $INSTRUCTOR= "";
  } else {
    $INSTRUCTOR = $_POST["instructor"];
    echo 'instructor: '.$INSTRUCTOR;
    echo '<br>';


  if (empty($_POST["language"])) {
      $LANGUAGE= "";
    } else {
      $LANGUAGE = $_POST["language"];
      echo 'LANGUAGE: '.$LANGUAGE;
      echo '<br>';
    //   if (!preg_match("/^[0-9.0-9]*$/",$TEMPERATURE)) {
    //     $TEMPERATUREErr = "DECIMAL format allowed only."; 
    //   }
    }
  
    
  if (empty($_POST["category"])) {
      $CATEGORY= "";
    } else {
      $CATEGORY= $_POST["category"];
      echo 'CATEGORY: '.$CATEGORY;
      echo '<br>';
    //   if (!preg_match("/^[0-9]*$/",$ADMISSION)) {
    //     $GLUCOSEErr = "Number format allowed only."; 
    //   }
  }
  
//   if (empty($_POST["area"])) {
//       $AREA= "";
//     } else {
//       $AREA = $_POST["area"];
//       echo 'AREA: '.$AREA;
//       echo '<br>';
//     //   if (!preg_match("/^[0-9\/0-9]*$/",$BP)) {  //escape '/' via \
//     //     $BPErr = "Number1/Number2 format allowed only."; 
//     //   }  
//   }  
  
//   if (empty($_POST["hospital"])) {
//     $HOSPITAL= "";
//   } else {
//     $HOSPITAL= $_POST["hospital"];
//     echo 'HOSPITAL: '.$HOSPITAL;
//     echo '<br>';
//   //   if (!preg_match("/^[0-9]*$/",$ADMISSION)) {
//   //     $GLUCOSEErr = "Number format allowed only."; 
//   //   }
// }
// if (empty($_POST["contact"])) {
//     $CONTACT= "";
//   } else {
//     $CONTACT= $_POST["contact"];
//     echo 'CONTACT: '.$CONTACT;
//     echo '<br>';
  //   if (!preg_match("/^[0-9\/0-9]*$/",$BP)) {  //escape '/' via \
  //     $BPErr = "Number1/Number2 format allowed only."; 
  //   }  
}  
//   $mysqli = new mysqli("localhost","root","","healthcare");    
//   $query1=$mysqli->query("Select P_ID from patient_table where P_ID='$PID'");
//   $e=$mysqli->query("Select * from diagnosis where Course_ID='$PID'");
//     // $query2=$mysqli->query("Select Course_ID from Diagnosis where Course_ID='$PID'");
    
//   $row1 = mysqli_num_rows($query1);
//   $exist_row = mysqli_num_rows($e);
//   // echo $exist_row.' out';
//   $date = date("Y-m-d");
//   settype($date,"string");
    
//   if($row1 == 0){
//       $id_exist = false;
//       echo "ID Doesnt exist. Please refer to the following link to register the patient first.";
//       echo '<a href="/register.php">Register the patient</a>';
//     }else {
//       if($exist_row == 0){
//         $statement = "INSERT INTO diagnosis(Course_ID, PULSE, SPO2, AIRFLOW, TEMPERATURE, GLUCOSE_LEVEL, BLOOD_PRESSURE, LAST_UPDATED) VALUES ('$PID','$PULSE','$SPO2','$AIRFLOW','$TEMPERATURE','$GLUCOSE','$BP','$date');";
//     } else {
//       // echo "Inssdie update; ".'\n';
//       $exist = mysqli_fetch_row($e);
//       // $statement = "UPDATE diagnosis SET PULSE='$PULSE', SPO2='$SPO2',
//       // AIRFLOW='$AIRFLOW' , TEMPERATURE='$TEMPERATURE', GLUCOSE_LEVEL='$GLUCOSE',BLOOD_PRESSURE='$BP',LAST_UPDATED='$date';"; 
//       // $statement = "UPDATE diagnosis SET PULSE=CONCAT('$PULSE', '$exist[1]'), SPO2=CONCAT('$SPO2', '$exist[2]'),
//       // AIRFLOW=CONCAT('$AIRFLOW', '$exist[3]'),TEMPERATURE=CONCAT('$TEMPERATURE', '$exist[4]'), GLUCOSE_LEVEL=CONCAT('$GLUCOSE', '$exist[5]'),
//       // BLOOD_PRESSURE=CONCAT('$BP', '$exist[6]'),LAST_UPDATED='$date';"; 
//       // $statement = "UPDATE diagnosis SET PULSE=CONCAT('".$PULSE."',"."',".$exist[1]."'), SPO2=CONCAT('".$SPO2."',"."',".$exist[2]."'),
//       // AIRFLOW=CONCAT('".$AIRFLOW."',"."',".$exist[3]."'),TEMPERATURE=CONCAT('".$TEMPERATURE."',"."',".$exist[4]."'), GLUCOSE_LEVEL=CONCAT('".$GLUCOSE."',"."',".$exist[5]."'),
//       // BLOOD_PRESSURE=CONCAT('".$BP."',"."',".$exist[6]."'),LAST_UPDATED='$date';";   
//       // echo '   pulse '.$exist[1];
//         $PULSE = $PULSE . ', '.$exist[1];
//         // echo '     pulse2 '.$PULSE;
//         $SPO2 = $SPO2 . ", ".$exist[2];
//         $AIRFLOW = $AIRFLOW . ", ".$exist[3];
//         $TEMPERATURE = $TEMPERATURE . ", ".$exist[4];
//         $GLUCOSE= $GLUCOSE . ", ".$exist[5];
//         $BP = $BP . ", ".$exist[6];
//       $statement = "UPDATE diagnosis SET PULSE='$PULSE', SPO2='$SPO2',
//       AIRFLOW='$AIRFLOW' , TEMPERATURE='$TEMPERATURE', GLUCOSE_LEVEL='$GLUCOSE',BLOOD_PRESSURE='$BP',LAST_UPDATED='$date';"; 
        
//       //   $statement = "UPDATE diagnosis SET PULSE=CONCAT(".$PULSE.","."','".$exist[1]."), SPO2=CONCAT(".$SPO2." ,"."','".$exist[2]."),
//       // AIRFLOW=CONCAT(".$AIRFLOW.","."','".$exist[3]."),TEMPERATURE=CONCAT(".$TEMPERATURE.","."','".$exist[4]."), GLUCOSE_LEVEL=CONCAT(".$GLUCOSE.","."','".$exist[5]."),
//       // BLOOD_PRESSURE=CONCAT(".$BP.","."','".$exist[6]."),LAST_UPDATED=$date;";   
//     }
//   }
  
}
//   if (empty($_POST["comment"])) {
//     $comment = "";
//   } else {
//     $comment = test_input($_POST["comment"]);
//   }
//   if (empty($_POST["gender"])) {
//     $genderErr = "Gender is required";
//   } else {
//     $gender = test_input($_POST["gender"]);
//   }
// }
 ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "isdm";
// echo 'pid: '.$CID;
echo '<br>';
$statement = "UPDATE `courses` SET `course_description`='$DESCRIPTION' 
WHERE `course_id`='$CID';";
            //   `Gender`='$GENDER' , `Disease`='$DISEASE', `DOA`='$ADMISSION', `Area`='$AREA',
            //   `Hospital`='$HOSPITAL', `Contact_Info`='$CONTACT' WHERE `P_ID`='$PID';";
// $DOB ='afsdfasdfsa';
// $statement = "UPDATE patient_table SET  DOB='$DOB' WHERE P_ID='$PID';";
$s = "UPDATE `courses` SET `course_name`='$NAME' WHERE `course_id`='7';";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// if($id_exist == true){
$sql = mysqli_query($conn, $statement);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "nahi ghusra " ;
    echo '<BR>';
    echo "Error: " . $sql . " <br> " . $conn->error . " <br>";
}
$conn->close();
?>

<?php
   header("Location: ..isdm/display.php");
//    exit;
?>