<!DOCTYPE html>
<html lang="en">
<?php 
    $con=mysqli_connect('localhost','root','','student_infor');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <style>
        table{
            padding: 5px;
            width: 100%;
            text-align: center;
        }
        td,th{
            border-bottom: 1px solid gray;
            padding: 20px 5px;
            
        }
    </style>
</head>
<body>
    <div class="body body2">
        <div class="nav">
            <a href="index2.php">add new record</a>
            <a href="view.php">view record</a>
        </div>
        <table class="table product-overview" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>department</th>
                    <th>gender</th>
                    <th>role</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $select = "SELECT * FROM student_information";
                    $all = mysqli_query($con,$select);
                    while( $data = mysqli_fetch_assoc($all)){
                ?>
                <tr>
                    <td><?= $data['id'];?></td>
                    <td><?= $data['name'];?></td>
                    <td><?= $data['email'];?></td>
                    <td><?= $data['department'];?></td>
                    <td><?= $data['gender'];?></td>
                    <td><?= $data['role1'];?> &nbsp;&nbsp; <?= $data['role2'];?> &nbsp;&nbsp; <?= $data['role3']; ""?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
