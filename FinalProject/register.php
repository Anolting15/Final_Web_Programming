<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="finalcss.css" rel="Stylesheet">
</head>
<body>
    <div class="maindiv">
    <div class="form_div">
    <div class="title">
        <h2>Fill Out All Forms To Register</h2>
    </div>
    <form action="insert.php" method="post">
        <h2>Form</h2>
        
        <label>First Name:</label>
        <input class="input" name="firstname" type="text" value="">
        <br>

        <label>Last Name:</label>
        <input class="input" name="lastname" type="text" value="">
        <br>

        <label>Username:</label>
        <input class="input" name="username" type="text" value="">
        <br>

        <label>Password:</label>
        <input class="input" name="password" type="text" value="">
        <br>

        <label>Email:</label>
        <input class="input" name="email" type="text" value="">
        <br>

        <label>Credit Card Number</label>
        <input class="input" name="ccinfo" type="text" value="">
        <br>

        <input class="submit" name="submit" type="submit" value="Insert">
        
</form>
</div>
</div>
</body>
</html>
