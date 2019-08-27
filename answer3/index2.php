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
        $role1 = $_POST['role1'];
        $role2 = $_POST['role2'];
        $role3 = $_POST['role3'];
        $insert = "INSERT INTO student_information(name,email,password,department,gender,role1,role2,role3)
                                    values($name,$email,$password,$department,$gender,$role1,$role2,$role3
                                        )";
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
            <a href="addnew.php">add new record</a>
            <a href="addnew.php">view record</a>
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
            <input type="radio" name="student" value="student"><span>student</span>
            <input type="radio" name="captain" value="captain"><span>class captain</span>
            <input type="radio" name="trainer" value="trainer"><span>trainer</span><br>
            <button type="submit">submit</button>
            <button type="reset">reset</button>
        </form>
    </div>
</body>
</html>