<?php include './templates/signup-login-reset/header.php'?>
<title>Password Reset</title>
</head>

<body>
    <div id="header" class="header">
        <a href="./login.php" class="contact">Log In</a>
        <a href="./contact.php" class="contact">Contact Us</a>
        <a href="./rokoterze.php" class="contact">About Me</a>
        <a href="./dokumentacija.php" class="contact">Documentation</a>
    </div>
    
    <div class="reset-form">
        <h2>Reset a Password</h2><hr>
        <form action="./include/signup-login-reset/reset/reset.inc.php" method="post" name="resetform" id="resetform">

            <input type="text" name="email" id="email" placeholder=" *Email.." oninput="emailValidation();"><br>
            <span id="emailspan"></span>

            <div id="recaptcha"><div class="g-recaptcha" data-sitekey="6LfFrp0jAAAAAFgKWSdFCgZanX8K9LI9KM5MxsOJ"></div></div>

            <button type="submit" name="reset-request-submit" id="submit">Send</button> 
        </form>
        
        <hr>
        <p>Back to <a href="./signup.php">Sign Up</a> or <a href="./login.php">Log In</a></p>
       
        <?php include './include/signup-login-reset/reset/reset-errors.php'?>
    </div>
    <br>
<?php include './templates/signup-login-reset/footer.php'?>