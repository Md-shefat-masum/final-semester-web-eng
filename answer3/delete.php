<?php
    $con=mysqli_connect('localhost','root','','student_infor');

    $id = $_GET['d'];
    $delete = "DELETE FROM gpa WHERE id = '$id' ";

    if(mysqli_query($con,$delete)){
        header('Location: index.php');
    }
?>