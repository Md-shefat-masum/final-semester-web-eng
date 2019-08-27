<?php 
    $con=mysqli_connect('localhost','root','','student_infor');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title>Student's CGPA</title>
    <style>
        .body a{
            text-decoration: none;
            padding: 10px 20px;
            margin: 0px 20px;
            border: 1px solid gray;
            border-radius: 5px;
        }

        section{
            width: 500px;
            margin: 0 auto;
        }
        section table{
            width: 100%;
            text-align: center;
        }
        section table td,section table th{
            border-bottom: 1px solid gray;
            padding: 10px;
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
    <section>
        <div class="container">
            <table class="table product-overview" cellpadding='0' cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Roll</th>
                        <th>Department</th>
                        <th>GPA</th>
                        <th>Action</th>
                    </tr>
                </thead>
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
                            <?php printf("%.2f", ($data['first'] + $data['second'] + $data['third'] + $data['fourth'] + $data['fifth'] + $data['sixth'] + $data['seventh'] + $data['eighth'] )/8)?>
                        </td>
                        <td>
                            <a href="delete.php?d=<?= $data['id'];?>">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>

</body>
</html>
