<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Info</title>
</head>
<body>
    <h1>Student Info into Database table</h1>
    <h5>to create form to insert name,gender,mobile into database student</h5>
    <form action="student.php" name="frm" method="post">
        <input type="hidden" name="action" value="save">
        <input type="text" name="sname" placeholder="Name of Student" required> <br>
        <input type="radio" name="gender" value="Male">Male</input>
        <input type="radio" name="gender" value="Female">Female</input><br>
        <input type="number" name="mobile" placeholder="mobile number"required><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>