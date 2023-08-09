<?php include './templates/signup-login-reset/header.php'?>
<title>Sign Up</title>
</head>

<body>
    <div id="header" class="header">
        <a href="./login.php" class="contact">Log In</a>
        <a href="./contact.php" class="contact">Contact Us</a>
        <a href="./rokoterze.php" class="contact">About Me</a>
        <a href="./dokumentacija.php" class="contact">Documentation</a>
    </div>

    <div class="signup-form">
        <h2>Sign Up</h2><hr>
        <form action="./include/signup-login-reset/signup/signup.inc.php" method="post" name="signupform" id="signupform">
            
            <input type="text" onkeydown="return /[a-z]/i.test(event.key)" name="name" id="name" placeholder=" *Name.." oninput="isNameEmpty();"><br>
            <span id="namespan" ></span>

            <input type="text" onkeydown="return /[a-z]/i.test(event.key)" name="surname" id="surname" placeholder=" *Surname.." oninput="isSurnameEmpty();"><br>
            <span id="surnamespan" ></span>

            <input type="text" name="email" id="email" placeholder=" *Email.." class="form-control" oninput="checkEmail();"><br>
            <span id="check-email" ></span><br>

            <input type="text" onkeydown="return /[a-z]/i.test(event.key)" name="username" id="username" placeholder=" *Username.." class="form-control" oninput="checkUsername();"><br>
            <span id="check-username" ></span><br>

            <input type="password" name="pwd" id="pwd" placeholder=" *Password.." oninput="passwordMatch();"><br>
            <span id="pwdspan" ></span>

            <input type="password" name="pwdrepeat" id="pwdrepeat" placeholder=" *Repeat password.." oninput="passwordMatch();"><br>
            <span id="pwdrepeatspan" ></span><br>

            <input type="password" id="adminpwd" name="adminpwd" placeholder="Admin keyword.." onclick="adminKeywordSpan();" oninput="adminKeywordSpan2();" onblur="adminKeywordSpan2();">
            <span id="adminpwdspan"></span><br>

            <button type="submit" name="submit" id="submit">Sign Up</button>
        </form>

        <hr>
        <?php include './include/signup-login-reset/signup/signup-errors.php'?>
        <p>Already a member? <a href="./login.php">Log In</a></p>
        <p>Activate Your <a href="./activation.php">Account?</a></p>
    </div>
    
<?php include './templates/signup-login-reset/footer.php'?>