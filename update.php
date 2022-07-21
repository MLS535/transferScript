<?php
include 'database.php';

if (isset($_POST['submit'])) {
    $log_time_create = $_POST['log_time_create'];
    $id_employee = $_POST['id_employee'];

    $date = date("Y-m-d h:i:s A");

    $a = new database();
    $a->update('transfers',['log_time_create'=>$log_time_create,'creation_date'=>$date,'id_employee'=>$id_employee],"id='$id'");
    if ($a == true) {
        header('location:index.php');
    }
}
?>>