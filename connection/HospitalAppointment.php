<?php

include('connect.php');
session_start()??null;

if(isset($_POST['bookApp'])){
    $donor_id = $_SESSION['id']??null;
    $hospital_id= $_POST['hospital'];
    $date= $_POST['app_date'];
    $time= $_POST['app_time'];


        $sql = "INSERT INTO hospital_appointment(donor_id, hospital_id, `date`, `time`) VALUES('$donor_id', '$hospital_id', '$date', '$time' )";
        
        if ($connection->query($sql))
        {
            echo '<script>alert("Appointment created."); window.location.href ="../donor_page.php" </script>';

        }else{
            echo mysqli_error($connection);

        }
}
if(isset($_POST['update'])){
    $hospital_id= $_POST['hospital'];
    $date= $_POST['app_date'];
    $time= $_POST['app_time'];


        $sqlupdate = "UPDATE hospital_appointment set hospital_id= '$hospital_id', `date`= '$date', `time`='$time'";
        
        if ($connection->query($sqlupdate))
        {
            echo '<script>alert("Appointment updated."); window.location.href ="../hospital_appointment/donorViewAppointments.php" </script>';

        }else{
            echo mysqli_error($connection);

        }
  
  }
?>