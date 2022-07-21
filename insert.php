<?php
include 'database.php';
if (isset($_POST['submit'])) {
    $log_time_create = $_POST['log_time_create'];
    $creation_date = $_POST['creation_date'];
    $id_employee = $_POST['id_employee'];

    $date = date("Y-m-d h:i:s A");

    $a = new database();
    $a->insert('transfers',['log_time_create'=>$log_time_create,'creation_date'=>$date,'id_employee'=>$id_employee]);
    if ($a == true) {
        header('location:index.php');
    }
}
?>