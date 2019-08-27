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
        <form action="">
            <label for="">your name</label>
            <input type="text">
            <label for="">your email</label>
            <input type="text">
            <label for="">your password</label>
            <input type="password">
            <label for="">department</label>
            <select name="" id="">
                <option value="cse">cse</option>
                <option value="ece">ece</option>
                <option value="bba">bba</option>
            </select>
            <label for="">gender</label>
            <input type="checkbox"><span>male</span>
            <input type="checkbox"><span>female</span>
            <label for="">your role</label>
            <input type="radio"><span>student</span>
            <input type="radio"><span>class captain</span>
            <input type="radio"><span>trainer</span><br>
            <button type="submit">submit</button>
            <button type="reset">reset</button>
        </form>
    </div>
</body>
</html>