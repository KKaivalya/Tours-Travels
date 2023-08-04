<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>signup Form </title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div class="container">
        <div class="login">
        <form action="register_form.php" method="post" class="register-form">
                <h1>Sign up</h1>
                <hr>
                <p>Explore the World!</p>

                <label>First Name</label>
                <input type="text" name="fname" placeholder="enter your first name" />
                <label>Last Name</label>
                <input type="text" name="lname"placeholder="enter your last name" />
                <label>Email</label>
                <input type="text" name="email" placeholder="abc@exampl.com">
                <label>Password</label>
                <input type="password" name="pass" type="password" placeholder="enter your password!">
                <input type="submit" value="Submit" class="btn" name="send">
                <p>
                    Already Have Account? <a style="color:blue" href="projectlogin.php">Log in</a>
                </p>
                <closeform></closeform>
            </form>
        </div>
        <div class="pic">
            <img src="images/travel4.jpg">
        </div>
    </div>

</body>

</html>