<?php 
    $con=mysqli_connect('localhost','root','','student_infor');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Student's CGPA</title>
</head>
<body>
    <section id="nav">
        <div class="container">
            <div class="nav">
                <div class="left">
                    <!--                    <img src="" alt="LOGO">-->
                    <h2 style="color:white;">logo</h2>
                </div>
                <div class="right">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="add.php">ADD NEW INFO</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <table class="table product-overview">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Roll</th>
                        <th>Department</th>
                        <th>GPA</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tr>
                    <td colspan="6">
                        <hr>
                    </td>
                </tr>
                <tbody>
                    <?php 
                        $select = "SELECT * FROM gpa";
                        $all = mysqli_query($con,$select);
                        while( $data = mysqli_fetch_assoc($all)){
                    ?>
                    <tr>
                        <td><?= $data['id'];?></td>
                        <td><?= $data['name'];?></td>
                        <td><?= $data['roll'];?></td>
                        <td><?= $data['department'];?></td>
                        <td>
                            count
                        </td>
                        <td>
                            +
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>

</body>
</html>
