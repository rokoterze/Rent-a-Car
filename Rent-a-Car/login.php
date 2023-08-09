<?php include './templates/signup-login-reset/header.php'?>
<title>Log In</title>
</head>

<body>
    <div id="header" class="header">
        <a href="./login.php" class="contact">Log In</a>
        <a href="./contact.php" class="contact">Contact Us</a>
        <a href="./rokoterze.php" class="contact">About Me</a>
        <a href="./dokumentacija.php" class="contact">Documentation</a>
    </div>
       
    <div class="login-form">
        <h2>Log In</h2><hr>
        <form action="./include/signup-login-reset/login/login.inc.php" method="post" name="loginform" id="loginform">

            <input type="text" name="username" id="username" placeholder=" *Username.." oninput="isUsernameEmpty();"><br>
            <span id="usernamespan"></span>

            <input type="password" name="pwd" id="pwd" placeholder=" *Password.." oninput="isPasswordEmpty();" ><br>
            <span id="pwdspan" ></span>

            <div id="recaptcha"><div class="g-recaptcha" data-sitekey="6LfIkbsjAAAAAGR9Z1XDF4nrf2LfcGxCoa0dt_JW"></div></div>
                
            <button type="submit" name="submit" id="submit">Log In</button> 
        </form>
        
        <hr>
        <?php include './include/signup-login-reset/login/login-errors.php'?>
        <p>Not a member? <a href="./signup.php">Sign Up</a> or continue as a <a href="guest.php">Guest</a></p>
        <a href="./reset.php">Forgot Your password?</a>
        <p>Activate Your <a href="./activation.php">Account?</a></p>
    </div><br>
<?php include'./templates/signup-login-reset/footer.php'?>