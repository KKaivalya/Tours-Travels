<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Form | By Code Info</title>
    <link rel="stylesheet" href="projectlogin.css">
</head>

<body>
        <div class="container">
            <div class="login">
                <form action="login_form.php" method="post" class="login-form">
                        <h1>Login</h1>
                        <hr>
                        <p>Explore the World!</p>
                        <label>Email</label>
                        <input type="text" name="email" placeholder="abc@exampl.com">
                        <label>Password</label>
                        <input type="password" name="pass" placeholder="enter your password!">
                        <input type="submit" value="Login" class="btn" name="send">
                        <p>
                            Don't have an account?<a style="color:blue" href="signup.php">Sign up</a>
                        </p>
                        <closeform></closeform>
                    </form>
            </div>
            <div class="pic">
                <img src="images/travel6.jpg">
            </div>
        </div>
   

</body>

</html>