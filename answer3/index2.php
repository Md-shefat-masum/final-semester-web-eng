<?php 
    $con=mysqli_connect('localhost','root','','student_infor');
    if(!$con){
        echo "<script> alert('db not success'); </script>";
    }
    
    if(!empty($_POST)){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $department = $_POST['department'];
        $gender = $_POST['gender'];
        $role1 = $_POST['student'];
        $role2 = $_POST['captains'];
        $role3 = $_POST['trainer'];
        if( empty($role1))$role1= "";
        if( empty($role2))$role2= "";
        if( empty($role3))$role3= "";
        $insert = "INSERT INTO student_information(name,email,password,department,gender,role1,role2,role3)
                                    values('$name','$email','$password','$department','$gender','$role1','$role2','$role3')";
        if(mysqli_query($con,$insert)){
            echo "<script> alert('success'); </script>";
        }
        else{
            echo "<script> alert('not success'); </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="body">
        <div class="nav">
            <a href="index2.php">add new record</a>
            <a href="view.php">view record</a>
        </div>
        <form action="index2.php" method="POST">
            <label for="">your name</label>
            <input name="name" type="text">
            <label for="">your email</label>
            <input name="email" type="text">
            <label for="">your password</label>
            <input name="password" type="password">
            <label for="">department</label>
            <select name="department" id="">
                <option value="cse">cse</option>
                <option value="ece">ece</option>
                <option value="bba">bba</option>
            </select>
            <label for="">gender</label>
            <input type="checkbox" name="gender" value="male"><span>male</span>
            <input type="checkbox" name="gender" value="female"><span>female</span>
            <label for="">your role</label>
            <input type="radio" name="student" hidden checked value="">
            <input type="radio" name="student" value="student"><span>student</span>
            <input type="radio" name="captains" hidden checked value="">
            <input type="radio" name="captains" value="captain"><span>class captain</span>
            <input type="radio" name="trainer" hidden checked value="">
            <input type="radio" name="trainer" value="trainer"><span>trainer</span><br>
            <button type="submit">submit</button>
            <button type="reset">reset</button>
        </form>
    </div>
</body>
</html>