<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Registration</title>
</head>

<body>
    <div id="form">
        <h1 class="title">Registration Form</h1>
        <div class="box">
            <div class="row1">
                <h1 class="personal">Personal Details:</h1>
                <form name="form" method="post">
                    <label>First Name:</label><br>
                    <input type="text" id="user" name="fname"><br>
                    <label>Middle Name:</label><br>
                    <input type="text" id="user" name="mname"><br>
                    <label>Last Name:</label><br>
                    <input type="text" id="user" name="lname"><br>
                    <label>Age:</label><br>
                    <input type="text" id="user" name="age"><br>
                    <label>Sex:</label><br>
                    <input type="radio" for="sex2" id="user1" name="sex" value="Male">
                    Male
                    <input type="radio" for="sex2" id="user2" name="sex" value="Male">
                    Female<br>
                    <input type="submit" id="btn1" value="Register" name="submit">
            </div>
            <div class="row2">
                <h1 class="personal">School Details:</h1>
                <form name="form2" method="post">
                    <label>LRN:</label><br>
                    <input type="text" id="user" name="lrn"><br>
                    <label>Strand:</label><br>
                    <input type="text" id="user" name="strand"><br>
                    <label>Grade:</label><br>
                    <input type="text" id="user" name="grd"><br>
                    <label>Section:</label><br>
                    <input type="text" id="user" name="sec"><br>
                    <label>Adviser:</label><br>
                    <input type="text" id="user" name="adv"><br>
            </div>
        </div>
        </form>
        <a href="login.php">
            <h2>LOGIN HERE</h2>
        </a>
    </div>
</body>

</html>