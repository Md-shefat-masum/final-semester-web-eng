<?php 
    $con=mysqli_connect('localhost','root','','student_infor');
    if(!$con){
        echo "<script> alert('db not success'); </script>";
    }
    if(!empty($_POST)){
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $department = $_POST['department'];
        $first = $_POST['first'];
        $second = $_POST['second'];
        $third = $_POST['third'];
        $fourth = $_POST['fourth'];
        $fifth = $_POST['fifth'];
        $sixth = $_POST['sixth'];
        $seventh = $_POST['seventh'];
        $eighth = $_POST['eighth'];
        $insert = "INSERT INTO gpa(name,roll,department,first,second,third,fourth,fifth,sixth,seventh,eighth)
                            VALUES('$name','$roll','$department','$first','$second','$third','$fourth','$fifth','$sixth','$seventh','$eighth')";

        if(mysqli_query($con,$insert)){
            echo "<script> alert('success'); </script>";
        }
        else{
            echo "<script> alert('not success'); </script>";
        }
    }
    // VALUES('$name','$roll','$department','$first','$third','$fourth','$fifth','$sixth','$seventh','$eighth')";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student's CGPA</title>
    <style>
        .body a{
            text-decoration: none;
            padding: 10px 20px;
            margin: 0px 20px;
            border: 1px solid gray;
            border-radius: 5px;
        }
        input{
            width: 100%;
            margin: 10px 0px;
            box-sizing: border-box;
            padding: 10px;
        }

        button{
            padding: 10px 20px;
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <div class="body" style="width:500px; margin:30px auto;">
        <table>
            <tr>
                <td><a href="index.php">home</a></td>
                <td><a href="add.php">add new record</a></td>
            </tr>
        </table>
    </div>

    <section id="login" style="width: 500px;margin: 0 auto;">
        <div class="container">
            <div class="login">
                <form action="" method="post" style="" class="">
                    <h2>Student Result Information</h2>
                    <input name="name" type="text" placeholder="name">
                    <input name="roll" type="text" placeholder="Roll">
                    <input name="department" type="text" placeholder="Department">
                    <h3>CGPA</h3>
                    <div style="width:45%; float:left;margin: 0px 5px; overflow:hidden;">
                        <input name="first" placeholder="1st Semester" type="number">
                        <input name="second" placeholder="2nd Semester" type="number">
                        <input name="third" placeholder="3rd Semester" type="number">
                        <input name="fourth" placeholder="4th Semester" type="number">
                    </div>
                    <div style="width:50%; float:left;margin: 0px 5px;overflow:hidden;">
                        <input name="fifth" placeholder="5th Semester" type="number">
                        <input name="sixth" placeholder="6th Semester" type="number">
                        <input name="seventh" placeholder="7th Semester" type="number">
                        <input name="eighth" placeholder="8th Semester" type="number">
                    </div>
                    <button type="submit" style="width: 200px;">Add Information</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>
