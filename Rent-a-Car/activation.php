<?php include './templates/signup-login-reset/header.php'?>
<title>Account Activation</title>
</head>

<body>
    <div id="header" class="header">
        <a href="./login.php" class="contact">Log In</a>
        <a href="./contact.php" class="contact">Contact Us</a>
        <a href="./rokoterze.php" class="contact">About Me</a>
        <a href="./dokumentacija.php" class="contact">Documentation</a>
    </div>
      
    <div class="activation-form">
        <h2>Account Activation</h2><hr>
        <form action="./include/signup-login-reset/activation/activation.inc.php" method="post" name="activationform" id="activationform">

            <input type="text" name="email" id="email" placeholder=" *Email.." oninput="emailValidation();"><br>
            <span id="emailspan" ></span>

            <input type="text" name="verificationcode" id="verificationcode" placeholder=" *Verification Code.." maxlength="5" oninput="isCodeEmpty();"><br>

            <button type="submit" name="submit" id="submit">Submit</button> 
        </form>
        
        <hr>
        <p>Back to <a href="./signup.php">Sign Up</a> or <a href="./login.php">Log In</a></p>
       
        <?php include './include/signup-login-reset/activation/activation-errors.php'?>
    </div>
    <br>
<?php include'./templates/signup-login-reset/footer.php'?>